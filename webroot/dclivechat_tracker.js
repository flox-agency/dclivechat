var dcTracker = (function () {

	var url;
	var localtime = new Date();
	var visitorInfo;
	
	return {

		setUrl: function (data) {
			url = data;
		},

		/**
		*Fonction de formatage de la date.Prend un objet date et le formate sous la forme yyyy-mm-dd H:i:s
		*/
		formatDate : function (date){
			//Formatage du jour
			var d = date.getDate();
			if ( d < 10 ) d = '0' + d;

		  //Formatage du mois
		  var m = date.getMonth()+1;
		  if ( m < 10 ) m = '0' + m;

		  //Formatage de l'année
		  var Y = date.getFullYear();

		  //Formatage de l'heure
		  var H = date.getHours();
		  if ( H < 10 ) H = '0'+H;

		  //Formatage des minutes
		  var i = date.getMinutes();
		  if ( i < 10 ) i = '0'+i;

		  //Formatage des secondes
		  var s = date.getSeconds();
		  if ( s < 10 ) s = '0'+ s;

		  return Y+'-'+m+'-'+d+' '+H+':'+i+':'+s;
		},

		loadVisitorInfo : function (){
			var now = new Date (),
			nowTs = Math.round(now.getTime() / 1000);

			visitorInfo = JSON.parse(localStorage.getItem('visitorInfo'));

			if(!visitorInfo) {

				visitorInfo = new Object();

				visitorInfo.visitorId = genVisitorId();
				visitorInfo.actionCount = 0;
				visitorInfo.user_agent = navigator.userAgent;
				visitorInfo.hostname = url.hostname;
				visitorInfo.platform = navigator.platform;
				visitorInfo.browser = navigator.appCodeName;
				
			} else {
				if (((localtime.getTime() - visitorInfo.actionTs)/1000) > 120) {
					visitorInfo.actionCount = 0;
				}			
			}
		},

		getRequestData: function() {

			var data = new Object();
			
			this.loadVisitorInfo();

			data.url = url.href;
			data.localtime = this.formatDate(localtime);
			data.visitorId = visitorInfo.visitorId;
			data.actionTs = localtime.getTime(); 
			data.actionCount = visitorInfo.actionCount+1;
			data.user_agent = visitorInfo.user_agent;
			data.hostname = visitorInfo.hostname;
			data.platform = visitorInfo.platform;
			data.browser = visitorInfo.browser;

			localStorage.setItem('visitorInfo',JSON.stringify(data));

			return data;
		},

		trackPageView : function () {
			
			$.post('/dclivechat/visits/add.json',
				this.getRequestData(),
				function(data) {
					console.log(data);
				},
				'jsonp'
			);
		}
	};

}());


/**
*Fonction de génération d'un ID pour le visiteur.
*/
function genVisitorId () {
	var d = new Date().getTime();
	var y = new Date().getFullYear();
	var r = (d + Math.random()*12)%10 |0;
	var s =Math.floor(Math.random()*(y*(Math.random()*12)));
	var t = String.fromCharCode(r+97);
	var u =Math.floor(((Math.random()*1000)*d)/(d/1000));
	var f = (d + Math.random()*16)%10 |0;
	var z = Math.floor(Math.random() * 26);
	var g = String.fromCharCode(z+97);
	var components = [r,s,t,u,f,z,g];
	var dc_uuid = components.join("");
	return dc_uuid;
}

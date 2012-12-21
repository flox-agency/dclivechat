var dcTracker = (function () {

	var url;
	var localtime = new Date();
	var visitorUUID;
	
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

		getVisitorId : function () {

			return (this.loadVisitorId());
		},

		loadVisitorId : function (){
			var now = new Date (),
			nowTs = Math.round(now.getTime() / 1000),
			tempContainer;

			visitorUUID = localStorage.getItem('uuid');

			if(!visitorUUID) {
				visitorUUID = genVisitorId();
				localStorage.setItem('uuid',visitorUUID);
			}

			return visitorUUID;

		},

		trackPageView : function () {
			console.log('domain : '+document.domain);
			console.log('path : '+window.location.href);
			
			$.post('/dclivechat/visits/add.json',
				{
					url : "'"+url+"'",
					localtime : this.formatDate(localtime),
					visitorId : this.getVisitorId()
				},
				function(data) {
					console.log(data);
				},
				'jsonp'
			);
		}
	};

})();


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
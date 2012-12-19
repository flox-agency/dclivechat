var dcTracker = (function () {

	var url;
	var localtime = new Date();
	
	return {

		setUrl: function (data) {
			url = data;
		},

		/**
		*Fonction de formatage de la date.Prend un objet date et le formate sous la forme yyyy-mm-dd H:i:s
		*/
		formatDate : function (dt) {

		//Formatage du jour
		 var d = dt.getDate();
		  if ( d < 10 ) d = '0' + d;

		  //Formatage du mois
		  var m = dt.getMonth()+1;
		  if ( m < 10 ) m = '0' + m;

		  //Formatage de l'année
		  var Y = dt.getFullYear();

		  //Formatage de l'heure
		  var H = dt.getHours();
		  if ( H < 10 ) H = '0'+H;

		  //Formatage des minutes
		  var i = dt.getMinutes();
		  if ( i < 10 ) i = '0'+i;

		  //Formatage des secondes
		  var s = dt.getSeconds();
		  if ( s < 10 ) s = '0'+ s;

		  return Y+'-'+m+'-'+d+' '+H+':'+i+':'+s;
		},
		trackPageView : function () {
			alert(this.formatDate(localtime));
			$.post('/dclivechat/visits/add.json',
					{
						url : "'"+url+"'",
						localtime : this.formatDate(localtime)
					},
					function(data) {
						console.log(data);
					}
			);

		}
	};
	
})();
var dcTracker = (function () {

	var url;
	
	return {

		setUrl: function (data) {
			url = data;
		},
		trackPageView : function () {
			alert(url);
			$.post('/dclivechat/visits/add',{url:"'"+url+"'"},function(data) {
			});

		}
	};
	
})();
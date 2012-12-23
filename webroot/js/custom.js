$(document).ready(function () {
	
	//setTimeout(refreshList,30*1000);

});

function refreshList () {
	$.ajax({
		url:"\/dclivechat\/visits\/ajaxActivesVisits",
		dataType:"html", 
		success : function (data) {
			$("#actives_visits_list").html(data);
		}
	});

	$.ajax({
		url:"\/dclivechat\/visits\/ajaxInactivesVisits",
		dataType:"html", 
		success : function (data) {
			$("#inactives_visits_list").html(data);
		}
	});

	setTimeout(refreshList, 30*1000);
	return false;
}
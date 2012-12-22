$(document).ready(function () {
	
	setTimeout(refreshList,30*1000);

});

function refreshList () {
	$.ajax({
		url:"\/dclivechat\/visits\/ajaxActivesVisits",
		dataType:"html", 
		success : function (data) {
			$(".activity_list").html(data);
		}
	});
	setTimeout(refreshList, 30*1000);
	return false;
}
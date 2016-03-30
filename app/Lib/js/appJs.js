$( document ).ready(function(){
	
$("div.anncDiv button").on( "click", function(){
	var announcementTitle = $("div.modal-header h4");
	var announcementBody = $("div.modal-body p");
	var anncID = $(this).attr("id");
	
	
	$.ajax({
		url:'/public/home.php',
		method:"GET",
		data:{action:"ajax", id: anncID},
		dataType:"JSON"
	})
	.done(function(data){
		console.log(data);
		announcementTitle.text(data.title);
		announcementBody.text(data.body);
	});
	
//announcement.text("Changed By Jquery  " + id);
	});
});
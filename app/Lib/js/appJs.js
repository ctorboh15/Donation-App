$( document ).ready(function(){
	
$("div.anncDiv button").on( "click", function(){
	var announcementTitle = $("div.modal-header h4");
	var announcementBody = $("div.modal-body p");
	var announcementIDHidden = $("input#ModalAnncmtID");
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
		announcementIDHidden.val(anncID);
	});
	
//announcement.text("Changed By Jquery  " + id);
	});

	$("div#announcementModal button#readMore").on('click', function(){
		var announcementIDHidden = $("div#announcementModal input#ModalAnncmtID");
		console.log(announcementIDHidden.val());
		window.location.replace("/public/viewAnnouncement.php?announcementID=" + announcementIDHidden.val());
	});
});
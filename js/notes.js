$(document).ready(function(e) {
    $(".popup-link").click(function(e){
		  var $newSource = $(this).attr("href");
		  var $head = $(this).data("title");
		  $(".popup-content").load($newSource);
		  $(".popup-heading").html($head+'<a class="close-popup">&#xe02c;</a>');
		  alert($head);
		  e.preventDefault();
	  });	
});
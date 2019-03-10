<script>
$(document).ready(function(e) {
    $(".popup-content .popup-link").click(function(e){
		  var $newSource = $(this).attr("href");
		  var $head = $(this).data("title");
		  $(".popup-content").html("<p align='center'><img src='img/popup-loader.GIF' /></p>").load($newSource);
		  $(".popup-heading").html($head+'<a class="close-popup">&#xe02c;</a>');
		  $(".close-popup").click(function(){
			  $(".popup .page").css("margin-top","-100%");
			  $(".popup").fadeOut(300).delay("600", function(){
				  $(".popup").remove();
			  });
		  });
		  e.preventDefault();
	  });
});
</script>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in efficitur massa, sit amet facilisis erat. Donec a pulvinar ex, eget luctus justo. Duis finibus quam nec interdum posuere. Vivamus mi erat, aliquet non commodo sit amet, vehicula a dolor. Donec pulvinar orci sapien, non consequat elit porta eget. Nulla at sapien vitae lorem iaculis porta ac vel eros. Donec ut quam enim. Mauris malesuada elit a mi dapibus pharetra. Cras lorem odio, eleifend et accumsan eu, suscipit vitae lacus. Cras laoreet, nisl scelerisque euismod porta, nulla leo fermentum lorem, sed fringilla dui orci a felis.</p>

<p>Fusce sit amet porta felis. Cras eget justo vitae libero ultrices ullamcorper. Nulla vel tortor est. Quisque hendrerit nisl sit amet consequat gravida. Nam vitae facilisis nisi. Donec eu mi dolor. Donec nibh purus, laoreet sit amet ultricies id, finibus ut tortor. Sed egestas condimentum finibus. Aenean metus quam, laoreet id feugiat ut, viverra at tellus. Suspendisse interdum orci eu maximus sollicitudin. Etiam aliquam vestibulum lacus sed cursus. Praesent sodales mattis eleifend. Aenean a dolor fringilla, fringilla eros sed, consequat erat.</p>

<p>Nulla a elit porta, blandit ipsum at, imperdiet mi. Proin tempus eu metus ac commodo. Suspendisse sed mi molestie, blandit eros ac, mattis justo. Vivamus rhoncus ac turpis ac sagittis. Proin ultrices ultrices mauris vitae imperdiet. Proin finibus elit id velit laoreet, in laoreet odio ornare. Sed tellus dolor, semper quis nibh et, facilisis malesuada tortor. In et sagittis orci, id pellentesque metus. Quisque id tristique nunc, eu sollicitudin velit. Cras eget purus nec libero feugiat semper ac eget lacus. Sed accumsan risus lorem, vel condimentum lorem luctus vitae.</p>

<p>Praesent sed feugiat nisi. Donec in sodales erat, id eleifend urna. Aliquam id lacinia purus, et molestie metus. Suspendisse sit amet consectetur nisi. Ut posuere libero ligula, sit amet feugiat nibh rhoncus et. Nulla facilisi. Mauris faucibus lobortis posuere.</p>

<p>Aenean purus mi, vestibulum sit amet tortor non, placerat egestas neque. Cras dignissim eros id tempus placerat. Sed mattis eleifend elementum. Nulla massa orci, lacinia a bibendum ac, dapibus id mauris. Aliquam sollicitudin mi et lorem vehicula auctor sed vitae orci. Ut vehicula dolor sed massa lobortis luctus. Quisque euismod libero vel sapien ornare convallis. Aenean porta dignissim porta. Donec fermentum maximus quam, sed rhoncus odio. In porttitor, diam et dictum pellentesque, ligula turpis congue purus, ac ornare elit tellus et risus. Quisque aliquam sit amet erat a gravida. In mattis tempus ligula nec mollis. Nam hendrerit aliquam est vitae fermentum.</p>
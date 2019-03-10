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
<p>Curabitur et ante sed augue molestie blandit. Suspendisse sit amet condimentum augue. Vestibulum maximus a urna sed maximus. Etiam consectetur vestibulum justo, id fermentum purus ultrices posuere. Aenean eget eros eget ligula dignissim elementum non eget neque. Curabitur ultrices, felis in fermentum efficitur, diam diam tempor velit, id varius tortor lacus pretium erat. Suspendisse orci nulla, aliquet quis pulvinar sed, malesuada accumsan ligula. Sed tempor cursus libero, vehicula facilisis enim tempus eget. Vivamus quis urna augue.</p>

<p>Donec justo odio, rhoncus ut dignissim ut, porta in urna. Mauris in scelerisque dolor, vitae commodo augue. Quisque sed risus ut ipsum sodales pellentesque. Pellentesque consectetur dolor a libero fermentum, ut vehicula justo tempor. Aenean blandit vulputate porta. Phasellus eleifend turpis quis felis faucibus sollicitudin. Nulla pretium ipsum in venenatis tincidunt. Etiam accumsan odio magna, eget molestie ante fermentum et.</p>

<p>Maecenas eget justo eget enim volutpat porta. Ut tempor vulputate nulla, eu posuere ipsum condimentum eu. Pellentesque lectus est, imperdiet sit amet erat vel, vehicula fermentum arcu. Curabitur feugiat est nulla, id euismod est rutrum et. Sed quis neque eget enim dapibus mattis. Morbi tempor ante ex, sit amet sagittis est lacinia quis. Fusce convallis dolor dolor, id accumsan nulla tempor vel. Suspendisse sodales nulla at lobortis dictum. Mauris pulvinar massa lobortis risus feugiat, at auctor ante pharetra. Vestibulum imperdiet est nulla, maximus luctus quam iaculis nec.</p>

<p>In venenatis nunc justo. Donec at massa eget enim hendrerit placerat nec sed odio. Cras enim nulla, fermentum a ligula nec, mattis tempus libero. Curabitur non lectus sed ex ultrices fermentum. Nunc sit amet pulvinar dui, et accumsan odio. Maecenas auctor pellentesque ullamcorper. Sed vitae lobortis odio. Donec nec justo id nisi consectetur laoreet. In rhoncus turpis nec pretium pellentesque. Proin tellus felis, congue ut velit eu, consequat eleifend mauris. Suspendisse pellentesque vestibulum ipsum id ultricies.</p>

<p>Nullam tempus, mi id condimentum varius, lectus nisi iaculis elit, eu venenatis neque erat non dolor. Suspendisse vehicula tristique odio, a pharetra mauris convallis vehicula. Pellentesque accumsan iaculis nunc, ac vestibulum lorem posuere eu. Mauris non eros in velit fringilla imperdiet in nec magna. Aliquam mi arcu, varius at maximus ut, facilisis nec lorem. Nunc lacinia erat id risus porttitor, in facilisis est volutpat. Nam vulputate nisl at odio semper malesuada sed vitae massa. Mauris accumsan felis et erat sodales ullamcorper. Aliquam erat volutpat. Proin porttitor finibus tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eros justo, bibendum sit amet tortor in, sollicitudin imperdiet turpis.</p>
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
<p>Donec non arcu nec nibh imperdiet ornare ac et justo. Fusce consequat egestas urna, ac rutrum mauris sollicitudin eget. Vivamus vel volutpat ex, nec pellentesque massa. Nulla magna tellus, bibendum ac fringilla eu, maximus non odio. Duis eu ante sem. Nunc vel purus dui. Nulla elit massa, blandit ac erat vel, consectetur molestie augue. Pellentesque facilisis, sapien et dapibus aliquam, nisl purus maximus elit, vel suscipit risus leo viverra nisl. In id euismod nulla. Nunc tincidunt porttitor nisi eu consequat. Vestibulum non nisl eget urna aliquam pulvinar. Cras consequat aliquam finibus. Donec quis velit sed est auctor varius et non lorem.</p>

<p>Phasellus quis quam at eros venenatis blandit quis tempus risus. Curabitur cursus aliquam eros, sit amet scelerisque leo pellentesque rutrum. Nam laoreet sollicitudin enim vel vehicula. Quisque ac elementum dolor. Duis ac leo vulputate, imperdiet dui sed, consectetur metus. Curabitur eu nisi eget nunc volutpat pretium. Quisque eget orci porta, pharetra nisi sit amet, consequat magna. Sed consectetur lectus risus, at malesuada dui fringilla ut. Morbi suscipit lectus at metus consequat, at dapibus lacus rutrum.</p>

<p>Nulla eu purus tincidunt, semper sem vel, egestas nulla. Vestibulum tempus libero mauris, malesuada aliquam velit hendrerit convallis. Mauris id fringilla erat, commodo semper libero. Etiam id libero in est cursus suscipit. Quisque congue, elit et auctor rhoncus, felis arcu aliquam elit, sed ultrices justo justo in tellus. Cras eget pretium urna. Maecenas et lacus id est vulputate hendrerit. Proin sit amet placerat dui. Pellentesque in euismod lectus. Donec vestibulum erat fringilla, ullamcorper risus sit amet, vehicula neque. Donec ipsum ex, ultricies non vehicula sit amet, sollicitudin eget sapien. Nulla facilisi. Nam in gravida mi, et placerat est. Ut id dictum neque.</p>

<p>Duis sed posuere elit, non faucibus lectus. Donec a tellus viverra mi vehicula sagittis. Etiam tellus lectus, dictum nec tellus in, consequat aliquam erat. Nunc laoreet neque a interdum posuere. Suspendisse potenti. Quisque sit amet laoreet risus. Suspendisse ultricies purus augue, eget commodo tortor sodales non. Curabitur turpis velit, sodales vestibulum laoreet ut, elementum quis velit. Integer rhoncus sapien est, at egestas nisi rutrum ac. Aenean augue nisl, cursus sed cursus id, vulputate ut ipsum. Fusce et nunc eleifend, sagittis augue id,volutpat est. In hac habitasse platea dictumst.</p>

<p>Sed blandit diam velit, sit amet dapibus nibh sagittis in. Praesent vel sem a nisi viverra maximus. Pellentesque eu elit ullamcorper, tincidunt mauris non, fringilla dolor. Aliquam ultricies dui vel nibh maximus, ac luctus nisl sagittis. Maecenas hendrerit leo sagittis neque sodales, sit amet pulvinar mauris pharetra. Vestibulum pulvinar, eros sit amet scelerisque dictum, leo lacus auctor magna, at hendrerit erat libero et sapien. Duis auctor ligula id lectus semper ornare. Phasellus sodales molestie metus at cursus. Sed quam lacus, maximus et erat a, lacinia congue metus. Aenean tincidunt nulla nec molestie mollis. Pellentesque pretium aliquam est quis hendrerit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
$(document).ready(function() {
	
	// LOADING SCREEN
	$(window).load(function() {
		$("#loader").fadeOut();
	});
	
	
	// CAROUSEL (FIGURE TAG)
	var $figureMaxHeight = function(){
		var $tabs = $("figure img"), heights = [];
		var $tabs_main = $("figure .text"), heights = [];
		$tabs.each(function() {
		   heights.push($(this).height());
		});
		var maxHeight = Math.max.apply(this, heights);
		$tabs_main.height(maxHeight);
	}
	$figureMaxHeight();
	$(window).resize(function(){
		$figureMaxHeight();
	});
	
	$("figure").slick({
		dots:true,
		arrows:false,
		fade:true,
		speed:400
	});
	$("figure .text").wrapInner('<div class="outer"><div class="inner"></div></div>');
	
	$(".finCarousel").slick({
		dots:true,
		arrows:false,
		speed:400,
  		slidesToShow: 2,
  		slidesToScroll: 2
	});
	
	
	// TOP NAVIGATION (NAV TAG)
	$("nav ul ul").hide();
   
   	/*$("nav").children().children("ul").children("li").hover(function(){
	   	var $height = $("ul",this).outerHeight();
	   	$(this).children("ul").fadeIn(300);
	   	$(this).children("a").addClass("current");
	   	$("nav").css({"margin-bottom":$height});
   	},function(){
		$(this).children("ul").fadeOut(300);
	   	$(this).children("a").removeClass("current");
	   	$("nav").css({"margin-bottom":"0"});
   	});*/ // HOVER VERSION
	
	$("nav li").each(function(index, element) {
        if ($(this).children("ul").length) {
			$(this).children("a").click(function(e){
	  			var $height = $(this).next("ul").outerHeight();
	   			$("nav a").removeClass("current");
	   			$("nav").css({"margin-bottom":"0"});
	   			$("nav ul ul").fadeOut(300);
	   			if(!$(this).next("ul").is(":visible")){
		  			$(this).next("ul").fadeIn(300);
		  			$(this).addClass("current");
	   	  			$("nav").css({"margin-bottom":$height});
	  			}
	  			e.preventDefault();
   			});
		} else {
			$(this).children("a").click(function(){
	   			$("nav a").removeClass("current");
	   			$("nav").css({"margin-bottom":"0"});
	   			$("nav ul ul").fadeOut(300);
   			});
		}
    });
	
   	$("nav a").each( //TOP NAVIGATION ACTIVE STATES FUNCTION
    function(i) {
        var classes = this.className.split(/\s+/);
		if (classes==undefined){
		} else if (classes==""){
		} else {
			for (var i=0,len=classes.length; i<len; i++){
				if ($('body').hasClass(classes[i])){
					$(this).addClass('active');
				}
			}
		}
	});
	$("nav ul ul").wrapInner("<div class='page'></div>");

   
   
   	// SUSTAINABILITY AND MORE
   	$(".sustainability .text").wrapInner('<div class="outer"><div class="inner"></div></div>');
   	$(".sustainability .text .inner").append('<br /><span>&#xe014;</span>');
   	$(".sustainability .page").wrapInner('<div class="information"><div class="outer"><div class="inner"></div></div></div>');
   	$("h1").wrapInner('<div class="thickBorder"></div>');
	$(".heading .page").wrapInner('<div class="outer"><div class="inner"></div></div>');
   
   
   	// COLUMNS
   	var $adjustColsHeight = function(){
		if ($(window).width() > 800) {
			$("#columns").addClass("desktop");
			var $tabs = $("#columns p"), heights = [];
			var $tabs_main = $("#columns p"), heights = [];
			$tabs.each(function() {
			   heights.push($(this).height());
			});
			var maxHeight = Math.max.apply(this, heights);
			$tabs_main.height(maxHeight);
		} else {
			$("#columns").removeClass("desktop");
		}
	}
	$(window).resize(function () {
		$adjustColsHeight();
	});
	$adjustColsHeight();
	
	$("body").niceScroll({scrollspeed:30,zindex:999999});
	
	
	// MAKE MENU FIXED
	var $makeMenuFixed = function(){
		if ($(this).scrollTop() > 240) {
			$("body").addClass("fixed");
			$("nav").next().css({"margin-top":"60px"});
	   		$("nav").css({"margin-bottom":"0"});
		} else {
			$("body").removeClass("fixed");
			$("nav").next().css({"margin-top":"0px"});
	   		$("nav").css({"margin-bottom":"0"});
		}
		if ($(this).scrollTop() > 300) {
			$("nav").addClass("movein");
		} else {
			$("nav").removeClass("movein");
		}
	}
	$makeMenuFixed();
	$(window).scroll(function () {
		$makeMenuFixed();
	});
	
	
	// SOCIAL MEDIA LIST ICONS
	$(".social-media a").each(function(index, element) {
        var $icon = $(this).text();
		$(this).html("<span>"+$icon+"</span><span class='hover'>"+$icon+"</span>");
    });
	$(".list-icons-big li").each(function(index, element) {
        var $icon = $("div",this).text();
		$("div",this).html("<span>"+$icon+"</span><span class='hover'>"+$icon+"</span>");
    });
	
	
	// SCROLL TO TOP
	$(".back-to-top").hide();
	var $scroll = function(){
		if ($(this).scrollTop() > 300) {
			$(".back-to-top").fadeIn();
		} else {
			$(".back-to-top").fadeOut();
		}
	}
	$scroll();
	$(window).scroll(function () {
		$scroll();
	});
	$(".back-to-top").click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 600);
		return false;
	});
	
	
	// PDF MERGER CHECKBOX FUNCTIONS
	$('.checkDwnld').click(function(){
		$(this).toggleClass("active");
		$(this).parent().toggleClass("active");
		if (this.checked) {
			var $link = $(this).parent().parent("a").attr("href"),
				$title = $(this).parent().parent("a").html(),
				$id = $(this).attr("id");
		    $("#showPdfsSelected").removeClass("inactive");
			$("#dwnldsInfo").append('<p id="'+$id+'"><a id="'+$id+'" class="removeDwnld">&#xe02c;</a><a href="'+$link+'" target="_blank">'+$title+'</a></p>');
		} else {
			var $id = $(this).attr("id");
			$("#dwnldsInfo #"+$id).remove();
		}
		$(".removeDwnld").click(function(){
			var $item = $(this).attr("id");
			$(this).parent("p").remove();
			$("#"+$item).parent().removeClass("active");
			$('#'+$item+'.checkDwnld').attr('checked', false); 
			var $numberOfChecked = $('.checkDwnld:checkbox:checked').length;
			if ($numberOfChecked==0){
				$("#showPdfsSelected").addClass("inactive");
			} else {
				("#showPdfsSelected").removeClass("inactive");
			}
		});
		var $numberOfChecked = $('.checkDwnld:checkbox:checked').length;
		if ($numberOfChecked==0){
			$("#showPdfsSelected").addClass("inactive");
		} else {
			("#showPdfsSelected").removeClass("inactive");
		}
	});
			
	$(".reset").click(function(){
		$("#dwnldsInfo p").remove();
	});
	$(".removeErrorBox").click(function(){
		$("#error").text("");
	});
	
	$(".tble td").each(function(index, element) {
        if($(this).attr("align") == "right"){
			$(this).append("&nbsp;");
			$("br",this).before("&nbsp;");
		}
    });
	$('.tble td:contains("(")').each(function(){
		$(this).html($(this).html().split("&nbsp;").join(""));
	});
    
	
	// POPUP
	var $checkScreenHeight = function() {
		var $height = $(window).height(),
			$headingHeight = $(".popup-heading").outerHeight(),
			$footerHeight = $(".popup-footer").outerHeight(),
			$padding = 80,
			$totalHeight = $height - $headingHeight -$footerHeight - $padding;
		$(".popup-content").css({"max-height":$totalHeight});
	}
	$checkScreenHeight();
	$(window).resize(function(){
		$checkScreenHeight();
	});
	$(".popup-content").niceScroll({scrollspeed:30,zindex:999999});
	$(".popup-content").load("notes/example.php");
	
});
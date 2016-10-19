$(document).ready(function(){
	$(window).scroll(function() {
	if ($(this).scrollTop() > 1){  
		$('.sticky_header').addClass("sticky");
		$('.page_wrap').addClass("stick");
	  }
	  else{
		$('.sticky_header').removeClass("sticky");
		$('.page_wrap').removeClass("stick");
	  }
	});
	$('.order_main .conversion ul li a').click(function() {
		$('.order_main .conversion ul li.active').removeClass('active');
		$(this).closest('li').addClass('active');
		return false;
	});
	$('.project_type').ddslick();
	$('.budget_range').ddslick();
	$('.project_per_month').ddslick();
	
	var inputList = $('.pretty_checkable');
	for (var i = inputList.length - 1; i >= 0; i--) {
		$(inputList[i]).prettyCheckable();
	}
	
	$('.header .navbar-default .navbar-collapse .navbar-nav > li.dropdown .sub_menu').hover(
       function(){ $('.header .navbar-default .navbar-collapse .navbar-nav > li.dropdown').toggleClass('effect') }
	)
	
	$(".navbar-toggle").click(function () {
		$(".top").toggleClass("top-animate");
		$(".mid").toggleClass("mid-animate");
		$(".bottom").toggleClass("bottom-animate");
	});
	
	if($(window).width() <= 768){
	  $('.navbar-nav > li.dropdown').click(function(){
			$('.sub_menu').slideToggle("1500");
		});
	}
	
	/*sticky_box js*/
	var top = $('#sticky_box').offset().top - parseFloat($('#sticky_box').css('marginTop').replace(/auto/, 0));
	$(window).scroll(function (evt) {
		var windowWidth = $(window).width();
		if (windowWidth > 767) {
			var leftHeight = $('.steps').height();
			var sbHeight = $('#sticky_box').height();
			//alert(leftHeight);
			var footTop = $('.sticky_stop').offset().top - parseFloat($('.sticky_stop').css('marginTop').replace(/auto/, 0));
			var maxY = footTop - $('#sticky_box').outerHeight();
			var y = $(this).scrollTop();
			if (y > top) {
				if (y < maxY) {
					$('#sticky_box').addClass('sticky').removeAttr('style');
				} else if (leftHeight < sbHeight) {
					$('#sticky_box').removeClass('sticky').css({
						position: 'static'
					});
				} else {
					$('#sticky_box').removeClass('sticky').css({
						position: 'absolute',
						top: (maxY - top) + 'px'
					});
				}
			} else {
				$('#sticky_box').removeClass('sticky');
			}
		}
		if (windowWidth <= 767) {
			function isVisible(elment) {
    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elment).offset().top;

    return y <= (vpH + st);
}

function setSideNotePos(){
    $(window).scroll(function() {
        if (isVisible($('.footer'))) {
            $('#sticky_box').css('position','absolute');
            $('#sticky_box').addClass("top");
						
					} else {
						$('#sticky_box').css('position','fixed');
						$('#sticky_box').removeClass("top");
					}
				});
			}
			$(document).ready(function() {
				setSideNotePos();
			});
		}
	});
});  
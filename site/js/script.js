$(document).ready(function() {
    $('.js-lesson-reply-input').click(function(){
      $('.lesson-open-input').show();
    })
});

$(document).on('click', '.dropdown-child', function(){
	
	var selected = $(this).find('.menu-child');

	if(selected.hasClass('open')){
		selected.slideUp(400, function(){
			selected.removeClass('open');
		});
		
	}
	else {
		selected.slideDown(400, function(){
			selected.addClass('open');

		})
		
	}
});
$(document).on('click', '.sidebar-nav-item', function(){
	var active = $(this).find('.js-scroll-trigger1');
	
		$('.js-scroll-trigger1').removeClass('active');
		active.addClass('active');

})
$(document).on('click', '.sidebar-item', function(){
	$('.appbar').removeClass('active');
	$(this).find('.appbar').addClass('active');
})


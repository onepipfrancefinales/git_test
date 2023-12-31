$(document).ready(function() {
	$('.LoadImg').each(function(){
		var img = $(this);
		var src = img.attr('src');

		img.attr('src', '../images/pixel.gif');
		img.css('background', 'url("../images/loader_06.gif") no-repeat center');

		$('<img>').bind('load', function(){
			img.fadeOut('slow', function(){
				img.attr('src', src).fadeIn();
				img.css('background', 'transparent');
			});
		}).attr('src', src);
	});

	$('.jQiFrame').fancybox({
		'autoDimensions'    : true,
		'autoScale'			: false,
		'titleShow'         : false,
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe'
	});

	$('.jQiFrameGraph').fancybox({
		'width'				: 520,
		'height'			: 300,
		'autoScale'			: false,
		'titleShow'         : false,
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'type'				: 'iframe'
	});

	$('.jQiFrameJoueur').fancybox({
		'autoDimensions'    : true,
		'autoScale'			: false,
		'titleShow'         : false,
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe'
	});
});
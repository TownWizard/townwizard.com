$(document).ready(function() {
	
	$('.contactLink').click(function() {
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		$('#Darkness').fadeIn('fast',function() {
			$('#ContactForm').fadeIn('fast',function() {
				$('#ContactForm a.close, #Darkness').click(function() {
					$('#ContactForm span.wpcf7-not-valid-tip').fadeOut();
					$('#ContactForm .wpcf7-response-output').fadeOut();
					$('#ContactForm').fadeOut('fast',function() {
						$('#Darkness').fadeOut();
					});
				});
			});
		});
	});

	$('.advertiseLink').click(function() {
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		$('#Darkness').fadeIn('fast',function() {
			$('#AdvertiseForm').fadeIn('fast',function() {
				$('#AdvertiseForm a.close, #Darkness').click(function() {
					$('#AdvertiseForm span.wpcf7-not-valid-tip').fadeOut();
					$('#AdvertiseForm .wpcf7-response-output').fadeOut();
					$('#AdvertiseForm').fadeOut('fast',function() {
						$('#Darkness').fadeOut();
					});
				});
			});
		});
	});

	//Trigger Contact us Google AdWords Conversion
	$('.form .btn input').click(function() {
		setTimeout(function() {
			if ($('.wpcf7-mail-sent-ok').length) {
			   trackConv(1011884112,"k8kdCKj2lQUQ0MDA4gM");
			}
		}, 2500);
	});

	$('#MainNav li').not('ul.sub li').hover(function() {
        if($(this).find('ul.sub').length) {
            $(this).find('ul.sub').show();
        }
    }, function() {
        if($(this).find('ul.sub').length) {
            $(this).find('ul.sub').hide();
        }
    });
	
	/*if($('#SampleGuide').length) {
		$('#SampleGuide').jCarouselLite({
			btnNext: ".sampleGuide .next", 
			btnPrev: ".sampleGuide .prev", 
			speed: 1000, 
			visible: 5, 
			scroll: 5,
			circular: true,
			start: 0
		});
	}*/
	
	if($('#Testimonials').length) {
		$('#Testimonials').jCarouselLite({ 
			visible: 1, 
			scroll: 1,
			auto: 8000, 
			beforeStart: function(a) {
				$(a).parent().fadeTo(500, 0);
			}, 
			afterEnd: function(a) {
				$(a).parent().fadeTo(500, 1);
			}
		});
	}

	if($('.homeVideo').length) {
		$('.homeVideo .homeVideoHolder img').click(function() {
			$(this).fadeOut('fast',function() {
				$('.homeVideo iframe').fadeIn().css('display','block');
			});
		});
	}

	if($('.phone').length) {
		if($('.logos a').length) {
			$('.logos a').hover(function() {
				var guideName = $(this).attr('title');
				$('.phone .screen').css('background-image','url(/wp-content/themes/5506/images/2013/samples/' + guideName + '-screen.jpg)')
			}, function() {
				$('.phone .screen').css('background-image','none');
			});
		}
	}

});

function trackConv(google_conversion_id,google_conversion_label) {
	var image = new Image(1,1);
	image.src = "http://www.googleadservices.com/pagead/conversion/"+google_conversion_id+"/?label="+google_conversion_label+"&script=0";
} 
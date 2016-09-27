$(function() {
	var home = $('body');
	var modal = home.find('#choose-color');
	//backlightMenu();
	

	home.on('click', 'div.top-header li[name = "show-contact"]',function( event ) {  
		$(this).find('i').toggleClass('active');
    	home.find('div.top-header').find('div.top-contact-xs').toggle(1000);
    });

    home.on('click', 'div.top-header li[name = "show-top-menu"]',function( event ) {  
		$(this).find('i').toggleClass('active');
    	home.find('div.top-menu').find('ul.top-menu-sm-xs').toggle(1000);
    });
    //slider
    
        
    home.on('click', 'div.block-slider div.pult-slider span.stop',function( event ) {  
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();		
    });
    home.on('click', 'div.block-slider div.pult-slider span.play',function( event ) {  
		sliderImg('yes','right',3000);
    });

    home.on('click', 'div.block-slider span.left',function( event ) {  
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();		
		sliderImg('no','left',100);
    });
    home.on('click', 'div.block-slider span.right',function( event ) {  
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();		
		sliderImg('no','right',100);
    });
    
    sliderImg('yes','right',3000);
    //placePult();

    function sliderImg(repit,dir,dur) {
    	var category = getCategorySlider();

    	var sliders = home.find('.image-slider').find('img[slider = "'+category+'"]');

    	var slider = activeSlider(sliders);//home.find('.image-slider').find('img[status = "active"]');
    	
    	if (sliders.length !== 0) {
    		slider.animate({
    		left: "+300"
	    	},{
	    		duration: dur,
	    		complete: function() {

				    for (var i = 0; i < sliders.length; i++) {
			    		if ($(sliders[i]).attr('status') === 'active') {
			    			if (dir === 'right') {
			    				var curent = $(sliders[i]).attr('status','pending').hide();
				    			if ($(sliders[i+1]).length !== 0) {
					    			var next = $(sliders[i+1]).attr('status','active').show();
					    		}else{
					    			var next = $(sliders[0]).attr('status','active').show();
					    		}
				    			break;	
			    			}else{
			    				var curent = $(sliders[i]).attr('status','pending').hide();
				    			if ($(sliders[i-1]).length !== 0) {
					    			var next = $(sliders[i-1]).attr('status','active').show();
					    		}else{
					    			var next = $(sliders[sliders.length-1]).attr('status','active').show();
					    		}
				    			break;	
			    			}
			    			
			    		}
			    		
			    	}
			    	if (repit === 'yes') {
			    		sliderImg('yes','right',3000);	
			    	}
			    	
				},
	    	})
    	}

    	
    }

    function getCategorySlider() {
    	var list = home.find('li[name = "category-slider"]');
    	for (var i = 0; i < list.length; i++) {
    		if ($(list[i]).attr('status') === 'active') {
    			return $(list[i]).attr('slider');
    		}
    	}
    }

    function activeSlider(sliders) {
    	home.find('.image-slider').find('img[status = "active"]').hide();
    	for (var i = 0; i < sliders.length; i++) {
    		if ($(sliders[i]).attr('status') === 'active') {
    			return $(sliders[i]).show();
    		}
    	}
    }

    //slider
    //
    $('#slider-width').slider({
		min: 30,
		max: 300,
		//value: home.find('div[name = "amount-slider"]').find('span[name = "current-amount"]').text(),
		step:1,
		range: "min",
		value: 50,
		slide: function(event, ui) {
			//displayCurrentAmmount(ui.value);
			$('div.block-calculator ul.block-slider-width input[name = "width"]').val(ui.value);
			calculatorRulon();
		},
		change: function(event, ui) {
			calculatorRulon();
		}
	}).draggable();

	$('#slider-height').slider({
		min: 30,
		max: 300,
		//value: home.find('div[name = "amount-slider"]').find('span[name = "current-amount"]').text(),
		step:1,
		range: "min",
		value: 100,
		slide: function(event, ui) {
			//displayCurrentAmmount(ui.value);
			$('div.block-calculator ul.block-slider-height input[name = "height"]').val(ui.value);
			calculatorRulon();
		},
		change: function(event, ui) {
			calculatorRulon();
		}
	}).draggable();

	calculatorRulon();

	//modal
	modal.on('click', 'div.material',function( event ) {  
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds' || page === 'plisse') {
			
			var pic = $(this).find('li.image-material img').attr('src');
			var price = parseFloat($(this).parents('div[name = "group"]').attr('price')).toFixed();
			var title = $(this).parents('div[name = "group"]').attr('title');
			var name = $(this).find('li.description-material').text();
			setColor(pic,price,title,name);
		}
		if (page === 'horizontal-blinds') {
			var pic = $(this).find('li.image-material img').attr('src');
			var price = parseFloat($(this).find('span.price').text()).toFixed();
			var title = $(this).parents('div[name = "group"]').attr('title');
			var name = $(this).find('li.description-material').text();
			setColor(pic,price,title,name);
		}
		
		modal.modal('hide');
		calculatorRulon();
    });
	//modal
	//
	//select category
	home.on('click', 'div.category div.col-single-category',function( event ) {  
		home.find('div.col-single-category').removeClass('active-category');
		home.find('div.col-single-category').find('span.icon i').removeClass('fa-dot-circle-o').addClass('fa-circle-thin');
		home.find('li[name = "category-slider"]').attr('status','noactive')
		$(this).addClass('active-category');
		$(this).find('span.icon i').removeClass('fa-circle-thin').addClass('fa-dot-circle-o');
		$(this).parents('li[name = "category-slider"]').attr('status','active');
		home.find('div.block-slider div.title-slider').text($(this).find('span.title').text());
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();	
		sliderImg('yes','right',3000);
		
		var pr_li = $(this).parents('li[name = "category-slider"]');
		//updateTotal(pr_li.attr('price'));
		updateColor(pr_li.attr('file'),pr_li.attr('price'),pr_li.attr('name-group'),pr_li.attr('material-title'), pr_li.attr('slider'))
		defaultCalculator();
    });
	//select category
	//
	$('#choose-color').on('show.bs.modal', function (e) {
		var category = getCategorySlider();

		var body = $(this).find('.modal-body').empty().append('<div class="text-center"><i class = "fa fa-spinner fa-pulse fa-4x"></i></div>');
		$.post(
            '/site/load-material',
            {
              'page':home.find('li.choose-color div.btn-choose-color button').attr('page'),
              'category' : category,
            }
        ).done(function( data ) {
          body.html(data);
          }
        ).fail( function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
            }
        );
	});

	home.on('change', 'div.block-calculator input[name = "width"] ',function( event ) {
		$('#slider-width').slider( "option", "value", parseFloat($(this).val()).toFixed());
    });
    home.on('change', 'div.block-calculator input[name = "height"] ',function( event ) {
		$('#slider-height').slider( "option", "value", parseFloat($(this).val()).toFixed());
    });

	function calculatorRulon() {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index') {
			var slider = home.find('div.active-category').parents('li[name = "category-slider"]').attr('slider');
			if (slider == '1' || slider == '2') {
				var m = parseFloat(home.find('div.block-calculator div.price-color span.number').text());
				var h = parseFloat($('#slider-height').slider( "option", "value" ));
				var w = $('#slider-width').slider( "option", "value" );
				
				
				if (h <= 180) {
					price = ((m/10000)*100*w).toFixed();
				}else{
					price = ((((h-180)/100)*(m/10000) + m/10000)*100*w).toFixed();
				}
			}
			if (slider == '3'){
				$('#slider-width').slider({
					min: 40,
					max: 140,
				});
				$('#slider-height').slider({
					min: 40,
					max: 160,
				});
				var ar_w = ["40", "45", "50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140"];
				var ar_p = ["1510","1610","1710","1810","1910","2010","2110","2210","2310","2410","2510","2610","2710","2810","2910","3010","3110","3210","3310","3410","3510"];
				var h = parseFloat($('#slider-height').slider( "option", "value" ));
				var w = parseFloat($('#slider-width').slider("option", "value"));
				for (var i = 0; i < ar_w.length; i++) {
					if (i !== ar_w.length -1) {
						if (w >= parseFloat(ar_w[i]) && w < parseFloat(ar_w[i+1])) {
							var price = parseFloat(ar_p[i]);
							break;
						}	
					}else{
						if (w == parseFloat(ar_w[i])) {
							var price = parseFloat(ar_p[i]);
							break;
						}					
					}
				}
				
				if (h > 120) {
					var n = Math.floor((h-120)/5);
					price = price + n*100;

				}
			}

			if (slider == '4'){
				$('#slider-width').slider({
					min: 40,
					max: 140,
				});
				$('#slider-height').slider({
					min: 40,
					max: 160,
				});
				var ar_w = ["40", "45", "50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140"];
				var ar_p = ["1806","1900","1986","2100","2234","2302","2474","2551","2660","2769","2879","2988","3097","3206","3315","3424","3533","3643","3752","3861","3970"];
				var h = parseFloat($('#slider-height').slider( "option", "value" ));
				var w = parseFloat($('#slider-width').slider("option", "value"));
				for (var i = 0; i < ar_w.length; i++) {
					if (i !== ar_w.length -1) {
						if (w >= parseFloat(ar_w[i]) && w < parseFloat(ar_w[i+1])) {
							var price = parseFloat(ar_p[i]);
							break;
						}	
					}else{
						if (w == parseFloat(ar_w[i])) {
							var price = parseFloat(ar_p[i]);
							break;
						}					
					}
				}
				
				if (h > 120) {
					var n = Math.floor((h-120)/5);
					price = price + n*100;

				}
			}
			
			var total = home.find('div.block-total span[name = "total"]');
			total.text(price);	
		}
		if (page === 'vertical-blinds' || page === 'horizontal-blinds') {
			var m = parseFloat(home.find('div.block-calculator div.price-color span.number').text());
			var h = parseFloat($('#slider-height').slider( "option", "value" ));
			var w = $('#slider-width').slider( "option", "value" );
			var total = home.find('div.block-total span[name = "total"]');
			
			if (h*w <= 10000) {
				price = m.toFixed();
			}else{
				price = ((m/10000)*h*w).toFixed();
			}

			
			total.text(price);	
		}

		if (page == 'mosquito-nets') {
			var slider = home.find('div.active-category').parents('li[name = "category-slider"]').attr('slider');
			if (slider == '2') {
				$('#slider-width').slider({
				min: 40,
				max: 140,
				});
				$('#slider-height').slider({
					min: 40,
					max: 200,
				});
				var ar_w = ["40", "45", "50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140"];
				var ar_p = ["2500","2650","2800","2950","3100","3250","3400","3550","3700","3850","4000","4150","4300","4450","4600","4750","4900","5050","5200","5350","5500"]
				var h = parseFloat($('#slider-height').slider( "option", "value" ));
				var w = parseFloat($('#slider-width').slider("option", "value"));
				for (var i = 0; i < ar_w.length; i++) {
					if (i !== ar_w.length -1) {
						if (w >= parseFloat(ar_w[i]) && w < parseFloat(ar_w[i+1])) {
							var price = parseFloat(ar_p[i]);
							break;
						}	
					}else{
						if (w == parseFloat(ar_w[i])) {
							var price = parseFloat(ar_p[i]);
							break;
						}					
					}
				}
				
				if (h > 130) {
					var n = Math.floor((h-130)/5);
					price = price + n*100;

				}
			}else{
				var m = parseFloat(home.find('div.block-calculator div.price-color span.number').text());
				var h = parseFloat($('#slider-height').slider( "option", "value" ));
				var w = $('#slider-width').slider( "option", "value" );
				
				
				if (h*w <= 10000) {
					price = m.toFixed();
				}else{
					price = ((m/10000)*h*w).toFixed();
				}
			}
			var total = home.find('div.block-total span[name = "total"]');
			total.text(price);
		}

		if (page === 'plisse') {
			$('#slider-width').slider({
				min: 50,
				max: 140,
			});
			$('#slider-height').slider({
				min: 50,
				max: 200,
			});
			var ar_w = ["50","55","60","65","70","75","80","85","90","95","100","105","110","115","120","125","130","135","140"];
			var ar_p = ["2450","2600","2750","2900","3050","3200","3350","3500","3560","3800","3950","4100","4250","4400","4550","4700","4850","5000","5150"]
			var h = parseFloat($('#slider-height').slider( "option", "value" ));
			var w = parseFloat($('#slider-width').slider("option", "value"));
			for (var i = 0; i < ar_w.length; i++) {
				if (i !== ar_w.length -1) {
					if (w >= parseFloat(ar_w[i]) && w < parseFloat(ar_w[i+1])) {
						var price = parseFloat(ar_p[i]);
						break;
					}	
				}else{
					if (w == parseFloat(ar_w[i])) {
						var price = parseFloat(ar_p[i]);
						break;
					}					
				}
			}
			
			if (h > 120) {
				var n = Math.floor((h-120)/5);
				price = price + n*100;

			}

			

			var total = home.find('div.block-total span[name = "total"]');
			total.text(price);
		}

		if (page === 'cornice') {
			var m = parseFloat(home.find('div.block-calculator div.price-color span.number').text());
			var w = $('#slider-width').slider( "option", "value" );
			var total = home.find('div.block-total span[name = "total"]');
			
			price = ((m/100)*w).toFixed();

			
			total.text(price);	
		}
		
	}

	function defaultCalculator() {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds' || page === 'plisse' || page === 'cornice' || page == 'mosquito-nets') {
			$('#slider-width').slider( "option", "value", 50);
			$('#slider-height').slider( "option", "value", 100);
			$('div.block-calculator ul.block-slider-width input[name = "width"]').val(50);
			$('div.block-calculator ul.block-slider-height input[name = "height"]').val(100);
		}
		calculatorRulon();
	}

	function updateTotal(total) {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse' || page === 'cornice' || page == 'mosquito-nets') {
			var total = home.find('div.block-total span[name = "total"]').text(parseFloat(total).toFixed());
		}
		
	}

	function updateColor(pic,price,title,name,slider) {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index') {
			setColor(pic,price,title,name);			
		}
		if (page === 'vertical-blinds') {
			if (slider === 1) {
				visibleColor(slider);
			}else{
				visibleColor(slider);
			}
			setColor(pic,price,title,name);
			
		}
		if (page === 'horizontal-blinds') {
			if (slider == 1 || slider == 2) {

				visibleColor('1');
			}else{
				visibleColor(slider);
			}
			setColor(pic,price,title,name);
			
		}

		if (page === 'plisse') {
			setColor(pic,price,title,name);	
		}

		if (page === 'cornice') {
			setColor(pic,price,title,name);	
		}

		if (page === 'mosquito-nets') {
			setColor(pic,price,title,name);		
		}


	}

	function setColor(pic,price,title,name) {
		var block_price = home.find('li.choose-color').find('div.price-color').find('span.number').text(parseFloat(price).toFixed());
		var block_title = home.find('li.choose-color').find('div.title-color').text(title);
		var block_name = home.find('li.choose-color').find('div.title-material').text(name);
		var block_preview = home.find('li.choose-color').find('div.preview-color');
		block_preview.empty();
		block_preview.append('<img src = "'+pic+'">');
	}

	function visibleColor(v) {
		var block_color = home.find('ul.block-choose-color');
		console.log(v);
		if (v === '1') {
			console.log('test');
			block_color.show();
		}else{
			block_color.hide();
		}
	}

	function backlightMenu() {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index') {
			home.find('ul.top-menu-md-lg li:nth-child(1)').addClass('active-menu');
		}
		if (page === 'vertical-blinds') {
			home.find('ul.top-menu-md-lg li:nth-child(2)').addClass('active-menu');
		}
		if (page === 'horizontal-blinds') {
			home.find('ul.top-menu-md-lg li:nth-child(3)').addClass('active-menu');
		}
		if (page === 'plisse') {
			home.find('ul.top-menu-md-lg li:nth-child(4)').addClass('active-menu');
		}
		
	}


	home.on('submit', 'form[name = "order1"], form[name = "order2"]',function( event ) {  
		var block_reload = home.find('div[id ^= order] div.result');
		block_reload.append('<div class="text-center"><i class = "fa fa-spinner fa-pulse fa-4x"></i></div>');
		$.post(
            '/site/send-order',
                $(this).serializeArray()
            ).done(function( data ) {
              block_reload.html(data);
              }
            ).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
                }
            );
        event.preventDefault();		
    });

    home.on('click', 'form[name = "order1"] button, form[name = "order2"] button',function( event ) {  
		customValidate();
    });

	function customValidate() {
		if (home.find('input[name = "name"]').get(0).value == "") {
			home.find('input[name = "name"]').get(0).setCustomValidity('Пожалуйста, введите ваше имя.');	
		}else{
			home.find('input[name = "name"]').get(0).setCustomValidity('');
		}
		if (home.find('input[name = "name"]').get(1).value == "") {
			home.find('input[name = "name"]').get(1).setCustomValidity('Пожалуйста, введите ваше имя.');	
		}else{
			home.find('input[name = "name"]').get(1).setCustomValidity('');
		}
		if (home.find('input[name = "phone"]').get(0).value == "") {
			home.find('input[name = "phone"]').get(0).setCustomValidity('Пожалуйста, введите ваш телефон.');	
		}else{
			home.find('input[name = "phone"]').get(0).setCustomValidity('');
		}
		if (home.find('input[name = "phone"]').get(1).value == "") {
			home.find('input[name = "phone"]').get(1).setCustomValidity('Пожалуйста, введите ваш телефон.');	
		}else{
			home.find('input[name = "phone"]').get(1).setCustomValidity('');
		}
		if (home.find('input[name = "captcha"]').get(0).value == "") {
			home.find('input[name = "captcha"]').get(0).setCustomValidity('Пожалуйста, введите код защиты от ботов.');	
		}else{
			home.find('input[name = "captcha"]').get(0).setCustomValidity('');
		}
		if (home.find('input[name = "captcha"]').get(1).value == "") {
			home.find('input[name = "captcha"]').get(1).setCustomValidity('Пожалуйста, введите код защиты от ботов.');	
		}else{
			home.find('input[name = "captcha"]').get(1).setCustomValidity('');
		}
		
    
	}

	$('div[id ^= "order"]').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
	  	var modal = $(this)
	  	modal.find('div.result').empty();
	  	modal.find('input[name = "name"]').val('');
	  	modal.find('input[name = "phone"]').val('');
	  	modal.find('input[name = "captcha"]').val('');

	  	if (button.attr('data-target') === '#order2') {
	  		setOrderOption()
	  	}
	  
	});

	function setOrderOption() {
		var form = home.find('form[name = "order2"]');
		var page = home.find('div.block-calculator').attr('page-name');
		form.find('input[name = "total"]').val(home.find('div.block-total span[name = "total"]').text());
		form.find('input[name = "category"]').val(page);
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse' || page === 'cornice' || page == 'mosquito-nets') {
			form.find('input[name = "width"]').val($('#slider-width').slider( "option", "value" ));
		}
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse' || page == 'mosquito-nets') {
			form.find('input[name = "height"]').val($('#slider-height').slider( "option", "value" ));
		}
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse' || page === 'cornice' || page == 'mosquito-nets') {
			form.find('input[name = "sub-category"]').val(home.find('div.title-slider').text());
		}
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse') {
			form.find('input[name = "group"]').val(home.find('div.title-color').text());
		}
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds'  || page === 'plisse') {
			form.find('input[name = "material"]').val(home.find('div.title-material').text());
		}
		
	}

	home.on('click', 'div.top-menu li',function( event ) {  
		var link = $(this).find('a').attr('href');        		
		window.location.href = link;
    });
	
	//popver init
	$('[data-toggle="popover"]').popover();
	//popover init
	//
	//
	home.on('click', 'div.image-slider span.full-scree-open',function( event ) { 
		var slider = $(this).parents('div.image-slider');
		if ($(this).find('i.fa-expand').length === 1) {
			slider.find('.img-responsive').css({'width':'100%'});
			$(this).find('i.fa-expand').removeClass('fa-expand').addClass('fa-compress');
			fullScreen(slider[0]);
		}else{
			if ($(this).find('i.fa-compress').length === 1) {
				slider.find('.img-responsive').css({'width':'450px'});
				$(this).find('i.fa-compress').removeClass('fa-compress').addClass('fa-expand');
				cancelFullscreen();
			} 	
		} 
		
		
		
    });
	
	function fullScreen(element) {
		if(element.requestFullscreen) {
	    	element.requestFullscreen();
	  	} else if(element.webkitRequestFullscreen) {

	    	element.webkitRequestFullscreen();
	  	} else if(element.mozRequestFullscreen) {
	    	element.mozRequestFullScreen();
	  	}
	}
	function cancelFullscreen() {
	  if(document.cancelFullScreen) {
	    document.cancelFullScreen();
	  } else if(document.mozCancelFullScreen) {
	    document.mozCancelFullScreen();
	  } else if(document.webkitCancelFullScreen) {
	    document.webkitCancelFullScreen();
	  }
}
});
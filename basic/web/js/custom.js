$(function() {
	var home = $('body');
	var modal = home.find('#choose-color');

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
		min: 0,
		max: 100,
		//value: home.find('div[name = "amount-slider"]').find('span[name = "current-amount"]').text(),
		step:1,
		range: "min",
		value: 50,
		slide: function(event, ui) {
			//displayCurrentAmmount(ui.value);
			$('div.block-calculator ul.block-slider-width input[name = "width"]').val(ui.value);
		},
		change: function(event, ui) {
			//calculate();
		}
	});

	$('#slider-height').slider({
		min: 0,
		max: 100,
		//value: home.find('div[name = "amount-slider"]').find('span[name = "current-amount"]').text(),
		step:1,
		range: "min",
		value: 60,
		slide: function(event, ui) {
			//displayCurrentAmmount(ui.value);
			$('div.block-calculator ul.block-slider-height input[name = "height"]').val(ui.value);
		},
		change: function(event, ui) {
			//calculate();
		}
	});

	//modal
	modal.on('click', 'div.material',function( event ) {  
		var block_price = $(this).parents('li.choose-color').find('div.price-color').find('span.number').text($(this).attr('price'));
		var block_preview = $(this).parents('li.choose-color').find('div.preview-color');
		block_preview.empty();
		block_preview.append('<img src = "'+$(this).find('li.image-material img').attr('src')+'">');
		modal.modal('hide');
    });
	//modal
	//
	//select category
	home.on('click', 'div.category div.col-single-category',function( event ) {  
		home.find('div.col-single-category').removeClass('active-category');
		home.find('div.col-single-category').find('span.icon i').removeClass('fa-dot-circle-o').addClass('fa-circle');
		home.find('li[name = "category-slider"]').attr('status','noactive')
		$(this).addClass('active-category');
		$(this).find('span.icon i').removeClass('fa-circle').addClass('fa-dot-circle-o');
		$(this).parents('li[name = "category-slider"]').attr('status','active');
		home.find('div.block-slider div.title-slider').text($(this).find('span.title').text());
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();	
		sliderImg('yes','right',3000);	
    });
	//select category

});
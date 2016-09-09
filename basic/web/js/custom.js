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
		min: 30,
		max: 300,
		//value: home.find('div[name = "amount-slider"]').find('span[name = "current-amount"]').text(),
		step:1,
		range: "min",
		value: 100,
		slide: function(event, ui) {
			//displayCurrentAmmount(ui.value);
			$('div.block-calculator ul.block-slider-width input[name = "width"]').val(ui.value);
			calculatorRulon();
		},
		change: function(event, ui) {
			calculatorRulon();
		}
	});

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
	});

	//modal
	modal.on('click', 'div.material',function( event ) {  
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds') {
			
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
		home.find('div.col-single-category').find('span.icon i').removeClass('fa-dot-circle-o').addClass('fa-circle');
		home.find('li[name = "category-slider"]').attr('status','noactive')
		$(this).addClass('active-category');
		$(this).find('span.icon i').removeClass('fa-circle').addClass('fa-dot-circle-o');
		$(this).parents('li[name = "category-slider"]').attr('status','active');
		home.find('div.block-slider div.title-slider').text($(this).find('span.title').text());
		var slider = home.find('.image-slider').find('img[status = "active"]').stop();	
		sliderImg('yes','right',3000);
		defaultCalculator();
		var pr_li = $(this).parents('li[name = "category-slider"]');
		updateTotal(pr_li.attr('price'));
		updateColor(pr_li.attr('file'),pr_li.attr('price'),pr_li.attr('name-group'),pr_li.attr('material-title'), pr_li.attr('slider'))
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
			var m = parseFloat(home.find('div.block-calculator div.price-color span.number').text());
			var h = parseFloat($('#slider-height').slider( "option", "value" ));
			var w = $('#slider-width').slider( "option", "value" );
			var total = home.find('div.block-total span[name = "total"]');
			
			if (h <= 180) {
				price = ((m/10000)*100*w).toFixed();
			}else{
				price = ((((h-180)/100)*(m/10000) + m/10000)*100*w).toFixed();
			}
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
		
	}

	function defaultCalculator() {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds') {
			$('#slider-width').slider( "option", "value", 100);
			$('#slider-height').slider( "option", "value", 100);
			$('div.block-calculator ul.block-slider-width input[name = "width"]').val(100);
			$('div.block-calculator ul.block-slider-height input[name = "height"]').val(100);
		}
	}

	function updateTotal(total) {
		var page = home.find('div.block-calculator').attr('page-name');
		if (page === 'index' || page === 'vertical-blinds' || page === 'horizontal-blinds') {
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

});
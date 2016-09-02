$(function() {
	home = $('body');
	home.on('click', 'div.top-header i[name = "show-contact"]',function( event ) {  
		$(this).find('i').toggleClass('active');
    	home.find('div.top-header').find('div.top-contact-xs').toggle(1000);
    });
});
$(function() {
	var home = $('body');
	home.on('submit', 'form[name = "set-password"]',function( event ) {    
        
        var block_reload = home.find('div[name = "block-result"]');
        block_reload.append('<div class="text-center"><i class = "fa fa-spinner fa-pulse fa-4x"></i></div>');
        $.post(
                '/site/save-password',
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
});
(function ($) {
    $(document).ready(function() {
        
        var maxHeight = 0;
        $('.node-block-header > .content').each(function() {
            var height = parseInt($(this).css('height'), 10);
            if(height > maxHeight) {
                maxHeight = height;
            }
        })
        
        $('.node-block-header > .content').each(function() {
            var height = parseInt($(this).css('height'), 10);
            var diff = maxHeight - height;
            $(this).find('a.more').css('margin-top', (parseInt($(this).find('a.more').css('margin-top'),10) + diff) + 'px');
            $(this).css('height', maxHeight+'px');      
        });
    });  
})(jQuery);
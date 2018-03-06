(function ($) {
    $(document).ready(function() {
        $('.xzoom4, .xzoom-gallery4').xzoom({position: 'lens', lensShape: '', sourceClass: 'xzoom-hidden'});
       
        var isTouchSupported = 'ontouchstart' in window;

        if (isTouchSupported) {
            //If touch device
            $('.xzoom4').each(function(){
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });

        } 
    });
})(jQuery);
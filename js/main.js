(function($) {
    var HDStarter = {
        init: function() {
            return this;
        },
        example: function() {
            $("a").on('click', function(e) {
                e.preventDefault();
            });
        }
    };

    window.HDStarter = HDStarter.init();

})(jQuery);

$(function() {
    HDStarter.example();
});

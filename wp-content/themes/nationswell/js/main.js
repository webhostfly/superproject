(function ($) {
    $(function () {
        // expand/collapse header search field
        $("[for='search']").on("click", function () {
            $('#search').toggleClass('open');
        });

        // toggle more stories panel
        $(".toggle-collapse").on("click", function(e) {
            var $this = $(this),
                target = $this.data("target"),
                $target = $(target);

            $this.toggleClass('toggled');
            $target.toggleClass('open');

            e.preventDefault();
        });

        // init slideshows
        $(".carousel").each(function () {
            var $this = $(this),
                $carousel = $this.find(".carousel__items");

            var isPeek = $this.hasClass('carousel--peek'),
                isSeries = $this.hasClass('carousel--series');

            function highlight(items) {
                if(isPeek) {
                    items.filter(":eq(1)").addClass('active');
                } else {
                    items.addClass('active');
                }

                return items;
            }

            function unhighlight(items) {
                items.removeClass('active');
                return items;
            }

            $carousel.carouFredSel({
                responsive: isSeries ? true : false,
                width: '100%',
                transition: true,
                items: {
                    visible: isPeek ? 3 : 1,
                    start: isPeek ? -1 : 1
                },
                scroll: {
                    items: 1,
                    duration: 300,
                    onBefore: function (data) {
                        unhighlight(data.items.old);
                    },
                    onAfter: function (data) {
                        highlight(data.items.visible);
                    }
                },
                auto: {
                    play: false
                },
                prev: {
                    button: $this.find('.carousel__control--prev')
                },
                next: {
                    button: $this.find('.carousel__control--next')
                }
            });
        });

        var $sharebar = $('.story__sticky-container');

        $sharebar.waypoint('sticky', {
            wrapper: '<div class="story__sticky" />',
            stuckClass: 'stuck',
            offset: 50
        });
    });
})(jQuery);
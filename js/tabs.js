		/* ---------------------------------------------------- */
        /*	Tabs												*/
        /* ---------------------------------------------------- */

        if ($('.tabs-holder').length) {

            var $tabsHolder = $('.tabs-holder');

            $tabsHolder.each(function(i, val) {

                var $tabsNav = $('.tabs-nav', val),
					tabsNavLis = $tabsNav.children('li'),
					$tabsContainer = $('.tabs-container', val);

                $tabsNav.each(function() {
                    $(this).next().children('.tab-content').first().stop(true, true).show();
                    $(this).children('li').first().addClass('active').stop(true, true).show();
                });

                $tabsNav.on('click', 'a', function(e) {
                    var $this = $(this).parent('li'),
                            $index = $this.index();
                    $this.siblings().removeClass('active').end().addClass('active');
                    $this.parent().next().children('.tab-content').stop(true, true).hide().eq($index).stop(true, true).fadeIn(250);
                    e.preventDefault();
                });
            });
        }
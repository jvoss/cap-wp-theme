$( document ).ready(function() {

    $( ".leftColumn .menu-item-has-children" ).each(function() {
        let topLink = $(this).find('a').first();
        let subMenu  = $(this).find('ul').first();

        $.fn.leftMenu = function(action, subMenu, topLink) {
            if (action === 'show'){
                subMenu.show();
                topLink.find('.arrow').css('transform', 'rotate(90deg)');
            } else {
                subMenu.hide();
                topLink.find('.arrow').removeAttr('style');
            }

            return this;
        };

        // Determine if a topLink is active or if sub-menu link is active and
        // expand the menu
        //
        if ($(this).hasClass('current-menu-item')){
            $.fn.leftMenu('show', subMenu, topLink);
        }

        if (subMenu.find('.current-menu-item').length){
            $.fn.leftMenu('show', subMenu, topLink);
        }

        // Set link handler to toggle menu availability
        //
        topLink.click(function(event){
            // Disable default action for placeholder links
            if(topLink.attr('href') === '#'){
                event.preventDefault();
            }

            if(subMenu.is(":visible")){
                $.fn.leftMenu('hide', subMenu, topLink);
            } else {
                $.fn.leftMenu('show', subMenu, topLink);
            }
        });

    });

});

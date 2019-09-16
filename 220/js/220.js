
$(document).ready(function () {
    jQuery.fn.extend({
        setMenu: function () {
            return this.each(function () {
                var containermenu = $(this);

                var itemmenu = containermenu.find('.xtlab-ctmenu-item');
                itemmenu.click(function () {
                    var submenuitem = containermenu.find('.xtlab-ctmenu-sub');
                    submenuitem.slideToggle(500);

                });

                $(document).click(function (e) {
                    if (!containermenu.is(e.target) &&
                            containermenu.has(e.target).length === 0) {
                        var isopened =
                                containermenu.find('.xtlab-ctmenu-sub').css("display");

                        if (isopened == 'block') {
                            containermenu.find('.xtlab-ctmenu-sub').slideToggle(500);
                        }
                    }
                });



            });
        },

    });


    $('.xt-ct-menu').setMenu();
});
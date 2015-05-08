var slideMenu = {
    elems: {
        triggers: null,
        menu: null,
    },

    init: function() {
        slideMenu.elems.triggers = document.querySelectorAll(".slide-menu-toggle");
        slideMenu.elems.menu = document.querySelector(".slide-nav-menu");
        var i = 0, l = slideMenu.elems.triggers.length;
        for(i;i<l;i++) {
            slideMenu.elems.triggers[i].addEventListener('click', slideMenu.toggle, false);
        }
        slideMenu.preventTouchScroll();
    },

    toggle: function() {
        var menu = slideMenu.elems.menu;
        if(menu.classList.contains("show")) {
            menu.classList.remove("show");
        } else {
            menu.classList.add("show");
        }
    },

    preventTouchScroll: function() {
        var body = document.querySelector("body");
        body.addEventListener('touchmove', function(ev) {
            if(slideMenu.isOpen()) {
                ev.preventDefault();
            }
        });
    },

    isOpen: function() {
        return slideMenu.elems.menu.classList.contains('show');
    }
}
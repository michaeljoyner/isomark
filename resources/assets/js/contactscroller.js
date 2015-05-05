var contactScroller = {
    items: document.querySelectorAll('.scroller-item'),

    tick: function () {
        for (var i = 0; i < contactScroller.items.length; i++) {
            if (contactScroller.items[i].classList.contains('current')) {
                contactScroller.items[i].classList.remove('current');
            } else {
                contactScroller.items[i].classList.add('current');
            }
        }
    },

    init: function () {
        setInterval(contactScroller.tick, 5000);
    }
}
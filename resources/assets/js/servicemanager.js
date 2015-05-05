var serviceManager = {
    elems: {
        consulting: null,
        placement: null,
        training: null,
        current: null,
        triggers: {
            consulting: null,
            placement: null,
            training: null
        }
    },

    init: function () {
        serviceManager.elems.consulting = document.querySelector('#consulting-service');
        serviceManager.elems.placement = document.querySelector('#placement-service');
        serviceManager.elems.training = document.querySelector('#training-services');
        serviceManager.elems.triggers.consulting = document.querySelector('#consulting');
        serviceManager.elems.triggers.placement = document.querySelector('#placement');
        serviceManager.elems.triggers.training = document.querySelector('#training');

        serviceManager.attachListeners();
    },

    attachListeners: function () {
        var elems = document.querySelectorAll(".service-icon-box");
        var btns = document.querySelectorAll(".service-clear-button");
        var j = 0, k = btns.length;
        var i = 0, l = elems.length;
        for (i; i < l; i++) {
            elems[i].addEventListener('click', serviceManager.showService, false);
        }
        for (j; j < k; j++) {
            btns[j].addEventListener('click', serviceManager.resetAll, false);
        }
    },

    showService: function (ev) {
        var triggers = serviceManager.elems.triggers;
        if (serviceManager.elems[ev.currentTarget.id] == serviceManager.elems.current) {
            return;
        }

        if (serviceManager.elems.triggers.current) {
            serviceManager.elems.triggers.current.classList.remove('current');
        }
        triggers.current = ev.currentTarget;
        triggers.current.classList.remove('dim');
        triggers.current.classList.add('current');
        for (var el in triggers) {
            if (triggers.hasOwnProperty(el)) {
                if (triggers[el] !== triggers.current) {
                    triggers[el].classList.add("dim");
                }
            }
        }
        var selection = ev.currentTarget.id;
        if (serviceManager.elems.current) {
            $(serviceManager.elems.current).hide();
        }
        var next = serviceManager.elems[selection];
        $(next).show('slow');
        serviceManager.elems.current = next;
    },

    resetAll: function () {
        var key;
        var triggers = serviceManager.elems.triggers;
        for (key in triggers) {
            if (triggers.hasOwnProperty(key)) {
                triggers[key].classList.remove('current');
                triggers[key].classList.remove('dim');
            }
        }
        triggers.current = null;
        $(serviceManager.elems.current).hide();
        serviceManager.elems.current = null;
    }
}
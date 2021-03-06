var enquiryManager = {

    errorBox: document.querySelector('.error-alert'),
    errorNotification: document.querySelector('#error-notification'),

    init: function () {
        var readToggles = document.querySelectorAll('.toggle-read');
        var archivers = document.querySelectorAll('.archive');
        var i = 0, j = 0, l = readToggles.length, k = archivers.length;
        for (i; i < l; i++) {
            readToggles[i].addEventListener('click', enquiryManager.toggleRead, false);
        }
        for (j; j < k; j++) {
            archivers[j].addEventListener('click', enquiryManager.archive, false);
        }
    },

    showError: function () {
        enquiryManager.errorNotification.innerHTML = 'An error occurred';
        enquiryManager.errorBox.style.display = "block";
        $('.alert-info').delay(2000).hide('slow');
    },

    sendRequest: function (ev, url, success, error) {
        var button = ev.currentTarget;
        var enquiryId = ev.currentTarget.getAttribute('data-enquiry');
        var enquiryBox = document.querySelector('#enquiry' + enquiryId);
        var fd = new FormData();
        var req = new XMLHttpRequest();
        button.innerHTML = 'updating...';
        fd.append('_token', document.querySelector('meta[property=CSRF-token]').getAttribute('content'));
        req.open('POST', url, true);
        req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        req.onreadystatechange = function (ev) {
            if (req.readyState === 4) {
                if (req.status === 200) {
                    success(enquiryBox, button);
                } else {
                    error();
                }
            }
        }
        req.send(fd);
    },

    toggleRead: function (ev) {
        var enquiryId = ev.currentTarget.getAttribute('data-enquiry');
        var url = '/admin/bookings/toggleread/' + enquiryId;
        enquiryManager.sendRequest(ev, url, enquiryManager.updateReadStatus, enquiryManager.showError);
    },

    updateReadStatus: function (enquiryBox, button) {
        if (enquiryBox.classList.contains('been-read')) {
            enquiryBox.classList.remove('been-read');
            button.innerHTML = 'Mark as Read';
        } else {
            enquiryBox.classList.add('been-read');
            button.innerHTML = 'Unmark as Read';
        }
    },

    archive: function (ev) {
        var enquiryId = ev.currentTarget.getAttribute('data-enquiry');
        var url = '/admin/bookings/archive/' + enquiryId;
        enquiryManager.sendRequest(ev, url, enquiryManager.beenArchived, enquiryManager.showError);
    },

    beenArchived: function (enquiryBox, button) {
        enquiryBox.style.transform = "translate3d(2000px, 0,0)";
        setTimeout(function () {
            enquiryBox.parentNode.removeChild(enquiryBox);
        }, 1500);
    }
};
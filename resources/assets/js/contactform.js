var contactForm = {
    errors: [],
    elems: {
        name: null,
        email: null,
        enquiry: null,
        submitButton: null,
        errorBox: null,
        containerBox: null,
        sendIcon: null,
        sendText: null,
        resetPrompt: null
    },

    init: function () {
        contactForm.elems.name = document.querySelector('#cp_name');
        contactForm.elems.email = document.querySelector('#cp_email');
        contactForm.elems.enquiry = document.querySelector('#cp_enquiry');
        contactForm.elems.submitButton = document.querySelector('#cp_send');
        contactForm.elems.errorBox = document.querySelector('#error-box')
        contactForm.elems.containerBox = document.querySelector('#contact-form-box');
        contactForm.elems.thanks = document.querySelector('#thanks');
        contactForm.elems.sendIcon = document.querySelector('#send-icon');
        contactForm.elems.sendText = document.querySelector('#send-text');
        contactForm.elems.resetPrompt = document.querySelector('.reset-prompt');
        contactForm.elems.submitButton.addEventListener('click', contactForm.send, false);
        contactForm.elems.resetPrompt.addEventListener('click', contactForm.resetAll, false);
    },

    inputIsValid: function () {
        contactForm.clearErrors();
        var elems = contactForm.elems;
        if (elems.name.value == '' || elems.name.value.length > 255) {
            contactForm.errors.push('Please provide a valid name');
            return false;
        }
        if (!/\S+@\S+\.\S+/.test(elems.email.value) || elems.email.value.length > 255) {
            contactForm.errors.push('Please provide a valid email address');
            return false;
        }
        if (elems.enquiry.value == '') {
            contactForm.errors.push('It looks like you forgot to write your message');
            return false;
        }
        return true;
    },

    send: function () {
        var elems = contactForm.elems;
        if (!contactForm.inputIsValid()) {
            contactForm.showErrors();
            return;
        }
        contactForm.clearErrors();
        elems.sendIcon.className = "glyphicon glyphicon-refresh";
        elems.sendText.innerHTML = "Sending..."

        var token = document.querySelector('meta[property=CSRF-token]').getAttribute('content');
        $.ajax({
            method: "POST",
            url: "/ajax/contact",
            data: {name: elems.name.value, email: elems.email.value, enquiry: elems.enquiry.value, "_token": token}
        }).done(contactForm.showSuccess)
            .fail(function(mess) {
                contactForm.errors.push('Oops, there seems to have been a problem. Please try again');
                contactForm.showErrors();
            })
            .always(function(m) {
                elems.sendIcon.className = "glyphicon glyphicon-send";
                elems.sendText.innerHTML = "Send";
            });
    },

    showSuccess: function () {
        contactForm.elems.thanks.innerHTML = 'Thanks ' + contactForm.elems.name.value + '! Good to hear from you.';
        contactForm.resetForm();
        contactForm.elems.containerBox.classList.add('used');
    },

    showErrors: function () {
        var i = 0, l = contactForm.errors.length;
        for (i; i < l; i++) {
            contactForm.elems.errorBox.innerHTML += '<p>' + contactForm.errors[i] + '</p>';
        }
    },

    clearErrors: function () {
        contactForm.errors = [];
        contactForm.elems.errorBox.innerHTML = '';
    },

    resetForm: function () {
        var elems = contactForm.elems;
        elems.name.value = '';
        elems.email.value = '';
        elems.enquiry.value = '';
        contactForm.errors = [];
    },

    resetAll: function () {
        contactForm.elems.thanks.innerHTML = '';
        contactForm.elems.containerBox.classList.remove("used");
    }
};
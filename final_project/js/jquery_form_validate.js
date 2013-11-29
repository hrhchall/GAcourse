$(document).ready(function () {

    $('#contact-form').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            message1: {
              required:true
            },
            message2: {
              required:true
            },
        }
    });

});
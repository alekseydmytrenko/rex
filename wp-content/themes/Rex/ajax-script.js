jQuery(document).ready(function($) {

    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    $('.contact-form').on('submit', function(){
        var name = $('#mail-name').val();
        var email = $('#mail-email').val();
        var message = $('#mail-message').val();
        var data = {
            'action': 'sendMail',
            'nonce': ajax_object.nonce,      // We pass php values differently!
            'name': name,
            'email': email,
            'message': message
        };
        jQuery.post(ajax_object.ajax_url, data, function(response) {
            alert(response);
            $('#mail-name').val('');
            $('#mail-email').val('');
            $('#mail-message').val('');
        });
    });
});
    function checkParams() {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();

        if (email.length >= 6) {
            $('#phone').removeAttr('required');
        } else if (phone.length >= 6) {
            $('#email').removeAttr('required');
        }

        if (name.length != 0 && (email.length >= 6 || phone.length >= 6)) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').attr('disabled', 'disabled');
        }
    }
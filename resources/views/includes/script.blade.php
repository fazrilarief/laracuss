<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    var isPasswordRevealed = false;

    $('#password-toggle').on('click', function() {
        isPasswordRevealed = !isPasswordRevealed;

        if (isPasswordRevealed) {
            $('#password-toggle-img').attr('src', "{{ url('assets/images/eye.png') }}");
            $('#password').attr('type', 'text');
        } else {
            $('#password-toggle-img').attr('src', "{{ url('assets/images/eye-slash.png') }}");
            $('#password').attr('type', 'password');
        }
    })
</script>

<!-- jQuery 2.2.3 -->
<script src="<?= URL; ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= URL; ?>public/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= URL; ?>public/plugins/iCheck/icheck.min.js"></script>
<!-- CUSTOM -->
<script src="<?= URL; ?>public/assets/js/functions.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        $("#btnLoginAdmin").click(function (e) {
            e.preventDefault();
            var email = $("input[name='email']");
            var password = $("input[name='password']");
            if (email.val().trim().length == 0) {
                email.css("border", "1px solid red");
            } else {
                email.css("border", "1px solid #d2d6de");
            }
            if (password.val().trim().length == 0) {
                password.css("border", "1px solid red");
            } else {
                password.css("border", "1px solid #d2d6de");
            }
            if (email.val().trim().length > 0 && password.val().trim().length > 0) {
                $("#frmLoginAdmin").submit();
            }
        });
    });
</script>
</body>
</html>

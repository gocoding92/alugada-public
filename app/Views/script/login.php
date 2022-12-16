<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var no_handphone = $("#no_handphone").val();
            var password = $("#password").val();

            if (!no_handphone) {
                toastr.error('No. Handphone harus diisi!');
                return;
            }

            if (!password) {
                toastr.error('Password harus diisi!');
                return;
            }


            $.ajax({
                url: "<?= base_url('auth/submit-login'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    no_handphone: no_handphone,
                    password: password,

                },
                success: function(data) {
                    $('#submit').html('Login');
                    $('#submit').prop('disabled', false);

                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        toastr.success(obj.data[0].message);
                    } else {
                        toastr.error(obj.data[0].message);
                    }

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/beranda'); ?>";
                        }, 2000);
                    }
                }
            });
        });

    });
</script>
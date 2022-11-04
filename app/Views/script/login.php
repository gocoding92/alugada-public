<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var no_handphone = $("#no_handphone").val();
            var password = $("#password").val();

            if (!no_handphone) {
                SnackBar({
                    message: "No. Handphone harus diisi!",
                    status: "danger",
                    speed: 500,
                    position: "tr"
                });
                return;
            }

            if (!password) {
                SnackBar({
                    message: "Password harus diisi!",
                    status: "danger",
                    speed: 500,
                    position: "tr"
                });
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

                    console.log(data);
            return;

                    var obj = JSON.parse(data);
                    SnackBar({
                        message: obj.data[0].message,
                        status: obj.data[1].status === 200 ? "success" : "danger",
                        speed: 500,
                        position: "tr"
                    });

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url(); ?>";
                        }, 2500);
                    }
                }
            });
        });

    });
</script>
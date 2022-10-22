<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var otp = $("#otp").val();
            var no_handphone = localStorage.getItem('no_handphone');

            if (!otp) {
                SnackBar({
                    message: "Otp harus diisi!",
                    status: "danger",
                    speed: 500,
                    position: "tr"
                });
                return;
            }

            if (!no_handphone) {
                SnackBar({
                    message: "Data No. Handphone anda hilang, Segera register kembali!",
                    status: "danger",
                    speed: 500,
                    position: "tr"
                });

                window.setTimeout(function() {
                    window.location.href = "<?php echo base_url('register'); ?>";
                }, 4000);

                return;
            }

            $.ajax({
                url: "<?= base_url('auth/submit-otp'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    otp: otp,
                    no_handphone: no_handphone,
                },
                success: function(data) {
                    var obj = JSON.parse(data);

                    SnackBar({
                        message: obj.data[0].message,
                        status: obj.data[1].status === 200 ? "success" : "danger",
                        speed: 500,
                        position: "tr"
                    });

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('auth/data'); ?>";
                        }, 4000);

                    }

                }
            });
        });

    });
</script>
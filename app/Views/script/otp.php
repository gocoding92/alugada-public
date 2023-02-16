<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var otp = $("#otp").val();
            var no_handphone = localStorage.getItem('no_handphone');

            if (!otp) {
                toastr.error('Otp harus diisi!');
                return;
            }

            if (!no_handphone) {
                toastr.error('Data No. Handphone anda hilang, Segera register kembali!');

                window.setTimeout(function() {
                    window.location.href = "<?php echo base_url('register'); ?>";
                }, 2000);

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
                    $('#submit').html('Submit');
                    $('#submit').prop('disabled', false);

                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        toastr.success(obj.data[0].message);
                    } else {
                        toastr.error(obj.data[0].message);
                    }

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('data'); ?>";
                        }, 4000);

                    }

                }
            });
        });

    });
</script>
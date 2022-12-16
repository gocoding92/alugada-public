<script>
    $(document).ready(function() {
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var password_lama = $("#password_lama").val();
            var password_baru = $("#password_baru").val();
            var konfirmasi_password = $("#konfirmasi_password").val();
            var no_handphone = localStorage.getItem('no_handphone') ? localStorage.getItem('no_handphone') : 0;

            if (!password_baru) {
                toastr.error('Password harus diisi!');
                return;
            }

            if (!konfirmasi_password) {
                toastr.error('Konfirmasi Password harus diisi!');
                return;
            }

            if (password_baru !== konfirmasi_password) {
                toastr.error('Password Baru & Konfirmasi Password tidak sama!');
                return;
            }

            $.ajax({
                url: "<?= base_url('profil/update-password'); ?>",
                type: "POST",
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    password_lama: password_lama,
                    password_baru: password_baru,
                    konfirmasi_password: konfirmasi_password,
                    no_handphone: no_handphone,
                },
                success: function(data) {
                    $('#submit').html('Submit');
                    $('#submit').prop('disabled', false);

                    var obj = JSON.parse(data);

                    toastr.success(obj.data[0].message);

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/'); ?>";
                        }, 2000);

                        localStorage.removeItem('no_handphone');
                    }

                }
            });

        });
    });
</script>
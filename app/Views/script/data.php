<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var name = $("#name").val();
            var password = $("#password").val();
            var email = '';
            var alamat = '';
            var deskripsi = '';
            var no_handphone = localStorage.getItem('no_handphone');

            if (!name) {
                toastr.error('Name harus diisi!');
                return;
            }

            if (!password) {
                toastr.error('Password harus diisi!');
                return;
            }

            $.ajax({
                url: "<?= base_url('auth/submit-data'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    name: name,
                    password: password,
                    no_handphone: no_handphone,
                },
                success: function(data) {
                    $('#submit').html('Submit');
                    $('#submit').prop('disabled', false);

                    toastr.success('Data profil berhasil dilakukan');

                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/beranda'); ?>";
                        }, 4000);

                        localStorage.removeItem('no_handphone');
                    }

                }
            });
        });

    });
</script>
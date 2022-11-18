<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var password_lama = $("#password_lama").val();
            var password_baru = $("#password_baru").val();
            var konfirmasi_password = $("#konfirmasi_password").val();
            var no_handphone = localStorage.getItem('no_handphone') ? localStorage.getItem('no_handphone') : 0;

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

                    var obj = JSON.parse(data);
                    alert(obj.data[0].message);

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/'); ?>";
                        }, 4000);

                        localStorage.removeItem('no_handphone');
                    }

                }
            });

        });
    });
</script>
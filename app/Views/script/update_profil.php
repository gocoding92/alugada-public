<script>
    $(document).ready(function() {
        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var nama_lengkap = $("#nama_lengkap").val();
            var email = $("#email").val();
            var alamat = $("#alamat").val();
            var deskripsi = $("#deskripsi").val();

            console.log(email);
            return;

            if (!nama) {
                SnackBar({
                    message: "Nama harus diisi!",
                    status: "danger",
                    speed: 500,
                    position: "bm"
                });
                return;
            }

            $.ajax({
                url: "<?= base_url('profil/update_profil'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    nama_lengkap: nama_lengkap,
                    telepon: telepon,
                    email: email,
                    deskripsi: deskripsi,
                },
                success: function(data) {

                    console.log(data)
                    return;
                    var obj = JSON.parse(data);
                    SnackBar({
                        message: obj.data[0].message,
                        status: obj.data[1].status === 200 ? "success" : "danger",
                        speed: 500,
                        position: "bm"
                    });
                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/'); ?>";
                        }, 2500);
                    }
                }
            });
        });

    });
</script>
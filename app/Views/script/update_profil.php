<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var alamat = $("#alamat").val();
            var deskripsi = $("#deskripsi").val();

            // if (!name) {
            //     SnackBar({
            //         message: "Name harus diisi!",
            //         status: "danger",
            //         speed: 500,
            //         position: "tr"
            //     });
            //     return;
            // }

            // if (!password) {
            //     SnackBar({
            //         message: "Password harus diisi!",
            //         status: "danger",
            //         speed: 500,
            //         position: "tr"
            //     });
            //     return;
            // }

            // if (!email) {
            //     SnackBar({
            //         message: "Email harus diisi!",
            //         status: "danger",
            //         speed: 500,
            //         position: "tr"
            //     });
            //     return;
            // }

            // if (!alamat) {
            //     SnackBar({
            //         message: "Alamat harus diisi!",
            //         status: "danger",
            //         speed: 500,
            //         position: "tr"
            //     });
            //     return;
            // }

            // if (!deskripsi) {
            //     SnackBar({
            //         message: "Deskripsi harus diisi!",
            //         status: "danger",
            //         speed: 500,
            //         position: "tr"
            //     });
            //     return;
            // }
            

            $.ajax({
                url: "<?= base_url('profil/update-profil'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    nama: nama,
                    email: email,
                    alamat: alamat,
                    deskripsi: deskripsi,
                },
                success: function(data) {
                    console.log(data);
                    return;


                    SnackBar({
                        message: "Data profil berhasil dilakukan",
                        status: "success",
                        speed: 500,
                        position: "tr"
                    });

                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url(); ?>";
                        }, 4000);

                        localStorage.removeItem('no_handphone');
                    }

                }
            });
        });

    });
</script>
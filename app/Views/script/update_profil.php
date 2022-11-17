<script>
    $(document).ready(function() {


        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var alamat = $("#alamat").val();
            var deskripsi = $("#deskripsi").val();
            
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
                    var obj = JSON.parse(data);

                    alert(obj.data[0].message);
                    
                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('profil'); ?>";
                        }, 4000);
                    }

                }
            });
        });

    });
</script>
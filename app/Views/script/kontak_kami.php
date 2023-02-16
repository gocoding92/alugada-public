<script>
    $(document).ready(function() {
        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var nama = $("#nama").val();
            var telepon = $("#telepon").val();
            var email = $("#email").val();
            var alamat = $("#alamat").val();
            var pesan = $("#pesan").val();

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
                url: "<?= base_url('kontakkami/submit-kontakkami'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    nama: nama,
                    telepon: telepon,
                    email: email,
                    alamat: alamat,
                    pesan: pesan,
                },
                success: function(data) {
                    $('#submit').html('Submit');
                    $('#submit').prop('disabled', false);

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
<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (Rizky, 21/Oktober/2022) ----
        $("#submit").click(function() {
            var no_handphone = $("#no_handphone").val();

            $.ajax({
                url: "<?= base_url('auth/submit-register'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    no_handphone: no_handphone
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    if (obj.data[1].status === 200) {
                        window.location.href = "<?php echo base_url('layanan-kami'); ?>";
                    }

                    alert(obj.data[0].message);
                }
            });
        });

    });
</script>
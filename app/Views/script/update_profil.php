<script>
    $(document).ready(function() {


        // ---- 1. Submit Register (21/Oktober/2022) ----
        $('form').on('submit', function(e) {

            e.preventDefault();

            $.ajax({
                url: "<?= base_url('profil/update-profil'); ?>",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var obj = JSON.parse(data);

                    toastr.success(obj.data[0].message);

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('profil'); ?>";
                        }, 2000);
                    }

                }
            });
        });

    });
</script>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            $.ajax({
                type: 'POST',
                url: '<?= base_url('edit-iklan/saveTenagaAhli'); ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        toastr.success(obj.data[0].message);
                    } else {
                        toastr.error(obj.data[0].message);
                    }

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/profil'); ?>";
                        }, 2500);
                    }
                }
            });

        });

        $('#delete-iklan').click(function() {

            // $('#submit').html('Loading...');
            // $('#submit').prop('disabled', true);

            var id_rekomendasi_iklan = $('#id_rekomendasi_iklan').val();
            var id_iklan = $('#id_iklan').val();
            var table_iklan = $('#table_iklan').val();

            
            console.log(id_rekomendasi_iklan);
            console.log(id_iklan);
            console.log(table_iklan);
            return;
            $.ajax({
                type: 'POST',
                url: '<?= base_url('edit-iklan/saveTenagaAhli'); ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    return;
                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        toastr.success(obj.data[0].message);
                    } else {
                        toastr.error(obj.data[0].message);
                    }

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('/profil'); ?>";
                        }, 2500);
                    }
                }
            });

        });
    });
</script>


<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            $("#overlay").fadeIn(300);

            $.ajax({
                type: 'POST',
                url: '<?= base_url('edit-iklan/saveTanah'); ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {

                    $("#overlay").fadeOut(300);
                  
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
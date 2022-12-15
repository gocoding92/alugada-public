<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            $.ajax({
                type: 'POST',
                url: '<?= base_url('edit-iklan/saveTenagaTerampil'); ?>',
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


        // ---- 1. Submit Register (21/Oktober/2022) ----
        // $("#submit").click(function() {
        //     $.ajax({
        //         url: "<?= base_url('profil/update-profil'); ?>",
        //         type: 'POST',
        //         headers: {
        //             'X-Requested-With': 'XMLHttpRequest'
        //         },
        //         data: {
        //             nama: nama,
        //             email: email,
        //             alamat: alamat,
        //             deskripsi: deskripsi,
        //         },
        //         success: function(data) {

        //             console.log(data);
        //             return;
        //             // var obj = JSON.parse(data);

        //             // alert(obj.data[0].message);

        //             // if (obj.data[1].status === 200) {
        //             //     window.setTimeout(function() {
        //             //         window.location.href = "<?php echo base_url('profil'); ?>";
        //             //     }, 4000);
        //             // }

        //         }
        //     });
        // });

    });
</script>
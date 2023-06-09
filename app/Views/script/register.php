<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {

            $('#submit').html('Loading...');
            $('#submit').prop('disabled', true);

            var no_handphone = $("#no_handphone").val();

            if (!no_handphone) {
                toastr.error('No. Handphone harus diisi!');
                return;
            }

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
                    $('#submit').html('Submit');
                    $('#submit').prop('disabled', false);

                    var obj = JSON.parse(data);

                    if (obj.data[1].status === 200) {
                        toastr.success(obj.data[0].message);
                    } else {
                        toastr.error(obj.data[0].message);
                    }

                    if (obj.data[1].status === 200) {
                        window.setTimeout(function() {
                            window.location.href = "<?php echo base_url('otp'); ?>";
                        }, 2000);
                    }

                    localStorage.setItem('no_handphone', no_handphone);
                }
            });
        });

    });
</script>
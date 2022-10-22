<script>
    $(document).ready(function() {

        // ---- 1. Submit Register (21/Oktober/2022) ----
        $("#submit").click(function() {
            var name = $("#name").val();
            var email = $("#email").val();
            var no_handphone = localStorage.getItem('no_handphone');

            $.ajax({
                url: "<?= base_url('auth/submit-data'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {
                    name: name,
                    email: email,
                    no_handphone: no_handphone,
                },
                success: function(data) {
                    alert('Data profil berhasil dilakukan');

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
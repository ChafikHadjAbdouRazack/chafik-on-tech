<!-- Start Footer Area -->
<div class="rn-footer-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">
                    <div class="logo">
                        <a href="#">
                            <img src="assets/images/logo/logo-vertical-dark.png" alt="logo">
                        </a>
                    </div>
                    <p class="description mt--30">© <?php echo date('Y'); ?>. All
                        rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- JS ============================================ -->
<?php wp_footer(); ?>
<script>
    $('#contact-form').submit(function() {
        event.preventDefault();
        var endpoint =
            '<?php echo admin_url('admin-ajax.php');?>';
        var form = $('#contact-form').serialize();
        var formData = new FormData();
        formData.append('action', 'contact_form');
        formData.append('nonce',
            '<?php echo wp_create_nonce('contact_form')  ?>'
            );
        formData.append('contact_form', form);
        $.ajax(endpoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                $('#contact-form').fadeOut(200);

                $('#success_message').text("Message envoyé").show();
                $('#contact-form').trigger('reset');
                $('#contact-form').fadeIn(150);

            },
            error: function(err) {
                $('#contact-form').fadeOut(200);

                $('#error_message').text("Message non envoyé").show();
                $('#contact-form').trigger('reset');
                $('#contact-form').fadeIn(150);
            }
        })
    })
</script>
</body>

</html>
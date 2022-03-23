<?php get_header()?>
<main class="main-page-wrapper">

    <div class="rn-service-area rn-section-gap section-separator">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3><?php echo the_title(); ?>
                        </h3>

                    </div>

                </div>

                <div class="row">
                    <?php echo the_content();?>
                </div>

            </div>
        </div>


    </div>

</main>
<?php get_footer();

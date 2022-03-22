<?php
/**
 * Template Name: Archive Template
 */
get_header();

?>

<main class="main-page-wrapper">

    <div class="rn-service-area rn-section-gap section-separator">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3><?php echo get_the_title() ; ?>
                        </h3>

                    </div>

                </div>

                <div class="row">
                    <?php
                     $args = array(
                         'post_type'=>array('post'),
                         'post_status'=>array('publish')
                     );
                     $post_query = new WP_Query($args);
                    if ($post_query->have_posts()): ?>
                    <?php while ($post_query->have_posts()): ?>
                    <?php $post_query->the_post() ?>
                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                        class="col-lg-6 col-xl-6 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="#"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="feather-clock"></i><?php the_date() ?></span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a
                                            href="<?php the_permalink() ?>"><?php the_title() ?>
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!-- End Single blog -->
                    <?php endif ;?>
                </div>

            </div>
        </div>


    </div>

</main>

<?php  get_footer();

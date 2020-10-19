<?php /* Template Name: Pre evento */ ?>

<?php

$events = get_posts(array(
    'showposts' => 1,
    'post_type' => 'events'
));

foreach ($events as $post) {

    setup_postdata($post);
?>

    <?php get_header(); ?>
    <!-- Get Header  -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-5-0 pre-event-header" id="about">
        <div class="container">
            <div class="row align-items-center">

                    <div class="about-thumb mb-80 wow fadeInUp video-container" data-wow-delay="300ms">
                        <div class="video-overlay"></div>
                        <video autoplay loop muted>
                            <source src="<?php echo get_bloginfo('template_directory'); ?>/dist/foss.webm" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms"><?php echo get_the_title(); ?></h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms"><?php echo get_the_excerpt(); ?></h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms"><?php the_content(); ?></p>
                        <a href="<?php echo get_post_meta($post->ID, 'vega_events_submit_link', true) ?>" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Quero Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                </div>
            </div>
        </div>

        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms" data-event-date="<?php echo get_post_meta($post->ID, 'vega_events_date', true) ?>">
                            <h6>Falta pouco</h6>
                            <h4>
                                <?php
                                echo date('d F Y', strtotime(get_post_meta($post->ID, 'vega_events_date', true)));
                                ?>
                            </h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

<?php }; ?>


<!-- Our Schedule Area Start -->
<?php #include "partials/schedules_part.php"; 
?>
<!-- Our Schedule Area End -->

<?php
foreach ($events as $post) {

    setup_postdata($post);
?>

    <!-- Map Area -->

<?php  }; ?>

<!-- Get Footer -->
<?php get_footer(); ?>

<!-- Our Schedule Area Start -->
<section class="our-schedule-area bg-white section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Tab Content -->
                <div class="tab-content" id="conferScheduleTabContent">
                    <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                        <!-- Single Tab Content -->
                        <div class="single-tab-content">
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                        $data = get_posts(array(
                                            'showposts' => -1,
                                            'post_type' => 'talks',
                                            'meta_key' => 'vega_talks_time',
                                            'orderby' => 'meta_value_num',
                                            'order' => 'ASC',
                                            'author' => $curauth->ID));

                                        foreach ($data as $post) { 
                                            setup_postdata($post);
                                        ?>

                                            <!-- Single Schedule Area -->
                                            <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                                data-wow-delay="300ms">
                                                <!-- Single Schedule Thumb and Info -->
                                                <div class="single-schedule-tumb-info d-flex align-items-center">
                                                    <!-- Single Schedule Thumb -->
                                                    <div class="single-schedule-tumb">
                                                        <?php echo get_avatar(get_the_author_meta('user_email'), $size = '500', $default, $alt, $args = array('class' => 'round'));?>
                                                    </div>
                                                    <!-- Single Schedule Info -->
                                                    <div class="single-schedule-info">
                                                        <h6><?php echo get_the_title(); ?></h6>
                                                        <p>por <span><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></span></p>
                                                    </div>
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="schedule-time-place">
                                                    <p><i class="zmdi zmdi-time"></i> <?php echo get_the_date(); ?></p>
                                                    <p><i class="fa fa-list"></i> <?php if(get_the_category()){foreach(get_the_category() as $category){ echo $category->name . '. '; }}; ?></p>
                                                </div>
                                                <!-- Schedule Btn -->
                                                <a href="<?php the_permalink(); ?>" class="btn confer-btn">Ver mais <i class="zmdi zmdi-long-arrow-right"></i></a>
                                            </div>

                                    <?php } ?>

                                </div>

                                <!-- More Schedule Btn -->
                                <!--div class="col-12">
                                    <div class="more-schedule-btn text-center mt-50 wow fadeInUp"
                                        data-wow-delay="300ms">
                                        <a href="#" class="btn confer-btn">View More <i
                                                class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Schedule Area End -->
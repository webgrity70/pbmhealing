<?php 
/*
* Template Name: Insights
*
*/

get_header();

?>
<?php echo get_template_part('template-parts/hero'); ?>
<main id="post-<?php the_ID(); ?>">
    <section class="container-fluid pb90">
        <div class="container">
            <h2 class="text-center mb-4">REVIEWS</h2>
            <div class="owl-carousel owl-theme" id="reviewCarousel">
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
                <div class="item">
                    <blockquote class="reviewBox">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/quoteicon.png" class="img-fluid icon" />
                        <div class="quote">
                            <p>Sed ut perspiciatis unde om nis iste natus error sit volup tatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi .</p>
                        </div>
                        <address>
                            <div class="author">John Doe</div>
                        </address>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-secondary pt90 pb90">
        <div class="container">
            <h2 class="text-center text-white mb-4">Articles</h2>
            <div class="row">

            <?php
            $args = array( 
              'post_type' => 'post',
              'posts_per_page' => 3,
              'ignore_sticky_posts' => 1
              //'category_name' => 'science'
            );
            $allposts = new WP_Query( $args );
            if ($allposts->have_posts()) : while ($allposts->have_posts()) : $allposts->the_post(); ?>


                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="bogcard text-white">
                        <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
                        <?php
                            $title = mb_strimwidth(get_the_title(), 0, 75, '...');

                            if ($title) {
                                echo '<h3 class="title text-white">'.$title.'</h3>';
                            }
                        ?>
                        
                        <a href="<?php the_permalink(); ?>" class="readMore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>


            <?php endwhile; wp_reset_postdata(); else: ?>
                    <h4 class="bg-blue p-3 text-white">Sorry, no results found.</h4>
            <?php endif; ?>


                <div class="col-12 text-center mt-4">
                    <a href="<?php echo site_url(); ?>/articles/" class="btn btn-primary px-5">VIEW ALL</a>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid">
        <div class="container pt90 pb90">
            <h2 class="text-center mb-4">SEMINARS</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="seminarCard">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/seminar.jpg" class="img-fluid thumbnail" />
                        <div class="title text-white">Ut enim ad minima veniam, quis nostrum exercit ationem ullam corporis</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
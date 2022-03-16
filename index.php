<?php

get_header();?>


<?php echo get_template_part('template-parts/hero'); ?>

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>







    <section class="container-fluid pb90 blogListingSec">
        <div class="container">
           
            <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="col-md-4 mb-4">
                    <div class="bogcard">
                        <?php the_post_thumbnail( 'medium', ['class' => 'img-fluid'] ); ?>
                        <?php
                            $title = mb_strimwidth(get_the_title(), 0, 75, '...');

                            if ($title) {
                                echo '<h3 class="title">'.$title.'</h3>';
                            }
                        ?>
                        
                        <a href="<?php the_permalink(); ?>" class="readMore text-primary">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>


            <?php endwhile; else: ?>
                    <h4 class="bg-blue p-3 text-white">Sorry, no results found.</h4>
            <?php endif; ?>

            </div>
        </div>

        <div class="container text-center">

            <?php

            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __( '<i class="fa fa-angle-left" aria-hidden="true"></i> PRE', 'hello-theme' ),
                'next_text' => __( 'NEXT <i class="fa fa-angle-right" aria-hidden="true"></i>', 'hello-theme' ),
            )); 

            //posts_nav_link('','<i class="fa fa-angle-left" aria-hidden="true"></i> PRE','NEXT <i class="fa fa-angle-right" aria-hidden="true"></i>');
            ?>
        </div>
    </section>



</main>







<?php get_footer(); ?>
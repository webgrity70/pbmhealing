<?php 
/*
* Template Name: Support
*
*/

get_header();

?>
<?php echo get_template_part('template-parts/hero'); ?>
<main id="post-<?php the_ID(); ?>">
    <section class="container-fluid pb90">
        <div class="container">
            <?php if (get_field('section_1_title')): ?>
            <h2 class="text-center mb-4"><?php the_field('section_1_title'); ?></h2>    
            <?php endif; ?>
            
            <div class="accordion" id="faq">
                <?php if ( have_rows('faq') ):
                    while (have_rows('faq')): the_row();
                ?>
                <div class="card"> 
                    <div class="card-header" id="heading<?php the_row_index(); ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php the_row_index(); ?>" aria-expanded="<?php if(get_row_index()===1){echo 'true';}else{ echo 'false';} ?>" aria-controls="collapse<?php the_row_index(); ?>">
                                <?php the_sub_field('title') ?>

                                <span class="sign"></span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse<?php the_row_index(); ?>" class="collapse <?php if(get_row_index()===1){echo 'show';} ?>" aria-labelledby="heading<?php the_row_index(); ?>" data-parent="#faq">
                        <div class="card-body">
                           <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                </div>
                    
                <?php  endwhile; endif; ?>

            </div>
        </div>
    </section>

    <section class="container-fluid bg-secondary">
        <div class="container pt90 pb90 text-white">
            <h2 class="text-center text-white mb-4">USER MANUALS</h2>

            <ul class="arrowList dualList">
                <li>Dolor sit amet consectetur adipiscing</li>
                <li>Dolor sit amet consectetur adipiscing</li>
                <li>Dolor sit amet consectetur adipiscing</li>
                <li>Dolor sit amet consectetur adipiscing</li>
                <li>Dolor sit amet consectetur adipiscing</li>
                <li>Dolor sit amet consectetur adipiscing</li>
            </ul>
        </div>
    </section>

    <section class="container-fluid">
        <div class="container pt90 pb90">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2>GUARANTEE</h2>
                    <p class="font24 lineHeight14 fontWeight600">Lorem ipsum dolor sit amet cons ectetur adipiscing elit sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
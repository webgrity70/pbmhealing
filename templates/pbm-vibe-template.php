<?php 
/*
 * Template Name: PBM-Vibe
 *
 *
 * */

?>

<?php
get_header();
?>

<?php echo get_template_part('template-parts/hero'); ?>
<main id="post-<?php the_ID(); ?>">
	<section class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto text-center">
					<h2>MAKING ALIGNER TREATMENT MORE ACCURATE</h2>
					<h3 class="text-primary font24">PBM Vibe decreases aligner treatment time by better fit!</h3>
					<p>Clear aligners are maximally efficient when they’re seated correctly, meaning the aligners are gripping the teeth properly.</p>

					<div class="row">
						<div class="col-md-6">
							<p>If the aligners don’t have a good grip, teeth will not move into their ideal positions. </p>
						</div>
						<div class="col-md-6">
							<p> When teeth don’t move as planned, the length of treatment is increased. </p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container text-center pb90 pt90">
			<div class="row">
				<?php $gallerySrcs = [
					'/wp-content/uploads/2021/11/Vibe_Main.png',
					'/wp-content/uploads/2021/11/Vibe_Unit.png',
					'/wp-content/uploads/2021/11/Vibe_Unit2-1.png',
					'/wp-content/uploads/2021/11/Vibe_Box.png'
				]; ?>

				<?php
					foreach($gallerySrcs as $i => $gallerySrc) { ?>
					    <div class="col-lg-3 col-md-4 col-sm-6  mb-3">
					    	<a class="galleryThumbWrpr galthumbItem<?php echo $i; ?>" href="<?php echo site_url(); echo $gallerySrc; ?>" data-lightbox="roadtrip">
					    		<span class="screen-reader-text">Image #2</span>
					    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/plus-sign.png" class="plusIcon" alt="">
					    	</a>
						
						</div>

						<style type="text/css">
							.galthumbItem<?php echo $i; ?>{
								background-image: url('<?php echo site_url(); echo $gallerySrc; ?>');
							}
						</style>
				<?php
					}
				?>

			</div>
		</div>
	</section>


	<section class="container-fluid">
		<div class="container pb90">
			<div class="row">
				<div class="col-md-8 mx-auto text-center">
					<h2>MECHANISM OF <br>PBM VIBE</h2>
					<p>Using micro-vibrations, PBM Vibe works to better seat aligners. Optimizing the patient’s treatment without relying on chewies or other devices to help better seat aligners. It is recommended that the Vibe be used whenever aligners are placed onto the teeth.</p>

					<ul class="arrowList style2 d-flex flex-wrap">
						<li>PBM Vibe delivers high frequency small magnitude micro-vibrations through a mouthpiece to seat aligners and reduce pain. </li>
						<li>Some studies show that vibrations accelerate tooth movement as well.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<section class="container-fluid">
		<div class="container pb90">
			<div class="row">
				<div class="col-md-8 mx-auto text-center">
					<h2>PBM VIBE BENEFITS</h2>
					
					<div class="row">
						<div class="col-md-6 text-left">
							<h3 class="font24 text-primary">Experience</h3>
							<ul class="arrowList style2">
								<li>Reduced treatment time</li>
								<li>Reduced discomfort and sensitivity</li>
								<li>4 minute treatment time</li>
						
							</ul>
						</div>
						<div class="col-md-6 text-left">
							<h3 class="font24 text-primary">Outcomes</h3>
							<ul class="arrowList style2">
								<li>Improved predictability</li>
								<li>Optimal aligner seating</li>
								<li>Increased stability and retention after treatment</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="container-fluid pb90 blogListingSec">
        <div class="container">
            <h2 class="text-center mb-4">THE SCIENCE OF VIBRATION</h2>
            <div class="row">
            <?php
            $args = array( 
			  'post_type' => 'post',
			  'posts_per_page' => 3,
			  'category_name' => 'science'
			);
			$posts = new WP_Query( $args );
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>


                <div class="col-md-4 mb-4">
                    <div class="bogcard">
                        <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
                        <?php
                            $title = mb_strimwidth(get_the_title(), 0, 75, '...');

                            if ($title) {
                                echo '<h3 class="title">'.$title.'</h3>';
                            }
                        ?>
                        
                        <a href="<?php the_permalink(); ?>" class="readMore text-primary">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>


            <?php endwhile; wp_reset_query(); else: ?>
                    <h4 class="bg-blue p-3 text-white">Sorry, no results found.</h4>
            <?php endif; ?>

            </div>
        </div>

        <div class="container text-center">
        	<a href="#" class="btn btn-primary">VIEW ALL</a>
        </div>
    </section>


	<section class="container-fluid productContSection">
    	<div class="row">
    		<div class="col-md-6 pt90 pb90 text-center left d-flex flex-column justify-content-center align-items-center" >
    			<h2 class="text-white">WANT TO SEARCH <br>OUR CLINIC?</h2>
    			<a href="#" class="btn btn-primary">SEARCH NOW</a>
    		</div>
    		<div class="col-md-6 pt90 pb90 bg-secondary text-white">
    			<div class="pl-4 pr-5">
	    			<h2 class="text-white">WANT PBM HEALING AT YOUR OFFICE?</h2>
	    			<p>Our sales team will be more than happy to discuss how PBM Healing products will benefit your practice.</p>

	    			<div class="contactFormWrpr">
	    				<?php echo do_shortcode( '[contact-form-7 id="4313" title="Product Ortho"]' ); ?>
	    			</div>

	    			<ul class="list-unstyled d-flex enquiryCont">
						<li>
							<a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/hello-theme/assets/images/envelope.png" class="img-fluid" alt=""> <span>info@pbmhealing.com</span></a>
						</li>
					</ul>
				</div>
    		</div>
    	</div>
    </section>
    <style type="text/css">
    	.productContSection .left{
    		background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/03/search-clinic.webp');
    	}
    </style>


</main>

<?php get_footer(); ?>
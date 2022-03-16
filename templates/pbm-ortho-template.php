<?php 
/*
 * Template Name: PBM-Orhto
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
				<div class="col-md-7 text-left">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbm-ortho.webp" class="img-fluid" alt="" >
				</div>
				<div class="col-md-5">
					<h2 class="font24 fontWeight600 fontlibre textGray">When PBM Ortho is combined with aligners or braces it reduces treatment time and pain.</h2>
					<p>PBM Ortho increases the bone response to the orthodontic treatment, speeding up the tooth movement while keeping the health of the gums.</p>
					<a href="<?php echo site_url();?>/contact" class="btn btn-primary">ORDER YOUR DEVICE</a>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container text-center pb90 pt90">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h2>SPEED UP ORTHODONTIC TREATMENT</h2>
					<h3 class="text-primary font24">PBM Ortho is a non-invasive way to enhance a patient’s own healing ability by harnessing the power of light technology.</h3>
					<p>Using a highly innovative approach that incorporates cutting-edge scientific research delivering technology to change the way orthodontics is done.</p>
				</div>
			</div>
			<div class="row">
				<?php $gallerySrcs = [
					'/wp-content/uploads/2022/03/for-doctor.jpg',
					'/wp-content/uploads/2022/03/for-patient.jpg',
					'/wp-content/uploads/2022/03/pbm-implant.jpg', 
					'/wp-content/uploads/2021/11/1-1-scaled.jpg'
				]; ?>

				<?php
					foreach($gallerySrcs as $i => $gallerySrc) { ?>
					    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
					    	<a class="galleryThumbWrpr galthumbItem<?php echo $i; ?>" href="<?php echo $gallerySrc; ?>" data-lightbox="roadtrip">
					    		<span class="screen-reader-text">Image #2</span>
					    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/plus-sign.png" class="plusIcon" alt="">
					    	</a>
							<!-- <div class="galleryThumbWrpr galthumbItem<?php echo $i; ?>"></div> -->
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

	<section class="container-fluid p-0 fullWidthVideoWrpr">
		 	<video class="video" id="fvideo">
				  <source src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbm_eng.mp4" type="video/mp4">
			Your browser does not support the video tag.
			</video>

			<button class="playBtn btnTransparent active" id="playBtn" aria-label="click to play"   onClick="playVideo('fvideo')">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/playbtn.png" class="img-fluid" alt="">
			</button>

			<div class="extraTool d-flex" id="videoController">
				<button onClick="playVideo('fvideo')" class="btnTransparent mr-2" aria-label="click to pause"><i class="fa fa-pause-circle-o" aria-hidden="true"></i></button>
				<button data-target="fvideo" onclick="toggleFullscreen('fvideo')" class="btnTransparent" aria-label="click to watch video full screen"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
			</div>
	</section>

	<section class="container-fluid docBenefit">
		<div class="container text-white pt90 pb90">
			<h2 class=" text-white">DOCTOR BENEFITS</h2>
			<p>Why should doctors use PBM Ortho as part of <br>their treatment plan?</p>

			<div class="row">
				<div class="col-lg-8">
					<ul class="arrowList d-flex flex-wrap">
						<li class="mr-4">Practice differentiator</li>
						<li class="mr-4">Better patient compliance</li>
						<li class="mr-4">Easier case acceptance</li>
						<li class="mr-4">Treat more patients</li>
						<li class="mr-4">Used with any aligner or fixed system</li>
						<li class="mr-4">Improved patient satisfaction</li>
					</ul>
				</div>
			</div>
			
		</div>
	</section>

	<style type="text/css">
		.docBenefit{
			background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/03/doctor-benefits.jpg');
		}
	</style>


	<section class="container-fluid">
		<div class="container pt90 pb90">
			<h2 class="text-center">PBM ORTHO DEVICE</h2>
			<div class="text-center py-4">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbmortho-device.png" alt="" class="img-fluid" >
			</div>

			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="row">
						<div class="col-md-6 mb-4">
							<h3 class="font24 textGray mb-3">Flexible & comfortable mouthpiece</h3>
							<ul class="arrowList style2">
								<li>Standard Size mouthpiece with 42 LED’s</li>
								<li>Extension Device for treating molars with 46 LED’s</li>
							</ul>
						</div>
						<div class="col-md-6 mb-4">
							<h3 class="font24 textGray mb-3">Faster treatment times</h3>
							<ul class="arrowList style2">
								<li>Change aligners every 3 days (down from 8.5 days)</li>
								<li>Cut treatment time by 2.2 fold when used with braces</li>
							</ul>
						</div>

						<div class="col-md-6 mb-4">
							<h3 class="font24 textGray mb-3">Easy to use</h3>
							<ul class="arrowList style2">
								<li>Portable hands-free device</li>
								<li>Powered by a strong external battery</li>
							</ul>
						</div>

						<div class="col-md-6 mb-4">
							<h3 class="font24 textGray mb-3">Gentle therapy</h3>
							<ul class="arrowList style2">
								<li>PBM Ortho uses low levels of LED light </li>
								<li>One 4-minute treatment per day per arch</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid wltContF">
		<div class="container pt90 pb90">
			<div class="row">
				<div class="col-md-8 mx-auto text-center text-white">
					<h2 class="text-white">WHY LIGHT THERAPY?</h2>
					<p>PBM Ortho uses 850 nm near-infrared (NIR) light, which is similar to heat lamps, to deliver energy gently but directly to the bone and tissue around the roots of the teeth. Similar to plants and photosynthesis, the tissue can absorb this light energy and convert it to chemical energy, which stimulates the cells for faster bone and soft tissue regeneration and faster tooth movement.</p>
				</div>
			</div>
					
		</div>
	</section>

	<style type="text/css">
		.wltContF{
			background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/03/why-light-therapy.jpg');
		}
	</style>

	<section class="container-fluid">
		<div class="container pt90 pb90">
			<div class="row">
				<div class="col-md-8 mx-auto text-center">
					<h2>SCIENCE OF PHOTOBIOMODULATION</h2>
					<p>Using the science of photobiomodulation, PBM Ortho’s mechanism of action is to enhance the biology of the treatment area and improve the healing of the bone and soft tissues, enhancing tooth movement and improving the healing of the bone and surrounding tissues</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="row">
						<div class="col-md-6">
							<figure>
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/atp-production.webp" class="rounded10 img-fluid mb-4" alt="">

								<figcaption>
									<h3 class="font24 textGray">ATP production</h3>
									<p>+ ATP production by mitochondria is essential for cellular function – ATP production decreases in wounded tissue due to diminished blood circulation</p>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure>
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/in-a-healthy-cell.webp" class="rounded10 img-fluid mb-4" alt="">

								<figcaption>
									<h3 class="font24 textGray">In a healthy cell</h3>
									<p>Mitochondrial electron transport (1) “burns” food, (2) Pumps protons (H+), A high concentration of Protons produces ATP through ATPase (3)</p>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure>
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/in-a-wounded-cell.webp" class="rounded10 img-fluid mb-4" alt="">

								<figcaption>
									<h3 class="font24 textGray">In a wounded cell</h3>
									<p>Wounded cells have decreased blood supply and nutrients leading to decreased: “burning” (1), Proton pumping (2) and ATP production (3)</p>
								</figcaption>
							</figure>
						</div>
						<div class="col-md-6">
							<figure>
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/using-pbm-therapy.webp" class="rounded10 img-fluid mb-4" alt="">

								<figcaption>
									<h3 class="font24 textGray">Using PBM therapy</h3>
									<p>PBM Ortho light therapy stimulates Cytochrome C Oxidase to pump Protons > Increased proton concentration > Increased ATP production</p>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
						
			</div>
		</div>
	</section>

	<section class="container-fluid pb90 blogListingSec">
        <div class="container">
            <h2 class="text-center mb-4">THE SCIENCE BEHIND <br>PHOTOBIOMODULATION</h2>
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
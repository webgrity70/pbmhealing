<?php 
/*
 * Template Name: PBM-White
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
					<h2>A WHITE SMILE IS NOTHING SHORT OF A CONFIDENT SMILE</h2>
					<p>PBM White embraces the use of light technology to whitening smiles. Our unique gel removes years of stains caused by coffee, tea, wine, or smoking.</p>
					<p>Our whitening device can be used to whiten your <strong>teeth faster and without the pain</strong> that commonly occurs with bleaching due to the high amount of hydrogen peroxide.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container text-center pb90 pt90">
			<div class="row">
				<?php $gallerySrcs = [
					'/wp-content/uploads/2022/03/PBM-White-kit.jpg',
					'/wp-content/uploads/2022/03/PBM-White-Device.jpg',
					'/wp-content/uploads/2022/03/May-4-1.jpg', 
					'/wp-content/uploads/2022/03/Feb-23-1-1.jpg'
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
					<h2>WHAT MAKES PBM WHITE STAND OUT?</h2>
					<p>PBM White is an at-home teeth whitening kit that delivers results without the associated pain often experienced when whitening teeth.</p>

					<ul class="arrowList style2 d-flex flex-wrap">
						<li class="mr-4">Whiter teeth in 10 days </li>
						<li class="mr-4">Only 20 minutes a day </li>
						<li class="mr-4">Gentle whitening formula</li>
						<li class="mr-4">High quality silicon device</li>
						<li class="mr-4">Easy to use</li>
						<li>Hands-free device</li>
					</ul>
					<a href="https://pbmwhite.com" class="btn btn-primary mt-3">SHOP NOW</a>
				</div>
			</div>
					
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
<?php 
/*
* Template Name: Contact
*
*/

get_header();

?>
<?php echo get_template_part('template-parts/hero'); ?>

<main id="post-<?php the_ID(); ?>">
	<section class="container-fluid">
		<div class="container">
			<h2>Map will be here</h2>
		</div>
	</section>


	<section class="container-fluid bg-secondary">
		<div class="container pt90 pb90 contactFormWrpr">
			<h2 class="text-center text-white">CONTACT US</h2>

			<?php echo do_shortcode( '[contact-form-7 id="52" title="Contact Page"]' ); ?>

			<ul class="list-unstyled socialIconList d-flex justify-content-center">
				<li>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</section>

	<section class="container-fluid bg-secondary contInfoSection">
		<div class="container pt90 pb90">
			<div class="row">
				<div class="col-md-4">
					<div class="infoCard w-100 text-center">
						<div class="mb-4">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/call-icon.png" class="img-fluid" alt="">
						</div>
						<div>
							<a href="#">+ 852 3611 2573</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="infoCard w-100 text-center">
						<div class="mb-4">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/location-icon.png" class="img-fluid" alt="">
						</div>
						<div>
							Unit 07, 21/F, W50, 50<br>Wong Chuk Hang Road,<br>Hong Kong
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="infoCard w-100 text-center">
						<div class="mb-4">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/mail-icon.png" class="img-fluid" alt="">
						</div>
						<div>
							<a href="customerservice@pbmhealing.com">customerservice@pbmhealing.com</a><br>
							<a href="sales@pbmhealing.com">sales@pbmhealing.com</a><br>
							<a href="info@pbmhealing.com">info@pbmhealing.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
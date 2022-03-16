<?php 
/*
* Template Name: Company
*
*/

get_header();

?>
<?php echo get_template_part('template-parts/hero'); ?>

<main  id="post-<?php the_ID(); ?>">
	<section class="container-fluid pb90">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2>PBM HEALING</h2>
					<p class="font24 fontWeight600 lineHeight14">Lorem ipsum dolor sit amet, cons ectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-md-7">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium, totam rem aperiam, eaque ipsa quae ab illo inv entore verita tis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit labori osam, nisi ut aliquid ex ea commodi consequatur.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid pb90 bg-secondary">
		<div class="container pt90">
			<h2 class="text-center text-white mb-4">CERTIFICATES</h2>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/certificate.jpg" class="img-fluid" alt="" >
				</div>
				<div class="col-md-4">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/certificate.jpg" class="img-fluid" alt="" >
				</div>
				<div class="col-md-4">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/certificate.jpg" class="img-fluid" alt="" >
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid">
		<div class="container pt90 pb90">
			<h2 class="text-center mb-4">BUSINESS PARTNERS</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-3">
					<div class="partnerLogoWrpr">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/03/partnerlogo.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<?php get_footer(); ?>
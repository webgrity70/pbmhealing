<?php 

/*
* Template Name: For Patients
*
*
*
*/

?>
<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>
<main id="post-<?php the_ID(); ?>">

	<section class="container-fluid  pb90">
		<div class="container">
			<h2 class="text-center mb-4">TEETH PROBLEMS</h2>

			<div class="row">
				<div class="col-md-4">
					<div class="card casesCard bordered">
						<h3 class="title">Lorem Ipsum is simply dummy text of the printing</h3>
						<p>There are many variations of passages of lorem Ipsum available, but the majo rity have suffered alteration in some form, by injected humour.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card casesCard bordered">
						<h3 class="title">Lorem Ipsum is simply dummy text of the printing</h3>
						<p>There are many variations of passages of lorem Ipsum available, but the majo rity have suffered alteration in some form, by injected humour.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card casesCard bordered">
						<h3 class="title">Lorem Ipsum is simply dummy text of the printing</h3>
						<p>There are many variations of passages of lorem Ipsum available, but the majo rity have suffered alteration in some form, by injected humour.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid productContF">
		<div class="container">
			<h2 class="text-center mb-4">OUR PRODUCTS</h2>
			<div id="prodcutCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#prodcutCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#prodcutCarousel" data-slide-to="1"></li>
					<li data-target="#prodcutCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="cCont">
									<h3 class="cTitle text-primary">PBM Implant</h3>
									<h4 class="cSubTitle my-3">Dental Imlplants and Gum Grafts</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
									<a href="#" class="btn btn-primary text-uppercase py-2">Read More</a>
								</div>
							</div>
							<div class="col-md-5">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbm-implant.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="cCont">
									<h3 class="cTitle text-primary">PBM Implant</h3>
									<h4 class="cSubTitle my-3">Dental Imlplants and Gum Grafts</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
									<a href="#" class="btn btn-primary text-uppercase py-2">Read More</a>
								</div>
							</div>
							<div class="col-md-5">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbm-implant.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="cCont">
									<h3 class="cTitle text-primary">PBM Implant</h3>
									<h4 class="cSubTitle my-3">Dental Imlplants and Gum Grafts</h4>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
									<a href="#" class="btn btn-primary text-uppercase py-2">Read More</a>
								</div>
							</div>
							<div class="col-md-5">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/pbm-implant.jpg" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid bg-dark reviewBoxFullWidthCont">
		<div class="container pt90 pb90">
			<h2 class="text-center text-white">KOL REVIEWS</h2>

			<div id="reviewCarFull" class="owl-carousel owl-theme reviewBoxFullWidthWrpr">
				<div class="item">
					<blockquote class="reviewBoxFullWidth text-white text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-sign.png" class="icon img-fluid" alt="">
						<div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi tecto beatae. There are many variations.</div>
						<address>John Doe</address>
					</blockquote>
				</div>
				<div class="item">
					<blockquote class="reviewBoxFullWidth text-white text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-sign.png" class="icon img-fluid" alt="">
						<div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi tecto beatae. There are many variations.</div>
						<address>John Doe</address>
					</blockquote>
				</div>
			</div>

		</div>
	</section>

	<style type="text/css">
		.reviewBoxFullWidthCont{
		  background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/03/map-dot.png);
		  
		}
	</style>




    <section class="container-fluid bg-secondary">
		<div class="container pt90 pb90 contactFormWrpr">
			<h2 class="text-center text-white">INQUIRY NOW</h2>

			<?php echo do_shortcode( '[contact-form-7 id="52" title="Contact Page"]' ); ?>

			<ul class="list-unstyled d-flex justify-content-center enquiryCont">
				<li class="mr-4">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" class="img-fluid" alt=""> <span>+ 852 3611 2573</span></a>
				</li>
				<li class="ml-4">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.png" class="img-fluid" alt=""> <span>info@pbmhealing.com</span></a>
				</li>
			</ul>
		</div>
	</section>

	<section class="container-fluid findUsSection">
		<div class="container pt90 pb90">
			<div class="row">
				<div class="col-md-8 mx-auto">

					<div class="row align-items-center">
						<div class="col-md-8">
							<h2>WHERE TO FIND US</h2>
							<p class="font24 fontWeight600">Consult a Doctor Now</p>
						</div>
						<div class="col-md-4">
							<a href="#" class="btn btn-primary">SEARCH NOW</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
		.findUsSection{
			background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/03/right-img.webp');
		}
	</style>
</main>

<?php get_footer(); ?>

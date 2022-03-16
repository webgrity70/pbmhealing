<?php get_header(); ?>



<div class="container-fluid notFound">

	<div class="container textPrimary text-center my-5 py-5 errorPage">

		<br>

		<br>

		<h2 class="title mt-5 pt-5"><?php esc_html_e( 'Oops!', 'hello-theme' ); ?>

				<span class="mt-4"><?php esc_html_e( '404 - PAGE NOT FOUND', 'hello-theme' ); ?> </span>

		</h2>

		<p class="mt-4 mb-4 text-dark"><?php esc_html_e( 'The page you are looking  for might  have been removed,<br>had its name changed or is temporarily unavailable.', 'hello-theme' ); ?></p>

		<a class="btn btnPrimary px-5 py-2" href="<?php echo esc_url(home_url()); ?>">GO TO HOMEPAGE</a>

	</div>

</div>



<?php get_footer(); ?>
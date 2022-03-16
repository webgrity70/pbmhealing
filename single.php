<?php get_header();   ?>



<?php get_template_part('template-parts/hero'); ?>

<main class="otherPages postDetails" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container container1200 my-5">

		<div class="row">
			<div class="col-md-9 postDetailContent">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php the_title( '<h2 class="title">', '</h2>', true ); ?>
			
					<div class="d-flex mb-4 text-primary">
						<div class="pr-3"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo get_the_date( 'M d, Y' ); ?></div>
						<div><i class="fa fa-user-o" aria-hidden="true"></i> <?php the_author(); ?></div>
					</div>

					

					

					<div class="thumbnailWrpr mb-4">
						<?php
							the_post_thumbnail('full', ['class'=>'w-100 img-fluid']);

							$category = get_the_category(get_the_ID());
							if (count($category)>0) {
								echo '<div class="catList">';
								the_category(', ');
								echo '</div>';
							}
						?>
					</div>

					<?php the_content(); ?>


					<div class="container-fluid d-flex align-items-center p-0 bottomShareCont">
						<div class="mr-4 font18 fontWeight600 text-dark py-3">Share this post:</div>
						<div class="">
							<?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
						</div>
					</div>

					<div class="singlePostNav">
						<?php the_post_navigation(array(
							'next_text' => 'Newer <i class="fa fa-angle-right" aria-hidden="true"></i>',
							'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> Older'
						)); ?>
					</div>

					<?php  
						if ( comments_open() || get_comments_number() ) {
							echo '<div class="commentFormWrpr">';
							comments_template();
							echo "</div>";

							
							
						}

						// show comments UI
						if(get_comments_number()) echo get_template_part('comment-list');


						

					?>


					<?php endwhile;  else: ?>
						<p class="alert alert-warning">Sorry, no posts matched your criteria.</p>
				<?php endif; ?>			

			</div>
			<div class="col-md-3">
				<div class="rightSidebar">
					<h3 class="widgetTitle">Share</h3>
					<div class="mb-4">
						<?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>		
					</div>
					<h3 class="widgetTitle">Recent Articles</h3>
					<?php dynamic_sidebar('recent-article'); ?>
				</div>
			</div>
			
		</div>


	</div>
</main>




<?php get_footer(); ?>
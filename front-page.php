<?php get_header(); ?>

<main class="topMenuGutter" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $banner = get_field('banner_section'); ?>
	<div class="container-fluid mainBanner d-flex flex-column justify-content-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="content">
						<?php if ($banner['big_title']): ?>
							<h1 class="title text-uppercase"><?php echo $banner['big_title']; ?></h1>
						<?php endif ?>
						
						<?php if ($banner['sub_title']): ?>
							<p><?php echo $banner['sub_title']; ?></p>
						<?php endif ?>
						

						<?php 
						$link = $banner['button'];
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="btn btn-primary text-uppercase" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		.mainBanner{
			background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/03/main-banner.jpg');
		}
	</style>



	<!-- Section2 -->

	<?php $section2 = get_field('section_2'); ?>

	<div class="container-fluid afterMainBanner">
		<div class="row">
			<div class="col-md-6 text-center left text-white">
				
				<?php echo wp_get_attachment_image($section2['leftbackground_image'],'full','',array('class'=>'img-fluid overlayImg')); ?>

				<?php if ($section2['titleleft']): ?>
					<h2 class="text-white title text-uppercase"><?php echo $section2['titleleft']; ?></h2>
				<?php endif ?>
				<?php if ($section2['contentleft']): ?>
					<p><?php echo $section2['contentleft']; ?></p>
				<?php endif ?>


				<?php 
				$link = $section2['buttonleft'];
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="btn btn-light text-uppercase" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>


				
			</div>
			<div class="col-md-6 text-center right text-white">
				<?php echo wp_get_attachment_image($section2['rightbackground_image'],'full','',array('class'=>'img-fluid overlayImg')); ?>
				<?php if ($section2['titleright']): ?>
					<h2 class="text-white title text-uppercase"><?php echo $section2['titleright']; ?></h2>
				<?php endif ?>
				
				<?php if ($section2['contentright']): ?>
					<p><?php echo $section2['contentright']; ?></p>
				<?php endif ?>
				
				<?php 
				$link = $section2['buttonright'];
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="btn btn-light text-uppercase" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Ending Section2 -->

	<div class="container-fluid productContF" id="products">
		<div class="container">
			<h2 class="text-center mb-4 text-uppercase">Our Products</h2>
			<div id="prodcutCarousel" class="carousel slide" data-ride="carousel">
				<?php

				if (have_rows('our_products_slider')):
					while (have_rows('our_products_slider')): the_row();
						$count = get_row_index() - 1;
						$isActive = '';
						if (get_row_index()==1) {
							$isActive = 'active';
						}
						$pItem .= '<div class="carousel-item '.$isActive.'">';
						$pItem .= '<div class="row align-items-center">';
						$pItem .= '<div class="col-md-7">';
						$pItem .= '<div class="cCont">';
						$pItem .= '<h3 class="cTitle text-primary">'.get_the_title( get_sub_field('choose_page') ).'</h3>';
						$pItem .= '<h4 class="cSubTitle my-3">'.get_sub_field('sub_title').'</h4>';
						$pItem .= '<p>'.get_sub_field('excerpt').'</p>';
						$pItem .= '<a href="'.get_permalink(get_sub_field('choose_page')).'" class="btn btn-primary text-uppercase py-2">Read More</a>';
						$pItem .= '</div>';
						$pItem .= '</div>';
						$pItem .= '<div class="col-md-5">';
						$pItem .= wp_get_attachment_image( get_sub_field('thumbnail'), 'medium','', array('class'=>'img-fluid') );
						$pItem .= '</div>';
						$pItem .= '</div>';
						$pItem .= '</div>';



						$pIndicator .= '<li data-target="#prodcutCarousel" data-slide-to="'.$count.'" class="'.$isActive.'">';
						$pIndicator .= '</li>';


					endwhile;
					wp_reset_postdata();
				endif;

				?>
				<ol class="carousel-indicators">
					<?php echo $pIndicator; ?>
				</ol>
				<div class="carousel-inner">
					<?php echo $pItem; ?>					
				</div>
			</div>
		</div>
	</div>

</main>






<?php get_footer(); ?>
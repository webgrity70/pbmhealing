<?php
$headerImg = get_the_post_thumbnail_url();
$fallbackHeader = site_url().'/wp-content/uploads/2022/03/hero-img.jpg';

if( get_post_type() == 'post' ){
	$headerImg = $fallbackHeader;
}
elseif(!$headerImg){
	$headerImg = $fallbackHeader;
}


?>


<section class="hero container-fluid d-flex flex-column justify-content-center">
	<div class="container">
		<?php
			if( get_post_type() == 'post' && !is_search() ){
				echo '<h1 class="title text-uppercase">Articles</h1>';
			}
			elseif (is_search()) {
				echo '<h1 class="title text-uppercase">Search</h1>';
			}
			else{
				the_title('<h1 class="title text-uppercase">','</h1>',true);
			}
			
		?>
	</div>
</section>
<style type="text/css">
	.hero{
		background-image: url(<?php echo $headerImg; ?>);
	}
</style>
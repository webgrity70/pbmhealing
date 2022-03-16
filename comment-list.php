<ol class="comment-list list-unstyled commentListWrpr">
	<?php
	wp_list_comments(
		array(
			'avatar_size' => 60,
			'style'       => 'ol',
			'short_ping'  => true,
		)
	);
	?>
</ol>


<?php the_comments_pagination(); ?>
<footer class="footer text-center">
	<div>
		<a href="#">
			<img src="<?=site_url();?>/wp-content/uploads/2022/03/footer-logo.png" class="img-fluid">
		</a>
	</div>
	<div>
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
	<div class="socialWrpr">
		<ul class="list-unstyled d-inline-flex">
			<li>
				<a href="#">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			</li>
			<li class="mx-3">
				<a href="#">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
			</li>
		</ul>
	</div>
	<div class="container-fluid text-center copyrightSection">
		<p>© <?php echo date('Y'); ?> PBM Healing International Ltd. All rights reserved.</p>
	</div>
</footer>

<style type="text/css">
	.footer{
		background-image: url('<?=site_url();?>/wp-content/uploads/2022/03/map-dot.png');
	}
</style>


<div class="modalSearch" id="search">
	<button class="btnTransparent btnCloseModal" data-target="search"><i class="fa fa-times" aria-hidden="true"></i></button>
	<div class="modalContent">
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
			<label class="label text-primary">Search</label>
			<div class="inputWrpr d-flex">
				<input type="text" name="s" class="formControl" id="searchinput" autocomplete="off">
				<button type="submit" class="btnSearch btnTransparent" aria-label="Search anything"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
			</div>
		</form>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rank_Master
 */
$logo = get_field('logo', 'option');
$description = get_field('description', 'option');
$socials = get_field('socials', 'option');
$columns = get_field('columns', 'option');
?>

<footer id="colophon" class="site-footer d-none">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'rank-master')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'rank-master'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'rank-master'), 'rank-master', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<footer>
	<div class="container">'
		<div class="row">
			<div class="col-md-3">
				<div class="left-column">
					<a href="<?php echo home_url(); ?>">
					<?php
					if ($logo) { ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
					<?php
					} else { ?>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/footer-logo.png' ?>" alt="">

					<?php
					}
					?>
					</a>
					<p><?php echo $description; ?></p>
					<ul class="social_btns">
						<?php
						foreach ($socials as $social) { ?>
							<li>
								<a class="fa <?php echo $social['icon']; ?>" href="<?php echo $social['link']; ?>"></a>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<?php
			$i = 1;
			foreach ($columns as $column) {
				if ($i == 1) {
					$outer = 'col-md-3';
					$inner = 'middle-left-column';
				} elseif ($i == 2) {
					$outer = 'col-md-4';
					$inner = 'middle-right-column';
				} else {
					$outer = 'col-md-2';
					$inner = 'right-column';
				}
			?>
				<div class="col-md-3">
					<div class="<?php echo $inner; ?>">
						<div class="footer-column">
							<h4><?php echo $column['title']; ?></h4>
							<ul>
								<?php
								foreach ($column['items'] as $item) { ?>
									<li><a href="<?php echo $item['link']['url']; ?>"><?php echo $item['link']['title']; ?></a></li>
								<?php
								}
								?>
							</ul>
						</div>

					</div>
				</div>
			<?php
				$i++;
			}
			?>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rank_Master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>

<?php
$desktop_logo = get_field('desktop_logo', 'option');
$mobile_logo = get_field('mobile_logo', 'option');
$menuItems = get_field('main_navigation', 'option');
$button = get_field('button', 'option');
// echo '<pre>';
// print_r($button);
// echo '</pre>';
?>
<div class="header-wrap">
	<div class="container">
		<header class="site-header">
			<div class="header-content">
				<div class="header-content__logo">
					<a href="<?php echo home_url(); ?>">
						<?php
						if ($desktop_logo) { ?>
							<img src="<?php echo $desktop_logo['url']; ?>" alt="<?php echo $desktop_logo['title']; ?>">
						<?php
						} else { ?>
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Primary-Logo-2.png' ?>">
						<?php
						}
						?>
					</a>
				</div>
				<div class="header-content__right">
					<div class="header-right-menu">
						<div class="header-menu">
							<div class="wrapppppper">
								<div class="btn-logo-grp">
									<div class="logo">
										<a href="<?php echo home_url(); ?>" aria-label="">
											<?php
											if ($mobile_logo) { ?>
												<img src="<?php echo $mobile_logo['url']; ?>" alt="<?php echo $mobile_logo['title']; ?>">
											<?php
											} else { ?>
												<img src="<?php echo get_template_directory_uri() . '/assets/images/Primary-Logo-2.png' ?>">
											<?php
											}
											?>
										</a>
									</div>
									<div class="menu-mobile1">
										<svg class="ham hamRotate ham1 collapsed active" data-toggle="collapse" data-target="#header-menu" viewBox="0 0 41 106" width="80">
											<path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40">
											</path>
											<path class="line middle" d="m 30,50 h 40"></path>
											<path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40">
											</path>
										</svg>
									</div>
								</div>
							</div>
							<div class="cta-btn mobile-view">
								<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
							</div>
							<ul class="main-menu">
								<?php foreach ($menuItems as $menuItem) {
								?>
									<li class="dropdown">
										<a href="<?php echo $menuItem['menu_item']['url']; ?>" target="<?php echo $menuItem['menu_item']['target']; ?>"><?php echo $menuItem['menu_item']['title']; ?></a>
										<?php
										if ($menuItem['submenu']['primary_service']) {
										?>
											<span class="menu-arrow">
												<img src="<?php echo get_template_directory_uri() . '/assets/images/arrow.svg' ?>" alt="">
											</span>
											<div class="sub-menu">
												<div class="row">
													<?php foreach ($menuItem['submenu']['primary_service'] as $subMenuItem) {
													?>
														<div class="col-md-4">
															<div class="sub-menu__column">
																<a href="<?php echo $subMenuItem['item']['url']; ?>" target="<?php echo $subMenuItem['item']['target']; ?>" class="sub-menu__title"><?php echo $subMenuItem['item']['title']; ?></a>
																<div class="dropdown__underline"></div>
																<ul>
																	<?php
																	if ($subMenuItem['secondary_services']) {

																		foreach ($subMenuItem['secondary_services'] as $secondaryService) { ?>
																			<li>
																				<div class="submenu-box">
																					<div class="content">
																						<a href="<?php echo $secondaryService['item']['url']; ?>" target="<?php echo $secondaryService['item']['target']; ?>" class="title"><?php echo $secondaryService['item']['title']; ?></a>
																						<div class="info"><?php echo $secondaryService['description']; ?></div>
																					</div>
																				</div>
																			</li>
																		<?php } ?>
																	<?php } else { ?>
																		<li>
																			<div class="submenu-box">
																				<div class="content">
																					<div class="info"><?php echo $subMenuItem['description']; ?>
																					</div>
																				</div>
																			</div>
																		</li>
																	<?php } ?>
																</ul>
															</div>

														</div>
													<?php } ?>
												</div>
											</div>
										<?php
										}
										?>

									</li>
								<?php } ?>


							</ul>
						</div>
						<div class="menu-mobile">
							<svg class="ham hamRotate ham1 collapsed" data-toggle="collapse" data-target="#header-menu" viewBox="0 0 41 106" width="80">
								<path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"></path>
								<path class="line middle" d="m 30,50 h 40"></path>
								<path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"></path>
							</svg>
						</div>
					</div>
					<div class="cta-btn">
						<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
					</div>
				</div>
			</div>
		</header>
	</div>
</div>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text d-none" href="#primary"><?php esc_html_e('Skip to content', 'rank-master'); ?></a>

		<header id="masthead" class="site-header d-none">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$rank_master_description = get_bloginfo('description', 'display');
				if ($rank_master_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $rank_master_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'rank-master'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
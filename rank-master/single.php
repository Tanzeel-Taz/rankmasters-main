<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rank_Master
 */

get_header();

$post = get_queried_object();
$author_data = get_userdata($post->post_author);

$categories = get_the_category($post->ID);
$first_category = $categories[0];
$post_link = get_permalink($post->ID);

$icon = get_field('icon');
$intro_content = get_field('intro_content');
$sections = get_field('sections');
$socials = get_field('socials', 'user_' . $author_data->ID);
// echo '<pre>';
// print_r($socials);
// echo '</pre>';

?>
<style>
	.single-page--description--mid--first-section--title {
		display: flex;
		column-gap: 20px;
		align-items: center;
		padding: 35px 50px 20px 15px;
		background-color: rgba(5, 74, 218, .1);
	}

	.single-page--description--mid--first-section--title-img {
		padding: 0 19px 0 15px;
	}

	.single-page--description--mid--first-section--title-content span {
		font-family: var(--bold);
		font-size: 22px;
		line-height: 2;
		margin: 6px 0;
	}

	.single-page--description--mid--first-section--description h3 {
		margin: 35px 0 20px;
	}

	.single-page--description--mid--first-section--description p a {
		color: var(--secondary);
		text-decoration: none;
	}

	.single-page--description--mid--first-section--description p a:hover {
		color: var(--accent);
	}

	.single-page--description--mid--first-section--description img {
		border: none;
		box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .1), 0 0 6px 0 rgba(0, 0, 0, .1), 0 2px 2px -2px rgba(0, 0, 0, .15);
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.single-page--description--mid--first-section--description ol {
		list-style: auto;
		margin-left: 23px;
	}

	.single-page--description--mid--first-section--description ol li a,
	.single-page--description--mid--first-section--description ul li a {
		color: var(--secondary);
		text-decoration: none;
	}

	.single-page--description--mid--first-section--description ol li a:hover,
	.single-page--description--mid--first-section--description ul li a:hover {
		color: var(--accent);
	}

	.single-page--description--mid--first-section--description ul {
		list-style: disc;
		margin-left: 23px;
	}

	.single-page--description li {
		font-size: clamp(14px, 2.2vw, 18px);
	}

	.single-page--description--mid--first-section--description h4 {
		margin: 30px 0 14px;
	}

	.single-page--description--mid--first-section--description>div {
		background-color: rgba(31, 61, 235, .06);
		padding: 30px 40px 32px 30px;
		margin: 26px 0;
	}

	.single-page--description--mid--first-section--description>div h5 {
		font-size: 18px;
		line-height: 24px;
		text-transform: uppercase;
		letter-spacing: .5px;
		margin: 0 0 15px;
	}

	.single-page--description--mid--first-section--description h2 {
		margin: 65px 0 25px;
	}

	.single-page--description--mid--first-section {
		margin-top: 40px;
	}

	.single-page--description--mid--first-section--bottom-card {
		margin: 10px 0;
		background-color: #f7f7f7;
		padding: 30px;
		display: flex;
		column-gap: 25px;
	}

	.single-page--description--mid--first-section--bottom-card--details--name h4 {
		font-size: 13px;
		line-height: 22px;
		text-align: left;
		font-weight: 400;
	}

	.single-page--description--mid--first-section--bottom-card--details--name a {
		text-align: left;
		font-size: 28px;
		line-height: 36px;
		font-family: var(--bold);
		margin-top: 4px;
		margin-bottom: 16px;
		padding: 0;
		color: var(--primary);
		text-decoration: none;
		display: inline-block;
		transition: all 0.3s;
	}

	.single-page--description--mid--first-section--bottom-card--details--name a:hover {
		color: var(--accent);
	}

	/* 09/08/2023 Single Article*/
	.single-page-post {
		/* padding: 22px 0 72px; */
		background-color: var(--secondary);
		text-align: center;
	}

	.single-page-post--details--desktop-image {
		margin: 0 0 15px;
	}

	.single-page-post--details--desktop-image img {
		width: 75px;
		max-height: 75px;
		object-fit: contain;
	}

	.single-page-post--details--post-title {
		max-width: 55%;
		margin: 0 auto;
		margin-bottom: 13px;
	}

	.single-page-post--details--post-title h1 {
		font-size: 50px;
		line-height: 54px;
		color: var(--white);
	}

	.single-page-post--details--post-meta {
		display: flex;
		align-items: center;
		justify-content: center;
		column-gap: 30px;
	}

	.post-categories.single-page-post--details--post-meta {
		column-gap: 5px;
		margin-bottom: 20px;
	}

	.post-categories.single-page-post--details--post-meta a {
		text-decoration: none;
		border-bottom: none;
	}

	.post-categories.single-page-post--details--post-meta a:hover {
		border-bottom: none;
	}

	.single-page-post--details--post-meta,
	.single-page-post--details--post-meta a {
		color: var(--white);
		font-size: 16px;
		transition: all 0.3s;
	}

	.single-page-post--details--post-meta a:hover {
		color: var(--primary);
		border-bottom: 1px solid var(--primary);
	}

	.single-page-post--details--post-meta a {
		text-decoration: none;
		border-bottom: 1px solid var(--white);
	}

	.single-page-post--details--post-meta--post-publish,
	.single-page-post--details--post-meta--post-date {
		position: relative;
	}

	.single-page-post--details--post-meta--post-publish p,
	.single-page-post--details--post-meta--post-date p {
		font-size: 16px;
		color: var(--white);
	}

	.single-page-post--details--post-meta--post-publish::before,
	.single-page-post--details--post-meta--post-date::before {
		content: "";
		display: block;
		position: absolute;
		top: 44%;
		left: -19px;
		width: 5px;
		height: 5px;
		background: var(--white);
	}

	.single-page--description .single-page--description-left {
		position: sticky;
		top: 100px;
		width: 260px;
		border-right: 1px solid #e7e7e7;
	}

	.logged-in .single-page--description .single-page--description-left,
	.logged-in .single-page--description--right {
		top: 100px;
	}

	.single-page--description .single-page--description-left .nav-title {
		font-family: var(--bold);
		font-size: 15px;
		line-height: 18px;
		padding: 4px 8px 6px 32px;
	}

	.single-page--description .single-page--description-left li {
		position: relative;
		padding: 4px 8px 4px 32px;
		line-height: 20px;
	}

	.single-page--description-left li.active {
		background: rgba(5, 74, 218, .06);
	}

	.single-page--description-left li a {
		display: block;
		font-size: 15px;
		line-height: 20px;
		text-decoration: none;
	}

	.single-page--description-left li.active a {
		color: var(--primary);
	}

	.single-page--description-left li a:hover {
		color: var(--accent);
	}

	.single-page--description--mid .intro-txt {
		line-height: 33px;
		margin: 0 0 16px;
		font-size: 22px;
	}

	.single-page--description p {
		margin: 0 0 15px;
	}

	.single-page--description--mid-contents h2 {
		margin: 50px 0 12px;
	}

	.single-page--description--mid-contents--list {
		padding-left: 45px;
		padding-bottom: 40px;
	}

	.single-page--description--mid-contents--list h3 {
		margin: 0;
		font-size: clamp(20px, 2.5vw, 24px);
		display: flex;
		align-items: center;
		font-family: var(--bold);
	}

	.single-page--description--mid-contents--list h3 img {
		margin: 0 19px 0 15px;
		height: 64px;
	}

	.single-page--description--mid-contents--list h3 a {
		text-decoration: none;
		color: var(--primary);
		margin: 15px 0;
	}

	.single-page--description--mid-contents--list h3 a:hover {
		color: var(--accent);
	}

	.single-page--description--mid-contents--list hr {
		border: 0;
		border-top: 1px solid #0006;
		margin-top: 0;
		margin-bottom: 0;
	}

	.single-page--description--right--author-details--img {
		width: 85px;
		height: 85px;
		margin-bottom: 14px;
		border-radius: 85px;
	}

	.single-page--description--right--author-details--img img {
		width: 85px;
		height: 85px;
		border-radius: 85px;
	}

	.single-page--description--right {
		margin-left: 50px;
		width: 194px;
		position: sticky;
		top: 100px;
	}

	.single-page--description--right--author-details--author-name {
		color: var(--primary);
		margin: 0 0 8px;
	}

	.single-page--description--right--author-details--author-name a {
		color: var(--primary);
		font-family: var(--bold);
		font-size: 20px;
		line-height: 24px;
		text-decoration: none;
	}

	.single-page--description--right--author-details--author-name a:hover {
		color: var(--accent);
	}

	.single-page--description--right--author-details--author-desc {
		margin-bottom: 16px;
	}

	.single-page--description--right--author-details--author-desc p {
		font-size: 15px;
	}

	.single-page--description--right--author-details--author-social i {
		color: rgba(51, 51, 51, .4);
		font-size: 18px;
	}

	.single-page--description--right--author-details--author-social i:hover {
		color: var(--accent);
	}

	.single-page--description--right--share-post {
		padding-top: 32px;
	}

	.single-page--description--right--share-post h6 {
		font-family: var(--bold);
		font-size: 15px;
		line-height: 18px;
		margin: 0 0 12px;
	}

	.single-page--description--right--share-post--icons {
		display: flex;
		column-gap: 5px;
	}

	.single-page--description--right--share-post--icons .share-icon {
		width: 40px;
		height: 40px;
		border-radius: 3px;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.single-page--description--right--share-post--icons .share-icon i {
		font-size: 18px;
		color: var(--white);
	}

	/* 19/08/2023 */
	@media screen and (max-width: 1200px) {
		.single-page--description--right {
			display: none;
		}
	}

	@media screen and (max-width: 1024px) {
		.single-page-post--details--post-title {
			max-width: 70%;
		}
	}

	@media screen and (max-width: 991px) {

		.single-page--description .single-page--description-left {
			display: none;
		}

	}

	@media screen and (max-width: 500px) {
		.single-page-post--details--post-title h1 {
			line-height: 42px;
		}
	}

	@media screen and (max-width: 768px) {

		.single-page-post--details--post-title {
			max-width: 100%;
		}

		.single-page-post--details--post-title h1 {
			font-size: 38px;
		}

		.single-page--description--mid-contents--list {
			padding-left: 0;
		}


		.single-page--description--mid--first-section--title-img {
			padding: 0;
		}

		.single-page--description--mid--first-section--title {
			flex-direction: column;
			align-items: baseline;
			padding: 20px;
		}

		.single-page--description--mid--first-section--description h3 {
			font-size: 32px;
		}
	}
</style>
<style>
	.homepage-CTA {
		text-align: center;
	}

	.homepage-CTA .container {
		position: relative;
		background-color: var(--primary);
		border-radius: 0.52em;
		padding: 3.13em 3.65em;
		overflow: hidden;
		color: var(--white);
	}

	.homepage-CTA .container svg {
		position: absolute;
		bottom: -10%;
		left: -100px;
		width: 400px;
		width: clamp(200px, 30vw, 400px);
		transform: rotate(-20deg);
	}

	.homepage-CTA .container svg .st0,
	.homepage-CTA .container svg .st1 {
		fill: rgba(128, 128, 128, 0.3);
		fill: #1268AF;
	}

	.homepage-CTA .container span.logo-2 {
		position: absolute;
		bottom: 0;
		right: 0;
	}

	.homepage-CTA .container span.logo-2 svg {
		bottom: -120px;
		right: -120px;
		top: unset;
		left: unset;
		transform: rotate(-36deg);
	}

	h3.homepage-CTA__heading {
		margin: 0;
		margin-bottom: 14px;
		color: inherit;
	}

	.homepage-CTA__description {
		margin-bottom: 2em;
		color: inherit;
	}

	.homepage-CTA__button {
		margin: auto;
		margin-bottom: 0.8em;
	}

	.homepage-CTA__bottom-liner p {
		color: inherit;
	}

	.homepage-CTA__bottom-liner a {
		color: inherit;
		transition: all 0.3s;
	}

	.homepage-CTA__bottom-liner a:hover {
		color: var(--accent);
	}

	@media (max-width: 1024px) {
		h3.homepage-CTA__heading {
			font-size: 32px;
		}

		.homepage-CTA__description,
		.homepage-CTA__bottom-liner {
			font-size: 13px;
		}
	}

	@media (max-width:767px) {
		h3.homepage-CTA__heading {
			font-size: 30px;
		}

		.homepage-CTA .container span.logo-2 svg {
			bottom: -60px;
			right: -60px;
		}
	}
</style>
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		// get_template_part( 'template-parts/content', get_post_type() );

	?>
		<section class="single-page-post">
			<div class="container">
				<div class="single-page-post--details">
					<div class="single-page-post--details--desktop-image">
						<?php if ($icon) {
							// the_post_thumbnail();
							echo '<img src=' . $icon['url'] . ' alt=>' . $icon['title'];
						} else {
							echo '<img src="http://rankmasters.waqasarshad.com/wp-content/uploads/2023/07/content-marketing.svg" alt="Post Icon">';
						} ?>
					</div>
					<?php
					if (!empty($categories)) {
						$category_count = count($categories);

						echo '<ul class="post-categories single-page-post--details--post-meta">';
						foreach ($categories as $index => $category) {
							echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';

							if ($index < $category_count - 1) {
								echo ' | ';
							}


							echo '</li>';
						}
						echo '</ul>';
					}
					?>
					<div class="single-page-post--details--post-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="single-page-post--details--post-meta">
						<div class="single-page-post--details--post-meta--postauthor">
							<a href="<?php echo home_url() . '/author/' . $author_data->user_nicename ?>" target="_blank">
								<?php echo $author_data->first_name;
								echo ' ';
								echo $author_data->last_name; ?>
							</a>
						</div>
						<div class="single-page-post--details--post-meta--post-publish">
							<p>Updated: <?php echo get_the_date('F j, Y'); ?></p>
						</div>
						<!-- <div class="single-page-post--details--post-meta--post-date">
							<p>10 min read</p>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<section class="single-page--description">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="single-page--description-left">
							<div class="nav-title">
								Contents
							</div>
							<ul>
								<?php
								if ($sections) {
									$i = 1;
									foreach ($sections as $section) {
								?>
										<li class="<?php echo ($i == 1) ? 'active' : ''; ?>"><a title="SEO fundamentals" href="#section_<?php echo $i; ?>"><?php echo $i; ?>. <?php echo $section['title']; ?></a></li>
								<?php
										$i++;
									}
								}
								?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-page--description--mid">
							<div class="intro-txt">
								<?php echo $intro_content; ?>
							</div>
							<!-- <p>Keep reading to learn what SEO is, how to set things up for success, and how to get indexed.
							</p> -->
							<div class="single-page--description--mid-contents">
								<h2>Contents</h2>
								<div class="single-page--description--mid-contents--list">
									<?php
									if ($sections) {
										$i = 1;
										foreach ($sections as $section) {
									?>
											<?php echo ($i != 1) ? '<hr>' : ''; ?>
											<h3>
												<?php if ($section['icon']) { ?>
													<img src="<?php echo $section['icon']['url']; ?>" alt="<?php echo $section['icon']['title']; ?>">
												<?php } else { ?>
													<img src="https://ahrefs.com/blog/wp-content/uploads/svg/<?php echo rand(1, 9); ?>.svg" alt="">
												<?php } ?>
												<a href="#section_<?php echo $i; ?>"><?php echo $i; ?>. <?php echo $section['title']; ?></a>
											</h3>
											<!-- <li class="<?php echo ($i == 1) ? 'active' : ''; ?>"><a title="SEO fundamentals" href="#section_<?php echo $i; ?>"><?php echo $i; ?>. <?php echo $section['title']; ?></a></li> -->
									<?php
											$i++;
										}
									}
									?>
								</div>
							</div>
							<?php
							if ($sections) {

								$i = 1;
								foreach ($sections as $section) {
									// var_dump($section);
							?>
									<div class="single-page--description--mid--first-section" id="section_<?php echo $i; ?>">
										<div class="single-page--description--mid--first-section--title">
											<div class="single-page--description--mid--first-section--title-img">
												<?php if ($section['icon']) { ?>
													<img src="<?php echo $section['icon']['url']; ?>" alt="<?php echo $section['icon']['title']; ?>">
												<?php } else { ?>
													<img src="https://ahrefs.com/blog/wp-content/uploads/svg/<?php echo rand(1, 9); ?>.svg" alt="">
												<?php } ?>
											</div>
											<div class="single-page--description--mid--first-section--title-content">
												<span>Part <?php echo $i; ?></span>
												<h2> <?php echo $section['title']; ?> </h2>
											</div>
										</div>
									</div>
									<div class="single-page--description--mid--first-section--description">
										<?php
										$layouts = $section['article_components'];
										if ($layouts) :

											// while (have_rows($layouts)) : the_row();
											foreach ($layouts as $layout) {
												// var_dump($layout['editor']);


												// $template = get_row_layout();
												$template = $layout['acf_fc_layout'];
												// var_dump($template);
												if ($layout['acf_fc_layout'] == 'card_editor') {
													echo '<div>';
													echo $layout['editor'];
													echo '</div>';
												} elseif ($layout['acf_fc_layout'] == 'cta') {
										?>
													<section class="homepage-CTA">
														<div class="container">
															<span class="logo-1">
																<!-- Generator: Adobe Illustrator 27.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
																<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
																	<style type="text/css">
																		.st0 {
																			fill: #4325E8;
																		}

																		.st1 {
																			fill: #FFFFFF;
																		}
																	</style>
																	<g>
																		<path class="st0" d="M975.25,359.16c-18.32,49.42-35.81,99.28-53.63,148.92c-3.31,9.23-15.6,11.01-21.41,3.11
		c-3.75-5.1-7.54-10.26-11.22-15.25c-4.02-5.45-11.68-6.61-17.12-2.58c-103.3,76.31-207.67,153.74-310.95,230.16
		c-5.44,4.02-13.12,2.85-17.14-2.59c-39.01-52.65-77.48-104.79-116.38-157.19c-4.03-5.43-11.71-6.58-17.15-2.56
		c-78.3,57.96-156.6,115.97-234.8,173.78c-5.45,4.03-13.14,2.84-17.16-2.61c-17.54-23.75-34.82-47.1-51.91-70.17
		c-4.03-5.44-2.89-13.08,2.55-17.11c98.24-72.78,224.89-166.37,324.23-239.96c5.44-4.03,13.1-2.9,17.12,2.55
		c37.96,51.37,76.47,103.69,114.61,155.04c4.03,5.43,11.69,6.54,17.13,2.52c73.67-54.47,147.1-108.85,220.79-163.35
		c5.45-4.03,6.61-11.7,2.57-17.15c-3.59-4.83-7.27-9.8-10.93-14.73c-5.84-7.87-0.53-19.06,9.25-19.53
		c53.21-2.59,106.37-5.23,159.5-7.79C971.99,342.24,978.31,350.92,975.25,359.16z" />
																	</g>
																</svg>
															</span>
															<span class="logo-2">
																<!-- Generator: Adobe Illustrator 27.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
																<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
																	<style type="text/css">
																		.st0 {
																			fill: #4325E8;
																		}

																		.st1 {
																			fill: #FFFFFF;
																		}
																	</style>
																	<g>
																		<!-- <g>
                        <path class="st1" d="M872.03,575.21c-13.07,35.27-25.55,70.85-38.27,106.26c-2.36,6.58-11.13,7.86-15.28,2.22
			c-2.68-3.64-5.38-7.32-8.01-10.88c-2.87-3.89-8.33-4.72-12.22-1.84c-73.71,54.45-148.19,109.7-221.89,164.24
			c-3.88,2.87-9.36,2.03-12.23-1.85c-27.83-37.57-55.29-74.78-83.04-112.17c-2.88-3.88-8.36-4.7-12.24-1.83
			c-55.87,41.36-111.75,82.75-167.55,124.01c-3.89,2.87-9.37,2.02-12.25-1.86c-12.52-16.95-24.85-33.61-37.04-50.07
			c-2.88-3.88-2.06-9.33,1.82-12.21c70.1-51.94,160.47-118.72,231.36-171.23c3.88-2.88,9.35-2.07,12.22,1.82
			c27.09,36.66,54.56,73.99,81.78,110.63c2.88,3.87,8.34,4.66,12.22,1.8c52.57-38.87,104.97-77.67,157.55-116.56
			c3.89-2.88,4.72-8.35,1.83-12.23c-2.56-3.45-5.19-6.99-7.8-10.51c-4.17-5.61-0.38-13.6,6.6-13.94
			c37.97-1.85,75.9-3.73,113.82-5.56C869.7,563.13,874.22,569.33,872.03,575.21z" />
                    </g> -->
																		<path class="st1" d="M892.47,340.88c-5.8,0.75-11.53,3.41-16.88,6.01c-50.55,24.47-101.08,49.03-151.45,73.86
		c-5.29,2.6-7.95,2.06-11.77-2.39c-49.36-57.25-98.9-114.35-148.47-171.41c-13.95-16.07-34.3-16.01-48.25,0.09
		c-43.62,50.26-87.19,100.54-130.78,150.83c-7.53,8.66-15.09,17.27-22.62,25.9c-3.41-1.64-6.13-2.93-8.81-4.24
		c-51.18-24.89-102.36-49.84-153.58-74.67c-17.9-8.66-34.2-2.19-43.2,13.62c-16.74,29.42,68,249.19,102.72,363.35l31.22-23.99
		c6.54-5.02,13.15-10.1,19.78-15.15c-24.92-82.67-50.11-165.23-75.2-247.84c-0.48-1.61-0.87-3.23-1.79-6.66
		c28.98,14.07,56.26,27.34,83.51,40.6c11.95,5.8,23.87,11.68,35.82,17.51c17.69,8.58,30.03,6.01,42.85-8.78
		c46.7-53.87,93.43-107.77,140.16-161.64c1.14-1.31,2.36-2.54,4.15-4.45c3.79,4.3,7.41,8.34,10.97,12.43
		c44.25,51.03,88.53,102.06,132.75,153.13c13.51,15.57,25.37,18.05,44.01,8.99c36.09-17.54,72.16-35.14,108.22-52.68
		c2.93-1.4,5.86-2.78,10.07-4.78c-0.78,3.35-1.17,5.62-1.82,7.8c-9.44,31.1-18.91,62.24-28.35,93.34l63.16-2.72
		c0,0,8.9-27.49,13.8-43.62c10.64-35.02,21.6-69.94,31.67-105.14C930.18,357.77,913.15,338.17,892.47,340.88z" />
																	</g>
																</svg>

															</span>
															<div class="row">
																<div class="col-sm-12" style="z-index: 5">
																	<h3 class="homepage-CTA__heading"><?php echo $layout['headline']; ?></h3>
																	<p class="homepage-CTA__description"><?php echo $layout['description']; ?></p>
																	<?php if ($layout['button']) { ?>
																		<a href="<?php echo $layout['button']['url']; ?>" target="<?php echo $layout['button']['target']; ?>" class="homepage-CTA__button btn-primary mt-4"><?php echo $layout['button']['title']; ?></a>
																	<?php } ?>
																	<div class="homepage-CTA__bottom-liner"><?php echo $layout['bottom_liner']; ?></div>
																</div>
															</div>
														</div>
													</section>
								<?php
												} else {
													echo $layout['editor'];
												}
											}

										// endwhile;

										endif;
										echo '</div>';
										$i++;
									}
								}
								?>

								<div class="single-page--description--mid--first-section--bottom-card">
									<div class="single-page--description--mid--first-section--bottom-card--img">
										<?php if (get_avatar($author_data->ID)) { ?>
											<?php echo get_avatar($author_data->ID); ?>
										<?php } else { ?>
											<img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/JoshuaHardwick.jpg" alt="">
											<!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>" alt=""> -->
										<?php } ?>
									</div>
									<div class="single-page--description--mid--first-section--bottom-card--details">
										<div class="single-page--description--mid--first-section--bottom-card--details--name">
											<h4>Article by</h4>
											<a href="<?php echo home_url() . '/author/' . $author_data->user_nicename ?>" target="_blank">
												<?php echo $author_data->first_name;
												echo ' ';
												echo $author_data->last_name; ?>
											</a>
										</div>
										<div class="single-page--description--right--author-details">
											<div class="single-page--description--right--author-details--author-desc">
												<p><?php echo $author_data->description; ?></p>
											</div>
											<div class="single-page--description--right--author-details--author-social">
												<?php
												if ($socials) {
													foreach ($socials as $social) { ?>
														<a href="<?php echo $social['link']; ?>" target="_blank">
															<i class="fa <?php echo $social['icon']; ?>"></i>
														</a>
												<?php
													}
												}
												?>
											</div>
										</div>
									</div>
								</div>
									</div>
						</div>
						<div class="col-md-3">
							<div class="single-page--description--right">
								<div class="single-page--description--right--author-details">
									<div class="single-page--description--right--author-details--img">
										<?php if (get_avatar($author_data->ID)) { ?>
											<?php echo get_avatar($author_data->ID); ?>
										<?php } else { ?>
											<img src="https://ahrefs.com/blog/wp-content/uploads/2019/10/meme-425x425.jpg" alt="">
											<!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>" alt=""> -->
										<?php } ?>
									</div>
									<div class="single-page--description--right--author-details--author-name">
										<a href="<?php echo home_url() . '/author/' . $author_data->user_nicename ?>" target="_blank">
											<?php echo $author_data->first_name;
											echo ' ';
											echo $author_data->last_name; ?>
										</a>
									</div>
									<div class="single-page--description--right--author-details--author-desc">
										<p><?php echo $author_data->description; ?></p>
									</div>
									<div class="single-page--description--right--author-details--author-social">
										<?php
										if ($socials) {
											foreach ($socials as $social) { ?>
												<a href="<?php echo $social['link']; ?>" target="_blank">
													<i class="fa <?php echo $social['icon']; ?>"></i>
												</a>
										<?php
											}
										}
										?>
									</div>
								</div>
								<!-- <div class="single-page--description--right--share-post ">
                <h6>Share this article</h6>
                <div class="single-page--description--right--share-post--icons">
                  <div class="share-icon twitter">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <div class="share-icon facebook">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <div class="share-icon linkedin">
                    <i class="fa fa-linkedin"></i>
                  </div>
                </div>
              </div> -->
							</div>
						</div>
					</div>
				</div>
		</section>
	<?php

	// the_post_navigation(
	// 	array(
	// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'rank-master') . '</span> <span class="nav-title">%title</span>',
	// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'rank-master') . '</span> <span class="nav-title">%title</span>',
	// 	)
	// );

	// If comments are open or we have at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) :
	// 	comments_template();
	// endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

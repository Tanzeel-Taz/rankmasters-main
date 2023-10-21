<?php
/* Template Name: Post Template 
Template Post Type: post, page
*/

get_header();


$post = get_queried_object();
$author_data = get_userdata($post->post_author);

$categories = get_the_category($post->ID);
$first_category = $categories[0];
$post_link = get_permalink($post->ID);

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

.single-page--description--mid--first-section--description div {
  background-color: rgba(31, 61, 235, .06);
  padding: 30px 40px 32px 30px;
  margin: 26px 0;
}

.single-page--description--mid--first-section--description div h5 {
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
  margin: 0 0 35px;
}

.single-page-post--details--desktop-image img {
  width: 650px;
}

.single-page-post--details--post-title {
  max-width: 50%;
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
  top: 10px;
  width: 260px;
  border-right: 1px solid #e7e7e7;
}

.logged-in .single-page--description .single-page--description-left,
.logged-in .single-page--description--right {
  top: 50px;
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
  top: 10px;
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
          <?php if (get_the_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            echo '<img src="https://ahrefs.com/blog/wp-content/uploads/2021/04/seob.png" alt="">';
                        } ?>
        </div>
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
              <li class="<?php echo ($i == 1) ? 'active' : ''; ?>"><a title="SEO fundamentals"
                  href="#section_<?php echo $i; ?>"><?php echo $i; ?>. <?php echo $section['title']; ?></a></li>
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
                  <img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/JoshuaHardwick.jpg"
                    alt="">
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
              <div class="single-page--description--right--share-post">
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
              </div>
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
<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rank_Master
 */

get_header();
// $category = get_queried_object();

// Get the current category ID
$current_category = get_queried_object();

// Get the ID of the "best" category
$best_category_id = get_term_by('slug', 'best', 'category')->term_id;

// Custom query args to retrieve posts from the current category that also have the "best" category
$args = array(
    'category__and' => array($current_category->term_id, $best_category_id),
    'posts_per_page' => 5, // Display all matching posts
    'post_type' => 'post', // Adjust if using a custom post type
);

// The Query
$custom_query = new WP_Query($args);
$best_articles = $custom_query->posts;
// $count = count($best_articles);
// var_dump($count);
// echo '<pre>';
// print_r($custom_query->posts);
// echo '</pre>';
?>
<style>
    .our-blog {
        color: var(--white);
        background-color: var(--primary);
        padding: 0;
    }

    .our-blog--details {
        padding: 48px 0 64px;
        text-align: center;
    }

    .our-blog--details--title {
        margin: 0 0 16px;
        color: inherit;
    }

    .our-blog--details p {
        max-width: 460px;
        margin-left: auto;
        margin-right: auto;
        color: inherit;
    }

    .our-blog--flag-line {
        position: relative;
    }

    .our-blog--flag-line::before {
        content: "";
        display: block;
        position: absolute;
        bottom: 0;
        left: 60px;
        right: 60px;
        height: 1px;
        background: rgba(255, 255, 255, 0.4);
    }

    .our-blog--flag-line::after {
        content: "";
        display: block;
        position: absolute;
        bottom: -18px;
        left: 50%;
        margin-left: -10px;
        width: 20px;
        height: 36px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABIAQMAAAC+xCV0AAAABlBMVEX8jkH////q93cUAAAAAnRSTlP/AOW3MEoAAAAVSURBVHgBY6A2GAX/SSP///9PAgkAfWwf4QQtxnkAAAAASUVORK5CYII=) 0 0 no-repeat;
        background-size: 100% auto;
        z-index: 1;
    }

    .our-blog--post {
        padding: 40px 40px 40px 50px;
        position: relative;
    }

    .our-blog--post--post-category {
        font-size: 16px;
        line-height: 22px;
        font-stretch: condensed;
        font-family: var(--bold);
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }

    .our-blog--post--post-category a {
        color: var(--white);
        text-decoration: none;
        font-stretch: condensed;
        font-family: var(--bold);
        text-align: left;
        transition: all 0.33s ease-out;
    }

    .our-blog--post--post-category a:hover {
        color: var(--accent);
    }

    .our-blog--post h2 {
        font-size: 38px;
        line-height: 42px;
        font-family: var(--bold);
        margin: 0 0 8px;
        text-align: left;
    }

    .our-blog--post h2 a {
        color: var(--white);
        text-decoration: none;
        transition: all 0.33s ease-out;
    }

    .our-blog--post h2 a:hover {
        color: var(--accent);
    }

    .our-blog--post-meta {
        font-size: 16px;
        line-height: 22px;
        color: var(--white);
        color: var(--primary);
        position: relative;
    }

    .our-blog--post-meta span {
        font-size: 18px;
        line-height: 29px;
    }

    .our-blog--post-meta span a {
        text-decoration: none;
    }

    .our-blog--post-meta>span:first-child {
        display: block;
        margin: 0 0 24px;
    }

    .our-blog--post-meta .post-author-avatar {
        float: left;
        display: block;
        width: 30px;
        height: 30px;
        margin: -2px 8px 0 0;
        border-radius: 30px;
    }

    .our-blog--post-meta .post-author-avatar img {
        border-radius: 30px;
    }

    .our-blog--post-meta .post-author-link {
        color: var(--white);
        color: var(--primary);
        border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.33s ease-out;
    }

    .our-blog--post-meta .post-author-link:hover,
    .relative-articles .our-blog--post--post-category a:hover,
    .relative-articles .our-blog--post h2 a:hover,
    .relative-articles .post-author-link:hover {
        color: var(--accent);
    }

    .our-blog--post-meta .post-date {
        margin: 0 7px;
    }

    .relative-articles {
        background-color: var(--white);
    }

    .relative-articles .our-blog--post--post-category a {
        transition: all 0.33s ease-out;
    }

    .relative-articles .our-blog--post h2 a {
        transition: all 0.33s ease-out;
        color: var(--primary);
    }


    .relative-articles .post-author-link {
        transition: all 0.33s ease-out;
    }

    .post-line::before {
        content: "";
        position: absolute;
        width: 1px;
        left: -1px;
        top: 40px;
        height: 100%;
        height: calc(100% - 80px);
        background-color: #e7e7e7;
        visibility: visible;
    }

    .relative-articles .product-blog {
        background-color: rgba(5, 74, 218, 0.1);
    }

    .subscribe-newsletter--section {
        margin: 0 auto;
        margin-top: 100px;
        padding: 48px 50px;

        color: var(--white);
        background-color: var(--primary);
    }

    .subscribe-newsletter--section--left {
        text-align: center;
    }

    .subscribe-newsletter--section--right .subscribe-form h2 {

        font-family: var(--bold);
        font-size: 38px;
        line-height: 42px;
        color: var(--white);
        margin: 0;
        padding: 0 0 8px;
    }

    .subscribe-newsletter--section--right .subscribe-form p {

        font-size: 18px;
        line-height: 29px;
        max-width: 300px;
    }

    .subscribe-newsletter--section--right .subscribe-form input {
        display: block;
        width: 300px;
        height: 42px;
        border-radius: 3px;

        font-size: 15px;
        line-height: 22px;
        margin: 24px 0 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background: inherit;
        padding: 0 16px;
    }

    .subscribe-newsletter--section--right .subscribe-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .subscribe-newsletter--section--right .subscribe-form input:focus {
        background: var(--white);
        outline: none;
        padding: 0 15px;
    }

    .subscribe-newsletter--section--right .subscribe-form input.wpcf7-submit {
        min-width: 190px;
        height: 42px;
        background: rgba(255, 255, 255, .25);
        border-radius: 4px;

        font-family: var(--bold);
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: var(--white);
        padding: 12px 59px;
        border: none;
        margin: 16px 0 0;
    }

    .category .col-md-4 {
        position: relative;
    }

    .category-details h2 {
        margin: 0 0 10px;
        font-family: var(--bold);
        font-size: 38px;
        line-height: 42px;
        text-align: center;
    }

    .category-details p {
        display: block;
        font-size: 18px;
        text-align: center;
        margin: 16px auto;
        padding: 0;
        line-height: 29px;
        max-width: 680px;
    }

    .category-navs {
        display: flex;
        justify-content: center;
        margin: 32px 0 40px;
    }

    .category-navs .nav-tabs,
    .category-navs .nav-tabs button {
        border: none;
    }

    .category-navs .nav-tabs button {

        font-family: var(--bold);
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: var(--primary);
        padding: 11px 16px;
        margin: 0 4px 8px;
        border: none;
        background: rgba(5, 74, 218, .1);
        border-radius: 4px;
        height: 40px;
    }

    .category-navs .nav-tabs button.active {
        background: var(--primary);
        color: var(--white);
    }

    .category-post {
        max-width: 300px;
        margin: 0 auto;
        margin-bottom: 32px;
    }

    .category-post a {
        text-decoration: none;
    }

    .category-post h3:hover {
        color: var(--accent);
    }

    .category-post--thumbnail {
        margin: 0 0 24px;
    }

    .category-post h3 {
        font-family: var(--bold);
        color: var(--primary);
        text-align: left;
        margin: 0 0 8px;
        transition: all 0.3s;
    }

    .category-post--post-meta {
        font-size: 18px;
        line-height: 29px;
        text-align: left;
    }

    .category .col-md-4.post-line::before {
        top: 0;
        height: 100%;
    }
</style>
<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
            // the_archive_title('<h1 class="page-title">', '</h1>');
            // the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */

        /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
        ?>
        <section class="our-blog">
            <div class="container">
                <div class="our-blog--details">
                    <img src="	https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/categories/icons/data-studies.svg" alt="">
                    <h2 class="our-blog--details--title">
                        <?php the_archive_title(); ?>
                    </h2>
                    <p>
                        <?php the_archive_description(); ?>
                    </p>
                </div>
            </div>
            <div class="our-blog--flag-line"></div>
        </section>
        <section class="category  upper-line">
            <div class="container">
                <div class="category-details">
                    <h2>Our Best Articles on <?php the_archive_title(); ?></h2>
                    <p>We handpicked these from the 250+ posts on the blog.</p>
                </div>
                <div class="row new-blog">
                    <?php
                    $a = 1;
                    foreach ($best_articles as $item) {
                        $post_link = get_permalink($item->ID);
                        $post_thumbnail = get_the_post_thumbnail($post_id);

                        $count = count($best_articles);
                    ?>
                        <?php
                        if ($a == 1) {
                        ?>
                            <div class="col-md-4">
                                <div class="category-post">
                                    <a href="<?php echo $post_link; ?>">
                                        <div class="category-post--thumbnail">
                                            <?php if ($post_thumbnail) { ?>
                                                <img src="<?php echo $post_thumbnail; ?>" alt="Post Thumbnail">
                                            <?php } else { ?>
                                                <img src="https://ahrefs.com/blog/wp-content/uploads/2021/04/seob.png" alt="">
                                            <?php } ?>
                                        </div>
                                        <h3> <?php echo $item->post_title; ?></h3>
                                    </a>
                                    <div class="category-post--post-meta">
                                        <span>
                                            <?php if ($item->post_excerpt) {
                                                echo $item->post_excerpt;
                                            } else {
                                                echo "Get your website set up for SEO success and learn the fundamentals of SEO.";
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else { ?>
                            <?php if ($a == 2 || $a == 4) { ?>
                                <div class="col-md-4 post-line">
                                <?php } ?>
                                <?php //if ($a < 6) { 
                                ?>
                                <div class="category-post ">
                                    <a href="<?php echo $post_link; ?>">
                                        <h3><?php echo $item->post_title; ?></h3>
                                    </a>
                                    <span>
                                        <?php if ($item->post_excerpt) {
                                            echo $item->post_excerpt;
                                        } else {
                                            echo "Get your website set up for SEO success and learn the fundamentals of SEO.";
                                        } ?>
                                    </span>
                                </div>
                                <?php //} 
                                ?>
                                <?php if ($a == 3 || $a == 5 || $count == 2 || $a == 4 && $count == 4) { ?>
                                </div>
                            <?php
                                }
                            ?>
                        <?php
                        }
                        ?>
                    <?php
                        $a++;
                        // wp_reset_postdata(); // Reset the query for the next sub-category
                    }

                    ?>
                </div>
            </div>
        </section>
        <section class="most-recent-articles relative-articles">
            <div class="most-articles">
                <div class="container">
                    <div class="recent-articles">
                        <h3>Most Recent Articles</h3>
                        <?php
                        // 						var_dump($current_category);
                        // Custom query args to retrieve posts from the current category that do not have the "best" category

                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;


                        $args = array(
                            //                             'category__in' => $current_category->term_id,
                            //                             'category__not_in' => $best_category_id,
                            'category_name' => $current_category->slug,
                            'posts_per_page' => 5, // Display 5 posts per page
                            'paged' => $paged, // Current page number
                            'post_type' => 'post', // Adjust if using a custom post type
                        );

                        // The Query
                        $custom_query = new WP_Query($args);
                        // The Loop
                        if ($custom_query->have_posts()) :
                            while ($custom_query->have_posts()) : $custom_query->the_post();
                                // Get post author data
                                $author_id = get_the_author_meta('ID');
                                $first_name = get_the_author_meta('first_name');
                                $last_name = get_the_author_meta('last_name');
                                $author_avatar = get_avatar_url($author_id, array('size' => 30));
                                $author_link = get_author_posts_url($author_id);
                        ?>
                                <div class="our-blog--post">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="our-blog--post-meta">
                                        <div class="post-author-date">
                                            <span class="post-author">
                                                <a href="<?php echo $author_link; ?>">
                                                    <span class="post-author-avatar">
                                                        <img src="<?php echo $author_avatar; ?>" alt="">
                                                        <!-- <img src="https://secure.gravatar.com/avatar/200e6bca8348597a3669b8c77d6c2cf3?s=30&d=mm&r=g" alt=""> -->
                                                    </span>
                                                    <span class="post-author-link"><?php echo $first_name . ' ' . $last_name; ?></span>
                                                </a>
                                            </span>
                                            <span class="post-date"><?php echo get_the_date('F j'); ?></span>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;

                            $big = 999999999; // need an unlikely integer
                            echo '<div class="wp-pagenavi">';
                            echo  paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total' => $custom_query->max_num_pages
                            ));
                            echo '</div>';

                            wp_reset_postdata();
                        else :
                            echo 'No posts found.';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
    // the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

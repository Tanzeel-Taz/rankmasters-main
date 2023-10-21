<?php

/**
 * The template for displaying author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rank_Master
 */

get_header();
$author_id = get_queried_object_id(); // Get the author's ID
$first_name = get_the_author_meta('first_name', $author_id); // Get the author's display name
$last_name = get_the_author_meta('last_name', $author_id); // Get the author's display name
$author_description = get_the_author_meta('description', $author_id); // Get the author's description
$author_avatar = get_avatar_url(get_the_author_meta('user_email', $author_id)); // Get the author's avatar URL

$socials = get_field('socials', 'user_' . $author_id);
// var_dump($socials);




// echo '<h1>Posts by ' . $author_name . '</h1>';
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    'author' => $author_id,
    'post_type' => 'post',
    'posts_per_page' => 5, // Display all posts by the author
    'paged' => $paged,
);

$author_posts = new WP_Query($args);


?>
<style>
    .our-blog--post {
        padding: 40px 40px 40px 50px;
        position: relative;
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
        /* color: var(--white); */
        position: relative;
    }

    .our-blog--post-meta a {
        text-decoration: none;
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
        /* color: var(--white); */
        border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.33s ease-out;
    }

    .our-blog--post-meta .post-date {
        margin: 0 7px;
    }

    .our-blog--post-meta .post-author-link:hover,
    .relative-articles .our-blog--post--post-category a:hover,
    .relative-articles .our-blog--post h2 a:hover,
    .relative-articles .post-author-link:hover {
        color: var(--accent);
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

    .authors {
        color: var(--white);
        text-align: center;
        background: var(--primary);
        position: relative;
    }

    .authors-detail--left {
        text-align: left;
        max-width: 540px;
        margin-left: auto;
    }

    .authors-detail--left--title {
        font-family: var(--bold);
        font-size: 16px;
        line-height: 22px;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        margin-bottom: 16px;
        font-stretch: condensed;
        color: inherit;
    }

    .authors-detail--left--author--name {
        font-family: var(--regular);
        font-size: 60px;
        line-height: 57px;
        color: inherit;
    }

    .authors-detail--left--author--subtitle {
        font-family: var(--regular);
        font-size: 18px;
        line-height: 29px;
        color: rgba(255, 255, 255, 0.7);
    }

    .authors-detail--left--author--description {
        margin-top: 48px;
    }

    .authors-detail--left--author--description p {
        margin: 0 0 16px;
        color: inherit;
    }

    .authors-detail--right {
        padding-left: 60px;
    }

    .authors-detail--right--image {
        width: 256px;
        height: 256px;
        margin-bottom: 16px;
    }

    .authors-detail--right--image img {
        height: 100%;
        width: 100%;
    }

    .authors-detail--right--social-icons {
        display: flex;
    }

    .authors-detail--right--social-icons a {
        height: 42px;
        width: 42px;
        margin: 0 16px 0 0;
        background: #003fc1;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        transition: all 0.33s ease-out;
    }

    .authors-detail--right--social-icons a:hover {
        background: var(--accent);
    }

    .authors-detail--right--social-icons a i {
        line-height: 42px;
        font-size: 32px;
        color: var(--white);
    }

    .authors-detail--right--social-icons .icon-site {
        background-image: url(https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/icon-site.svg);
        width: 42px;
        height: 42px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .most-recent-articles {
        text-align: center;
        margin-bottom: unset;
    }

    .most-articles:not(:last-child) {
        border-bottom: 1px solid #ededed;
    }

    .recent-articles {
        max-width: 660px;
        margin: 0 auto;
    }

    .most-recent-articles h3 {
        font-family: var(--bold);
        font-size: 38px;
        line-height: 42px;
        text-align: center;
    }

    .most-recent-articles .our-blog--post {
        padding: 40px 0;
    }

    .most-recent-articles .our-blog--post h2 {
        text-align: center;
        margin-bottom: 14px;
    }

    .most-recent-articles .our-blog--post-meta {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .most-recent-articles .our-blog--post-meta .post-author-link {
        border-bottom: 1px solid #e7e7e7;
        font-size: 16px;
    }

    .most-recent-articles .our-blog--post-meta .post-date {
        font-size: 16px;
    }
</style>
<main id="primary" class="site-main">


    <section class="authors">
        <div class="container">
            <div class="authors-detail">
                <div class="row">
                    <div class="col-md-7">
                        <div class="authors-detail--left">
                            <h4 class="authors-detail--left--title">Authors</h4>
                            <h1 class="authors-detail--left--author--name"><?php echo $first_name . ' ' . $last_name; ?></h1>
                            <div class="authors-detail--left--author--description">
                                <p>
                                    <?php echo $author_description; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="authors-detail--right">
                            <div class="authors-detail--right--image">
                                <img src="<?php echo $author_avatar; ?>" alt="<?php echo $author_first_name . ' ' . $author_last_name; ?>">

                                <!-- <img src="https://ahrefs.com/blog/wp-content/uploads/2022/03/Jenny-profile-color.jpg" alt=""> -->
                            </div>
                            <div class="authors-detail--right--social-icons">
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
    </section>
    <section class="most-recent-articles relative-articles">
        <h3>Most Recent Articles</h3>
        <?php
        if ($author_posts->have_posts()) :
            while ($author_posts->have_posts()) : $author_posts->the_post();
                // Display post content here
                // the_title(); // Example: Display the post title
        ?>
                <div class="most-articles">
                    <div class="container">
                        <div class="recent-articles">
                            <div class="our-blog--post">
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="our-blog--post-meta">
                                    <div class="post-author-date">
                                        <span class="post-author">
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                <span class="post-author-avatar">
                                                    <?php echo get_avatar(get_the_author_meta('user_email'), 30); ?>
                                                </span>
                                                <span class="post-author-link"><?php echo $first_name . ' ' . $last_name; ?></span>
                                            </a>
                                        </span>
                                        <span class="post-date"><?php the_time('F j'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();

            $big = 999999999; // need an unlikely integer
            echo '<div class="wp-pagenavi">';
            echo  paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $author_posts->max_num_pages
            ));
            echo '</div>';
        else :
            echo 'No posts found by this author.';
        endif;
        ?>

    </section>


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

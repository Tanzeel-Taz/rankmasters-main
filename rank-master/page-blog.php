<?php

get_header(); ?>
<style>
    .our-blog {
        color: #fff;
        background-color: var(--secondary);
        padding: 0;
    }

    .our-blog--details {
        padding: 48px 0 64px;
        text-align: center;
    }

    .our-blog--details--title {
        font-size: 50px;
        line-height: 54px;
        margin: 0 0 16px;
        color: inherit;
    }

    .our-blog--details p {
        max-width: 460px;
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
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

    .hero .our-blog--post--post-category a:hover {
        color: var(--primary);
    }

    .our-blog--post h3 {
        font-size: 38px;
        line-height: 42px;
        font-family: var(--bold);
        margin: 0 0 8px;
        text-align: left;
    }

    .our-blog--post h3 a {
        color: var(--white);
        text-decoration: none;
        transition: all 0.33s ease-out;
    }

    .our-blog--post h3 a:hover {
        color: var(--accent);
    }

    .hero .our-blog--post h3 a:hover {
        color: var(--primary);
    }

    .our-blog--post-meta {
        font-size: 16px;
        line-height: 22px;
        color: #fff;
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
        color: var(--primary);
    }

    .hero .our-blog--post-meta>span:first-child {
        color: inherit;
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
        border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.33s ease-out;
    }

    .our-blog--post-meta .post-author-link:hover,
    .relative-articles .our-blog--post--post-category a:hover,
    .relative-articles .our-blog--post h3 a:hover,
    .relative-articles .post-author-link:hover {
        color: var(--accent);
    }

    .our-blog--post-meta .post-author-link:hover {
        color: var(--primary);
    }

    .our-blog--post-meta .post-date {
        margin: 0 7px;
    }

    .relative-articles {
        background-color: #fff;
    }

    .relative-articles .our-blog--post--post-category a {
        transition: all 0.33s ease-out;
        color: var(--accent);
    }

    .relative-articles .our-blog--post h3 a {
        transition: all 0.33s ease-out;
        color: var(--primary);
    }

    .relative-articles .our-blog--post-meta {
        color: #333;
    }

    .relative-articles .post-author-link {
        transition: all 0.33s ease-out;
        color: #333;
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
        background-color: rgba(61, 158, 240, 0.12);
    }

    @media (min-width: 1200px) {
        .subscribe-newsletter--section {
            width: 1160px;
        }
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
        /* color: #333; */
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
        color: var(--accent);
        padding: 11px 16px;
        margin: 0 4px 8px;
        border: none;
        background: var(--accentT);
        border-radius: 4px;
        height: 40px;
    }

    .category-navs .nav-tabs button.active {
        background: var(--accent);
        color: #fff;
    }

    @media (min-width: 1200px) {
        .category-tabs {
            width: 1060px;
            margin: 0 auto;
        }
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
        text-align: left;
        margin: 0 0 8px;
        transition: all 0.3s;
    }

    .category-post--post-meta {
        font-size: 18px;
        line-height: 29px;
        color: var(--primary);
        text-align: left;
    }

    .category .col-md-4.post-line::before {
        top: 0;
        height: 100%;
    }
</style>
<?php

if (have_rows('blog_components')) :

    while (have_rows('blog_components')) : the_row();

        $template = get_row_layout();
        // var_dump($template);

        if (get_row_layout() != '' && get_row_layout() != 'casestudy') :
            get_template_part('components/blog/' . $template);
        elseif (get_row_layout() != '' && get_row_layout() == 'casestudy') :
            get_template_part('components/general/' . $template);
        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>
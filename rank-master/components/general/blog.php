<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$items = get_sub_field('articles');
// echo '<pre>';
// print_r($items);
// echo '<pre>';
?>
<style>
    .homepage-blog {
        color: var(--white);
    }

    .homepage-blog .container {
        background-color: var(--primary);
        padding: 5em 2.285em;
        border-radius: 0.53em;
    }

    .homepage-blog .col-md-4 {
        padding: 0 17.5px;
    }

    .homepage-blog--intro-wrapper {
        display: flex;
        flex-direction: column;
        row-gap: 2em;
        margin-bottom: 6em;
    }

    .homepage-blog--intro-wrapper__heading {
        color: inherit;
    }

    .homepage-blog--intro-wrapper__heading span {
        color: var(--tertiary);
    }

    .homepage-blog--intro-wrapper__description {
        color: inherit;
        max-width: 35%;
        margin: auto;
    }

    .homepage-blog--card-wrapper {
        border: 0.5px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .homepage-blog--card-wrapper>a img {
        max-width: 100%;
        border-radius: 10px 10px 0 0;
    }

    .homepage-blog--card-wrapper--outer-wrapper {
        height: 100%;
        padding: 1.6em 1.9em 2em;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper {
        display: flex;
        -moz-column-gap: 1em;
        column-gap: 1em;
        align-items: center;
        border-bottom: 0.5px solid rgba(255, 255, 255, 0.3);
        margin-bottom: 1.5em;
        padding-bottom: 1.5em;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper>img {
        width: 4.58em;
        height: 4.58em;
        border-radius: 100%;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__name {
        font-family: var(--medium);
        color: inherit;
        width: 100%;
        border-bottom: 0.5px solid rgba(255, 255, 255, 0.3);
        text-transform: capitalize;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category {
        font-size: 1.04em;
        color: inherit;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category a {
        color: inherit;
        text-decoration: none;
    }

    .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category a:hover {
        color: var(--accent);
    }

    .homepage-blog--card-wrapper--outer-wrapper--content-wrapper__title {
        color: inherit;
        margin-bottom: 0.5em;
    }

    .homepage-blog--card-wrapper--outer-wrapper--content-wrapper__description {
        color: inherit;
        margin-bottom: 1.6em;
    }

    .homepage-blog--plain-cards-outer {
        display: flex;
        flex-direction: column;
        row-gap: 2.5em;
    }

    .homepage-blog--plain-cards-outer>a {
        height: 50%;
    }

    .homepage-blog--plain-card-wrapper {
        display: flex;
        align-self: center;
        background-color: var(--secondary);
        border-radius: 10px;
        padding: 2em 2.2em;
        text-decoration: none;
        color: var(--white);
        transition: all 0.3s;
    }

    .homepage-blog--plain-card-wrapper:hover {
        color: var(--white);
    }

    .homepage-blog--plain-card-wrapper.card-3 {
        background-color: var(--accent);
    }

    .homepage-blog--plain-card-wrapper.card-2:hover,
    .homepage-blog--plain-card-wrapper.card-3:hover {
        scale: 1.02;
    }

    .homepage-blog--plain-card-wrapper--content-wrapper {
        height: -moz-max-content;
        height: max-content;
        margin: auto;
        display: flex;
        flex-direction: column;
        row-gap: 0.5em;
    }

    .homepage-blog--plain-card-wrapper--content-wrapper p,
    .homepage-blog--plain-card-wrapper--content-wrapper h3 {
        color: inherit;
    }

    @media (max-width: 767px) {
        .homepage-blog--intro-wrapper__description {
            max-width: 95%;
            margin: auto;
        }

        .homepage-blog--card-wrapper>a img {
            width: 100%;
        }

        .homepage-blog--plain-card-wrapper.card-2 {
            margin-top: 2.5em;
        }

        .homepage-blog--plain-card-wrapper.card-3 {
            margin-bottom: 2.5em;
        }

        .homepage-blog--intro-wrapper__heading {
            font-size: 30px;
        }

        .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category a {
            font-size: 12px;
        }

        .homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__name {
            font-size: 15px;
        }

        .homepage-blog--card-wrapper--outer-wrapper--content-wrapper__description {
            font-size: 14px;
        }

        .homepage-blog--card-wrapper--outer-wrapper--content-wrapper__button {
            font-size: 10px;
        }
    }
</style>
<section class="homepage-blog">
    <div class="container">
        <div class="row">
            <div class="homepage-blog--intro-wrapper">
                <h2 class="homepage-blog--intro-wrapper__heading text-center">
                    <?php echo $headline; ?>
                </h2>
                <p class="homepage-blog--intro-wrapper__description text-center">
                    <?php echo $description; ?>
                </p>
            </div>
            <?php
            $i = 1;
            foreach ($items as $item) {
                $author_data = get_userdata($item->post_author);
                $categories = get_the_category($item->ID);
                $first_category = $categories[0];
                $post_link = get_permalink($item->ID);
                if ($i == 1 || $i == 4) {

                    // echo '<pre>';
                    // print_r($item->post_name);
                    // echo '</pre>';
                    // $author_id = get_post_field('post_author', $item->ID);
                    // var_dump($item->post_author);
                    // var_dump($post_link);
                    // var_dump($first_category->name);
            ?>
                    <div class="col-md-4">
                        <div class="homepage-blog--card-wrapper">
                            <a href="<?php echo $post_link; ?>">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/6457a7546e54a9453f31ac5b_6449377dcbe38f034cbed35f_5fd6ca92304e927c9b7859e9_52520to2520Strategy-p-500.jpeg' ?>" alt="">
                            </a>
                            <div class="homepage-blog--card-wrapper--outer-wrapper d-flex flex-column">
                                <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper">
                                    <?php if (get_avatar($author_data->ID)) { ?>
                                        <?php echo get_avatar($author_data->ID); ?>
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>" alt="">
                                    <?php } ?>
                                    <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper">
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__name">
                                            <?php echo $author_data->first_name;
                                            echo ' ';
                                            echo $author_data->last_name; ?>
                                        </p>
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category">
                                            <a href="<?php echo esc_url(get_category_link($first_category->term_id)); ?>"><?php echo $first_category->name; ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper d-flex flex-column h-100">
                                    <h3 class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__title">
                                        <?php echo $item->post_title; ?>
                                    </h3>
                                    <p class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__description">
                                        In this article, we'll break down the most effective ways to reach and convert your
                                        target users to become a leader in the SaaS market.
                                    </p>
                                    <a href="<?php echo $post_link; ?>" class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__button btn-tertiary mt-auto">Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {

                    if ($i == 2) {
                    ?>
                        <div class="col-md-4 homepage-blog--plain-cards-outer">
                        <?php } ?>
                        <a href="<?php echo $post_link; ?>" class="homepage-blog--plain-card-wrapper text-center card-<?php echo $i; ?>">
                            <div class="homepage-blog--plain-card-wrapper--content-wrapper">
                                <h3 class="homepage-blog--plain-card-wrapper--content-wrapper__title">
                                    <?php echo $item->post_title; ?>
                                </h3>
                                <p class="homepage-blog--plain-card-wrapper--content-wrapper__description">
                                    A Seven-Step Guide to SaaS growth with Content Marketing.
                                </p>
                            </div>
                        </a>
                        <?php
                        if ($i == 3) { ?>
                        </div>
            <?php
                        }
                    }
                    $i++;
                }
            ?>

        </div>
    </div>
</section>
<?php
$items = get_sub_field('posts');
// echo '<pre>';
// print_r($posts);
// echo '<pre>';
?>
<style>
    .homepage-casestudy .row {
        row-gap: 24px;
    }

    .homepage-casestudy--card {
        border-radius: 5px;
    }

    .homepage-casestudy--card.horizontal {
        display: flex;
        border: 1px solid #e2e5ec;
        border-radius: 5px;
    }

    .homepage-casestudy--card.horizontal>div {
        width: 50%;
    }

    .homepage-casestudy--card--img-wrapper {
        border-radius: 5px 0 0 5px;
    }

    .homepage-casestudy--card--img-wrapper a img {
        height: 100%;
    }

    .homepage-casestudy--card--content-wrapper {

        background-color: rgba(61, 158, 240, 0.08);
        border-radius: 0 5px 5px 0;
        /* padding: 15px; */
        padding-top: 78px;
        padding-bottom: 27px;
        padding-left: 65px;
        padding-right: 65px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .casestudy-height {
        height: auto;
    }

    .homepage-casestudy--card--content-wrapper:not(:first-child) {
        padding-top: 54px;
    }

    .homepage-casestudy--card.vertical {
        border: 1px solid #e2e5ec;
        border-radius: 5px;
        height: 100%;
        background: #fff;
        display: flex;
        flex-direction: column;
    }

    .homepage-casestudy--card--content-wrapper__title {
        font-family: var(--regular);
        padding: 0 0 18px;
        letter-spacing: -0.01em;
        color: var(--primary);
        margin: 0;
    }

    .homepage-casestudy--card--content-wrapper__title a {
        color: #1c244d;
    }

    .homepage-casestudy--card--content-wrapper__description {
        flex-grow: 1;
        color: var(--primary);
        padding-bottom: 4.5rem;
    }

    .homepage-casestudy--card--content-wrapper__title span {
        font-family: var(--semibold);
    }

    .homepage-casestudy--card--content-wrapper__button {
        display: block;
        margin-left: auto;
        text-align: right;
        text-decoration: none;
        color: var(--primary);
        transition: 0.3s;
        font-family: var(--bold);
        letter-spacing: 0.02em;
        text-transform: uppercase;
        background-color: transparent;
        padding: 0;
    }

    .homepage-casestudy--card--content-wrapper__button svg {
        margin: -3px 0 0 10px;
    }

    .homepage-casestudy--card--content-wrapper__button svg path,
    .homepage-casestudy--card--content-wrapper__button svg line {
        transition: all 0.3s ease-in-out;
        stroke: var(--primary);
    }

    .homepage-casestudy--card--content-wrapper__button:hover {
        margin-left: 4px;
        color: var(--secondary);
        transform: none;
        box-shadow: none;
    }

    .homepage-casestudy--card--content-wrapper__button:hover svg path,
    .homepage-casestudy--card--content-wrapper__button:hover svg line {
        stroke: var(--secondary);
    }

    @media (max-width: 991px) {

        .homepage-casestudy .homepage-casestudy--card--content-wrapper {
            padding: 25px 15px;
        }
    }

    @media (max-width: 767px) {
        .homepage-casestudy--card.horizontal {
            flex-direction: column;
        }

        .homepage-casestudy--card.horizontal>div {
            width: 100%;
        }
    }
</style>
<section class="homepage-casestudy">
    <div class="container">
        <div class="row">
            <?php
            $i = 1;
            foreach ($items as $item) {
                // echo "<pre>";
                // print_r($item);
                // echo "<pre>";
            ?>
                <?php if ($i == 1) { ?>
                    <div class="col-12">
                        <div class="homepage-casestudy--card horizontal">
                            <div class="homepage-casestudy--card--img-wrapper">
                                <a href="<?php echo $item->guid; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/casestudy.png'; ?>" alt="">
                                </a>
                            </div>
                            <div class="homepage-casestudy--card--content-wrapper d-flex flex-column justify-content-evenly casestudy-height">
                                <h3 class="homepage-casestudy--card--content-wrapper__title">
                                    <?php echo $item->post_title; ?>
                                </h3>
                                <p class="homepage-casestudy--card--content-wrapper__description">
                                    <?php
                                    if ($item->excerpt) {
                                        echo $item->excerpt;
                                    } else {
                                        echo "See how we revamped their SEO structure, built a coherent content plan, and got quality
                                        backlinks to level up their online presence.";
                                    }
                                    ?>
                                </p>
                                <a href="<?php echo $item->guid; ?>" class="homepage-casestudy--card--content-wrapper__button">
                                    read case study
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                        <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                        <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-6">
                        <div class="homepage-casestudy--card vertical">
                            <div class="homepage-casestudy--card--img-wrapper">
                                <a href="<?php echo $item->guid; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/casestudy' . $i . '.png'; ?>" alt="">
                                </a>
                            </div>
                            <div class="homepage-casestudy--card--content-wrapper">
                                <h3 class="homepage-casestudy--card--content-wrapper__title">
                                    <?php echo $item->post_title; ?>
                                </h3>
                                <p class="homepage-casestudy--card--content-wrapper__description">
                                    See how we revamped their SEO structure, built a coherent content plan, and got quality
                                    backlinks to level up their online presence.
                                </p>
                                <a href="<?php echo $item->guid; ?>" class="homepage-casestudy--card--content-wrapper__button">
                                    read case study
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                        <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                        <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php
                $i++;
            } ?>
        </div>
    </div>
</section>
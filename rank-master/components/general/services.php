<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$sections = get_sub_field('sections');
?>
<style>
    .title-wrap {
        width: 100%;
        margin: 0 auto;
        padding: 0 15px 20px;
        text-align: center;
    }

    .services-growth-wrap--growth-section .title-wrap {
        max-width: 1040px;
    }

    h2 {
        margin: 0;
    }

    .title-wrap h2 {
        padding: 0 0 22px;
    }

    /* .title-wrap p {
        font-size: 20px;
        line-height: 32px;
    } */

    .title-wrap p:nth-last-child(1) {
        padding: 0;
    }

    .services-growth-wrap--growth-section .growth-listing {
        padding: 55px 0 0;
    }

    .services-growth-wrap--growth-section .growth-listing>li:not(:last-child) {
        margin: 0 0 70px;
    }

    .services-growth-wrap--growth-section .growth-listing li {
        position: relative;
    }

    .services-growth-wrap--growth-section .growth-listing .box {
        max-width: 1440px;
        display: flex;
        flex-wrap: wrap;
        padding: 70px 0 15px;
        margin: 0 auto;
    }

    .services-growth-wrap--growth-section .growth-listing .box .image img {
        width: 100%;
        border: 0;
        vertical-align: top;
        max-width: 100%;
        height: auto;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content {
        position: relative;
        max-width: 682px;
        margin-left: auto;
    }

    .services-growth-wrap--growth-section .growth-listing .box.flex-row-reverse .content {
        margin-right: auto;
        margin-left: unset;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .h3 {
        font-family: var(--regular);
        max-width: 566px;
        margin: 0 0 70px;
        font-size: 35px;
        line-height: 45px;
        letter-spacing: -0.01em;
        color: var(--primary);
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing {
        display: flex;
        flex-wrap: wrap;
    }

    .services-growth-wrap--growth-section .growth-listing li {
        position: relative;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing>li {
        width: 300px;
        margin: 0 27px;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .inner-box {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing>li:nth-child(odd) {
        margin-left: 0;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .title-img {
        display: flex;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .title-link {
        padding-left: 16px;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .title-link a {
        font-family: var(--semibold);
        color: var(--secondary);
        font-size: 20px;
        line-height: 1.25;
        text-decoration: none;
        transition: all 0.3s;
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .title-link a:hover {
        color: var(--accent);
    }

    .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .info {
        /* height: 172px; */
        padding: 22px 0 40px;
        border-bottom: 2px solid #e2e5ec;
        margin-bottom: 16px;
        flex-grow: 1;
        color: var(--primary);
    }

    .services-growth-wrap--growth-section .cta-btn.link a {
        display: inline-flex;
        align-items: center;
        font-family: var(--bold);
        font-size: 14px;
        line-height: 36px;
        letter-spacing: 0.02em;
        text-transform: uppercase;
        background-color: transparent !important;
        padding: 0;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        color: var(--secondary);
    }

    .cta-btn.link a:hover {
        margin-left: 4px;
        color: var(--accent);
        transform: none;
        z-index: 1;
        box-shadow: none;
    }

    .cta-btn.link a:hover .svg path,
    .cta-btn.link a:hover .svg line {
        stroke: var(--accent);
    }

    .cta-btn.link a .svg,
    .cta-btn.link a .svg path,
    .cta-btn.link a .svg line {
        margin-left: 10px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        vertical-align: middle;
        stroke: var(--secondary);
    }

    @media (max-width: 1200px) {
        .services-growth-wrap--growth-section .growth-listing {
            padding: 20px 0 0;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content {
            max-width: 600px;
            padding: 0 15px;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing>li {
            width: 44%;
            margin: 0 15px;
        }
    }

    @media (max-width: 991px) {
        .services-growth-wrap--growth-section .growth-listing {
            padding: 5px 0 0;
        }

        .services-growth-wrap--growth-section .growth-listing .box {
            padding: 20px 0;
        }

        .title-wrap .h2 {
            font-size: 30px;
            line-height: 38px;
            padding: 0 0 16px;
        }

        .title-wrap p {
            font-size: 18px;
            margin: 0;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content .h3 {
            width: 100%;
            max-width: 100%;
            margin: 0 0 10px;
            font-size: 22px;
            line-height: 32px;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing>li {
            width: 100%;
            margin: 20px 0;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .title-link a {
            font-size: 18px;
            line-height: 22px;
        }

        .services-growth-wrap--growth-section .growth-listing .box .content .inner-listing .info {
            height: auto;
            padding: 10px 0 24px;
            margin: 0 0 10px;
        }
    }

    @media (max-width: 767px) {
        .services-growth-wrap--growth-section .growth-listing .box {
            justify-content: start;
        }

        .services-growth-wrap--growth-section .growth-listing .box .image {
            margin: 0 0 60px;
        }

        .services-growth-wrap--growth-section .growth-listing>li:not(:last-child) {
            margin: 0 0 20px;
        }
    }
</style>
<section class="services">
    <div class="services-growth-wrap home-growth-page saas-growth-blog">
        <div class="container">
            <div class="services-growth-wrap--growth-section">
                <div class="title-wrap" data-aos="fade-up">
                    <h2><?php echo $headline; ?></h2>
                    <div class="description">
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
                <ul class="growth-listing">
                    <?php foreach ($sections as $section) { ?>
                        <li class="growth-list row" data-aos="fade-up">
                            <div class="box <?php if ($section['image_position'] == 'left') {
                                                echo 'flex-row-reverse';
                                            } ?>">
                                <div class="image col-lg-5 col-md-6">
                                    <?php if ($section['image']) { ?>
                                        <img src="<?php echo $service['image']['url']; ?>" alt="<?php echo $service['image']['title']; ?>" loading="lazy" class="attachment-full size-full">
                                    <?php } else { ?>
                                        <img width="1547" height="1502" src="https://growfusely.com/wp-content/uploads/2023/04/Group-1000002526.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                                    <?php } ?>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="content">
                                        <h3 class="h3"><?php echo $section['title']; ?></h3>
                                        <ul class="inner-listing">
                                            <?php foreach ($section['services'] as $service) { ?>
                                                <li>
                                                    <div class="inner-box">
                                                        <div class="title-img">
                                                            <div class="img">
                                                                <?php if ($service['icon']) { ?>
                                                                    <img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['icon']['title']; ?>" loading="lazy" class="attachment-full size-full">
                                                                <?php } else { ?>
                                                                    <img src="https://growfusely.com/wp-content/uploads/2023/01/digital-pr.svg" class="attachment-full size-full" alt="digital-pr" decoding="async" loading="lazy">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="title-link">
                                                                <a href="<?php echo $service['link']['url']; ?>" aria-label=""><?php echo $service['title']; ?></a>
                                                            </div>
                                                        </div>
                                                        <div class="info">
                                                            <p><?php echo $service['description']; ?></p>
                                                        </div>
                                                        <div class="cta-btn link">
                                                            <a href="<?php echo $service['link']['url']; ?>" aria-label=""><?php echo $service['link']['title']; ?> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                                                    <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                                                    <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                                                </svg></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
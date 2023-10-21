<?php
// var_dump(get_queried_object());
// var_dump(get_field('homepage_hero'));
$kicker = get_sub_field('kicker');
// var_dump($kicker);
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$primary_button = get_sub_field('primary_button');
$secondary_button = get_sub_field('secondary_button');
$brand_logos = get_sub_field('brand_logos');
?>

<style>
    .homepage-hero--intro {
        max-width: 70%;
        text-align: center;
        margin: auto;
        display: flex;
        flex-direction: column;
        row-gap: 2em;
    }

    .homepage-hero--intro__description {
        width: 60%;
        margin: auto;
    }

    .homepage-hero--intro--cta {
        display: flex;
        -moz-column-gap: 2.5em;
        column-gap: 2.5em;
        justify-content: center;
    }

    .homepage-hero--logos {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        -moz-column-gap: 2em;
        column-gap: 2em;
        row-gap: 2em;
        padding-top: 10em;
    }

    .homepage-hero--logos img {
        width: 10em;
        height: 2.08em;
    }

    @media (max-width: 767px) {
        .homepage-hero--intro {
            max-width: 90%;
        }

        .homepage-hero--intro__heading {
            font-size: 5em;
        }

        .homepage-hero--intro__description {
            width: 90%;
            max-width: 450px;
            font-size: 1.6em;
        }
    }

    @media (max-width: 500px) {
        .section {
            padding: 2em 0;
        }

        .homepage-hero--intro--cta {
            flex-direction: column;
            align-items: center;
            row-gap: 2em;
        }

        .homepage-hero--intro__heading {
            font-size: 4em;
        }
    }
</style>

<section class="homepage-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="homepage-hero--intro">
                    <p><?php echo $kicker; ?></p>
                    <h1 class="homepage-hero--intro__heading"><?php echo $headline; ?></h1>
                    <p class="homepage-hero--intro__description"><?php echo $description; ?></p>
                    <div class="homepage-hero--intro--cta">
                        <?php if ($primary_button) { ?>
                            <a href="<?php echo $primary_button['url']; ?>" target="<?php echo $primary_button['target']; ?>" class="homepage-hero--intro--cta__contact btn-secondary"><?php echo $primary_button['title']; ?></a>
                        <?php }
                        if ($secondary_button) {
                        ?>
                            <a href="<?php echo $secondary_button['url']; ?>" target="<?php echo $secondary_button['target']; ?>" class="homepage-hero--intro--cta__pricing btn-primary"><?php echo $secondary_button['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            if ($brand_logos) { ?>
                <div class="col-12">
                    <div class="homepage-hero--logos d-flex">
                        <?php foreach ($brand_logos as $brand_logo) { ?>
                            <img src="<?php echo $brand_logo['logo']; ?>" alt="">
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
$headline = get_sub_field('headline');
$content = get_sub_field('content');
$image = get_sub_field('image');
$button = get_sub_field('button');
?>
<style>
    .homepage-about-us--content-block {
        padding-right: 25px;
    }

    .homepage-about-us--image-block {
        padding-left: 25px;
    }

    @media (max-width: 1024px) {
        .__headline {
            font-size: 37px;
        }
    }

    @media (max-width: 991px) {
        .homepage-about-us .col-md-6 {
            width: 100%;
        }

        .col-md-6.homepage-about-us--image-block {
            order: 1;
            margin-bottom: 50px;
        }

        .col-md-6.homepage-about-us--content-block {
            order: 2
        }

        .homepage-about-us .btn-primary {
            order: 3;
        }
    }

    @media screen and (max-width: 767px) {
        .__headline {
            font-size: 30px;
            text-align: center;
        }

        .homepage-about-us .btn-primary {
            font-size: 14px;
        }
    }
</style>
<section class="homepage-about-us" style="background-color: #f9f9f7;">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="__headline mb-5">
                <?php echo $headline; ?>
            </h2>
            <div class="col-md-6 homepage-about-us--content-block">
                <?php echo $content; ?>
            </div>
            <div class="col-md-6 d-none d-sm-block homepage-about-us--image-block">
                <?php if ($image) { ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                <?php } else { ?>

                    <img src="https://source.unsplash.com/random?building" alt="">
                <?php } ?>
            </div>
            <?php if ($button) { ?>
                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn-primary w-auto m-auto mt-5"><?php echo $button['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>
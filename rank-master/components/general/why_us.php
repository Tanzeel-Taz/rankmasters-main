<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$boxes = get_sub_field('boxes');
$button = get_sub_field('button');
?>
<style>
    .homepage-why-us .row {
        row-gap: 24px;
    }

    .homepage-why-us .col-sm-6.col-lg-3 {
        padding: 0 15px;
    }

    .title-wrap {
        max-width: 1040px;
        margin: auto;
		text-align: center;
    }

    .title-wrap h2 {
        padding: 0 0 22px;
    }

    .homepage-why-us--card {
        padding: 2.7em 3em;
        border-radius: 5px;
        display: flex;
        row-gap: 2.2em;
        flex-direction: column;
        transition: all 0.3s;
        border: 2px solid transparent;

    }

    .homepage-why-us--card:hover {
        border: 2px solid var(--secondary);
    }

    .homepage-why-us--card.inverse {
        flex-direction: column-reverse;
    }

    .homepage-why-us--card.inverse img {
        margin-left: auto;
        display: block;
    }

    .homepage-why-us--card.card-1,
    .homepage-why-us--card.card-3 {
        background-color: #3bff90;
    }

    .homepage-why-us--card.card-2,
    .homepage-why-us--card.card-4 {
        background-color: #fc8d55;
    }

    .homepage-why-us--card--img-wrapper img {
        height: auto;
        width: 150px;
        max-width: 75%;
        aspect-ratio: 1;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .homepage-why-us--card--content-wrapper__title {
        font-size: 1.72em;
        font-family: var(--regular);
        border-bottom: 1px solid black;
        padding-bottom: 0.7em;
        margin-bottom: 1em;
    }

    .homepage-why-us--card--content-wrapper__title p {
        color: var(--black);
    }

    .homepage-why-us--card--content-wrapper__title span {
        font-family: var(--semibold);
        color: var(--secondary);
    }

    @media (max-width: 1200px) {
        .homepage-why-us .col-sm-6.col-lg-3 {
            width: 50%;
        }
    }

    @media (max-width: 767px) {
        .homepage-why-us .col-sm-6.col-lg-3 {
            width: 100%;
        }
    }
</style>
<section class="homepage-why-us" style="background-color: #f4f4f1;">
    <div class="container">
        <div class="row">
            <div class="title-wrap">
                <h2 class="homepage-why-us__headline"><?php echo $headline; ?></h2>
                <p class="homepage-why-us__description"><?php echo $description; ?></p>
            </div>
            <?php
            $i = 1;
            foreach ($boxes as $box) { ?>
                <div class="col-sm-6 col-lg-3">
                    <div style="background-color: <?php echo $box['background']; ?>;" class="homepage-why-us--card <?php if ($i % 2 == 0) {
                                                                                                                        echo 'inverse';
                                                                                                                    } ?>">
                        <div class="homepage-why-us--card--img-wrapper">
                            <?php if ($box['icon']) { ?>
                                <img src="<?php echo $box['icon']['url']; ?>" alt="<?php echo $box['icon']['title']; ?>">
                                <?php } else { ?>
                                    <img src="https://growfusely.com/wp-content/uploads/2023/03/Mask-group-4.png" alt="icon">
                            <?php } ?>
                        </div>
                        <div class="homepage-why-us--card--content-wrapper">
                            <h3 class="homepage-why-us--card--content-wrapper__title">
                                <?php echo $box['title']; ?>
                            </h3>
                            <p class="homepage-why-us--card--content-wrapper__description">
                                <?php echo $box['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            } ?>
            <?php if ($button) { ?>
                <a class="btn-primary m-auto mt-5" href="<?php echo $button['url']; ?>" target="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>
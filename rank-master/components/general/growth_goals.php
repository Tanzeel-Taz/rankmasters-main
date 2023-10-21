<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$sections = get_sub_field('sections');
?>
<style>
    .growth-goals {
        background: #fff;
        /* padding: 100px 0 153px; */
    }

    .growth-goals--wrapper {
        width: 1126px;
        margin: 0 auto;
        max-width: 90%;
    }

    .growth-goals .growth-goals--wrapper--details {
        text-align: center;
        max-width: 90%;
        width: 837px;
        margin: 0 auto 100px;
    }

    .growth-goals .growth-goals--wrapper--details h2 {
        margin-bottom: 24px;
        margin-top: 20px;
        margin: 0 0 19px;
    }

    .growth-goals .growth-goals--wrapper--details p {
        /* color: #4d5660;
        font-size: 18px; */
    }

    .sbys_area.growth-goals .growth-goals--section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 1176px;
        max-width: 90%;
        margin: 0 auto 121px;
    }

    .sbys_area.growth-goals .growth-goals--section:last-child {
        margin-bottom: 0;
    }

    .growth-goals--section:last-child {
        margin-bottom: 0;
    }

    .growth-goals--section>img {
        width: 534px;
        max-width: 49%;
        display: block;
    }

    .growth-goals--section>div {
        width: 556px;
        max-width: 47%;
    }
    @media (max-width: 767px) {
        .growth-goals .growth-goals--wrapper--details h2{
            font-size:30px;
        }
        .service-growth-section--list-wrapper--list {
            margin-top: 10px;
            padding-bottom: 60px;
        }
        .service-growth-section--list-wrapper--list li {
            padding: 8px 15px 8px 24px;
        }
        .growth-goals .growth-goals--wrapper--details{
            margin-bottom:50px
        }
        .sbys_area {
            padding: 80px 0;
        }
    }
    @media (min-width: 200px) and (max-width: 767px) {
        .sbys_area.growth-goals .growth-goals--section {
            flex-direction: column !important;
            margin-bottom: 80px;
        }
        .growth-goals--section div {
            max-width: 100%;
            margin-bottom: 30px;
        }
        .growth-goals--section img{
            max-width:100%;
        }
    }
</style>
<section class="sbys_area growth-goals">
    <div class="growth-goals--wrapper">
        <div class="growth-goals--wrapper--details">
            <h2 class="wrapper-details--title"><?php echo $headline; ?></h2>
            <div>
                <?php echo $description; ?>
            </div>
        </div>
    </div>
    <?php
    foreach ($sections as $section) {
    ?>
        <div class="growth-goals--section <?php if ($section['image_position'] == 'left') {
                                                echo 'flex-row-reverse';
                                            } ?>">
            <div>
                <h3><?php echo $section['title']; ?></h3>
                <?php echo $section['details']; ?>
            </div>
            <?php if ($section['image']) { ?>
                <img src="<?php echo $section['image']['url']; ?>" alt="<?php echo $section['image']['title']; ?>">
            <?php } else {
            ?>
                <img src="https://www.rocktherankings.com/wp-content/uploads/2022/02/Second-Graph.svg" data-lazy-src="https://www.rocktherankings.com/wp-content/uploads/2022/02/Second-Graph.svg" data-ll-status="loaded" class="entered lazyloaded">
            <?php
            } ?>
        </div>
    <?php
    }
    ?>

</section>
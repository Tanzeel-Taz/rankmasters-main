<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$sub_heading = get_sub_field('sub_heading');
$items = get_sub_field('list');
// var_dump($items);
?>
<style>
    .business-growth-section {
        background-color: white;
    }

    .business-growth-section--title-wrapper {
        max-width: 934px;
        margin: 0 auto;
        text-align: center;
        width: 100%;
        margin: 0 auto;
        padding: 0 15px 20px;
        text-align: center;
    }

    .business-growth-section--title-wrapper__headline {
        padding: 0 0 22px;
    }

    .business-growth-section--title-wrapper__description span {
        color: var(--accent);
        font-family: var(--bold);
    }

    .business-growth-section--list-wrapper {
        padding: 50px 0 0;
    }

    .business-growth-section--list-wrapper__title {
        font-family: var(--regular);
        font-size: 35px;
        line-height: 45px;
        color: var(--primary);
        padding: 70px 0 0;
    }

    .business-growth-section--list-wrapper--list {
        padding: 60px 80px 55px;
        background-color: #f9f8f2;
    }

    .business-growth-section--list-wrapper--list ul {
        display: flex;
        flex-wrap: wrap;
    }

    .business-growth-section--list-wrapper--list ul li {
        width: 50%;
        position: relative;
        font-size: 20px;
        line-height: 32px;
        color: #1c243c;
        padding: 15px 32px 15px 40px;
        list-style: none;
    }

    .business-growth-section--list-wrapper--list ul li:nth-child(even) {
        padding-right: 0;
    }

    .business-growth-section--list-wrapper--list ul li:before {
        content: "";
        width: 24px;
        height: 24px;
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/blue-tick.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        position: absolute;
        left: 0;
        top: 20px;
    }

    @media (max-width: 1200px) {
        .business-growth-section--list-wrapper--list {
            padding: 50px 30px;
        }
        .business-growth-section--list-wrapper--list ul li {
            padding: 15px 25px 15px 32px;
        }
    }

    @media (max-width: 991px) {
        .business-growth-section--list-wrapper__title {
            font-size: 28px;
            line-height: 38px;
            padding: 15px 0 20px;
        }

        .business-growth-section--list-wrapper--list {
            padding: 30px 15px;
        }

        .business-growth-section--list-wrapper--list ul li {
            width: 100%;
            padding: 6px 15px 6px 24px;
            font-size: 18px;
            line-height: 30px;
        }

        .business-growth-section--list-wrapper--list ul li:before {
            width: 16px;
            height: 16px;
            top: 14px;
        }
        .business-growth-section--title-wrapper__headline{
            padding: 0 0 16px;
            font-size: 30px;
            line-height: 38px;
        }
        @media (max-width: 767px) {
            .business-growth-section--list-wrapper{
                padding:0;
            }
        }
    }
</style>
<section class="business-growth-section" style="background-color: white;">
    <div class="container">
        <div class="aos-init aos-animate row">
            <div class="business-growth-section--title-wrapper aos-init aos-animate" data-aos="fade-up">
                <h2 class="business-growth-section--title-wrapper__headline"><?php echo $headline; ?></h2>
                <div class="business-growth-section--title-wrapper__description">
                    <p><?php echo $description; ?></p>
                </div>
            </div>
            <div class="business-growth-section--list-wrapper row">

                <div class="col-md-4">
                    <h3 class="business-growth-section--list-wrapper__title"><?php echo $sub_heading; ?></h3>
                </div>
                <div class="col-md-8">
                    <div class="business-growth-section--list-wrapper--list">
                        <ul>
                            <?php
                            foreach ($items as $item) {
                            ?>
                                <li><?php echo $item['point']; ?></li>
                            <?php
                            }
                            ?>
                            <!-- <li>Improve your organic search presence and rankings</li>
                            <li>Strengthen technical SEO and UX foundations</li>
                            <li>Drive traffic that fuels qualified leads (trials, demos, email subscribes)</li>
                            <li>Reinforce user education, engagement, and retention</li>
                            <li>Engage your users in their full-funnel journey</li>
                            <li>Position your SaaS as a trustworthy niche authority</li>
                            <li>Reduce paid advertisement dependencies</li>
                            <li>Create an inbound leads engine</li>
                            <li>Establish continuous and long-term organic marketing ROI</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
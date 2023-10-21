<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$button = get_sub_field('button');
$packages = get_sub_field('packages');
?>
<style>
    .pricing-section .pricing-section--details h2 {
        margin-bottom: 17px;
        text-align: center;
    }

    .pricing-section .pricing-section--details p {
        text-align: center;
    }

    .pricing-section .pricing-section--details p:last-child {
        margin-bottom: 99px;
    }

    .pricing {
        /* max-width: 940px; */
        width: 95%;
        margin: auto;
    }

    .pricing .nav.nav-tabs {
        display: flex;
        justify-content: center;
        border: none;
        margin-bottom: 3rem;
        row-gap: 15px;
    }

    .pricing .nav.nav-tabs li.nav-item {
        font-family: var(--bold);
    }

    .pricing .nav.nav-tabs .nav-link {
        border: 1px solid transparent;
        margin-left: 10px;
        background-color: var(--primaryT);
        margin-right: 10px;
        padding: 0.5rem 1.5rem;
        border-radius: 7px;
        color: var(--primary);
        font-size: 16px;
    }

    .pricing .nav.nav-tabs .nav-link.active {
        /* background-color: #ceccfa; */
        color: var(--white);
        background-color: var(--primary);
    }

    .pricing .tab-content {
        border: 1px solid transparent;
        padding: 25px;
    }

    .pricing .pricing-block {
        background-color: #fff;
        border-radius: 6px;
        padding: 22px;
        box-shadow: 1px 1px 12px rgba(0, 0, 0, 0.21);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .pricing .pricing-block .pricing-plan-title {
        width: min-content;
        color: #fff;
        text-transform: none;
        object-fit: fill;
        background-color: #fc8d55;
        border-radius: 18px;
        padding: 2px 19px;
        font-family: var(--bold);
        display: inline-block;
        font-size: 16px;
    }

    .pricing .pricing-block .div-block-5 .pricing-plan-price {
        padding-top: 18px;
        padding-bottom: 10px;
        font-size: 42px;
        font-family: var(--bold);
        display: inline;
    }

    .pricing .pricing-block .div-block-5 .text-span-2 {
        font-size: 24px;
    }

    .pricing .pricing-block .text-block {
        color: #1a1f1c;
        font-size: 16px;
        line-height: 28px;
    }

    .pricing .pricing-block .border {
        border: 1px solid rgba(37, 47, 63, 0.46);
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pricing .pricing-block .pricing-plan--paragraph {
        flex-grow: 1;
    }

    .pricing .pricing-block .pricing-plan-feature {
        margin-bottom: 10px;
    }

    .w-button {
        color: #fff;
        line-height: inherit;
        cursor: pointer;
        background-color: #3898ec;
        border: 0;
        border-radius: 0;
        padding: 9px 15px;
        text-decoration: none;
        display: inline-block;
    }

    .submit-button {
        background-color: var(--primary);
        border-radius: 10px;
        margin-left: 24px;
        padding: 12px 26px;
    }

    .black-button.submit-button.book-button {
        width: 100%;
        text-align: center;
        margin: 17px 0 0;
    }

    .pricing .tab-content .inner-tab-content {
        background: transparent;
        border: none;
        padding: 0;
        width: 100%;
    }

    .pricing .nav.nav-tabs .nav-link1 {
        border-style: solid;
        border-color: transparent;
        border-radius: 7px;
        margin-left: 3px;
        margin-right: 3px;
        padding: 8px 16px;
        font-size: 14px;
        line-height: 18px;
        color: var(--accent);
        background-color: var(--accentT);
        /* border: 1px solid #000; */
    }

    .pricing .nav.nav-tabs .nav-link1.active {
        color: var(--white);
        background-color: var(--accent);
        font-family: var(--semibold);
    }

    .pricing .nav.nav-tabs li.nav-item1 {
        margin-bottom: 3rem;
    }

    .black-button.submit-button.book-button {
        font-size: 16px;
    }

    .black-button.submit-button.book-button:hover {
        color: #fff;
    }

    .pricing .nav.nav-tabs.inner-nav-tabs {
        margin-bottom: 0;
    }

    @media (max-width: 991px) {
        .pricing-section .pricing-plan {
            row-gap: 25px;
        }

        .pricing-section .col-md-4 {
            width: 50%
        }
    }

    @media (max-width: 767px) {
        .pricing-section .pricing-section--details h2 {
            font-size: 30px;
        }

        .pricing-section .col-md-4 {
            width: 100%
        }

        .pricing .pricing-block .div-block-5 .pricing-plan-price {
            font-size: 30px;
        }

        .pricing .tab-content {
            padding: 0;
        }

        .pricing-section .pricing-section--details p:last-child {
            margin-bottom: 60px;
        }

        .pricing-block .div-block-5 {
            margin-top: 10px;
        }
    }
</style>
<section class="pricing-section">
    <div class="container">
        <div class="pricing-section--details">
            <h2><?php echo $headline; ?></h2>
            <div>
                <?php echo $description; ?>
            </div>
        </div>
        <div class="pricing">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php
                $i = 1;
                foreach ($packages as $package) { ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($i == 1) ? 'active' : ' '; ?>" id="<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $i; ?>" type="button" role="tab" aria-controls="tab-<?php echo $i; ?>" aria-selected="<?php echo ($i == 1) ? 'true' : 'false'; ?>"><?php echo $package['text']; ?></button>
                    </li>
                <?php
                    $i++;
                }
                ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php
                $i = 1;
                foreach ($packages as $package) { ?>

                    <div class="tab-pane fade <?php echo ($i == 1) ? 'show active' : ' '; ?>" id="tab-<?php echo $i; ?>" role="tabpanel" aria-labelledby="<?php echo $i; ?>-tab">
                        <ul class="nav nav-tabs inner-nav-tabs" id="myTab" role="tablist">
                            <?php
                            $a = 1;
                            foreach ($package['duration'] as $item) { ?>
                                <li class="nav-item<?php echo '1'; ?>" role="presentation">
                                    <button class="nav-link<?php echo '1'; ?> <?php echo ($a == 1) ? 'active' : ' '; ?>" id="<?php echo $i . '-tab'; ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $i . '-' . $a; ?>" type="button" role="tab" aria-controls="tab-<?php echo $i . '-' . $a; ?>" aria-selected="<?php echo ($a == 1) ? 'true' : 'false'; ?>"><?php echo $item['text']; ?></button>
                                </li>
                            <?php
                                $a++;
                            }
                            ?>

                            <div class="tab-content inner-tab-content" id="myTabContent">
                                <?php
                                $a = 1;
                                foreach ($package['duration'] as $item) {
                                ?>

                                    <div class="tab-pane fade <?php echo ($a == 1) ? 'show active' : ' '; ?>" id="tab-<?php echo $i . '-' . $a; ?>" role="tabpanel" aria-labelledby="<?php echo $i . '-tab'; ?>">
                                        <div class="pricing-plan row">
                                            <?php
                                            foreach ($item['cards'] as $card) {
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="pricing-block">
                                                        <div class="pricing-plan-title"><?php echo $card['name']; ?></div>
                                                        <div class="div-block-5">
                                                            <div class="pricing-plan-price">$<?php echo $card['price']; ?></div><span class="text-span-2">/mo</span>
                                                        </div>
                                                        <div class="text-block"><?php echo $card['description']; ?></div>
                                                        <div class="border"></div>
                                                        <div class="pricing-plan--paragraph">
                                                            <?php
                                                            foreach ($card['features'] as $feature) { ?>
                                                                <p class="pricing-plan-feature">✓ <?php echo $feature['text']; ?></p>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="black-button submit-button book-button w-button"><?php echo $button['title']; ?></a>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                    $a++;
                                } ?>
                            </div>
                        </ul>
                    </div>
                <?php
                    $i++;
                } ?>
            </div>
        </div>
</section>
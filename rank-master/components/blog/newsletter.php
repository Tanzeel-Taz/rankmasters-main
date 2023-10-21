<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$form_shortcode = get_sub_field('form_shortcode');
$image = get_sub_field('image');

?>
<style>
    .subscribe-newsletter--section {
        margin: 0 auto;
        /* margin-top: 100px; */
        padding: 48px 50px;
        color: var(--white);
        background-color: var(--primary);
        border-radius: 10px;
    }

    .subscribe-newsletter--section--left {
        text-align: center;
    }

    .subscribe-newsletter--section--right .subscribe-form h2 {
        font-family: var(--bold);
        font-size: 38px;
        line-height: 42px;
        color: inherit;
        margin: 0;
        padding: 0 0 8px;
    }

    .subscribe-newsletter--section--right .subscribe-form p {
        font-size: 18px;
        line-height: 29px;
        max-width: 300px;
        color: inherit;
    }

    .subscribe-newsletter--section--right .subscribe-form input {
        display: block;
        width: 300px;
        height: 42px;
        border-radius: 3px;
        font-size: 15px;
        line-height: 22px;
        margin: 24px 0 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background: inherit;
        padding: 0 16px;
    }

    .subscribe-newsletter--section--right .subscribe-form input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .subscribe-newsletter--section--right .subscribe-form input:focus {
        background: var(--white);
        outline: none;
        padding: 0 15px;
    }

    .subscribe-newsletter--section--right .subscribe-form input.wpcf7-submit {
        width: 190px;
        height: 42px;
        background: rgba(255, 255, 255, .25);
        background: var(--accent);
        border-radius: 4px;
        font-family: var(--bold);
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: var(--white);
        padding: 12px 59px;
        border: none;
        margin: 16px 0 0;
    }

    .subscribe-newsletter--section--right .subscribe-form input.wpcf7-submit:hover {
        background: var(--accentL);
    }

    .subscribe-newsletter--section--right .subscribe-form input.wpcf7-submit:focus {
        color: var(--white);
        background-color: rgba(255, 255, 255, .35);
    }

    .wpcf7 form.sent .wpcf7-response-output {
        border-color: #46b450;
    }

    .wpcf7 form .wpcf7-response-output {
        margin: 0em 0em 1em;
        padding: 0.2em 0;
        border: none;
    }

    .subscribe-newsletter--section--right .subscribe-form button {
        min-width: 190px;
        height: 42px;
        background: rgba(255, 255, 255, .25);
        background-color: var(--accent);
        border-radius: 4px;
        font-family: var(--bold);
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: var(--white);
        padding: 12px 59px;
        border: none;
        margin: 16px 0 0;
    }
</style>
<section class="subscribe-newsletter">
    <div class="container">
        <div class="subscribe-newsletter--section">
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-newsletter--section--left">
                        <?php if ($image) { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        <?php } else { ?>
                            <img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg" alt="">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subscribe-newsletter--section--right">
                        <div class="subscribe-form">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $description; ?></p>
                            <?php
                            echo do_shortcode('[contact-form-7 id="339" title="Newsletter"]');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
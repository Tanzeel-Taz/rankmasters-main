<?php

/**
 * The template for displaying Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rank_Master
 */
get_header();
?>
<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
    ?>

        <section class="homepage-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="homepage-hero--intro">
                            <p>We're a SaaS-focused Marketing Agency with</p>
                            <h1 class="homepage-hero--intro__heading">The Fastest Possible SEO & PPC Results for SaaS
                                Businesses.</h1>
                            <p class="homepage-hero--intro__description">We help SaaS companies prioritize, create, update
                                and promote content to quickly out-perform their market.</p>
                            <div class="homepage-hero--intro--cta">
                                <a href="" class="homepage-hero--intro--cta__contact btn-primary">Schedule a Free Demo</a>
                                <a href="" class="homepage-hero--intro--cta__pricing btn-secondary">Get Pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="homepage-hero--logos d-flex">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/6437b9c8a6fcbc1dd6632842_totango.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/bidsketch.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/bitly.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/capsule.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/jotform.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/payjunction.svg' ?>" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/segment.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="" class="btn-light">button</a>
                            <a href="" class="btn-dark">button</a>
                            <a href="" class="btn-royal">button</a>
                            <a href="" class="btn-navy">button</a>
                            <a href="" class="btn-purple">button</a>
                            <a href="" class="btn-lpurple">button</a>
                            <a href="" class="btn-primary">button</a>
                            <a href="" class="btn-grey">button</a>
                            <a href="" class="btn-dark-blue">button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-FAQS">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="homepage-FAQS__heading text-center mb-4">FAQs</h2>
                        <p class="homepage-FAQS__description d-none">GOT A QUESTION? WE’VE GOT ANSWERS.</p>
                        <div class="--accordian">
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck1">
                                    <label class="tab-label small-text" for="chck1">How important is search
                                        marketing?</label>
                                    <div class="tab-content">
                                        <p>
                                            90% of online experiences begin with a search engine, so your business should
                                            try as hard as possible to be present for every search your potential customers
                                            might make to find service providers or educational resources in your industry.
                                            Ideally your business should be present in organic listings and paid advertising
                                            for all of these searches, so that you're top of mind for that potential
                                            customer when they're ready to make a buying decision.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" id="chck2">
                                    <label class="tab-label small-text" for="chck2">How important is SEO for SaaS?</label>
                                    <div class="tab-content">
                                        <p>
                                            60% of B2B SaaS marketers state that SEO generates more leads than any other
                                            marketing channel. Meanwhile most SaaS businesses focus primarily on paid
                                            advertising because it's easier to scale up spend and have immediate results. We
                                            offer both services because we believe in immediate results and investing in the
                                            long-term organic growth and sustainability that SEO provides SaaS businesses.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" id="chck3">
                                    <label class="tab-label small-text" for="chck3">What is the most important tactic for
                                        SEO success?</label>
                                    <div class="tab-content">
                                        <p>
                                            70% of online marketers describe content marketing as their most effective SEO
                                            tactic, and it's no different for us. We help our customers prioritize, create,
                                            optimize, update, and promote their content using our proprietary processes and
                                            machine learning algorithm which helps cluster, batch, and prioritize keyword
                                            targets your business already ranks for and should rank for. We know exactly
                                            what content to create and optimize for our customers, leading to faster results
                                            than any other SEO provider in the industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" id="chck4">
                                    <label class="tab-label small-text" for="chck4">What are the benefits of SaaS SEO
                                        Services?</label>
                                    <div class="tab-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" id="chck5">
                                    <label class="tab-label small-text" for="chck5">What are the benefits of SaaS SEO
                                        Services?</label>
                                    <div class="tab-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="checkbox" id="chck6">
                                    <label class="tab-label small-text" for="chck6">What are the benefits of SaaS SEO
                                        Services?</label>
                                    <div class="tab-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="homepage-CTA">
            <div class="container">
                <span class="logo-1">
                    <? //xml version="1.0" encoding="utf-8"
                    ?>
                    <!-- Generator: Adobe Illustrator 27.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #4325E8;
                            }

                            .st1 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M975.25,359.16c-18.32,49.42-35.81,99.28-53.63,148.92c-3.31,9.23-15.6,11.01-21.41,3.11
		c-3.75-5.1-7.54-10.26-11.22-15.25c-4.02-5.45-11.68-6.61-17.12-2.58c-103.3,76.31-207.67,153.74-310.95,230.16
		c-5.44,4.02-13.12,2.85-17.14-2.59c-39.01-52.65-77.48-104.79-116.38-157.19c-4.03-5.43-11.71-6.58-17.15-2.56
		c-78.3,57.96-156.6,115.97-234.8,173.78c-5.45,4.03-13.14,2.84-17.16-2.61c-17.54-23.75-34.82-47.1-51.91-70.17
		c-4.03-5.44-2.89-13.08,2.55-17.11c98.24-72.78,224.89-166.37,324.23-239.96c5.44-4.03,13.1-2.9,17.12,2.55
		c37.96,51.37,76.47,103.69,114.61,155.04c4.03,5.43,11.69,6.54,17.13,2.52c73.67-54.47,147.1-108.85,220.79-163.35
		c5.45-4.03,6.61-11.7,2.57-17.15c-3.59-4.83-7.27-9.8-10.93-14.73c-5.84-7.87-0.53-19.06,9.25-19.53
		c53.21-2.59,106.37-5.23,159.5-7.79C971.99,342.24,978.31,350.92,975.25,359.16z" />
                        </g>
                    </svg>
                </span>
                <span class="logo-2">
                    <? //xml version="1.0" encoding="utf-8"
                    ?>
                    <!-- Generator: Adobe Illustrator 27.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #4325E8;
                            }

                            .st1 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <g>
                                <path class="st1" d="M872.03,575.21c-13.07,35.27-25.55,70.85-38.27,106.26c-2.36,6.58-11.13,7.86-15.28,2.22
			c-2.68-3.64-5.38-7.32-8.01-10.88c-2.87-3.89-8.33-4.72-12.22-1.84c-73.71,54.45-148.19,109.7-221.89,164.24
			c-3.88,2.87-9.36,2.03-12.23-1.85c-27.83-37.57-55.29-74.78-83.04-112.17c-2.88-3.88-8.36-4.7-12.24-1.83
			c-55.87,41.36-111.75,82.75-167.55,124.01c-3.89,2.87-9.37,2.02-12.25-1.86c-12.52-16.95-24.85-33.61-37.04-50.07
			c-2.88-3.88-2.06-9.33,1.82-12.21c70.1-51.94,160.47-118.72,231.36-171.23c3.88-2.88,9.35-2.07,12.22,1.82
			c27.09,36.66,54.56,73.99,81.78,110.63c2.88,3.87,8.34,4.66,12.22,1.8c52.57-38.87,104.97-77.67,157.55-116.56
			c3.89-2.88,4.72-8.35,1.83-12.23c-2.56-3.45-5.19-6.99-7.8-10.51c-4.17-5.61-0.38-13.6,6.6-13.94
			c37.97-1.85,75.9-3.73,113.82-5.56C869.7,563.13,874.22,569.33,872.03,575.21z" />
                            </g>
                            <path class="st1" d="M892.47,340.88c-5.8,0.75-11.53,3.41-16.88,6.01c-50.55,24.47-101.08,49.03-151.45,73.86
		c-5.29,2.6-7.95,2.06-11.77-2.39c-49.36-57.25-98.9-114.35-148.47-171.41c-13.95-16.07-34.3-16.01-48.25,0.09
		c-43.62,50.26-87.19,100.54-130.78,150.83c-7.53,8.66-15.09,17.27-22.62,25.9c-3.41-1.64-6.13-2.93-8.81-4.24
		c-51.18-24.89-102.36-49.84-153.58-74.67c-17.9-8.66-34.2-2.19-43.2,13.62c-16.74,29.42,68,249.19,102.72,363.35l31.22-23.99
		c6.54-5.02,13.15-10.1,19.78-15.15c-24.92-82.67-50.11-165.23-75.2-247.84c-0.48-1.61-0.87-3.23-1.79-6.66
		c28.98,14.07,56.26,27.34,83.51,40.6c11.95,5.8,23.87,11.68,35.82,17.51c17.69,8.58,30.03,6.01,42.85-8.78
		c46.7-53.87,93.43-107.77,140.16-161.64c1.14-1.31,2.36-2.54,4.15-4.45c3.79,4.3,7.41,8.34,10.97,12.43
		c44.25,51.03,88.53,102.06,132.75,153.13c13.51,15.57,25.37,18.05,44.01,8.99c36.09-17.54,72.16-35.14,108.22-52.68
		c2.93-1.4,5.86-2.78,10.07-4.78c-0.78,3.35-1.17,5.62-1.82,7.8c-9.44,31.1-18.91,62.24-28.35,93.34l63.16-2.72
		c0,0,8.9-27.49,13.8-43.62c10.64-35.02,21.6-69.94,31.67-105.14C930.18,357.77,913.15,338.17,892.47,340.88z" />
                        </g>
                    </svg>

                </span>
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="homepage-CTA__heading">Ready to get started?</h2>
                        <p class="homepage-CTA__description">Schedule a Discovery Call with us below and we'll see if
                            there's a good fit!</p>
                        <a href="" class="homepage-CTA__button btn-secondary mt-4">Schedule a Free Demo</a>
                        <p class="homepage-CTA__bottom-liner">Or learn more about our <a href="#">pricing.</a></p>
                    </div>
                    <!-- <div class="col-sm-6">
              <img src="https://source.unsplash.com/random?building" alt="" class="homepage-CTA__image">
          </div> -->
                </div>
            </div>
        </section>

        <section class="homepage-blog">
            <div class="container">
                <div class="row">
                    <div class="homepage-blog--intro-wrapper">
                        <h2 class="homepage-blog--intro-wrapper__heading text-center">
                            Latest <span>insights</span>
                        </h2>
                        <p class="homepage-blog--intro-wrapper__description text-center">
                            Actionable insights to help you grow your SaaS and dominate your search market!
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="homepage-blog--card-wrapper">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/6457a7546e54a9453f31ac5b_6449377dcbe38f034cbed35f_5fd6ca92304e927c9b7859e9_52520to2520Strategy-p-500.jpeg' ?>" alt="">
                            </a>
                            <div class="homepage-blog--card-wrapper--outer-wrapper">
                                <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>" alt="">
                                    <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper">
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__name">
                                            sean smith
                                        </p>
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category">
                                            saas marketing
                                        </p>
                                    </div>
                                </div>
                                <div class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper">
                                    <h3 class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__title">
                                        SaaS Marketing: 6 Proven Methods for Effective SaaS Growth
                                    </h3>
                                    <p class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__description">
                                        In this article, we'll break down the most effective ways to reach and convert your
                                        target users to become a leader in the SaaS market.
                                    </p>
                                    <a href="" class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__button btn-tertiary">Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 homepage-blog--plain-cards-outer">
                        <a href="" class="homepage-blog--plain-card-wrapper text-center">
                            <div class="homepage-blog--plain-card-wrapper--content-wrapper">
                                <h3 class="homepage-blog--plain-card-wrapper--content-wrapper__title">
                                    Content Marketing for SaaS in 2023: The 7-Step Guide
                                </h3>
                                <p class="homepage-blog--plain-card-wrapper--content-wrapper__description">
                                    A Seven-Step Guide to SaaS growth with Content Marketing.
                                </p>
                            </div>
                        </a>
                        <a href="" class="homepage-blog--plain-card-wrapper text-center card-2">
                            <div class="homepage-blog--plain-card-wrapper--content-wrapper">
                                <h3 class="homepage-blog--plain-card-wrapper--content-wrapper__title">
                                    Content Marketing for SaaS in 2023: The 7-Step Guide
                                </h3>
                                <p class="homepage-blog--plain-card-wrapper--content-wrapper__description">
                                    A Seven-Step Guide to SaaS growth with Content Marketing.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="homepage-blog--card-wrapper">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/6457a7546e54a9453f31ac5b_6449377dcbe38f034cbed35f_5fd6ca92304e927c9b7859e9_52520to2520Strategy-p-500.jpeg' ?>" alt="">
                            </a>
                            <div class="homepage-blog--card-wrapper--outer-wrapper">
                                <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>" alt="">
                                    <div class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper">
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__name">
                                            sean smith
                                        </p>
                                        <p class="homepage-blog--card-wrapper--outer-wrapper--aut-info-wrapper--inner-wrapper__category">
                                            saas marketing
                                        </p>
                                    </div>
                                </div>
                                <div class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper">
                                    <h3 class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__title">
                                        SaaS Marketing: 6 Proven Methods for Effective SaaS Growth
                                    </h3>
                                    <p class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__description">
                                        In this article, we'll break down the most effective ways to reach and convert your
                                        target users to become a leader in the SaaS market.
                                    </p>
                                    <a href="" class="homepage-blog--card-wrapper--outer-wrapper--content-wrapper__button btn-tertiary">Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-testimonials">
            <div class="container">
                <div class="row">
                    <p class="homepage-testimonials__kicker text-center small-text">DON'T TAKE OUR WORD FOR IT</p>
                    <h2 class="homepage-testimonials__headline text-center mb-5">Here is what our customers have to say</h2>
                    <div class="col-sm-6">
                        <div class="homepage-testimonials--card">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 33">
                                <path d="M32.6 14.16a8.19 8.19 0 015.83 3.1 10.44 10.44 0 012.18 6.73c0 2.55-.85 4.67-2.54 6.37-1.7 1.7-4 2.55-6.92 2.55-2.8 0-5.04-.85-6.74-2.55-1.7-1.82-2.54-4.55-2.54-8.19 0-3.76 1.57-7.95 4.73-12.56 3.15-4.73 6.43-7.89 9.83-9.46.48-.25 1.21.06 2.18.9.97.86 1.46 1.58 1.46 2.19-3.52 2.43-6 6.07-7.46 10.92zm-21.1 0a8.04 8.04 0 015.63 3.1 10.44 10.44 0 012.19 6.73c0 2.55-.85 4.67-2.55 6.37-1.58 1.7-3.82 2.55-6.73 2.55-2.8 0-5.04-.85-6.74-2.55C1.6 28.54.75 25.81.75 22.17c0-3.76 1.52-7.95 4.55-12.56C8.46 4.88 11.8 1.72 15.31.15c.49-.25 1.22.06 2.19.9.97.86 1.45 1.58 1.45 2.19-3.51 2.43-6 6.07-7.46 10.92z">
                                </path>
                            </svg>
                            <p class="homepage-testimonials--card__statement">
                                I’ve encouraged a number of other companies to work with Kalungi. We had nothing and have
                                built something that is great, a sophisticated marketing engine. I had high confidence that
                                Kalungi’s SaaS marketing team could do that and I didn’t have to worry about it. That was a
                                huge load off of me."
                            </p>
                            <div class="homepage-testimonials--card--info">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Rob-Southern (1).webp' ?>" alt="">
                                <div>
                                    <p class="homepage-testimonials--card--info__position">CEO, ASCEND SOFTWARE</p>
                                    <p class="homepage-testimonials--card--info__name">
                                        Rob Southern
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="homepage-testimonials--card">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 33">
                                <path d="M32.6 14.16a8.19 8.19 0 015.83 3.1 10.44 10.44 0 012.18 6.73c0 2.55-.85 4.67-2.54 6.37-1.7 1.7-4 2.55-6.92 2.55-2.8 0-5.04-.85-6.74-2.55-1.7-1.82-2.54-4.55-2.54-8.19 0-3.76 1.57-7.95 4.73-12.56 3.15-4.73 6.43-7.89 9.83-9.46.48-.25 1.21.06 2.18.9.97.86 1.46 1.58 1.46 2.19-3.52 2.43-6 6.07-7.46 10.92zm-21.1 0a8.04 8.04 0 015.63 3.1 10.44 10.44 0 012.19 6.73c0 2.55-.85 4.67-2.55 6.37-1.58 1.7-3.82 2.55-6.73 2.55-2.8 0-5.04-.85-6.74-2.55C1.6 28.54.75 25.81.75 22.17c0-3.76 1.52-7.95 4.55-12.56C8.46 4.88 11.8 1.72 15.31.15c.49-.25 1.22.06 2.19.9.97.86 1.45 1.58 1.45 2.19-3.51 2.43-6 6.07-7.46 10.92z">
                                </path>
                            </svg>
                            <p class="homepage-testimonials--card__statement">
                                I’ve encouraged a number of other companies to work with Kalungi. We had nothing and have
                                built something that is great, a sophisticated marketing engine. I had high confidence that
                                Kalungi’s SaaS marketing team could do that and I didn’t have to worry about it. That was a
                                huge load off of me."
                            </p>
                            <div class="homepage-testimonials--card--info">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Rob-Southern (1).webp' ?>" alt="">
                                <div>
                                    <p class="homepage-testimonials--card--info__position">CEO, ASCEND SOFTWARE</p>
                                    <p class="homepage-testimonials--card--info__name">
                                        Rob Southern
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn-primary w-auto m-auto mt-5">Book appoitment</a>
                </div>
            </div>
        </section>

        <section class="homepage-why-us" style="background-color: #f4f4f1;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="homepage-why-us--card card-1">
                            <div class="homepage-why-us--card--img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Mask-group-4.png' ?>" alt="">
                            </div>
                            <div class="homepage-why-us--card--content-wrapper">
                                <h3 class="homepage-why-us--card--content-wrapper__title">
                                    Worked with <span>40+ SaaS Brands</span>
                                </h3>
                                <p class="homepage-why-us--card--content-wrapper__description">
                                    We’ve helped dozens of SaaS businesses grow their search engine and referral traffic
                                    with strategic content marketing. Scaling organic visibility for SaaS companies is our
                                    forte.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="homepage-why-us--card card-2 inverse">
                            <div class="homepage-why-us--card--img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Mask-group-4.png' ?>" alt="">
                            </div>
                            <div class="homepage-why-us--card--content-wrapper">
                                <h3 class="homepage-why-us--card--content-wrapper__title">
                                    Worked with <span>40+ SaaS Brands</span>
                                </h3>
                                <p class="homepage-why-us--card--content-wrapper__description">
                                    We’ve helped dozens of SaaS businesses grow their search engine and referral traffic
                                    with strategic content marketing. Scaling organic visibility for SaaS companies is our
                                    forte.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="homepage-why-us--card card-3">
                            <div class="homepage-why-us--card--img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Mask-group-4.png' ?>" alt="">
                            </div>
                            <div class="homepage-why-us--card--content-wrapper">
                                <h3 class="homepage-why-us--card--content-wrapper__title">
                                    Worked with <span>40+ SaaS Brands</span>
                                </h3>
                                <p class="homepage-why-us--card--content-wrapper__description">
                                    We’ve helped dozens of SaaS businesses grow their search engine and referral traffic
                                    with strategic content marketing. Scaling organic visibility for SaaS companies is our
                                    forte.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="homepage-why-us--card card-4 inverse">
                            <div class="homepage-why-us--card--img-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/Mask-group-4.png' ?>" alt="">
                            </div>
                            <div class="homepage-why-us--card--content-wrapper">
                                <h3 class="homepage-why-us--card--content-wrapper__title">
                                    Worked with <span>40+ SaaS Brands</span>
                                </h3>
                                <p class="homepage-why-us--card--content-wrapper__description">
                                    We’ve helped dozens of SaaS businesses grow their search engine and referral traffic
                                    with strategic content marketing. Scaling organic visibility for SaaS companies is our
                                    forte.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-painpoint-seo" style="background-color: #f9f9f7;">
            <div class="container">
                <div class="row align-items-center">
                    <h2 class="__headline mb-5">
                        An expert SEO team that knows SaaS, tech, and content
                    </h2>
                    <div class="col-sm-8">
                        <p>
                            What is Pain-Point SEO?
                        </p>
                        <p>
                            To put it simply, it’s a three-step process:
                        </p>
                        <ul>
                            <li>
                                Identify problems that your ideal customers are facing.
                            </li>
                            <li>
                                Publish content on your website that solves those problems.
                            </li>
                            <li>
                                Pitch your SaaS as a solution!
                            </li>
                        </ul>
                        <p>

                            At The Rank Masters, our team of SEOs analyzes your SaaS and its competitors deeply to identify
                            what “pain-points” your product is solving for your ICPs.
                        </p>

                        <p>

                            Based on those findings, our SEO experts dive deep into the realm of search engines to hunt for
                            primary, secondary, and long-tail keywords (LSI) while identifying the search intent for each
                            query.
                        </p>
                        <p>

                            The data is then forwarded to our Content Strategists, who organize those keywords based on
                            topical relevance (to target Topical Authority), content types, pillars, and clusters.
                        </p>
                        <p>


                            Once the topics are finalized, they are scheduled on a calendar and forwarded to our writers
                            (trained in Semantic SEO), who then start writing the content in such a manner that your visitor
                            converts into a paying customer or at least a lead.
                        </p>
                        <p>


                            After writing, editing, and on-page optimizations, we publish!
                        </p>

                    </div>
                    <div class="col-sm-4 d-none d-sm-block">
                        <img src="https://source.unsplash.com/random?building" alt="">
                    </div>
                    <a href="" class="btn-primary w-auto m-auto mt-5">Book appoitment</a>
                </div>
            </div>
        </section>

        <section class="homepage-casestudy">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="homepage-casestudy--card horizontal">
                            <div class="homepage-casestudy--card--img-wrapper">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/casestudy.png' ?>" alt="">
                                </a>
                            </div>
                            <div class="homepage-casestudy--card--content-wrapper d-flex flex-column justify-content-evenly">
                                <h3 class="homepage-casestudy--card--content-wrapper__title">
                                    How Growfusely Generated 400% Organic Traffic for Mind the <span>Graph in 8
                                        Months</span>
                                </h3>
                                <p class="homepage-casestudy--card--content-wrapper__description">
                                    See how we revamped their SEO structure, built a coherent content plan, and got quality
                                    backlinks to level up their online presence.
                                </p>
                                <a href="" class="homepage-casestudy--card--content-wrapper__button">
                                    read case study
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                        <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                        <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="homepage-casestudy--card vertical">
                            <div class="homepage-casestudy--card--img-wrapper">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/casestudy.png' ?>" alt="">
                                </a>
                            </div>
                            <div class="homepage-casestudy--card--content-wrapper">
                                <h3 class="homepage-casestudy--card--content-wrapper__title">
                                    How Growfusely Generated 400% Organic Traffic for Mind the <span>Graph in 8
                                        Months</span>
                                </h3>
                                <p class="homepage-casestudy--card--content-wrapper__description">
                                    See how we revamped their SEO structure, built a coherent content plan, and got quality
                                    backlinks to level up their online presence.
                                </p>
                                <a href="" class="homepage-casestudy--card--content-wrapper__button">
                                    read case study
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                        <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                        <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="homepage-casestudy--card vertical">
                            <div class="homepage-casestudy--card--img-wrapper">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/casestudy.png' ?>" alt="">
                                </a>
                            </div>
                            <div class="homepage-casestudy--card--content-wrapper">
                                <h3 class="homepage-casestudy--card--content-wrapper__title">
                                    How Growfusely Generated 400% Organic Traffic for Mind the <span>Graph in 8
                                        Months</span>
                                </h3>
                                <p class="homepage-casestudy--card--content-wrapper__description">
                                    See how we revamped their SEO structure, built a coherent content plan, and got quality
                                    backlinks to level up their online presence.
                                </p>
                                <a href="" class="homepage-casestudy--card--content-wrapper__button">
                                    read case study
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none" class="svg replaced-svg">
                                        <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                        <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endwhile; // End of the loop.
    ?>

</main><!-- #main -->
<?php
get_footer();

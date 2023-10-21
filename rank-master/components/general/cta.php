<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$button = get_sub_field('button');
$bottom_liner = get_sub_field('bottom_liner');
?>
<style>
    .homepage-CTA {
        text-align: center;
    }

    .homepage-CTA .container {
        position: relative;
        background-color: var(--primary);
        border-radius: 0.52em;
        padding: 3.13em 3.65em;
        overflow: hidden;
        color: var(--white);
    }

    .homepage-CTA .container svg {
        position: absolute;
        bottom: -10%;
        left: -100px;
        width: 400px;
        width: clamp(200px, 30vw, 400px);
        transform: rotate(-20deg);
    }

    .homepage-CTA .container svg .st0,
    .homepage-CTA .container svg .st1 {
        fill: rgba(128, 128, 128, 0.3);
        fill: #1268AF;
    }

    .homepage-CTA .container span.logo-2 {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .homepage-CTA .container span.logo-2 svg {
        bottom: -120px;
        right: -120px;
        top: unset;
        left: unset;
        transform: rotate(-36deg);
    }

    .homepage-CTA__heading {
        margin-bottom: 14px;
        color: inherit;
    }

    .homepage-CTA__description {
        margin-bottom: 2em;
        color: inherit;
    }

    .homepage-CTA__button {
        margin: auto;
        margin-bottom: 0.8em;
    }

    .homepage-CTA__bottom-liner p{
        color: inherit;
    }

	.homepage-CTA__bottom-liner a {
        color: inherit;
		transition: all 0.3s;
    }
	
    .homepage-CTA__bottom-liner a:hover {
        color: var(--accent);
    }

    @media (max-width: 1024px) {
        .homepage-CTA__heading {
            font-size: 32px;
        }

        .homepage-CTA__description,
        .homepage-CTA__bottom-liner {
            font-size: 13px;
        }
    }

    @media (max-width:767px) {
        .homepage-CTA__heading {
            font-size: 30px;
        }
        .homepage-CTA .container span.logo-2 svg {
        bottom: -60px;
        right: -60px;
    }
    }
</style>
<section class="homepage-CTA">
    <div class="container">
        <span class="logo-1">
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
                    <!-- <g>
                        <path class="st1" d="M872.03,575.21c-13.07,35.27-25.55,70.85-38.27,106.26c-2.36,6.58-11.13,7.86-15.28,2.22
			c-2.68-3.64-5.38-7.32-8.01-10.88c-2.87-3.89-8.33-4.72-12.22-1.84c-73.71,54.45-148.19,109.7-221.89,164.24
			c-3.88,2.87-9.36,2.03-12.23-1.85c-27.83-37.57-55.29-74.78-83.04-112.17c-2.88-3.88-8.36-4.7-12.24-1.83
			c-55.87,41.36-111.75,82.75-167.55,124.01c-3.89,2.87-9.37,2.02-12.25-1.86c-12.52-16.95-24.85-33.61-37.04-50.07
			c-2.88-3.88-2.06-9.33,1.82-12.21c70.1-51.94,160.47-118.72,231.36-171.23c3.88-2.88,9.35-2.07,12.22,1.82
			c27.09,36.66,54.56,73.99,81.78,110.63c2.88,3.87,8.34,4.66,12.22,1.8c52.57-38.87,104.97-77.67,157.55-116.56
			c3.89-2.88,4.72-8.35,1.83-12.23c-2.56-3.45-5.19-6.99-7.8-10.51c-4.17-5.61-0.38-13.6,6.6-13.94
			c37.97-1.85,75.9-3.73,113.82-5.56C869.7,563.13,874.22,569.33,872.03,575.21z" />
                    </g> -->
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
            <div class="col-sm-12" style="z-index: 5">
                <h2 class="homepage-CTA__heading"><?php echo $headline; ?></h2>
                <p class="homepage-CTA__description"><?php echo $description; ?></p>
                <?php if ($button) { ?>
                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="homepage-CTA__button btn-primary mt-4"><?php echo $button['title']; ?></a>
                <?php } ?>
                <div class="homepage-CTA__bottom-liner"><?php echo $bottom_liner;?></div>
            </div>
        </div>
    </div>
</section>
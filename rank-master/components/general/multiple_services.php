<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$services = get_sub_field('services');
$headline = get_sub_field('headline');
?>
<style>
    .saas-marketing {
        padding: 120px 0 130px;
    }

    .saas-marketing--details {
        max-width: 784px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 20px;
    }

    .saas-marketing--details--title {
        margin-bottom: 20px;
    }


    .saas-marketing--sections {
        padding-top: 50px;
    }

    .saas-marketing--sections-left {
        position: sticky;
        top: 0;
        height: auto;
        padding: 42px 0 10px;
    }

    .saas-marketing--sections-left ul li {
        padding: 12px 0 12px 24px;
        border-left: 3px solid #cdc6e5;
    }

    .saas-marketing--sections-left ul li:hover {
        border-color: var(--secondary);
    }

    .saas-marketing--sections-left ul li.active {
        border-color: var(--secondary);
    }

    .saas-marketing--sections-left ul li.active a {
        font-family: var(--bold);
        color: var(--secondary);
        /* font-family: var(--bold); */
    }

    .saas-marketing--sections-left ul li a {
        font-family: var(--regular);
        font-size: 20px;
        line-height: 25px;
        color: var(--black);
        text-decoration: none;
    }

    .saas-marketing--sections-left ul li a:hover {
        color: var(--secondary);
    }

    .saas-marketing--sections-right-content-box {
        max-width: 873px;
        width: 100%;
        background-color: #fff;
        padding: 50px 60px;
        margin: 0 0 50px auto;
        border-radius: 10px;
        background: #f4f4f4;
    }

    .saas-marketing--sections-right-content-box .logo {
        padding: 0 0 24px;
    }

    .saas-marketing--sections-right-content-box .title {
        font-size: 35px;
        line-height: 45px;
        color: #1c243c;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    .saas-marketing--sections-right-content-box .title:hover {
        color: #fc8d55;
    }

    .saas-marketing--sections-right-content-box .description {
        padding: 20px 0;
    }

    .saas-marketing--sections-right-content-box .listing-section {
        padding: 20px 0 0;
    }

    .saas-marketing--sections-right-content-box .listing-section .subtitle {
        font-family: var(--bold);
        font-size: 20px;
        line-height: 25px;
        color: #1c243c;
        padding: 0 0 22px;
    }

    .saas-marketing--sections-right-content-box .listing-section .listing {
        display: flex;
        flex-wrap: wrap;
    }

    .saas-marketing--sections-right-content-box .listing-section .listing li {
        position: relative;
        width: 50%;
        color: var(--black);
        margin: 8px 0;
        padding: 0px 30px 0 40px;
    }

    .saas-marketing--sections-right-content-box .listing-section .listing li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-green.svg);
        content: "";
        width: 24px;
        height: 24px;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        left: 0;
    }

    .saas-marketing--sections-right-content-box .cta-btn {
        text-align: right;
        padding: 22px 0 0;
    }

    .saas-marketing--sections-right-content-box .cta-btn a {
        display: inline-flex;
        align-items: center;
        font-family: var(--bold);
        font-size: 14px;
        line-height: 36px;
        letter-spacing: 0.02em;
        text-transform: uppercase;
        color: #1c243c;
        background-color: transparent;
        padding: 0;
        text-decoration: none;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .saas-marketing--sections-right-content-box .cta-btn a:hover {
        margin-left: 4px;
        color: #fc8d55;
        transform: none;
        box-shadow: none;
    }

    .saas-marketing--sections-right-content-box .cta-btn a svg {
        margin-left: 10px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .saas-marketing--sections-right-content-box .cta-btn a svg:hover {
        color: #fc8d55;
    }

    .saas-marketing--sections-right-content-box .cta-btn a line,
    .saas-marketing--sections-right-content-box .cta-btn a path {
        transition: all 0.3s ease-in-out;
    }

    .saas-marketing--sections-right-content-box .cta-btn a:hover line,
    .saas-marketing--sections-right-content-box .cta-btn a:hover path {
        stroke: #fc8d55;
    }

    .saas-marketing--sections-right-content-box .listing-section .listing.listing-blue li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-blue.svg);
    }

    .saas-marketing--sections-right-content-box .listing-section .listing.listing-orange li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-orange.svg);
    }

    .saas-marketing--sections-right-content-box .listing-section .listing.listing-green li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-lightgreen.svg);
    }

    .saas-marketing--sections-right-content-box .listing-section .listing.listing-dark-green li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-green.svg);
    }

    .saas-marketing--sections-right-content-box .listing-section .listing.listing-blue1 li::before {
        background-image: url(https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/border-blue.svg);
    }

    @media (max-width: 991px) {
        .saas-marketing--details--title {
            font-size: 30px;
        }

        .saas-marketing--details {
            max-width: 885px;
        }

        .saas-marketing--sections-right-content-box {
            padding: 35px 15px;
            margin: 0 0 20px;
        }

        .saas-marketing--sections-right-content-box .logo img {
            width: 44px;
        }

        .saas-marketing--sections-right-content-box .title {
            font-size: 22px;
            line-height: 32px;
        }

        .saas-marketing--sections-right-content-box .listing-section .listing li {
            width: 100%;
            padding: 0 15px 0 33px;
        }
    }

    @media (max-width: 767px) {
        .saas-marketing {
            padding: 40px 0 30px;
        }

        .saas-marketing--sections-left {
            display: none;
        }
    }
</style>
<section class="saas-marketing">
    <div class="container">
        <div class="saas-marketing--details">
            <h2 class="saas-marketing--details--title">
                <?php echo $headline; ?>
            </h2>
            <p class="saas-marketing--details--description">
                <?php echo $description; ?>
            </p>
        </div>
        <div class="saas-marketing--sections">
            <div class="row">
                <div class="col-md-4">
                    <div class="saas-marketing--sections-left">
                        <ul>
                            <?php

                            foreach ($services as $service) {
                            ?>
                                <li class="<?php if ($i == 1) {
                                                echo 'active';
                                            } ?>"><a href=""><?php echo $service['title']; ?></a></li>

                            <?php
                            }
                            ?>
                        </ul>
                        <a href="" class="btn-primary" style="margin-top: 70px;">Schedule a 1:1 Strategy Call</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php
                    $i = 1;
                    $listing = '';
                    foreach ($services as $service) {
                        if ($i == 2) {
                            $listing = 'listing-blue';
                        } elseif ($i == 3) {
                            $listing = 'listing-orange';
                        } elseif ($i == 4) {
                            $listing = 'listing-green';
                        } elseif ($i == 5) {
                            $listing = 'listing-dark-green';
                        } elseif ($i == 6) {
                            $listing = 'listing-blue1';
                        }
                    ?>
                        <div class="saas-marketing--sections-right">
                            <div class="saas-marketing--sections-right-content-box" style=<?php if($i % 2 == 0) {echo '"background: rgba(67,160,237, 0.2);"';} ?>>
                                <div class="logo">
                                    <?php
                                    if ($service['icon']) { ?>
                                        <img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['icon']['title']; ?>">
                                    <?php
                                    } else { ?>
                                        <img src="https://growfusely.com/wp-content/uploads/2023/02/key<?php echo $i; ?>.svg" alt="img">
                                    <?php
                                    }
                                    ?>
                                </div>
                                <a href="<?php echo $service['service_link']; ?>" class="title"><?php echo $service['title']; ?></a>
                                <div class="description">
                                    <p><?php echo $service['description']; ?></p>
                                </div>
                                <div class="listing-section">
                                    <div class="subtitle">What You’ll Get</div>
                                    <ul class="listing <?php echo $listing; ?>">
                                        <?php
                                        foreach ($service['points'] as $point) { ?>
                                            <li><?php echo $point['statement'] ?></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="cta-btn">
                                    <a href="<?php echo $service['service_link']; ?>">Read More <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                                            <path d="M9 0.5L13 6L9 11.5" stroke="#BFC8E1"></path>
                                            <line x1="13" y1="6" x2="-4.37114e-08" y2="6" stroke="#BFC8E1"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Get all the li elements inside .saas-marketing--sections-left
    const listItems = document.querySelectorAll('.saas-marketing--sections-left ul li');
    const sectionsRightDivs = document.querySelectorAll('.saas-marketing--sections-right');

    // Attach a click event to each li element
    listItems.forEach(function(li, index) {
        li.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Remove "active" class from all li elements
            listItems.forEach(function(item) {
                item.classList.remove('active');
            });

            // Add "active" class to the clicked li element
            this.classList.add('active');

            // Get the corresponding .saas-marketing--sections-right div
            const sectionsRightDiv = sectionsRightDivs[index];

            // Calculate the offset top position of the .saas-marketing--sections-right div
            const offsetTop = sectionsRightDiv.offsetTop;

            // Animate scrolling to the offset top position
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        });
    });

    // Add a scroll event listener to the window
    window.addEventListener('scroll', function() {
        // Loop through .saas-marketing--sections-right divs to find the active div
        let activeDivIndex = -1;
        for (let i = 0; i < sectionsRightDivs.length; i++) {
            const sectionsRightDiv = sectionsRightDivs[i];
            const rect = sectionsRightDiv.getBoundingClientRect();
            if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                activeDivIndex = i;
                break;
            }
        }

        // Remove "active" class from all li elements
        listItems.forEach(function(item) {
            item.classList.remove('active');
        });

        // Add "active" class to the corresponding li element
        if (activeDivIndex >= 0) {
            listItems[activeDivIndex].classList.add('active');
        }
    });
</script>
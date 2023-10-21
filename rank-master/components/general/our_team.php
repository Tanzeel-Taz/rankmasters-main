<?php
$heading = get_sub_field('headline');
$sub_heading = get_sub_field('sub_heading');
$description = get_sub_field('description');
$members = get_sub_field('members');
?>
<style>
    .our-team {
        /* padding-top: 100px;
  padding-bottom: 60px; */
    }

    .our-team--details {
        text-align: center;
        width: 1073px;
        max-width: 95%;
        margin: 0 auto;
        margin-bottom: 60px;
    }

    .our-team--details--title {
        margin-bottom: 10px;
    }

    .our-team--details--secondary-title {
        color: var(--secondary);
        margin-bottom: 24px;
    }

    .our-team--details p {
        /* font-size: 20px; */
        margin-bottom: 20px;
    }

    .team-members {
        /* margin-bottom: 60px; */
    }

    .team-members--detail {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
    }

    .team-members--detail--img {
        max-width: 100%;
        height: auto;
        margin-bottom: 15px;
        border: 2px solid var(--accent);
        border-radius: 50%;
    }

    .team-members--detail--title {
        margin-bottom: 5px;
    }

    .team-members--detail--status {
        font-size: 16px;
        color: var(--secondary);
        margin-bottom: 15px;
    }

    .team-members--detail p {
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .fa-linkedin:before {
        content: "\f0e1";
    }

    .team-members--detail-social-networks a {
        color: var(--accent);
        font-size: 18px;
        margin: 10px;
        transition: all 0.5s;
        text-decoration: none;
    }

    .team-members--detail-social-networks a:hover {
        color: #000;
    }

    .team-members-bottom-section {
        width: 1000px;
        max-width: 95%;
        margin: 0 auto;
        display: none;
    }

    @media (max-width: 767px) {
        .our-team--details--title {
            font-size: 30px;
        }

        .our-team--details--secondary-title {
            font-size: 23px;
        }

        .team-members .col-md-4 {
            width: 80%;
            margin: 0 auto;
        }

        .team-members .team-members--detail {
            padding-bottom: 50px;
        }
    }

    @media (max-width: 480px) {
        .team-members .col-md-4 {
            width: 100%;
            margin: 0 auto;
        }
    }
</style>

<section class="our-team">
    <div class="container">
        <div class="our-team--details">
            <h2 class="our-team--details--title">
                <?php echo $heading; ?>
            </h2>
            <h3 class="our-team--details--secondary-title"><?php echo $sub_heading; ?></h3>
            <p>
                <?php echo $description; ?>
            </p>
        </div>
        <div class="team-members">
            <div class="row">
                <?php foreach ($members as $member) { ?>
                    <div class="col-md-4">
                        <div class="team-members--detail">
                            <div class="team-members--detail--img">
                                <img src="https://okwrite.co/wp-content/uploads/2022/09/camille-circle.webp" alt="">
                            </div>
                            <h3 class="team-members--detail--title"><?php echo $member['name']; ?></h3>
                            <h4 class="team-members--detail--status"><?php echo $member['position']; ?></h4>
                            <p>
                                <?php echo $member['intro']; ?>
                            </p>
                            <?php
                            if ($member['socials']) { ?>
                                <div class="team-members--detail-social-networks">
                                    <?php
                                    foreach ($member['socials'] as $social) { ?>
                                        <a class="fa <?php echo $social['icon'] ?>" href="<?php echo $social['profile_link'] ?>"></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$cards = get_sub_field('steps');
?>
<style>
    /* .prob_solve {
        background-image: linear-gradient(180deg, #0d1117 7%, rgba(13, 17, 23, 0) 20%),
            radial-gradient(circle farthest-side at -25% 150%,
                #0d1117 48%,
                rgba(13, 17, 23, 0) 65%),
            radial-gradient(circle farthest-corner at -25% -125%,
                rgba(13, 17, 23, 0) 50%,
                #0d1117 70%,
                rgba(13, 17, 23, 0) 72%),
            radial-gradient(circle farthest-corner at 0 -50%,
                #0d1117 32%,
                hsla(0, 0%, 100%, 0) 62%),
            radial-gradient(circle farthest-side at 0 -25%,
                #007252 50%,
                rgba(13, 17, 23, 0) 72%),
            radial-gradient(circle farthest-corner at 50% -100%,
                #05f 26%,
                rgba(13, 17, 23, 0) 72%);
    }

    .prob_solve {
        background: #171616;
    } */

    .how-it-works--upper-section {
        width: 1030px;
        width: 1200px;
        max-width: 90%;
        margin: 0 auto 7.35em;
        color: var(--primary);
    }

    .how-it-works .how-it-works--upper-section .how-it-works--upper-section--title {
        /* line-height: 1.5em; */
        /* letter-spacing: 0.05em; */
        text-transform: uppercase;
        color: var(--secondary);
        margin: 0 0 16px;
    }

    .how-it-works .hdn_part .prob_solve h4 {
        color: #1ae890;
        margin-bottom: 8px;
    }

    .how-it-works--upper-section--wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    h2.how-it-works--upper-section--wrapper--title {
        margin-bottom: 40px;
        margin-top: 20px;
        margin: 0;
        width: 582px;
    }

    .how-it-works--upper-section--wrapper p {
        /* color: #f2f5f7; */
        padding: 29px 0 29px 35px;
        /* border-left: 1px solid var(--black); */
        text-align: left;
        width: 359px;
    }

    .how-it-works-cards{
        width: 1200px;
        margin: 0 auto;
        max-width: 90%
    }
    .how-it-works-card{
        border-radius: 10px;
        /* border: 3px solid transparent; */
        border: 2px solid var(--secondary);
        padding: 95px 16% 144px;
        text-align:center;
        height:100%;
        transition: all 0.3s;
        color: var(--primary);
    }
    .how-it-works-card:hover{      
        background: var(--secondary);
        color: var(--white);
        /* border-color: #1ae890; */
    }
    .how-it-works-cards .col-md-4{
        padding: 0 12px;
    }
    .how-it-works-card img{
        width:64px;
        border-radius: 5px;
    }
    .how-it-works-card h4{
        color: inherit;
        margin: 23px 0 3px;
    }
    .how-it-works-card p{
        margin-top: 50px;
        color: inherit;
        /* color:#fff; */
    }

    @media (max-width: 1080px) {
        h2.how-it-works--upper-section--wrapper--title{
            padding-right:63px;
            width: auto;
        }
    }
    @media (max-width: 992px) {
        .how-it-works--upper-section--wrapper{
            flex-direction:column;
            align-items:baseline;
        }
        h2.how-it-works--upper-section--wrapper--title{
            padding-right:0;
        }
        .how-it-works--upper-section--wrapper p{
            width:auto;
        }
    }
    @media (max-width: 992px) and (min-width: 700px)  {
        .how-it-works-cards .col-md-4{
            width:45%;
            margin: 0 auto;
            margin-bottom:30px;
        }
    }
    @media (max-width: 700px) {
        .how-it-works-card h4{
            font-size:18px;
        }
        .how-it-works-card{
            padding: 70px 5%;
        }
        .how-it-works-cards .col-md-4{
            width: 95%;
            max-width: 330px;
            margin: 0 auto;
            margin-bottom:30px;
        }
    }

</style>
<section class="prob_solve how-it-works">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="how-it-works--upper-section">
                    <p class="how-it-works--upper-section--title"><?php echo $kicker; ?></p>
                    <div class="how-it-works--upper-section--wrapper">
                        <h2 class="how-it-works--upper-section--wrapper--title"><?php echo $headline; ?><br></h2>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-cards">
            <div class="row">
                <?php foreach($cards as $card){?>
                <div class="col-md-4">
                    <div class="how-it-works-card">
                        <!-- <a href="#"> -->
                            <img src="<?php echo $card['icon']['url']; ?>" data-lazy-src="<?php echo $card['icon']['url']; ?>" data-ll-status="loaded" class="entered lazyloaded" alt="<?php echo $card['icon']['title']; ?>">
                            <h4><?php echo $card['title']; ?></h4>
                            <p><?php echo $card['description']; ?></p>
                        <!-- </a> -->
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
</section>
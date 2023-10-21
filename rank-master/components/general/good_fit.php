<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$title = get_sub_field('title');
$pros = get_sub_field('pros');
$cons = get_sub_field('cons');
$button = get_sub_field('button');
?>
<style>
  .we-good-fit.bg-green {
    background-color: #dff5f4;
  }

  .we-good-fit .col-md-6 {
    padding: 0 15px;
  }

  .we-good-fit .service-pros-cons .title-wrap {
    max-width: 802px;
    width: 100%;
    margin: 0 auto;
    padding: 0 15px 20px;
    text-align: center;
  }

  .we-good-fit .service-pros-cons .title-wrap h2 {
    padding: 0 0 17px;
    margin: 0;
  }

  .we-good-fit .title-wrap p {
    margin: 0;
    padding: 0 0 12px;
  }

  .we-good-fit .pros-cons-section p:last-of-type {
    margin: 0;
  }

  .we-good-fit .pros-cons-section .title-wrap p:nth-last-child(1) {
    padding: 0;
  }

  .pros-cons-contain {
    padding: 40px 0 0;
  }

  .pros-cons-contain .box {
    height: 100%;
    border-radius: 4px;
    padding: 60px 60px 45px;
  }

  .bg-navyblue {
    background-color: var(--primary);
  }

  .pros-cons-contain .box .img-title {
    display: flex;
    padding: 0 0 25px;
  }

  .pros-cons-contain .box .img-title .image {
    width: 30px;
  }

  .pros-cons-contain .box .img-title .title {
    font-family: var(--semibold);
    font-size: 25px;
    line-height: 30px;
    padding-left: 14px;
    color: var(--white);
  }

  .pros-cons-contain ul.listing li {
    position: relative;
    padding: 15px 0 15px 40px;
    color: #fff;
  }

  .pros-cons-contain .box.pros ul.listing li:before {
    background-image: url("<?php echo get_template_directory_uri().'/assets/images/icons/tick.png'?>");
  }

  .pros-cons-contain ul.listing li:before {
    content: "";
    width: 24px;
    height: 24px;
    border-radius: 100%;
    background-repeat: no-repeat;
    background-size: contain;
    position: absolute;
    left: 0;
    top: 18px;
  }

  .pros-cons-contain .box {
    height: 100%;
    border-radius: 4px;
    padding: 60px 60px 45px;
  }

  .bg-white {
    background-color: #ffffff;
  }

  .pros-cons-contain .box.cons .title {
    color: var(--primary);
  }

  .pros-cons-contain .box.cons ul.listing li {
    color: var(--black);
  }

  .pros-cons-contain .box.cons ul.listing li:before {
    background-image: url("https://growfusely.com/wp-content/themes/growfusely/assets/images/icons/blue-tick.png");
  }

  .service-pros-cons .info {
    padding: 50px 0 40px;
  }

  .service-pros-cons .info p {
    text-align: center;
    color: var(--primary);
  }

  .text-center {
    text-align: center;
  }

  @media (max-width: 991px) {
    .pros-cons-contain {
      padding: 15px 0 0;
    }

    .pros-cons-contain .box .img-title .title {
      font-size: 20px;
    }

    .pros-cons-contain .box {
      padding: 30px 20px 20px;
    }
  }

  @media (max-width: 767px) {
    .pros-cons-contain .col-md-6 {
      margin: 0 0 10px;
    }

    .service-pros-cons .info {
      padding: 10px 0 49px;
    }

    .we-good-fit .service-pros-cons .title-wrap .h2 {
      line-height: 38px;
    }
  }
</style>

<section class="we-good-fit bg-green">
  <div class="we-good-fit-pros-cons-wrap service-pros-cons">
    <div class="container">
      <div class="pros-cons-section">
        <div class="title-wrap" data-aos="fade-up">
          <h2><?php echo $headline; ?></h2>
          <div class="description">
            <p><?php echo $description; ?></p>
          </div>
        </div>
        <div class="row pros-cons-contain">
          <div class="col-md-6" data-aos="fade-right">
            <div class="box bg-navyblue pros">
              <div class="img-title">
                <div class="image">
                  <svg xmlns="http://www.w3.org/2000/svg" width="31" height="24" viewBox="0 0 31 24" fill="none" class="svg replaced-svg">
                    <path d="M3 10L12 19L27.5 3" stroke="#ff8c00" stroke-width="7"></path>
                  </svg>
                </div>
                <div class="title">We Could Be a Fit If</div>
              </div>
              <ul class="listing">
                <?php
                foreach ($pros as $pro) { ?>
                  <li><?php echo $pro['statement']; ?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <div class="box bg-white cons">
              <div class="img-title">
                <div class="image">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" class="svg replaced-svg">
                    <path d="M3 23L23 3" stroke="#ED462F" stroke-width="7"></path>
                    <path d="M3 3L23 23" stroke="#ED462F" stroke-width="7"></path>
                  </svg>
                </div>
                <div class="title">We're Probably Not a Fit If</div>
              </div>
              <ul class="listing">
                <?php
                foreach ($cons as $con) { ?>
                  <li><?php echo $con['statement']; ?></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="info">
          <p>If this sounds like a marketing partnership you’re looking for, then let’s talk.</p>
        </div>
        <div class="cta-btn text-center">
          <?php if ($button) { ?>
            <a href="<?php echo $button['url']; ?>" aria-label="" target="<?php echo $button['target']; ?>" class="btn-primary m-auto"><?php echo $button['title']; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
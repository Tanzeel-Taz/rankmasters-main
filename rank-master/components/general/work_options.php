<?php
$headline = get_sub_field('headline');
$description = get_sub_field('description');
$button = get_sub_field('button');
$services = get_sub_field('services');
?>
<style>
  .how-you-work {
    background: #f9f8f2;
  }

  .how-you-work--info-wrapper__headline {
    padding: 0 0 36px;
  }

  .how-you-work--info-wrapper__btn-wrapper {
    padding: 70px 0 0;
  }

  .how-you-work--work-strategy-outer {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    max-width: 764px;
    margin-left: auto;
  }

  .how-you-work--work-strategy-outer--inner {
    width: 50%;
    padding: 20px 0;
  }

  .how-you-work--work-strategy-outer--inner:nth-child(1),
  .how-you-work--work-strategy-outer--inner:nth-child(2) {
    border-bottom: 1px solid #e2e0d2;
    padding: 0 0 51px;
  }

  .how-you-work--work-strategy-outer--inner:nth-child(3),
  .how-you-work--work-strategy-outer--inner:nth-child(4) {
    padding: 51px 0 0;
  }

  .how-you-work--work-strategy-outer--inner:nth-child(odd) {
    padding-right: 37px;
  }

  .how-you-work--work-strategy-outer--inner:nth-child(even) {
    padding-left: 47px;
  }

  .how-you-work--work-strategy-outer--inner:nth-child(odd) {
    border-right: 1px solid #e2e0d2;
  }

  .how-you-work--work-strategy-outer--inner--box__title {
    font-family: var(--semibold);
    font-size: 25px;
    line-height: 30px;
    color: var(--primary);
    padding: 16px 0;
  }

  @media (max-width: 991px) {
    .how-you-work .left {
      padding: 0 0 50px;
    }

    .how-you-work--work-strategy-outer {
      max-width: 100%
    }

    .how-you-work--info-wrapper__headline {
      padding: 0 0 18px;
    }

    .how-you-work--info-wrapper__btn-wrapper {
      padding: 35px 0 0;
    }
  }

  @media (max-width: 767px) {
    .how-you-work--info-wrapper__headline {
      font-size: 30px;
    }

    .how-you-work .left {
      padding: 0 0 15px;
    }

    .how-you-work--work-strategy-outer--inner {
      width: 100%;
      border: 0 !important;
      border-bottom: 1px solid #e2e0d2 !important;
      padding: 38px 0 !important;
    }

    .how-you-work--work-strategy-outer--inner:nth-child(odd) {
      padding-right: 0;
    }

    .how-you-work--work-strategy-outer--inner:nth-last-child(1) {
      border-bottom: 0 !important;
    }

    .how-you-work--work-strategy-outer--inner--box__title {
      font-size: 22px;
      line-height: 28px;
      padding: 18px 0 8px;
    }
  }

  /*# sourceMappingURL=style.css.map */
</style>

<section class="how-you-work">
  <div class="container">
    <div class="row align-items-center">
      <div class="left col-xl-4 col-lg-5">
        <div class="how-you-work--info-wrapper aos-init aos-animate" data-aos="fade-up">
          <h2 class="how-you-work--info-wrapper__headline"><?php echo $headline; ?></h2>
          <p class="how-you-work--info-wrapper__description"><?php echo $description; ?></p>
          <div class="how-you-work--info-wrapper__btn-wrapper">
            <?php if ($button) { ?>
              <a class="btn-primary" href="<?php echo $button['url']; ?>" aria-label="" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="right col-xl-8 col-lg-7">
        <div class="how-you-work--work-strategy-outer">
          <?php
          $i = 1;
          foreach ($services as $service) {
          ?>
            <div class="how-you-work--work-strategy-outer--inner">
              <div class="how-you-work--work-strategy-outer--inner--box">
                <div class="how-you-work--work-strategy-outer--inner--box__icon">
                  <?php if ($service['icon']) { ?>
                    <img src="<?php echo $service['icon']['url']; ?>" alt="<?php echo $service['icon']['title']; ?>">
                  <?php } else { ?>
                    <img width="95" height="109" src="https://growfusely.com/wp-content/uploads/2023/01/logo<?php echo $i; ?>.png" class="attachment-full size-full" alt="logo1" decoding="async" loading="lazy">
                  <?php } ?>
                </div>
                <h4 class="how-you-work--work-strategy-outer--inner--box__title"><?php echo $service['title']; ?></h4>
                <div class="how-you-work--work-strategy-outer--inner--box__content">
                  <p><?php echo $service['description']; ?></p>
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
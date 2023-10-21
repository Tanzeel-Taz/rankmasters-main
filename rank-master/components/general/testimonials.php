<?php
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline');
$cards = get_sub_field('cards');
$button = get_sub_field('button');
?>
<style>
.homepage-testimonials--card {
  background-color: var(--while);
  border: 1px solid var(--secondary);
  border-radius: 10px;
  /* box-shadow: 0 11px 30px rgba(154, 161, 177, 0.2); */
  flex-basis: 300px;
  flex-grow: 1;
  padding: 2em;
  display: flex;
  flex-direction: column;
  row-gap: 2em;
  transition: all 0.3s;
}

.homepage-testimonials--card:hover {
  background-color: #e7f3fd;
  border: 1px solid #e7f3fd;
}

.homepage-testimonials--card svg {
  fill: var(--secondary);
  height: 32px;
  max-height: 32px;
  margin-right: auto;
}

.homepage-testimonials--card--info {
  display: flex;
  align-items: center;
  -moz-column-gap: 15px;
  column-gap: 15px;
}

.homepage-testimonials--card--info img {
  border-radius: 50%;
  display: block;
  width: 4.58em;
  height: 4.58em;
  -o-object-fit: cover;
  object-fit: cover;
}

.homepage-testimonials--card--info__position {
  font-family: var(--medium);
  width: -moz-max-content;
  width: max-content;
  border-bottom: 0.5px solid rgba(255, 255, 255, 0.5);
  margin: 0;
  font-size: 11px;
  line-height: 1.5;
  color: var(--black);
  margin-bottom: 8px;
}

.homepage-testimonials--card--info__name {
  font-family: var(--bold);
  color: var(--secondary);
  font-size: 15px;
  line-height: 1.4;
}

.slick-initialized .slick-slide {
  margin: 0 10px;
}

.slick-prev:before,
.slick-next:before {
  color: var(--accent);
}

@media screen and (min-width: 1200px) {
  .homepage-testimonials .col-sm-6 {
    padding: 0 20px;
  }
}

@media screen and (max-width: 768px) {

  .slick-prev,
  .slick-next {
    display: none !important;
  }
}
</style>
<section class="homepage-testimonials">
  <div class="container">
    <p class="homepage-testimonials__kicker text-center small-text"><?php echo $kicker; ?></p>
    <h2 class="homepage-testimonials__headline text-center mb-5"><?php echo $headline; ?></h2>
    <div class="row">
      <div class="homepage-testimonial">
        <?php foreach ($cards as $card) { ?>
        <div class="col-sm-6">
          <div class="homepage-testimonials--card">
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 33">
              <path
                d="M32.6 14.16a8.19 8.19 0 015.83 3.1 10.44 10.44 0 012.18 6.73c0 2.55-.85 4.67-2.54 6.37-1.7 1.7-4 2.55-6.92 2.55-2.8 0-5.04-.85-6.74-2.55-1.7-1.82-2.54-4.55-2.54-8.19 0-3.76 1.57-7.95 4.73-12.56 3.15-4.73 6.43-7.89 9.83-9.46.48-.25 1.21.06 2.18.9.97.86 1.46 1.58 1.46 2.19-3.52 2.43-6 6.07-7.46 10.92zm-21.1 0a8.04 8.04 0 015.63 3.1 10.44 10.44 0 012.19 6.73c0 2.55-.85 4.67-2.55 6.37-1.58 1.7-3.82 2.55-6.73 2.55-2.8 0-5.04-.85-6.74-2.55C1.6 28.54.75 25.81.75 22.17c0-3.76 1.52-7.95 4.55-12.56C8.46 4.88 11.8 1.72 15.31.15c.49-.25 1.22.06 2.19.9.97.86 1.45 1.58 1.45 2.19-3.51 2.43-6 6.07-7.46 10.92z">
              </path>
            </svg>
            <p class="homepage-testimonials--card__statement">
              <?php echo $card['statement']; ?>
            </p>
            <div class="homepage-testimonials--card--info">
              <?php if ($card['photo']) { ?>
              <img src="<?php echo $card['photo']['url']; ?>" alt="<?php echo $card['photo']['title']; ?>">
              <?php } else { ?>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/Rob-Southern (1).webp' ?>" alt="">
              <?php } ?>
              <div>
                <p class="homepage-testimonials--card--info__position">
                  <?php echo $card['designation']; ?></p>
                <p class="homepage-testimonials--card--info__name">
                  <?php echo $card['name']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
      </div>
    </div>
    <?php if ($button) { ?>
    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"
      class="btn-primary m-auto mt-5"><?php echo $button['title']; ?></a>
    <?php } ?>
  </div>
</section>

<script>
jQuery(document).ready(function() {

  jQuery('.homepage-testimonial').slick({
    arrows: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 767,
        arrows: false,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});
</script>
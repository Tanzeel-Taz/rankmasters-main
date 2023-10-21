<?php
$headline = get_sub_field('headline');
$cards = get_sub_field('cards');
?>
<style>
    .integrated-partner {
  /* padding: 140px 0 70px 0; */
}
.integrated-partner-heading-section {
  width: 810px;
  max-width: 95%;
  margin: 0 auto;
  text-align: center;
  margin-bottom: 40px;
}
.integrated-partner--cards {
  border: 0.05em solid var(--accent);
  background: #fafafa;
  padding: 28px 30.8px;
  border-radius: 8.32px;
}
.integrated-partner--cards:not(:last-child) {
  margin-bottom: 32px;
}
.integrated-partner--card--details {
  display: flex;
  align-items: center;
  margin-bottom: 16px;
}
.integrated-partner--card--details--img {
  width: 2.97em;
  height: 2.97em;
  margin-right: 16px;
}
.integrated-partner--card--details--title {
  font-size: 27.72px;
  line-height: 1.4;
  font-family: var(--semibold);
}
@media (max-width: 767px) {
  .integrated-partner-heading-section--heading-section__title{
    font-size:30px;
  }
  .integrated-partner--card--details--title{
    font-size:17px;
  }
}
</style>
<section class="integrated-partner">
    <div class="container">
        <div class="integrated-partner-heading-section">
            <h2 class="integrated-partner-heading-section--heading-section__title"><?php echo $headline; ?></span></h2>
        </div>
        <?php foreach ($cards as $card) { ?>
            <div class="integrated-partner--cards">
                <div class="integrated-partner--card">
                    <div class="integrated-partner--card--details">
                        <?php if ($card['logo']) { ?>
                            <img src="<?php echo $card['logo']['url']; ?>" alt="<?php echo $card['logo']['title']; ?>" target="<?php echo $card['logo']['target']; ?>" class="integrated-partner--card--details--img">
                        <?php } else { ?>
                            <img src="https://global-uploads.webflow.com/64344a209e58870e5f232ee7/6451306904f8852483b789a7_Group.svg" alt="Slack logo scribble" class="integrated-partner--card--details--img">
                        <?php } ?>
                        <h3 class="integrated-partner--card--details--title"><?php echo $card['title']; ?></h3>
                    </div>
                    <p>
                        <?php echo $card['description']; ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>
</section>
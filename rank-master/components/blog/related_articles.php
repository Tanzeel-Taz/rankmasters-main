<?php
$recent_articles = get_posts(array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'order' => 'DESC',
));

?>
<style>
.our-blog--post-meta .post-author-link:hover {
  color: var(--accent);
}
</style>
<section class="our-blog relative-articles">
  <div class="container">
    <div class="our-blog--posts">
      <div class="row">
        <?php
                $i = 1;
                if ($recent_articles) :
                    foreach ($recent_articles as $item) {
                        $author_data = get_userdata($item->post_author);
                        $categories = get_the_category($item->ID);
                        $first_category = $categories[0];
                        $post_link = get_permalink($item->ID);
                ?>
        <div class="col-lg-6">
          <div class="our-blog--post <?php echo ($i == 4) ? 'product-blog' : ' ';
                                                        echo ($i == 2) ? 'post-line' : ' '; ?>">
            <div class="our-blog--post--post-category">
              <a
                href="<?php echo esc_url(get_category_link($first_category->term_id)); ?>"><?php echo $first_category->name; ?></a>
            </div>
            <h3>
              <a href="<?php echo $post_link; ?>"><?php echo $item->post_title; ?></a>
            </h3>
            <div class="our-blog--post-meta">
              <span>
                <?php if ($item->post_excerpt) {
                                            echo $item->post_excerpt;
                                        } else {
                                            echo "A popular link building strategy, guest blogging is a go-to for many SEOs. We share the benefits, tips, and tools you'll need to do it well.";
                                        } ?> </span>
              <span class="post-author">
                <a href="<?php echo home_url() . '/author/' . $author_data->user_nicename ?>" target="_blank">
                  <span class="post-author-avatar">
                    <?php if (get_avatar($author_data->ID)) { ?>
                    <?php echo get_avatar($author_data->ID); ?>
                    <?php } else { ?>
                    <img
                      src="<?php echo get_template_directory_uri() . '/assets/images/646f9c311c72c27102ed8eaf_64512a1367864752c702a6f5_Sean.webp' ?>"
                      alt="">
                    <?php } ?> </span>
                  <span class="post-author-link">
                    <?php echo $author_data->first_name;
                                                echo ' ';
                                                echo $author_data->last_name; ?>
                  </span>
                </a>
              </span>
              <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
            </div>
          </div>
        </div>
        <?php
                        $i++;
                    };
                    wp_reset_postdata(); // Reset the post data
                else :
                    echo 'No articles found.';
                endif;
                ?>
      </div>
    </div>
</section>
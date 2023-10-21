<?php
$parent_category = get_sub_field('categories');
// var_dump($parent_category);
$sub_categories = get_categories(array(
    'child_of' => $parent_category->term_id,
));
?>
<section class="category">
    <div class="container">
        <div class="category-details">
            <h2><?php echo $parent_category->name; ?></h2>
            <p>If you want to rank higher in search engines like Google, you need SEO. Check out the resources below to learn how to get more organic traffic to your website.</p>
        </div>
        <div class="category-navs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php
                $i = 1;
                foreach ($sub_categories as $sub_category) { ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($i == 1) ? 'active' : ' '; ?>" id="cat<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#cat-<?php echo $i; ?>" type="button" role="tab" aria-controls="<?php echo $i; ?>" aria-selected="<?php echo ($i == 1) ? 'true' : 'false'; ?>"><?php echo $sub_category->name; ?></button>
                    </li>
                <?php
                    $i++;
                } ?>
            </ul>
        </div>
        <div class="category-tabs">
            <div class="tab-content" id="myTabContent">
                <?php
                $i = 1;
                foreach ($sub_categories as $sub_category) {
                    $args = array(
                        'category__in' => array($sub_category->term_id),
                        'posts_per_page' => 5, // Display all posts in the sub-category
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                ?>
                        <div class="tab-pane fade <?php echo ($i == 1) ? 'show active' : ' '; ?>" id="cat-<?php echo $i; ?>" role="tabpanel" aria-labelledby="cat<?php echo $i; ?>-tab">
                            <div class="row">


                                <?php
                                $a = 1;
                                foreach ($query->posts as $item) {
                                    // var_dump($item);
                                    $post_link = get_permalink($item->ID);
                                    $post_thumbnail = get_the_post_thumbnail($post_id,);

                                    $count = count($query->posts);
                                ?>
                                    <?php
                                    if ($a == 1) {
                                    ?>
                                        <div class="col-md-4">
                                            <div class="category-post">
                                                <a href="<?php echo $post_link; ?>">
                                                    <div class="category-post--thumbnail">
                                                        <?php if ($post_thumbnail) { ?>
                                                            <img src="<?php echo $post_thumbnail; ?>" alt="Post Thumbnail">
                                                        <?php } else { ?>
                                                            <img src="https://ahrefs.com/blog/wp-content/uploads/2021/04/seob.png" alt="">
                                                        <?php } ?>
                                                    </div>
                                                    <h3> <?php echo $item->post_title; ?></h3>
                                                </a>
                                                <div class="category-post--post-meta">
                                                    <span>
                                                        <?php if ($item->post_excerpt) {
                                                            echo $item->post_excerpt;
                                                        } else {
                                                            echo "Get your website set up for SEO success and learn the fundamentals of SEO.";
                                                        } ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    } else { ?>
                                        <?php if ($a == 2 || $a == 4) { ?>
                                            <div class="col-md-4 post-line">
                                            <?php } ?>
                                            <?php //if ($a < 6) { 
                                            ?>
                                            <div class="category-post ">
                                                <a href="<?php echo $post_link; ?>">
                                                    <h3><?php echo $item->post_title; ?></h3>
                                                </a>
                                                <span>
                                                    <?php if ($item->post_excerpt) {
                                                        echo $item->post_excerpt;
                                                    } else {
                                                        echo "Get your website set up for SEO success and learn the fundamentals of SEO.";
                                                    } ?>
                                                </span>
                                            </div>
                                            <?php //} 
                                            ?>
                                            <?php if ($a == 3 || $a == 5 || $count == 2 || $a == 4 && $count == 4) { ?>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                <?php
                                    $a++;
                                    // wp_reset_postdata(); // Reset the query for the next sub-category
                                }
                                ?>
                            </div>
                        </div>
                <?php
                    }

                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
</section>
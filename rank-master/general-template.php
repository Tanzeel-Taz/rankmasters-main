<?php 
/* Template Name: General Template */

get_header(); ?>

<?php

if (have_rows('general_components')) :

    while (have_rows('general_components')) : the_row();

        $template = get_row_layout();
        // var_dump($template);

        if (get_row_layout() != '') :
            get_template_part('components/general/' . $template);
        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>
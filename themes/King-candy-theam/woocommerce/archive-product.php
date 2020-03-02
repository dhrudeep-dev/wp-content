<?php 
/*
Template Name: Custome_shop
*/
get_header(); ?>

<div class="x-container max width offset-1">

    <?php echo do_shortcode('[products limit="6" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>

</div>
<?php get_footer(); ?>

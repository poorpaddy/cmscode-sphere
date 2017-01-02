<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<h1>Search Results</h1>
<?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>">
  <h2><?php the_title(); ?></h2>
</a>
<div class="searchDivide"><?php the_excerpt(); ?></div>
<?php endwhile; ?> 

<?php else : ?> 

<?php _e( 'Nothing Found' ); ?> 
<?php endif; ?>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>
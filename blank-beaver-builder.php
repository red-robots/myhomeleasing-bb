<?php 
/**
* Template Name: Beaver Builder Blank
*/

get_header(); 

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="main-wrapper">
				<?php the_content(); ?>
			</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
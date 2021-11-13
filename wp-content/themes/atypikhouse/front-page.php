<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('templates/filters'); ?>
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
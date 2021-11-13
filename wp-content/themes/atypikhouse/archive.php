<?php get_header(); ?>
 	<h1>Nos types d'hébergements</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); 

    $terms = get_terms(array(
        'taxonomy'      => 'category_hebergement',
        'hide_empty'    => false
    ));

    ?>
    <div class="archive-cat_hebergement">
    <?php 
    foreach($terms as $term) : ?>
        
        <article>
            <h2><?= $term->name; ?></h2>
            <p><?= $term->description; ?></p>
            <div class="image">
                <img src="<?= get_field('image', $term); ?>" alt="Image">
                <a href="<?= get_term_link($term); ?>">Voir les hébergements <i class="fas fa-angle-right"></i></a>
            </div>
        </article>

    <?php endforeach;
    ?>
    </div>

    <?php 
    debug($terms);

	endwhile; endif; ?>
<?php get_footer(); ?>
<article class="randonnee-card">
    <?php 
    $image_url = get_field('image'); 
    if ($image_url): ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>

    <div class="card-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <p><strong>Distance :</strong> <?php echo get_field('distance'); ?> km</p>
        <p><strong>Durée :</strong> <?php echo get_field('duree'); ?></p>
        
        <?php echo get_the_term_list(get_the_ID(), 'difficulte', '', ', ', ''); ?>
    </div>
</article>
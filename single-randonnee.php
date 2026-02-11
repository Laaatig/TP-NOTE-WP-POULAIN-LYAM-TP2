<?php get_header(); ?>
<main class="container single-randonnee-container">
    <?php while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php if(get_field('image')): ?>
            <img src="<?php echo get_field('image'); ?>" class="randonnee-hero-image" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <div class="tech-infos">
            <ul>
                <li><strong>📍 Distance :</strong> <?php echo get_field('distance'); ?> km</li>
                <li><strong>⏱️ Durée :</strong> <?php echo get_field('duree'); ?></li>
                <li><strong>🧗 Accès difficile :</strong> 
                    <?php if( get_field('acces_difficile') ): ?>
                        <span style="color:#d35400;">Oui ⚠️</span>
                    <?php else: ?>
                        <span style="color:#27ae60;">Non ✅</span>
                    <?php endif; ?>
                </li>
            </ul>
        </div>

        <?php if( have_rows('points_interets') ): ?>
            <div class="poi-section">
                <h3>🌲 Points d'intérêts :</h3>
                <ul>
                <?php while( have_rows('points_interets') ): the_row(); ?>
                    <li><?php echo get_sub_field('nom'); ?></li>
                <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
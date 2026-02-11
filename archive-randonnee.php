<?php get_header(); ?>

<main class="container">
    <h1>Toutes nos Randonnées</h1> <div class="randonnee-grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php 
                [cite_start]// Importation de la carte créée en Ex 5 [cite: 30]
                get_template_part('templates/content', 'randonnee'); 
                ?>

            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucune randonnée trouvée.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
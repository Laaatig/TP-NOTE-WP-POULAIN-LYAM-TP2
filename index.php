<?php get_header(); ?>

<main class="container">
    <h1>Top 3 Randonnées "Moyen"</h1>

    <div class="randonnee-grid">
        <?php
        $args = array(
            'post_type'      => 'randonnee',
            'posts_per_page' => 3,
            // J'ai supprimé le filtre de difficulté pour tester
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                
                get_template_part('templates/content', 'randonnee');

            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Pas de randonnées de niveau moyen trouvées.</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
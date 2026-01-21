<?php
get_header();?>

<main id="primary" class="site-main ouvrage-single">

<?php while ( have_posts() ) : the_post(); ?>

    <!-- TITRE DU LIVRE -->
    <h1 class="ouvrage-title"><?php the_field('titre_livre_h1'); ?></h1>

    <!-- CARROUSEL (3 IMAGES ACF) -->
    <?php
    $image1 = get_field('image_1_livre');
    $image2 = get_field('image_2_livre');
    $image3 = get_field('image_3_livre');

    if ( $image1 || $image2 || $image3 ) :
    ?>
    <div class="swiper ouvrage-swiper">
        <div class="swiper-wrapper">

            <?php if ( $image1 ) : ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image1['url']); ?>" alt="">
                </div>
            <?php endif; ?>

            <?php if ( $image2 ) : ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image2['url']); ?>" alt="">
                </div>
            <?php endif; ?>

            <?php if ( $image3 ) : ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image3['url']); ?>" alt="">
                </div>
            <?php endif; ?>

        </div>

        <div class="swiper-pagination"></div>
    </div>
    <?php endif; ?>

    <!-- DESCRIPTION DU LIVRE -->
    <div class="ouvrage-description">
        <?php the_field('description_livre'); ?>
    </div>

    <!-- AUTEUR -->
    <div class="ouvrage-auteur">
        <?php $photo_auteur = get_field('photo_auteur'); ?>
        <?php if ( $photo_auteur ) : ?>
            <img src="<?php echo esc_url($photo_auteur['url']); ?>" alt="">
        <?php endif; ?>

        <div class="auteur-infos">
            <h3><?php the_field('nom_auteur_h2'); ?></h3>
            <p><?php the_field('description_auteur'); ?></p>
        </div>
    </div>

    <!-- ICONES (4 RONDS) -->
    <div class="circle-wrapper">
  <div class="circle-image">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/imprimante-blanc.svg" alt="Imprimer">
  </div>
  <div class="circle-image">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/picto_partagerW.svg" alt="Partager">
  </div>
  <div class="circle-image">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/picto_reservationW.svg" alt="Réserver">
  </div>
  <div class="circle-image">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/favoris_blanc.svg" alt="Favoris">
  </div>
</div>

    <!-- AVIS (SITE REVIEWS – PAS ACF) -->
    <section class="ouvrage-avis">
        <h2>Avis et commentaires</h2>

        <?php echo do_shortcode('[site_reviews assigned_to="' . get_the_ID() . '" limit="5"]');?>

        <?php echo do_shortcode('[site_reviews_form assigned_to="' . get_the_ID() . '"]'); ?>
    </section>

    <!-- RECOMMANDATIONS -->
<?php
// Nombre de recommandations à afficher
$reco_count = 3;

// Récupérer 3 ouvrages aléatoires différents du livre courant
$random_books = new WP_Query(array(
    'post_type'      => 'ouvrages',
    'posts_per_page' => $reco_count,
    'post__not_in'   => array(get_the_ID()), // Exclut le livre actuel
    'orderby'        => 'rand'
));

if ( $random_books->have_posts() ) : ?>
<section class="ouvrage-reco">
    <h2>Recommandations</h2>
    <div class="reco-grid">
        <?php while ( $random_books->have_posts() ) : $random_books->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="reco-item">
                <?php 
                // Affiche l'image mise en avant
                if ( has_post_thumbnail() ) : 
                    the_post_thumbnail('medium'); 
                else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/default-book.png" alt="Pas d'image disponible">
                <?php endif; ?>
                
                <p class="reco-title"><?php the_title(); ?></p>
            </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif; ?>


<?php endwhile; ?>

</main>

<?php get_footer(); ?>

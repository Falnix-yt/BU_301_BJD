<?php
get_header();
?>

<main id="primary" class="site-main ouvrage-single">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <!-- TITRE DU LIVRE -->
    <h1><?php echo esc_html(get_field('titre_livre_h1') ?: get_the_title()); ?></h1>

    <!-- CARROUSEL DES IMAGES ACF -->
    <?php 
    $images = [
        get_field('image_1_livre'),
        get_field('image_2_livre'),
        get_field('image_3_livre')
    ];
    $images = array_filter($images); // supprime les champs vides

    if(!empty($images)): ?>
        <div class="swiper ouvrage-swiper">
            <div class="swiper-wrapper">
                <?php foreach($images as $image):
                    // Gestion universelle Array / ID / URL
                    if(is_array($image)):
                        $src = $image['url'];
                        $alt = $image['alt'] ?? '';
                    elseif(is_numeric($image)):
                        $src = wp_get_attachment_url($image);
                        $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                    else:
                        $src = $image;
                        $alt = '';
                    endif;
                ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>" class="ouvrage-image">
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination et navigation Swiper -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    <?php endif; ?>

    <!-- DESCRIPTION DU LIVRE -->
    <?php if(get_field('description_livre')): ?>
        <div class="ouvrage-description">
            <?php echo wp_kses_post(get_field('description_livre')); ?>
        </div>
    <?php endif; ?>

    <!-- AUTEUR -->
    <?php 
    $photo_auteur = get_field('photo_auteur');
    $nom_auteur   = get_field('nom_auteur_h2');
    $desc_auteur  = get_field('description_auteur');

    if($photo_auteur || $nom_auteur || $desc_auteur):
        if($photo_auteur):
            // Gestion universelle Array / ID / URL
            if(is_array($photo_auteur)):
                $src = $photo_auteur['url'];
                $alt = $photo_auteur['alt'] ?? '';
            elseif(is_numeric($photo_auteur)):
                $src = wp_get_attachment_url($photo_auteur);
                $alt = get_post_meta($photo_auteur, '_wp_attachment_image_alt', true);
            else:
                $src = $photo_auteur;
                $alt = '';
            endif;
        ?>
            <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>" class="auteur-photo">
        <?php endif; ?>

        <div class="auteur-infos">
            <?php if($desc_auteur): ?>
                <p class="descr-photo"><?php echo wp_kses_post($desc_auteur); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

<!-- ACTIONS (4 ronds icônes) -->
<div class="circle-wrapper">
  <div class="circle-image2">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/imprimante-blanc.svg" alt="Imprimer">
  </div>

  <div class="circle-image2">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/picto_partagerW.svg" alt="Partager">
  </div>

  <div class="circle-image2">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/picto_reservationW.svg" alt="Réserver">
  </div>

  <div class="circle-image">
    <img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/favoris_blanc.svg" alt="Favoris">
  </div>
</div>

<!-- AVIS -->
<section class="ouvrage-avis">

    <h2>Avis & commentaires</h2>

    <?php
    echo do_shortcode('[site_reviews_form assigned_to="' . get_the_ID() . '"]');

    echo do_shortcode('[site_reviews assigned_to="' . get_the_ID() . '" limit="5"]');
    ?>

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
            <a href="<?php the_permalink(); ?>" class="reco-card">
                <?php 
                // Affiche l'image mise en avant
                if ( has_post_thumbnail() ) : 
                    the_post_thumbnail('medium', array('class'=>'reco-img'));
                else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/default-book.png" alt="Pas d'image disponible" class="reco-img">
                <?php endif; ?>
                
                <p class="reco-title"><?php the_title(); ?></p>
            </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif; ?>


    </div>
</section>


<?php endwhile; else: ?>
    <p>Aucun ouvrage trouvé.</p>
<?php endif; ?>

</main>

<?php get_footer(); ?>

<?php
/* Template Name: Recherche de livres */
get_header();
?>

<h1>Recherche de livres</h1>

<form method="get">
    <input type="text"
        name="q"
        placeholder="Rechercher un livre, un auteur..."
        value="">
    <button type="submit">Rechercher</button>
</form>

<?php
$search = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';

$args = [
    'post_type'      => 'ouvrages',
    'posts_per_page' => -1,
];

$all_books = new WP_Query($args);

$matched_books = [];
$other_books   = [];

if ($all_books->have_posts()) :
    while ($all_books->have_posts()) : $all_books->the_post();

        $titre  = get_field('titre_livre_h1');
        $auteur = get_field('nom_auteur_h2');

        if ($search && (
            stripos($titre, $search) !== false ||
            stripos($auteur, $search) !== false
        )) {
            $matched_books[] = get_the_ID();
        } else {
            $other_books[] = get_the_ID();
        }

    endwhile;
    wp_reset_postdata();

    $ordered_books = array_merge($matched_books, $other_books);

    echo '<h2>Résultats</h2>';
    echo '<div class="livres-resultats">';

    foreach ($ordered_books as $book_id) :
        $titre       = get_field('titre_livre_h1', $book_id);
        $image       = get_field('image_1_livre', $book_id);
        $auteur      = get_field('nom_auteur_h2', $book_id);
        $description = get_field('description_livre', $book_id);
        $permalink   = get_permalink($book_id);
?>

        <article class="livre">
            <?php if ($image) : ?>
                <a href="<?php echo esc_url($permalink); ?>">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($titre); ?>">
                </a>
            <?php endif; ?>

            <?php if ($titre) : ?>
                <h3><?php echo $titre ? esc_html($titre) : 'TITRE INDEFINI'; ?></h3>
            <?php endif; ?>

            <?php if ($auteur) : ?>
                <p><strong>Auteur :</strong> <?php echo esc_html($auteur); ?></p>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html(wp_trim_words($description, 25)); ?></p>
            <?php endif; ?>

        </article>

<?php
    endforeach;

    echo '</div>';

else :
    echo '<p>Aucun livre trouvé.</p>';
endif;
?>

<?php get_footer(); ?>
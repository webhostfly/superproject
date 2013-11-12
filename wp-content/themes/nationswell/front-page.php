<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

if (!class_exists('Timber')){
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
}

$data = Timber::get_context();


$featured_ids = get_field('featured');
$data['featured'] = Timber::get_posts($featured_ids);

$stories_carousel_ids = get_field('stories_carousel');
$data['stories_carousel'] = Timber::get_posts($stories_carousel_ids);


$data['posts'] = Timber::get_posts(array(
        'posts_per_page' => 8,
        'post_type' => 'post',
        'post__not_in' => array_unique(array_merge($featured_ids, $stories_carousel_ids))
    ), 'NationSwellPost');

// Series carousel:
$series_carousel_terms = array();

while(has_sub_field("series_carousel")) {
    $series_carousel_terms[] = get_sub_field('series');
}


function get_series_preview($term) {
    $query = new WP_Query(array(
        'fields' => 'ids',
        'posts_per_page' => 3,
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'series',
                'field' => 'id',
                'terms' => $term->term_id
            )
        )
    ));

    return array(
        'name' => $term->name,
        'permalink' => get_term_link($term),
        'posts' => Timber::get_posts($query->posts),
        'count' => $query->found_posts
    );
}

$series_carousel = array();
foreach($series_carousel_terms as $series_term) {
    $series_carousel[] = get_series_preview($series_term);
}

$data['series_carousel'] = $series_carousel;

Timber::render('index.twig', $data);


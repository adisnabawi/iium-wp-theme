<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide container">
		<h4 class="page-title">
			<?php
			printf(
				/* translators: %s: search term. */
				esc_html__( 'Results for "%s"', 'iium2021' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h4>
	</header>

	<div class="container">
		<?php
		printf(
			esc_html(
				/* translators: %d: the number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'iium2021'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
        <br>
	</div>

    <div class="container">
    <br>
    <div class="card">
        <div class="card-body">
	<?php
	while ( have_posts() ) {
		the_post();
        $post_format = get_post_format();
        if ( 'aside' === $post_format || 'status' === $post_format ) {
            return;
        }
        ?>
        
            <?php
            the_title( sprintf( '<p class=""><a href="%s">', esc_url( get_permalink() ) ), '</a></p>' );
            $char_limit = 200; //character limit
            $content = $post->post_content; //contents saved in a variable
            echo '<p>' . substr(strip_tags($content), 0, $char_limit) . '...</p>';
            ?>   
    <?php
	} 
    ?>
    </div>
        </div>
    </div>
    <br>
    <?php
} else {
    ?>
    <div class="container">
    <h5>No results</h5>
    <p>Please search again. Thank you.</p>
    </div>
    
    <?php
}

get_footer();
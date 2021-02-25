<?php
/**
 * The main template file
 *
 */

get_header();
?>


<div id="primary" class="content-area">
		<main id="main" class="site-main container">
        <?php
            while (have_posts()) : the_post();
                $page_title = strtolower(get_the_title());
                the_title('<h1>','</h1>');
            ?>
                <p><?php the_content(); ?><p>
        <?php endwhile;?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();
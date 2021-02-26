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
        
        
		</main>
        <div class="div_search">
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="form-inline iium_search">
                <input type="text" name="s" class="form-control search" placeholder="What do you want to study">
                <input type="submit" class="btn btn-primary btn-search" value="Search">
            </form>
        </div>
	</div><!-- .content-area -->

<?php
get_footer();
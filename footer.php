
	</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
    <div class="site-info footer" style="background-image: url(<?php  echo get_theme_file_uri('/img/kerawang.png'); ?>);">
        <div class="container">
        <div class="row">
            <div class="col-md-4 company-info">
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
            <br><br>
            
            International Islamic University Malaysia <br>
            P.O. Box 10, 50728 Kuala Lumpur <br> <br>
            
                <b>Phone : </b>(+603) 6421 6421 <br>
                <b>Fax : </b> (+603) 6421 4053 <br>
                <b>Email : </b> webmaster@iium.edu.my

            </div>
            <div class="col-md-2 link-subs">
                <h6>Students & Parents</h6>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-student-parent' ) ); ?>
            
            </div>
            <div class="col-md-2 link-subs">
                <h6>Researchers, Lecturers & Alumni</h6>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-researchers-lecturers-alumni' ) ); ?></div>
            <div class="col-md-2 link-subs">
                <h6>Business, Government & Related Links</h6>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-business-government' ) ); ?></div>
            <div class="col-md-2 link-subs">
                <h6>Others</h6>
                <?php  wp_nav_menu( array( 'theme_location' => 'footer-others' ) ); ?></div>
            <div class="col-md-12 text-right">
            <?php
                if ( function_exists( 'the_privacy_policy_link' ) ) {
                    the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
                }
            ?>
            </div>
        </div>
        </div>
        
    </div><!-- .site-info -->
    
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
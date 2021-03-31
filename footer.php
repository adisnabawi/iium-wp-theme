
	</div><!-- #content -->

<footer id="colophon" class="site-footer" style="background-image: url(<?php  echo get_theme_file_uri('/img/bg.jpg'); ?>);">
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
            
            <div class="col-md-6">
                <br>
                <small>Copyright &copy; International Islamic University Malaysia 2021</small>
            </div>
            <div class="col-md-6 text-right">
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
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script src="<?php  echo get_theme_file_uri('/js/master.js'); ?>"></script>
</body>
</html>

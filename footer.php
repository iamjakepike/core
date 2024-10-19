    </div><!-- #content -->

    <footer class="mt-4">
        <div class="o-wrapper flex items-start border-t-2 py-5 flex-wrap md:flex-nowrap md:justify-between justify-between gap-3">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <nav>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'ul',
						'menu_class'     => 'flex gap-2 sm:gap-4 mb-0 flex-wrap',
                    ) );
                ?>
            </nav>
        </div>
    </footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

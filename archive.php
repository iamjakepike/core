
<?php get_header(); ?>

    <div class="o-wrapper">

        <h1 class="o-page-title"><?php echo get_the_archive_title(); ?></h1>
        <?php
            require_once( get_template_directory() . '/includes/components/default/default_post-loop.php' ); 
        ?>

    </div>

<?php get_footer(); ?>


<?php get_header(); ?>

    <div class="o-wrapper">

        <div class="o-page-title o-page-title--post">
            <h1 class="o-page-title__heading-text"><?php the_title(); ?></h1>
            <p class="text-gray-500 text-xs"><?php echo get_the_date(); ?></p>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : 
            the_post(); ?>
        
            <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>

<?php get_footer(); ?>

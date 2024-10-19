<?php get_header(); ?>

    <div class="o-wrapper">

        <h1 class="o-page-title"><?php the_title(); ?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : 
            the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; endif; ?>

    </div>

<?php get_footer(); ?>

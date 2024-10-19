<?php if ( have_posts() ) : ?>

    <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

        <?php while (have_posts()) { 
            the_post(); ?>

            <div class="flex flex-col justify-between group">
                <a href="<?php the_permalink(); ?>">
                    <div class="flex flex-col flex-wrap">
                        <h3 class="font-bold mb-1 group-hover:underline"><?php the_title(); ?></h3>
                        <p class="mb-1">
                            <?php core_custom_excerpt( 100 );  ?>
                        </p>
                        <p class="text-gray-500 text-xs"><?php echo get_the_date(); ?></p>
                    </div>
                </a>
            </div>

        <?php } ?>
    </div>
<?php endif; ?>
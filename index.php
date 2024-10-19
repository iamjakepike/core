<?php
    get_header(); 
?>

    <main>
        <div class="o-wrapper">

            <h1 class="text-4xl">H1 Heading One</h1>

            <h2 class="text-3xl">H2 Heading Two</h2>

            <h3 class="text-2xl">H3 Heading Three</h3>

            <h4 class="text-xl">H4 Heading Four</h4>

            <h5>H5 Heading Five</h5>

            <h6 class="text-small">H6 Heading Six</h6>

            <p>Paragraph Text Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum reiciendis non eaque nisi numquam illum, sequi voluptates fugiat soluta? Laudantium, cumque hic! Vel placeat mollitia quibusdam officia repudiandae delectus, blanditiis quidem est harum quaerat facere modi magnam beatae accusamus ipsum consectetur. Ab quidem illum sunt amet quae blanditiis architecto animi! <a href="#">Text Link</a></p>

            <ul>
                <li>Unorded List Item 1</li>
                <li>Unorded List Item 2</li>
                <li>Unorded List Item 3</li>
            </ul>

            <ol>
                <li>Orded List Item 1</li>
                <li>Orded List Item 2</li>
                <li>Orded List Item 3</li>
            </ol>

            <a href="#">Anchor Link</a>

            <small class="block mb-5">Small Text</small>

            <a href="#" class="o-btn">Button</a>
            <a href="#" class="o-btn o-btn--ghost">Ghost Button</a>
            
            <?php require_once( get_template_directory() . '/includes/components/default/default_post-loop.php' ); ?>
        </div>

    </main>

<?php 
    get_footer();

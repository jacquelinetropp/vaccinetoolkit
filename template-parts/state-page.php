<?php /* Template Name: State Page*/ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="statepage">
            <?php
            // Start the loop.
            while (have_posts()) : the_post();

                // Include the page content template.
                get_template_part('template-parts/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }

            // End of the loop.
            endwhile;
            ?>

            <a href="/map" class="statepage__btn" id="map">Back To Map</a>

    </main><!-- .site-main -->

</div>


</div><!-- .content-area -->

<?php get_footer(); ?>
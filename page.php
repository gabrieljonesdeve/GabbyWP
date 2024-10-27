<?php get_header(); ?>

<div class="container">
    <main>
        <?php
        while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>

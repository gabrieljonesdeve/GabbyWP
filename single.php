<?php get_header(); ?>

<div class="container">
    <main>
        <?php
        while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span><?php echo get_the_date(); ?></span>
                    <span><?php echo get_the_author(); ?></span>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-navigation">
                    <?php
                    previous_post_link('%link', '« Post Precedente');
                    next_post_link('%link', 'Post Successivo »');
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
    <main>
        <h1><?php _e('Benvenuto nel nostro sito!', 'mio-tema'); ?></h1>
        <p><?php _e('Questa è la homepage del nostro tema WordPress.', 'mio-tema'); ?></p>

        <?php
        if (have_posts()) : ?>
            <div class="homepage-posts">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-meta">
                            <span><?php echo get_the_date(); ?></span>
                            <span><?php echo get_the_author(); ?></span>
                        </div>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php _e('Nessun post trovato.', 'mio-tema'); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>

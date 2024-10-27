<?php get_header(); ?>

<div class="container">
    <main>
        <h1><?php the_archive_title(); ?></h1>
        <div class="archive-description">
            <?php the_archive_description(); ?>
        </div>

        <div class="archive-posts">
            <?php if (have_posts()) : ?>
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
                
                <div class="pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('« Precedente', 'mio-tema'),
                        'next_text' => __('Successivo »', 'mio-tema'),
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p><?php _e('Nessun post trovato.', 'mio-tema'); ?></p>
            <?php endif; ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>

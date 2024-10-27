<?php get_header(); ?>

<div class="container">
    <main>
        <h1><?php printf(__('Risultati per: %s', 'mio-tema'), get_search_query()); ?></h1>

        <?php if (have_posts()) : ?>
            <div class="search-results">
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
            </div>
        <?php else : ?>
            <p><?php _e('Nessun risultato trovato. Riprova con altre parole chiave.', 'mio-tema'); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>

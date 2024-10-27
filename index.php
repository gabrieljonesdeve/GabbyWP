<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://italia.github.io/design-comuni-pagine-statiche/assets/bootstrap-italia/dist/css/bootstrap-italia.min.css">
    <link rel="stylesheet" href="https://italia.github.io/design-comuni-pagine-statiche/assets/css/bootstrap-italia-comuni.css">
    <link rel="stylesheet" href="https://assets.gjdev.it/wp-theme/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
            )); 
            ?>
        </nav>
    </header>

    <main id="content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Nessun contenuto trovato.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

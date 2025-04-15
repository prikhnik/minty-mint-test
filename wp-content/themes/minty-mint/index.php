<?php get_header(); ?>

<main class="page-wrapper">
    <div class="page-wrapper__inner">
        <h1><?php bloginfo('name'); ?></h1>

        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>Записей не найдено.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

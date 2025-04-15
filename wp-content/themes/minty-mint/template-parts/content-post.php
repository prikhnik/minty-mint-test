<?php
$post_id = get_the_ID();
?>

<article id="post-<?php echo esc_attr($post_id); ?>" <?php post_class('post-item'); ?>>
    <div class="post-item__inner">


        <?php if (has_post_thumbnail($post_id)): ?>
            <div class="post-item__img">
                <div class="post-item-tags">
                    <?php
                    $tags = get_the_tags($post_id);
                    if ($tags) {
                        foreach ($tags as $tag) {
                            echo '<span class="post-item-tags__item">' . esc_html($tag->name) . '</span>';
                        }
                    }
                    ?>
                </div>
                <a href="<?php echo get_permalink($post_id); ?>"><?php echo get_the_post_thumbnail($post_id); ?></a>
            </div>
        <?php endif; ?>

        <div class="post-item__content">
            <div class="post-item__info">
                <span class="post-item__date"><?php echo get_the_date('M d, Y', $post_id); ?></span>
                <span class="post-item__author"><?php echo get_the_author_meta('display_name', get_post_field('post_author', $post_id)); ?></span>
            </div>

            <div class="post-item__text">
                <h3 class="post-item__ttl">
                    <a href="<?php echo get_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a>
                </h3>
                <div class="post-item__dsc">
                    <?php echo get_the_excerpt($post_id); ?>
                </div>
            </div>

            <div class="post-item__btn">
                <a href="<?php echo get_permalink($post_id); ?>" class="btn-primary">
                    <span>Read the article</span>
                </a>
            </div>
        </div>
    </div>
</article>

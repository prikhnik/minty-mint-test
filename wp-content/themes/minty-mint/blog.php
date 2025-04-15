<?php
/*
Template Name: Blog Page
*/
get_header();

// Получим ID главного поста
$featured_post = get_field('featured_post');
$featured_id = $featured_post ? $featured_post->ID : 0;

$current_tag = isset($_GET['tag']) ? sanitize_text_field($_GET['tag']) : '';
$paged = get_query_var('paged') ?: 1;
?>

<main class="blog page-wrapper">

    <div class="page-wrapper__inner">

        <nav class="breadcrumbs">
            <a href="<?php echo home_url(); ?>">Minty Mint</a>
            <span><?php the_title(); ?></span>
        </nav>
        
        <div class="blog__head">
            <h1 class="blog__ttl"><?php the_title(); ?></h1>
            
            <div class="blog-filter">
                <div class="blog-filter__ttl">Filter</div>
                <ul class="blog-filter__list">
                    <li><a href="<?php echo get_permalink(); ?>" class="<?php echo empty($current_tag) ? 'active' : ''; ?>">#ALL ARTICLEs</a></li>
                    <?php
                    $tags = get_tags();
                    foreach ($tags as $tag) {
                        $is_active = $current_tag === $tag->slug ? 'active' : '';
                        echo '<li><a href="' . get_permalink() . '?tag=' . esc_attr($tag->slug) . '" class="' . $is_active . '">' . esc_html($tag->name) . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>



        <?php if ($featured_post): ?>
            <div class="blog__feature">
                <?php
                setup_postdata($GLOBALS['post'] =& $featured_post);
                get_template_part('template-parts/content', 'post');
                wp_reset_postdata();
                ?>
            </div>
        <?php endif; ?>


        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 4,
            'paged' => $paged,
            'post__not_in' => [$featured_id],
        ];

        if (!empty($current_tag)) {
            $args['tag'] = $current_tag;
        }

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            echo '<div class="blog-list">';
            while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/content', 'post');
            endwhile;
            echo '</div>';

            echo '<div class="blog-pagination">';
            echo paginate_links([
                'total' => $query->max_num_pages,
                'current' => $paged,
                'mid_size' => 2,
                'prev_text' => __('<'),
                'next_text' => __('>'),
                'add_args' => !empty($current_tag) ? ['tag' => $current_tag] : false,
            ]);
            echo '</div>';
        else :
            echo '<p>Постов не найдено.</p>';
        endif;

        wp_reset_postdata();
        ?>

    </div>
</main>

<?php get_footer(); ?>

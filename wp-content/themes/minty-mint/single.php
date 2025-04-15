<?php get_header(); ?>

<main class="single-post page-wrapper">
    <div class="page-wrapper__inner">

        <nav class="breadcrumbs">
            <a href="<?php echo home_url(); ?>">Minty Mint</a>
            <a href="/blog">Insights</a>
            <span><?php the_title(); ?></span>
        </nav>

        <div class="single-post__filter">
            <?php
            $tags = get_tags();
            $post_tags = wp_get_post_tags(get_the_ID(), ['fields' => 'slugs']);
            foreach ($tags as $tag) {
                $is_active = in_array($tag->slug, $post_tags) ? 'active' : '';
                echo '<a href="/blog/?tag=' . esc_attr($tag->slug) . '" class="' . $is_active . '">' . esc_html($tag->name) . '</a>';
            }
            ?>
        </div>

        <div class="single-post__inner">
            <article class="single-post__main">
                <h1 class="single-post__ttl"><?php the_title(); ?></h1>


                <div class="single-post__info">
                    <?php
                    $author_id = get_post_field('post_author', get_the_ID());
                    $author_name = get_the_author_meta('display_name', $author_id);
                    ?>

                    <div class="single-post__author"><?php echo esc_html($author_name); ?></div>

                    <div class="single-post__share">
                        <div class="share">
                            <div class="share__ttl">Share</div>
                            <?php
                            $post_url = urlencode(get_permalink());
                            $post_title = urlencode(get_the_title());
                            ?>
                            <a class="share__item"
                               href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>"
                               target="_blank">
                                <svg width="29" height="29" viewBox="0 0 29 29"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.6053 14.2259C28.6053 6.36896 22.2752 0 14.4677 0C6.65674 0.00176719 0.32666 6.36896 0.32666 14.2277C0.32666 21.3265 5.49746 27.2112 12.2552 28.2786V18.3382H8.66781V14.2277H12.2587V11.0909C12.2587 7.52647 14.3705 5.55782 17.5992 5.55782C19.1473 5.55782 20.7642 5.83527 20.7642 5.83527V9.33431H18.9811C17.2263 9.33431 16.6785 10.4317 16.6785 11.5574V14.2259H20.5981L19.9725 18.3364H16.6767V28.2768C23.4345 27.2094 28.6053 21.3247 28.6053 14.2259Z"
                                         />
                                </svg>

                            </a>
                            <a class="share__item"
                               href="https://twitter.com/intent/tweet?text=<?php echo $post_title; ?>&url=<?php echo $post_url; ?>"
                               target="_blank">
                                <svg width="43" height="43" viewBox="0 0 43 43"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.6334 0C9.91971 0 0.421875 9.49784 0.421875 21.2115C0.421875 32.9252 9.91971 42.4231 21.6334 42.4231C33.3471 42.4231 42.8449 32.9252 42.8449 21.2115C42.8449 9.49784 33.3471 0 21.6334 0ZM31.8272 15.9891C31.8414 16.2117 31.8414 16.4437 31.8414 16.6709C31.8414 23.6215 26.548 31.6279 16.875 31.6279C13.8921 31.6279 11.1271 30.7614 8.79759 29.27C9.22371 29.3174 9.6309 29.3363 10.0665 29.3363C12.5285 29.3363 14.7917 28.503 16.5957 27.092C14.2851 27.0447 12.3439 25.5296 11.681 23.4463C12.4907 23.5647 13.2198 23.5647 14.0531 23.3516C12.8634 23.1099 11.7941 22.4638 11.0268 21.523C10.2595 20.5822 9.84153 19.4048 9.84396 18.1908V18.1245C10.54 18.5175 11.3591 18.7589 12.2161 18.7921C11.4956 18.312 10.9048 17.6615 10.496 16.8983C10.0872 16.1352 9.87295 15.283 9.87237 14.4172C9.87237 13.4371 10.128 12.5423 10.5873 11.7658C11.9078 13.3914 13.5556 14.7209 15.4237 15.668C17.2917 16.615 19.338 17.1584 21.4298 17.2628C20.6865 13.6881 23.3568 10.7952 26.567 10.7952C28.0821 10.7952 29.4457 11.4296 30.4068 12.4523C31.5952 12.2298 32.7316 11.7847 33.7448 11.1881C33.3518 12.405 32.528 13.4324 31.4343 14.081C32.4948 13.9674 33.5175 13.6739 34.4645 13.2619C33.7495 14.313 32.8547 15.2458 31.8272 15.9891Z"
                                          />
                                </svg>
                            </a>
                            <a class="share__item"
                               href="https://t.me/share/url?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>"
                               target="_blank">
                                <svg width="44" height="43" viewBox="0 0 44 43" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M28.9916 30.9414L32.4717 14.5356C32.6137 13.8412 32.5308 13.344 32.2231 13.0441C31.9153 12.7443 31.5089 12.689 31.0039 12.8784L10.5499 20.7617C10.0922 20.9353 9.78053 21.1326 9.61481 21.3536C9.4491 21.5745 9.42937 21.7836 9.55563 21.9809C9.68189 22.1782 9.9344 22.3321 10.3132 22.4426L15.545 24.076L27.6896 16.4295C28.021 16.2085 28.2735 16.1612 28.4471 16.2874C28.5576 16.3663 28.5261 16.4847 28.3524 16.6425L18.5279 25.5201L18.1491 30.9177C18.5121 30.9177 18.8672 30.7441 19.2144 30.3969L21.7712 27.9348L27.0741 31.841C28.0841 32.4091 28.7233 32.1093 28.9916 30.9414ZM43.2668 21.2115C43.2668 24.0839 42.7065 26.8301 41.586 29.4499C40.4654 32.0698 38.9582 34.3267 37.0643 36.2206C35.1704 38.1145 32.9136 39.6217 30.2937 40.7422C27.6738 41.8628 24.9277 42.4231 22.0553 42.4231C19.1829 42.4231 16.4367 41.8628 13.8169 40.7422C11.197 39.6217 8.94011 38.1145 7.04623 36.2206C5.15234 34.3267 3.64512 32.0698 2.52457 29.4499C1.40402 26.8301 0.84375 24.0839 0.84375 21.2115C0.84375 18.3391 1.40402 15.593 2.52457 12.9731C3.64512 10.3532 5.15234 8.09636 7.04623 6.20248C8.94011 4.30859 11.197 2.80137 13.8169 1.68082C16.4367 0.560275 19.1829 0 22.0553 0C24.9277 0 27.6738 0.560275 30.2937 1.68082C32.9136 2.80137 35.1704 4.30859 37.0643 6.20248C38.9582 8.09636 40.4654 10.3532 41.586 12.9731C42.7065 15.593 43.2668 18.3391 43.2668 21.2115Z"
                                    />
                                </svg>

                            </a>
                            <a class="share__item"
                               href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>"
                               target="_blank">
                                <svg width="29" height="29" viewBox="0 0 29 29"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.1375 0C6.32949 0 0 6.32949 0 14.1375C0 21.9456 6.32949 28.2751 14.1375 28.2751C21.9456 28.2751 28.2751 21.9456 28.2751 14.1375C28.2751 6.32949 21.9456 0 14.1375 0ZM10.6768 19.9972H7.81393V10.7843H10.6768V19.9972ZM9.22768 9.65329C8.32347 9.65329 7.73883 9.01268 7.73883 8.22039C7.73883 7.4119 8.34114 6.79043 9.2645 6.79043C10.1879 6.79043 10.7534 7.4119 10.771 8.22039C10.771 9.01268 10.1879 9.65329 9.22768 9.65329ZM21.1327 19.9972H18.2698V14.8915C18.2698 13.7031 17.8545 12.8961 16.8192 12.8961C16.0284 12.8961 15.5587 13.4424 15.351 13.9682C15.2744 14.1552 15.2553 14.4203 15.2553 14.6839V19.9958H12.391V13.7222C12.391 12.5721 12.3541 11.6104 12.3159 10.7828H14.8032L14.9342 12.0626H14.9917C15.3687 11.4617 16.292 10.5752 17.8369 10.5752C19.7204 10.5752 21.1327 11.8372 21.1327 14.5499V19.9972Z"
                                    />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="single-post__head">
                    <?php if (get_field('post_excerpt')) : ?>
                        <div class="single-post__excerpt">
                            <?php echo wp_kses_post(get_field('post_excerpt')); ?>
                        </div>
                    <?php endif; ?>


                <?php

                $content = apply_filters('the_content', get_the_content());
                preg_match_all('/<h2[^>]*>(.*?)<\/h2>/i', $content, $matches);

                if (!empty($matches[1])) {
                    echo '<div class="single-post-nav">
                            <div class="single-post-nav__head">
                                <div class="single-post-nav__ttl">Navigation</div>
                                <button class="single-post-nav__toggle js-single-post-nav-toggle">
                                <svg width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.41 12.5789L6 17.7892L10.59 12.5789L12 14.183L6 21.0087L0 14.183L1.41 12.5789Z" fill="#1B64D7"/>
                                    <path d="M1.41 8.36401L6 3.80498L10.59 8.36401L12 6.96047L6 0.98793L0 6.96047L1.41 8.36401Z" fill="#1B64D7"/>
                                 </svg>
                                </button>
                            </div>
                            <div class="single-post-nav__inner js-single-post-nav-content">
                            <ul>';
                    foreach ($matches[1] as $index => $heading) {
                        $anchor = 'section-' . $index;
                        $content = preg_replace('/<h2([^>]*)>' . preg_quote($heading, '/') . '<\/h2>/', '<h2$1 id="' . $anchor . '">' . $heading . '</h2>', $content, 1);
                        echo '<li><a href="#' . $anchor . '">' . esc_html($heading) . '</a></li>';
                    }
                    echo '</ul></div></div>';
                }
                ?>

                </div>


                <div class="single-post__content">
                    <?php echo $content; ?>
                </div>
            </article>


            <aside class="single-post-sidebar">
                <div class="sidebar-block">
                    <div class="sidebar-block__inner">
                        <h3 class="sidebar-block__ttl">Get an <span>e-book!</span></h3>
                        <div class="sidebar-block-icon">
                            <div class="sidebar-block-icon__img">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/aside-document.svg"
                                     alt="Aside Icon">
                            </div>
                            <div class="sidebar-block-icon__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                        </div>

                        <form class="sidebar-block-form">
                            <label for="aside_email">Email</label>
                            <input id="aside_email" type="email" placeholder="Enter your email">
                            <button type="submit" class="btn-secondary">Send</button>
                        </form>
                    </div>
                </div>

                <div class="sidebar-block">
                    <div class="sidebar-block__inner">
                        <h3 class="sidebar-block__ttl">Looking for a solution for <span>your industry?</span></h3>
                        <div class="sidebar-block-icon">
                            <div class="sidebar-block-icon__img">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/aside-question.svg"
                                     alt="Aside Icon">
                            </div>
                            <div class="sidebar-block-icon__text">
                                We have an idea!<br>Get in touch with us!
                            </div>
                        </div>

                        <a href="#" class="btn-primary">
                            <span>Contact us</span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>

        <div class="recent-posts">
            <h2 class="recent-posts__ttl"><span>Recent from</span> #Tech</h2>

            <div class="recent-posts-slider js-recent-posts-slider swiper">
                <div class="swiper-wrapper">
                    <?php
                    $recent_query = new WP_Query([
                        'post_type'      => 'post',
                        'posts_per_page' => 4,
                        'post__not_in'   => [get_the_ID()],
                        'tag'            => '#tech',
                    ]);

                    if ($recent_query->have_posts()) :
                        while ($recent_query->have_posts()) : $recent_query->the_post();
                            echo '<div class="recent-posts-slider__item swiper-slide">';
                            get_template_part('template-parts/content', 'post');
                            echo '</div>';
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Posts not found.</p>';
                    endif;
                    ?>
                </div>

                <div class="recent-posts-slider__buttons">
                    <button class="recent-posts-slider__btn recent-posts-slider__btn--prev js-recent-posts-slider-prev">
                        <svg width="100" height="80" viewBox="0 0 100 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.5867 26.4355L31.0742 39.5761L41.5867 52.7167M31.0742 39.5761H67.8678" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="0.5" y="0.5" width="98.4307" height="78.9884" rx="9.5" stroke="white"/>
                        </svg>
                    </button>
                    <button class="recent-posts-slider__btn recent-posts-slider__btn--next js-recent-posts-slider-next">
                        <svg width="101" height="80" viewBox="0 0 101 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M58.3215 26.4355L68.834 39.5761L58.3215 52.7167M68.834 39.5761H32.0404" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="1.46875" y="0.5" width="98.4307" height="78.9884" rx="9.5" stroke="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>

<?php

/**
 * Belov Test Task Block Template.
 *
 * @param   array  $block    The block settings and attributes.
 * @param   string $content  The block inner HTML (empty).
 * @param   bool   $is_preview True during backend preview render.
 * @param   int    $post_id  The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array  $context  The context provided to the block by the post or its parent block.
 *
 * @package wpdev
 */

$featured_article = get_field('featured_article');
?>

<section class="articles-section">
    <div class="wrapper" style="align-items: flex-start;">
        <?php if ($featured_article): ?>
            <div class="featured-article">
                <div class="article-image">
                    <img src="<?php echo esc_attr(get_the_post_thumbnail_url($featured_article->ID, 'full')); ?>" alt="<?php echo esc_html($featured_article->post_title); ?>">
                </div>
                <div class="article-content">
                    <a href="#" class="btn article-category"><?php echo esc_html(get_the_category($featured_article->ID)[0]->name); ?></a>
                    <h1 class="article-title"><?php echo esc_html($featured_article->post_title); ?></h1>
                    <p class="article-author"><?php echo esc_html(get_the_author_meta('display_name', $featured_article->post_author)); ?>
                        <img src="<?php echo esc_url(plugins_url('assets/images/separator-icon.svg', __FILE__)); ?>" alt="Dot icon">
                        <?php echo esc_html(get_the_date('F j, Y', $featured_article->ID)); ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
        <div class="other-articles">
            <article class="article-card">
                <div class="article-image">
                    <img src="images/article-1.jpg" alt="28 Funny Marathon Signs">
                </div>
                <div class="article-content">
                    <span class="article-category">RUNNING AND FUN</span>
                    <h2 class="article-title">28 Funny Marathon Signs: The Best Running Race Sign Ideas We’ve
                        Even Seen</h2>
                    <p class="article-author">KATELYN TOCCI <img src="images/separator-icon.svg" alt="Dot icon">
                        MARCH 19, 2024</p>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="images/article-2.jpg" alt="Karoline Bjerkeli Grøvdal Breaks Third Place Streak">
                </div>
                <div class="article-content">
                    <span class="article-category">RACE NEWS</span>
                    <h2 class="article-title">Karoline Bjerkeli Grøvdal Breaks Third Place Streak At United
                        Airlines NYC Half Marathon</h2>
                    <p class="article-author">AMY K. WHITSON, MD <img src="images/separator-icon.svg"
                            alt="Dot icon"> MARCH 19, 2024</p>
                </div>
            </article>

            <article class="article-card">
                <div class="article-image">
                    <img src="images/article-3.jpg" alt="Running With Arthritis">
                </div>
                <div class="article-content">
                    <span class="article-category">RUNNING HOW-TO</span>
                    <h2 class="article-title">Running With Arthritis: You Can Keep Your Running Routine!</h2>
                    <p class="article-author">JESSY CARVETH <img src="images/separator-icon.svg" alt="Dot icon">
                        MARCH 19, 2024</p>
                </div>
            </article>
        </div>
    </div>
</section>
<?php

/**
 * Belov Test Task Block Template.
 *
 * @param array  $block    The block settings and attributes.
 * @param string $content  The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id  The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array  $context  The context provided to the block by the post or its parent block.
 *
 * @package wpdev
 */

$featured_article = get_field('featured_article');
$other_articles = get_field('other_articles');
?>

<section class="articles-section" <?php echo get_block_wrapper_attributes(); ?>>
    <div class="wrapper" style="align-items: flex-start;">
        <?php if ($featured_article) : ?>
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
        <?php if ($other_articles) : ?>
            <div class="other-articles">
                <?php foreach ($other_articles as $article) : ?>
                    <article class="article-card">
                        <div class="article-image">
                            <img src="<?php echo esc_attr(get_the_post_thumbnail_url($article->ID, 'full')); ?>" alt="<?php echo esc_html($article->post_title); ?>">
                        </div>
                        <div class="article-content">
                            <span class="article-category"><?php echo esc_html(get_the_category($article->ID)[0]->name); ?></span>
                            <h2 class="article-title"><?php echo esc_html($article->post_title); ?></h2>
                            <p class="article-author"><?php echo esc_html(get_the_author_meta('display_name', $article->post_author)); ?>
                                <img src="<?php echo esc_url(plugins_url('assets/images/separator-icon.svg', __FILE__)); ?>" alt="Dot icon">
                                <?php echo esc_html(get_the_date('F j, Y', $article->ID)); ?>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>
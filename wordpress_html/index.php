<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профессионалы</title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="pageWrapper">
        <?php get_header('./header.php') ?>

        <main>
            <div class="container">
                <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="post-header">
                        <div class="date"><?php the_time('M j y'); ?></div>
                        <h2>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="author"><?php the_author(); ?></div>
                    </div><!--end post header-->
                    <div class="entry clear">
                        <?php if (function_exists('add_theme_support')) the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                        <?php wp_link_pages(); ?>
                    </div><!--end entry-->
                    <div class="post-footer">
                        <div class="comments"><?php comments_popup_link('Оставьте комментарий', '1 комментарий', '% Комментариев'); ?></div>
                    </div><!--end post footer-->
                </div><!--end post-->
                <?php endwhile; /* Перемотайте назад или продолжите, если были выбраны все записи */ ?>
                <div class="navigation index">
                    <div class="alignleft"><?php next_posts_link('Более старые новости'); ?></div>
                    <div class="alignleft"><?php previous_posts_link('Свежие новости'); ?></div>
                </div><!--end navigation-->
                <?php else: ?>
                <?php endif; ?>
            </div>
        </main>

        <?php get_footer('./footer.php') ?>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
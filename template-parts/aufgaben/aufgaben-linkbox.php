<?php

/**
 * Template part for displaying the link box
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @since 2.0.0
 */

?>

<div class="Box mb-4">

    <div class="Box-header">
        <h2 class="Box-title f3">
            <?php _e('Quizübersicht:', 'prolog'); ?>
        </h2>
    </div>

    <?php // Check quiz links exists and loop through
    if (have_rows('quizzes')) { ?>

        <ul>

            <?php
            while (have_rows('quizzes')) {
                the_row();
                $link = get_sub_field('link'); ?>

                <li class="Box-row">
                    <a  href="<?php echo esc_url($link['url']); ?>" 
                        target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                            <?php echo esc_html($link['title']); ?>
                    </a>
                </li>

            <?php
            } ?>

        </ul>

    <?php
    } ?>
    
</div>

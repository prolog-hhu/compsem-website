<?php
/**
 * The template for displaying page/post (default)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package WordPress
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main class="container-xl px-3 py-6">

	<?php
    if (have_posts()) {

        // Load posts loop.
        while (have_posts()) {
            the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>">


				<?php get_template_part('template-parts/kapitel/kapitel', 'navigation'); ?>

                <div class="gutter d-flex flex-wrap flex-justify-center flex-items-baseline position-relative">

                    <div class="col-12 col-md-8">

                        <h1 class="mt-8 mt-md-0 mb-4"><?php the_title(); ?></h1>

                        <div id="content"><?php the_content(); ?></div>

                    </div>

                    <div class="position-absolute position-md-sticky top-0 col-12 col-md-4 pt-md-4">

                        <div class="Box Box--condensed">

                            <div class="Box-header d-flex flex-justify-between flex-items-center">
                                <h3 class="Box-title">Kapitelnavigation:</h3>
                                <button id="open-close" class="btn btn-sm btn-outline d-md-none">open</button>
                            </div>

                            <ul id="float-nav" class="float-nav d-none d-md-block"></ul>

                        </div>

                    </div>

                </div>

			</article>
		<?php
        }
    } else {

        // If no content, include the "No posts found" template.
        get_template_part('template-parts/content/content', 'none');
    }
    ?>

</main>

<?php get_footer(); ?>
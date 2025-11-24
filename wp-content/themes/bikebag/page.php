<?php
/**
 * Template for displaying pages
 *
 * @package BikeBag
 */

get_header();

// Check for custom page templates
$page_slug = get_post_field('post_name', get_the_ID());

if ($page_slug === 'co-oferujemy') {
    get_template_part('page', 'offer');
} elseif ($page_slug === 'faq') {
    get_template_part('page', 'faq');
} elseif ($page_slug === 'cennik') {
    get_template_part('page', 'pricing');
} elseif ($page_slug === 'kontakt') {
    get_template_part('page', 'contact');
} elseif ($page_slug === 'regulamin') {
    get_template_part('page', 'terms');
} else {
    // Default page template
    ?>
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <h1 class="text-5xl font-semibold mb-8"><?php the_title(); ?></h1>
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
            ?>
        </div>
    </section>
    <?php
}

get_footer();

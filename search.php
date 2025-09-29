<?php
get_header();
?>
<div class="container">
    <main class="site-main">
        <header class="page-header">
            <h1 class="page-title">
                <?php printf('Search Results for: %s', '<span>' . get_search_query() . '</span>'); ?>
            </h1>
        </header>
        
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'search'); ?>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>No results found. Try different keywords.</p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
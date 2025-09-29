<?php
get_header();
?>
<div class="container">
    <main class="site-main">
        <section class="error-404">
            <header class="page-header">
                <h1 class="page-title">404 - Page Not Found</h1>
            </header>
            <div class="page-content">
                <p>The page you're looking for doesn't exist.</p>
                <?php get_search_form(); ?>
                <a href="<?php echo home_url('/'); ?>" class="button">Go to Homepage</a>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>
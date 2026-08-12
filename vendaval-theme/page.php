<?php
/**
 * The template for displaying all single pages
 */
get_header();
?>

<main id="primary" class="site-main" style="padding-top: var(--header-height);">
    <div class="container section-margin">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <header class="page-header" style="margin-bottom: var(--spacing-lg);">
                <h1 class="text-subtitle"><?php the_title(); ?></h1>
            </header>

            <div class="page-content text-body">
                <?php
                the_content();
                ?>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();

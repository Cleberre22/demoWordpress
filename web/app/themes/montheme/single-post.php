<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container d-flex flex-column py-5">
            <div class="d-flex justify-content-center mb-5"><?php the_post_thumbnail() ?></div>
            <h1><?php the_title() ?></h1>
            <p class="text-center contentPost"><?php the_content() ?></p>
</div>
<?php endwhile;
endif; ?>

<?php get_footer() ?>
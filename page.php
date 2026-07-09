<?php get_header(); ?>

<main class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-white p-5 shadow-sm rounded-3">
            <h1 class="fw-bold mb-4 text-center"><?php the_title(); ?></h1>
            <div class="page-content entry-content">
                <?php 
                while (have_posts()) : the_post();
                    the_content();
                endwhile; 
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
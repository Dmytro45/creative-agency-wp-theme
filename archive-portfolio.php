<?php get_header(); ?>

<main class="container my-5">
    <div class="row">
        <div class="col-12 text-center py-5">
            <h1 class="display-4 fw-bold text-dark">Our Complete Portfolio</h1>
            <p class="lead text-muted">A collection of all projects developed by our agency.</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'card-img-top', 'style' => 'height: 220px; object-fit: cover;')); ?>
                        <?php else : ?>
                            <div class="bg-light text-muted d-flex align-items-center justify-content-center" style="height: 220px;">No Image</div>
                        <?php endif; ?>
                        
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
                            <p class="card-text text-muted"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm w-100">View Project</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        else :
        ?>
            <div class="col-12 text-center">
                <p class="lead text-muted">No projects found yet.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
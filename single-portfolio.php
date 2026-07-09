<?php get_header(); ?>

<main class="container my-5">
    <?php
    while (have_posts()) : the_post();
    ?>
        <div class="row g-5">
            <div class="col-lg-8">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="shadow-sm rounded overflow-hidden mb-4">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100')); ?>
                    </div>
                <?php endif; ?>
                
                <div class="bg-white p-4 shadow-sm rounded">
                    <h1 class="fw-bold mb-4"><?php the_title(); ?></h1>
                    <div class="entry-content lh-lg">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 90px;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-primary">Project Details</h4>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Client:</span>
                                <span class="fw-semibold">International Brands</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Category:</span>
                                <span class="fw-semibold text-capitalize"><?php echo get_post_type(); ?></span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Date:</span>
                                <span class="fw-semibold"><?php echo get_the_date('F Y'); ?></span>
                            </li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-outline-secondary w-100 mb-2">Back to Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
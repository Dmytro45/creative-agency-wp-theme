<?php get_header(); ?>

<header class="bg-dark text-white text-center py-5 border-top border-secondary">
    <div class="container py-5">
        <h1 class="display-3 fw-bold mb-3">We Craft Digital Experiences</h1>
        <p class="lead text-secondary mb-4">High-end web development, slick designs, and powerful WordPress solutions.</p>
        <a href="<?php echo esc_url(get_post_type_archive_link('portfolio')); ?>" class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">View Our Work</a>
    </div>
</header>

<section class="container my-5 py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p class="text-muted">We are a team of passionate developers and designers focused on building modern, ultra-fast, and fully responsive websites. Using the power of Bootstrap 5 and WordPress, we deliver top-tier products for businesses worldwide.</p>
        </div>
        <div class="col-md-6 text-center">
            <div class="p-5 bg-light rounded-3 fw-bold text-primary display-6">Bootstrap 5 + WP</div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Our Latest Projects</h2>
                <p class="text-muted">Check out some of our recently completed case studies.</p>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3 
            );
            $portfolio_query = new WP_Query($args);

            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'card-img-top', 'style' => 'height: 220px; object-fit: cover;')); ?>
                            <?php else : ?>
                                <div class="bg-light text-muted d-flex align-items-center justify-content-center" style="height: 220px;">No Image</div>
                            <?php endif; ?>
                            
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
                                <p class="card-text text-muted"><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pb-3">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm w-100">View Project</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-12 text-center">
                    <p class="lead text-muted">No projects found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
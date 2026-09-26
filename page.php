<?php get_header(); ?>
    <main>
        <section class="left-container">
            <?php get_sidebar(); ?>
        </section>
        <section class="right-container">
            <div class="detail__box">
                <article class="detail__text-area">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content();?>
                </article>
            </div>
        </section>
        
    </main>

<?php get_footer(); ?>
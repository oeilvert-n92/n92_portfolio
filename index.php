<?php get_header(); ?>

    <main>
        <section class="left-container">
            <?php get_sidebar(); ?>
        </section>

        <sections class="right-container">
            <div class="top__list-box">
                <ul>
                    <?php
                    if(have_posts()):
                        while(have_posts()):the_post();
                    ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php
                                        if(has_post_thumbnail()):
                                            the_post_thumbnail();
                                        else:
                                        ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                                        <?php
                                        endif;
                                    ?>
                                </figure>
                                <p><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php
                        endwhile;
                    else:
                    ?>
                        <p>現在準備中です。</p>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
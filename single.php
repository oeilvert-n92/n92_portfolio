<?php get_header(); ?>
    <main>
        <section class="left-container">
            <?php get_sidebar(); ?>
        </section>
        <section class="right-container">
            <div class="detail__box">
                <article class="detail__img-area">
                    <h1><?php the_title(); ?></h1>
                    <?php /* <figure>
                        <?php
                            if(has_post_thumbnail()):
                                the_post_thumbnail();
                            else:
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="">
                            <?php
                            endif;
                        ?>
                    </figure> */ ?>
                </article>
                <article class="detail__text-area">
                    <?php echo the_content(); ?>
                    <?php $category = get_the_category();
                    if (!empty( $category )) { ?>
                        <ul class="detail__category-list">
                            <?php
                            foreach($category as $cat){
                                echo '<li><a href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->cat_name . '</a></li>';
                            } ?>
                        </ul>
                    <?php } ?>
                    <dl class="detail__field-list">
                        <?php $customfield = get_post_meta($post->ID, 'url', true); ?>
                        <?php if( empty($customfield) ): ?>
                        <?php else: ?>
                            <dt class="font-en">URL</dt>
                            <dd><?php the_field('url'); ?></dd>
                        <?php endif; ?>

                        <?php $customfield = get_post_meta($post->ID, 'tools', true); ?>
                        <?php if( empty($customfield) ): ?>
                        <?php else: ?>
                            <dt class="font-en">TECHNIC</dt>
                            <dd><?php the_field('tools'); ?></dd>
                        <?php endif; ?>
                        
                        <?php $customfield = get_post_meta($post->ID, 'memo', true); ?>
                        <?php if( empty($customfield) ): ?>
                        <?php else: ?>
                            <dt class="font-en">MEMO</dt>
                            <dd><?php the_field('memo'); ?></dd>
                        <?php endif; ?>

                        <dt class="font-en">DATE</dt>
                        <dd><?php echo get_the_date('Y'); // 年 ?>年<?php echo get_the_date('M'); // 月 ?></dd>
                    </dl>
                </article>
            </div>
        </section>
        
    </main>

<?php get_footer(); ?>
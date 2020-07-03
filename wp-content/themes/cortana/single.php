<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">
    <div class="portfolio-full small-slider" id="content">
        <div class="container">
            <div class="row top-portfolio">
                <div class="col-md-9">
                    <div class="item">
                        <img alt="portfolio" src="<?php echo get_the_post_thumbnail_url($post->id) ?>" />
                    </div>
                </div>
                <div class="col-md-3 portfolio-attribute">
                    <h3 class="cortana-title"> <?php echo $post->post_title; ?></h3>

                    <div class="portfolio-info border-primary-color">

                        <div class="portfolio-info-box">
                            <?php echo $post->post_content; ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row content-wrap">
                <div class="col-md-12 portfolio-content">
                    <div class="portfolio-info">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 5px;" class="container portfolio-related portfolio-wrapper cortana-col-md-4">
        <div class="row">
            <h2 style="color: black;text-transform: uppercase">Sản phẩm KHÁC</h2>

            <?php $the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '8' ) );
                while ( $the_query->have_posts() ) : $the_query->the_post();
                  ?>
                    <div class="portfolio-item Sảnphẩm ">
                        <figure>
                            <img width="480" src="<?php echo get_the_post_thumbnail_url($post->id, 'medium') ?>" alt="<?php echo $post->post_title ?>" />
                            <div class="hover-action">
                                <a href="<?php echo get_permalink($post->id) ?>" class="ico-view-detail"><i class="fa fa-link"></i></a>
                            </div>
                        </figure>
                        <figure>
                            <figcaption class="portfolio-title ">
                                <h3 class="fig-title">
                                    <a href="<?php echo get_permalink($post->id) ?>"><?php echo $post->post_title ?></a>
                                </h3>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); ?>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


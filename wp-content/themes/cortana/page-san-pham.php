<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">
    <section class="page-title-wrap page-title-wrap-bg"
             style="background-image: url('<?php echo get_field("background_breadcrumbs", "options") ?>');height:50px">
        <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <ul class="breadcrumbs ">
                        <li class="first"></li>
                        <li class="home"><a rel="v:url" href="<?php echo site_url() ?>" class="home">Trang chủ</a></li>
                        <li><span><?php echo $post->post_title ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main class="site-content-page">
        <div class="site-content-page-inner ">
            <div class="page-content">
                <div id="post-1732" class="post-1732 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="container">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="hover-img wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <?php $the_query = new WP_Query(array('orderby' => 'date'));
                                                $index = 0;
                                                while ($the_query->have_posts()) : $the_query->the_post();
                                                    if($index % 3 == 0) { ?>
                                                        <div class="fullwidth">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <?php } ?>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <a href="<?php echo get_permalink($post->id) ?>"
                                                                           target="_self"
                                                                           class="vc_single_image-wrapper vc_box_border_grey"
                                                                           title="<?php echo $post->post_title ?>">
                                                                            <img class="vc_single_image-img "
                                                                                    src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                                    width="750" height="450"
                                                                                    alt="<?php echo $post->post_title ?>"
                                                                                    title="<?php echo $post->post_title ?>"/></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="vc_empty_space" style="height: 5px"><span
                                                                            class="vc_empty_space_inner"></span></div>
                                                                <h2 style="font-size: 18px;color: #000000;text-align: center;font-family:Roboto;font-weight:400;font-style:normal"
                                                                    class="vc_custom_heading">
                                                                    <a href="<?php echo get_permalink($post->id) ?>"><?php echo $post->post_title ?></a>
                                                                </h2></div>
                                                        </div>
                                                    </div>
                                                    <?php if($index % 3 == 2) { ?>
                                                        </div>
                                                        </div>
                                                    <?php }
                                                $index++;
                                            endwhile;
                                            wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-content -->
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>


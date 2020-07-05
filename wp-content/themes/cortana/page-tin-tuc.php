<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">

    <section class="page-title-wrap page-title-wrap-bg page-title-no-margin-bottom"
             style="background-image: url(https://tuongminh.com.vn/wp-content/uploads/2015/10/title-news.jpg);;height:50px">
        <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <h1>Tin tức</h1>
                    <p></p>
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
                <div id="post-193" class="post-193 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="container">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1476849201613" style="padding-top: 20px">
                                        <div class="wpb_wrapper">
                                            <div class="cortana-post  ">
                                                <div class="cortana-post-slider">
                                                    <div data-plugin-options='{"items" : 4,"itemsDesktop":[1199, 3],"itemsDesktopSmall":[980, 2],"itemsTablet":[768, 1],"pagination":true,"navigation":false, "autoPlay": true }' class="owl-carousel">
                                                        <?php $the_query = new WP_Query(array('orderby' => 'date', 'post_type' => 'news'));
                                                        $index = 0;
                                                        while ($the_query->have_posts()) : $the_query->the_post();
                                                        ?>
                                                            <div class="cortana-post-item">
                                                            <div class="cortana-post-image">
                                                                <div class="entry-thumbnail">
                                                                    <a href="<?php echo get_permalink($post->id) ?>"
                                                                       title="title="<?php echo $post->post_title ?>""
                                                                       class="entry-thumbnail_overlay">
                                                                        <img width="370" height="220"
                                                                             class="img-responsive"
                                                                             src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                             alt="<?php echo $post->post_title ?>"
                                                                             title="<?php echo $post->post_title ?>"/>
                                                                    </a>
                                                                    <a data-rel="prettyPhoto"
                                                                       href="<?php echo get_permalink($post->id) ?>"
                                                                       class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="cortana-post-content">
                                                                <a class="cortana-post-title"
                                                                   href="<?php echo get_permalink($post->id) ?>"
                                                                   rel="bookmark"
                                                                   title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a>
                                                                <p>Bảng biển quảng cáo ngoài đường thường áp dụng cho
                                                                    lĩnh vực nào? Billboard và Pano áp dụng được hầu hết
                                                                    cho mọi [...]</p>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <i class="fa fa-calendar"><span><?php echo get_the_date($post->id) ?></span></i>
                                                                <a href="<?php echo get_permalink($post->id) ?>">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <?php if (get_comments_number($post->id) > 0) {
                                                                        echo "Có " . get_comments_number($post->id) . " bình luận";
                                                                    } else echo "Không có bình luận"; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                            </div>
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


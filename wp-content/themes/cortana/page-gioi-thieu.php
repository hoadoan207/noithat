<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">

    <section class="page-title-wrap page-title-wrap-bg"
             style="background-image: url('<?php echo get_field("background_breadcrumbs", "options") ?>');background-color:#ffffff;height:50px">
        <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <h1>Giới thiệu</h1>
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
                <div id="post-2507" class="post-2507 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="container wpb_animate_when_almost_visible g5plus-css-animation wpb_fadeInLeft">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_left-to-right">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                width="1600" height="600"
                                                                src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                class="vc_single_image-img attachment-full" alt=""
                                                                srcset="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                sizes="(max-width: 1600px) 100vw, 1600px"/></div>
                                                </figure>
                                            </div>
                                            <div class="vc_empty_space" style="height: 32px"><span
                                                        class="vc_empty_space_inner"></span></div>

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <?php echo get_field("subline") ?>
                                                </div>
                                            </div>
                                            <div class="vc_empty_space" style="height: 35px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $contents = get_field("contents");
                            $index = 0;
                            if ($contents) {
                                foreach ($contents as $content) {
                                    if($index % 2 == 0) { ?>
                                        <div class="container wpb_animate_when_almost_visible g5plus-css-animation wpb_fadeInLeft">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                    <?php } ?>
                                        <div class="cortana-heading border-bottom left style1">
                                            <h2><?php echo $content["title"] ?></h2>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <?php echo $content["content"] ?>
                                        </div>

                                    <?php if($index % 2 == 1) { ?>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    <?php } else {
                                        ?>
                                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                                        <?php
                                    }
                                    ?>
                                    <?php $index++; }
                            }
                        ?>
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                    <!-- .entry-content -->
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>


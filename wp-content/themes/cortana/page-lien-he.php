<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">

    <section class="page-title-wrap page-title-wrap-bg page-title-no-margin-bottom"
             style="background-image: url('<?php echo get_field("background_breadcrumbs", "options") ?>');height:50px">
        <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <h1>Liên hệ</h1>
                    <ul class="breadcrumbs ">
                        <li class="first"></li>
                        <li class="home"><a rel="v:url" href="<?php echo site_url() ?>" class="home">Trang chủ</a></li>
                        <li><span>Liên hệ</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main class="site-content-page">
        <div class="site-content-page-inner ">
            <div class="page-content">
                <div id="post-1730" class="post-1730 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="fullwidth">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1474530019235" style="margin-top: 20px">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="container">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper" style="margin-bottom: 20px">
                                                                <div class="wpb_text_column wpb_content_element  margin-bottom-35">
                                                                    <div class="wpb_wrapper">
                                                                        <h3>Quý khách vui lòng điền vào mẫu sau</h3>
                                                                    </div>
                                                                </div>
                                                                <?php echo do_shortcode('[contact-form-7 id="280" title="Contact form 1"]') ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_gmaps_widget wpb_content_element margin-bottom-25">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_map_wraper">
                                                                            <?php echo get_field('map_embed', 'options') ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                    <div class="wpb_wrapper">
                                                                        <ul class="widget-contact-info secondary-font">
                                                                            <li>
                                                                                <i class="icon icon-location"></i>
                                                                                <p>T014 CC Phú Gia Hưng, 730/126 Lê Đức
                                                                                    Thọ, P.15, Q.Gò Vấp,TP.HCM</p>
                                                                            </li>
                                                                            <li>
                                                                                <i class="icon icon-mobile"></i>
                                                                                <a href="tel:028 3984 8998">028 3984
                                                                                    8998</a>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fa fa-envelope"></i>
                                                                                <p> info@tuongminh.com.vn</p>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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


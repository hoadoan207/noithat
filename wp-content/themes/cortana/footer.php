<footer class="main-footer-wrapper">
    <div id="wrapper-footer" style="background: #3d3d3d url('<?php echo get_site_url() ?>/wp-content/uploads/2016/11/pattern_1.png') repeat 50% 22px;">
        <div class="main-footer">
            <div class="footer_inner clearfix">
                <div class="footer_top_holder col-1">
                    <div class="container">
                        <div class="row footer-top-col-1 footer-9">
                            <div class="sidebar col-md-12 col-sm-12 col-1">
                                <aside id="text-17" class="widget widget_text">
                                    <div class="textwidget"><p>
                                            <img style="max-width: 225px;" src="<?php echo get_field("logo_footer", "options") ?>" alt=""/>
                                        </p>
                                        <p><?php echo get_field("slogan", "options") ?></p>
                                    </div>
                                </aside>
                                <aside id="text-8" class="widget widget_text">
                                    <div class="textwidget"><p><strong><?php echo get_field("title_info", "options") ?></strong></p>
                                        <ul class="widget-contact-info">
                                            <li style="line-height: 16px;"><i class="icon icon-location"></i>
                                                <?php echo get_field("address", "options") ?>
                                            </li>
                                            <li><i class="icon icon-mobile"></i><?php echo get_field("phone_number", "options") ?></li>
                                            <li><i class="icon icon-paper-plane"></i><?php echo get_field("email", "options") ?></li>
                                        </ul>
                                        <div class="hotline" style="font-size:24px">Liên hệ: <a href="tel:<?php echo get_field("phone_number", "options") ?>" style="font-size:20px;color: yellow;"><?php echo get_field("phone_number", "options") ?></a></div>
                                    </div>
                                </aside>
                                <aside id="text-18" class="widget widget_text">
                                    <div class="textwidget"><p><strong>Giờ làm việc</strong></p>
                                        <ul class="widget-contact-info">
                                            <?php
                                                if( have_rows('time_work', 'options') ):
                                                    while( have_rows('time_work', 'options') ) : the_row(); ?>
                                                        <li><i class="fa fa-clock-o"></i><?php echo get_sub_field('content') ?></li>
                                                    <?php
                                                    endwhile;
                                                endif;
                                                ?>
                                            <li><a target="_blank" href="<?php echo get_field('fb_url', 'options') ?>"><i class="icon icon-facebook"></i></a></li>
                                        </ul>
                                        <p>&nbsp;</p>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
</div>
<!-- Close Wrapper -->

<a class="gotop" href="javascript:">
    <i class="fa fa-angle-up"></i>
</a>

<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css'
      href='//fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&#038;ver=4.8.14' type='text/css' media='all'/>
<link rel='stylesheet'
      id='vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic-css'
      href='//fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&#038;ver=4.8.14'
      type='text/css' media='all'/>
<link rel='stylesheet' id='font-awesome-css'
      href='<?php echo get_template_directory_uri() ?>/assets/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=4.12.1'
      type='text/css' media='all'/>

<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.5.2'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.5.2'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/cortana-framework/includes/shortcodes/portfolio/assets/js/ladda/dist/spin.min.js?ver=1'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/cortana-framework/includes/shortcodes/portfolio/assets/js/ladda/dist/ladda.min.js?ver=1'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/cortana-framework/includes/shortcodes/portfolio/assets/js/hoverdir/modernizr.js?ver=1'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/cortana-framework/includes/shortcodes/portfolio/assets/js/hoverdir/jquery.hoverdir.js?ver=1'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/cortana-framework/includes/shortcodes/portfolio/assets/js/ajax-action.min.js?ver=1'></script>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/bootstrap/js/bootstrap.min.js?ver=4.8.14'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/js/plugin.min.js?ver=4.8.14'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var g5plus_framework_constant = {"product_compare": "Compare", "product_wishList": "WishList"};
    var g5plus_framework_ajax_url = site_uri + "/admin-ajax.php?activate-multi=true";
    var g5plus_framework_theme_url = site_uri + "/wp-content\/themes\/cortana\/";
    var g5plus_framework_site_url = site_uri;
    /* ]]> */
</script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/js/app.min.js?ver=4.8.14'></script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/assets/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.12.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var xmenu_meta = {"setting-responsive-breakpoint": "991"};
    var xmenu_meta_custom = [];
    /* ]]> */
</script>
<script type='text/javascript'
        src='<?php echo get_template_directory_uri() ?>/g5plus-framework/xmenu/assets/js/app.min.js?ver=1.0.0.0'></script>
<script>jQuery("style#g5plus_custom_style").append("@media screen and (min-width: 992px) {}");</script>


</body>
</html> <!-- end of site. what a ride! -->
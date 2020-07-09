<?php get_header(); ?>
<div id="wrapper-content" class="clearfix">
    <main class="site-content-page">
        <div class="site-content-page-inner ">
            <div class="page-content">
                <div id="post-1724" class="post-1724 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="container">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_revslider_element wpb_content_element">
                                                <div id="rev_slider_2_1_wrapper"
                                                     class="rev_slider_wrapper fullwidthbanner-container">
                                                    <!-- START REVOLUTION SLIDER 5.4.5.2 fullwidth mode -->
                                                    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" data-version="5.4.5.2">
                                                        <ul>
                                                            <?php
                                                            $home_sliders = get_field("image_slider");
                                                            if( $home_sliders ):
                                                                foreach( $home_sliders as $image ): ?>
                                                                    <li data-index="rs-47" data-transition="fade"
                                                                        data-slotamount="default" data-hideafterloop="0"
                                                                        data-hideslideonmobile="off" data-easein="default"
                                                                        data-easeout="default" data-masterspeed="50"
                                                                        data-thumb="<?php echo esc_url($image['sizes']['large']); ?>"
                                                                        data-delay="4000" data-rotate="0"
                                                                        data-saveperformance="off" data-title="Slide">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                                                             alt="" title="1600&#215;600 TM 06-02-01"
                                                                             width="1600" height="600"
                                                                             data-bgposition="center center" data-bgfit="cover"
                                                                             data-bgrepeat="no-repeat" class="rev-slidebg"
                                                                             data-no-retina>
                                                                        <!-- LAYERS -->
                                                                    </li>
                                                                <?php endforeach;
                                                                endif; ?>
                                                        </ul>
                                                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                            var htmlDivCss = "";
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement("div");
                                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <div class="tp-bannertimer"
                                                             style="height: 5px; background: rgba(0,0,0,0.15);"></div>
                                                    </div>
                                                    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                        var htmlDivCss = "";
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement("div");
                                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                    <script type="text/javascript">
                                                        setREVStartSize({
                                                            c: jQuery('#rev_slider_2_1'),
                                                            gridwidth: [1600],
                                                            gridheight: [600],
                                                            sliderLayout: 'fullwidth'
                                                        });

                                                        var revapi2,
                                                            tpj = jQuery;

                                                        tpj(document).ready(function () {
                                                            if (tpj("#rev_slider_2_1").revolution == undefined) {
                                                                revslider_showDoubleJqueryError("#rev_slider_2_1");
                                                            } else {
                                                                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                                    sliderType: "standard",
                                                                    jsFileLocation: site_uri + "/assets/plugins/revslider/public/assets/js/",
                                                                    sliderLayout: "fullwidth",
                                                                    dottedOverlay: "none",
                                                                    delay: 9000,
                                                                    navigation: {
                                                                        keyboardNavigation: "on",
                                                                        keyboard_direction: "horizontal",
                                                                        mouseScrollNavigation: "off",
                                                                        mouseScrollReverse: "default",
                                                                        onHoverStop: "off",
                                                                        touch: {
                                                                            touchenabled: "on",
                                                                            touchOnDesktop: "off",
                                                                            swipe_threshold: 75,
                                                                            swipe_min_touches: 50,
                                                                            swipe_direction: "horizontal",
                                                                            drag_block_vertical: false
                                                                        }
                                                                        ,
                                                                        arrows: {
                                                                            style: "",
                                                                            enable: true,
                                                                            hide_onmobile: false,
                                                                            hide_onleave: true,
                                                                            hide_delay: 200,
                                                                            hide_delay_mobile: 1200,
                                                                            tmp: '',
                                                                            left: {
                                                                                h_align: "left",
                                                                                v_align: "center",
                                                                                h_offset: 0,
                                                                                v_offset: 0
                                                                            },
                                                                            right: {
                                                                                h_align: "right",
                                                                                v_align: "center",
                                                                                h_offset: 0,
                                                                                v_offset: 0
                                                                            }
                                                                        }
                                                                    },
                                                                    visibilityLevels: [1024, 1024, 778, 480],
                                                                    gridwidth: 1600,
                                                                    gridheight: 600,
                                                                    lazyType: "none",
                                                                    shadow: 0,
                                                                    spinner: "spinner2",
                                                                    stopLoop: "off",
                                                                    stopAfterLoops: -1,
                                                                    stopAtSlide: -1,
                                                                    shuffle: "off",
                                                                    autoHeight: "on",
                                                                    hideThumbsOnMobile: "off",
                                                                    hideSliderAtLimit: 0,
                                                                    hideCaptionAtLimit: 0,
                                                                    hideAllCaptionAtLilmit: 0,
                                                                    startWithSlide: 0,
                                                                    debugMode: false,
                                                                    fallbacks: {
                                                                        simplifyAll: "off",
                                                                        nextSlideOnWindowFocus: "off",
                                                                        disableFocusListener: false,
                                                                    }
                                                                });
                                                            }

                                                        });	/*ready*/
                                                    </script>
                                                    <script>
                                                        var htmlDivCss = ' #rev_slider_2_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
                                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement('div');
                                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                </div><!-- END REVOLUTION SLIDER --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fullwidth">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1474560171572">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="container">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <?php
                                                        if( have_rows('intro_box') ):
                                                            while( have_rows('intro_box') ) : the_row();
                                                                ?>
                                                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                    <div class="vc_column-inner ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="cortana-heading border-bottom left style1 ">
                                                                                <h2 style="font-size:20px"><?php the_sub_field("title"); ?></h2>
                                                                            </div>

                                                                            <div class="wpb_text_column wpb_content_element  margin-bottom-25">
                                                                                <div class="wpb_wrapper">
                                                                                    <p style="text-align: justify;"><span style="color: #000000; font-size: 12pt;"><?php the_sub_field("content"); ?></p>
                                                                                    <p style="text-align: justify;"><span style="color: #000000; font-size: 12pt;">
                                                                                            <em><strong><?php the_sub_field("subline"); ?></strong></em>
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <?php if (get_sub_field("see_more")) { ?>
                                                                                    <div class="vc_btn3-container vc_btn3-inline">
                                                                                        <a class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey" href="<?php the_sub_field("see_more"); ?>" title="">Xem thêm</a>
                                                                                    </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fullwidth">
                            <div data-overlay-image="" data-overlay-opacity="0.5" class="vc_row wpb_row vc_row-fluid projectfea vc_custom_1521802604819 overlay-bg-vc-wapper"
                                 style="background-image: url('<?php echo get_field("hightlight_product_background", "options") ?>')!important;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="container">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper"><h2 style="color: #ffffff;text-align: center" class="vc_custom_heading projectitle vc_custom_1521802492136">DỰ ÁN TIÊU BIỂU</h2></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $highlight_posts = get_field("highlight_product");
                                            $index = 0;
                                            if ($highlight_posts) {
                                                foreach ($highlight_posts as $post) {
                                                    if($index % 3 == 0) { ?>
                                                        <div class="container">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid hover-img2">
                                                    <?php } ?>
                                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <a href="<?php echo get_permalink($post->id) ?>"
                                                                           target="_self"
                                                                           class="vc_single_image-wrapper vc_box_border_grey">
                                                                            <img width="1600" height="900"
                                                                                    src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                                    class="vc_single_image-img attachment-full"
                                                                                    alt=""
                                                                                    srcset="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                                                    sizes="(max-width: 1600px) 100vw, 1600px"/></a>
                                                                    </figure>
                                                                </div>
                                                                <div class="vc_empty_space" style="height: 6px"><span
                                                                            class="vc_empty_space_inner"></span></div>
                                                                <h2 style="font-size: 18px;text-align: center;font-family:Roboto;font-weight:400;font-style:normal" class="vc_custom_heading">
                                                                    <a href="<?php echo get_permalink($post->id) ?>"><?php echo $post->post_title ?></a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if($index % 3 == 2) { ?>
                                                            </div>
                                                        </div>
                                                    <?php }
                                                    ?>
                                                <?php $index++; }
                                                }
                                            ?>
                                            <div class="vc_btn3-container vc_btn3-center">
                                                <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-black"
                                                   href="<?php echo site_url(); ?>/san-pham" title=""><i class="vc_btn3-icon fa fa-refresh"></i> Xem Thêm</a></div>
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


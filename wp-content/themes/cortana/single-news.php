<?php get_header(); ?>
<?php setPostViews($post->ID); ?>
<div id="wrapper-content" class="clearfix">
    <section class="page-title-wrap page-title-wrap-bg" style="background-image: url('<?php echo get_field("background_breadcrumbs", "options") ?>');height:160px">
        <div class="page-title-overlay"></div>
        <div class="container">
            <div class="page-title-inner block-center">
                <div class="block-center-inner">
                    <h1>News</h1>
                    <ul class="breadcrumbs ">
                        <li class="first"></li>
                        <li class="home"><a rel="v:url" href="<?php echo site_url() ?>" class="home">Trang chủ</a></li>
                        <li><span><?php echo $post->post_title ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <main class="site-content-archive has-sidebar">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="sidebar left-sidebar col-md-3 hidden-sm hidden-xs">
                    <aside id="search-4" class="widget widget_search">
                        <form class="search-form" method="get" id="searchform" action="<?php echo site_url() ?>">
                            <input type="text" value="" name="s" id="s" placeholder="Nhập để tìm kiếm ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>
                    <aside id="g5plus-posts-3" class="widget widget-posts">
                        <h4 class="widget-title"><span>Bài viết mới</span></h4>
                        <div class="widget-posts-wrap">
                            <?php $the_query = new WP_Query(array(
                                    'orderby' => 'date',
                                    'post_type' => 'news',
                                    'posts_per_page' => 3
                            ));
                            $index = 0;
                            while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                                <div class="widget_posts_item clearfix">
                                    <div class="widget-posts-thumbnail">
                                        <div class="entry-thumbnail">
                                            <a href="<?php echo get_permalink($post->id) ?>"
                                               title="Modular hotel project completed in Hershey, PA"
                                               class="entry-thumbnail_overlay">
                                                <img width="150" height="150" class="img-responsive"
                                                     src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                     alt="<?php echo $post->post_title ?>"/>
                                            </a>
                                            <a data-rel="prettyPhoto"
                                               href="<?php echo get_permalink($post->id) ?>"
                                               class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="widget-posts-content-wrap">
                                        <a class="widget-posts-title" href="<?php echo get_permalink($post->id) ?>/image-post/"
                                           rel="bookmark" title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a>
                                        <div class="widget-posts-date"><?php echo get_the_date($post->id) ?> </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </aside>
                </div>
                <div class="site-content-archive-inner col-md-9">
                    <div class="blog-wrap">
                        <div class="blog-inner blog-single clearfix">
                            <article id="post-2376"
                                     class="clearfix post-2376 post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="entry-wrap clearfix">
                                    <div class="entry-thumbnail-wrap">
                                        <div class="entry-thumbnail">
                                            <a href="<?php echo get_permalink($post->id) ?>/"
                                               title="<?php echo $post->post_title ?>"
                                               class="entry-thumbnail_overlay">
                                                <img class="img-responsive"
                                                     src="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                                     alt="<?php echo $post->post_title ?>"/>
                                            </a>
                                            <a data-rel="prettyPhoto"
                                               href="<?php echo get_the_post_thumbnail_url($post->id) ?>"
                                               class="prettyPhoto"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-wrap">
                                        <div class="entry-content-top-wrap clearfix">
                                            <div class="entry-content-top-right">
                                                <h3 class="entry-title"><?php echo $post->post_title ?></h3>
                                            </div>
                                        </div>
                                        <div class="entry-content clearfix">
                                            <div class="post-title">
                                                <h1><?php echo $post->post_title ?></h1>
                                            </div>
                                            <div class="post-meta"></div>
                                            <div class="post-entry">
                                                <div id="entry-content" class="reading-content">
                                                    <?php echo $post->post_content ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer-blog clearfix">
                                            <div class="social-share-wrap">

                                                <ul class="social-share">
                                                    <li>
                                                        <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php get_permalink($post->id) ?>','sharer', 'toolbar=0,status=0,width=620,height=280');"
                                                           data-toggle="tooltip" title="Share on Facebook"
                                                           href="javascript:">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a onclick="popUp=window.open('http://twitter.com/home?status=<?php $post->post_title ?> <?php get_permalink($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                           data-toggle="tooltip" title="Share on Twitter"
                                                           href="javascript:;">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tooltip" title="Share on Google +1"
                                                           href="javascript:;"
                                                           onclick="popUp=window.open('https://plus.google.com/share?url=<?php get_permalink($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                                            <i class="fa fa-google-plus"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tooltip" title="Share on Linkedin"
                                                           onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=<?php get_permalink($post->id) ?>;title=<?php $post->post_title ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                           href="javascript:;">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a data-toggle="tooltip" title="Share on Tumblr"
                                                           onclick="popUp=window.open('http://www.tumblr.com/share/link?url=<?php get_permalink($post->id) ?>;name=<?php $post->post_title ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                           href="javascript:;">
                                                            <i class="fa fa-tumblr"></i>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a data-toggle="tooltip" title="Share on Pinterest"
                                                           onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?php get_permalink($post->id) ?>;description=<?php $post->post_title ?>;media=<?php get_the_post_thumbnail_url($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                           href="javascript:;">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a class="share-main-icon" href="javascript:;"><i
                                                            class="icon icon-share"></i>Shares </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<?php get_footer(); ?>


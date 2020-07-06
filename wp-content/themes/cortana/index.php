<?php
get_header(); ?>
<?php get_header(); ?>
    <div id="wrapper-content" class="clearfix">
        <section class="page-title-wrap page-title-wrap-bg"
                 style="background-image: url('<?php echo get_field("background_breadcrumbs", "options") ?>'); height:160px">
            <div class="page-title-overlay"></div>
            <div class="container">
                <div class="page-title-inner block-center">
                    <div class="block-center-inner">
                        <h1>Search Results for: <?php $_GET['s'] ?></h1>
                        <ul class="breadcrumbs">
                            <li class="first"></li>
                            <li class="home"><a rel="v:url" href="<?php echo site_url() ?>" class="home">Trang chủ</a>
                            </li>
                            <li><span>Search results for &quot;<?php $_GET['s'] ?>"</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <main class="site-content-archive">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="site-content-archive-inner col-md-9">
                        <div class="blog-wrap layout-container">
                            <div class="blog-inner clearfix">
                                <?php
                                if ( have_posts() ) {
                                    while ( have_posts() ) {
                                        the_post();
                                       ?>
                                        <article id="post-3052" class="clearfix post-3052 post type-post status-publish format-standard has-post-thumbnail hentry category-building category-khong-phan-loai">
                                            <div class="entry-wrap clearfix">
                                                <div class="entry-thumbnail-wrap">
                                                    <div class="entry-thumbnail">
                                                        <a href="<?php echo get_permalink($post->id) ?>"
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
                                                            <h3 class="entry-title">
                                                                <a href="<?php echo get_permalink($post->id) ?>"
                                                                   rel="bookmark"
                                                                   title="<?php echo $post->post_title ?>"><?php echo $post->post_title ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        <p>
                                                            <?php
                                                                $str = strip_tags($post->post_content);
                                                                if (strlen($str) > 500){
                                                                    $str = substr($str, 0, 500) . '...';
                                                                }
                                                                echo $str;
                                                            ?>
                                                            <a class="read-more" href="<?php echo get_permalink($post->id) ?>">READ MORE</a></p>
                                                    </div>
                                                    <div class="entry-post-meta-footer">
                                                        <ul class="entry-footer clearfix">
                                                            <li class="entry-meta-count-post">
                                                                <a href="<?php echo get_permalink($post->id) ?>">
                                                                    <i class="icon icon-heart"></i>
                                                                    <?php echo getPostViews($post->ID) ?> Lượt xem
                                                                </a>
                                                            </li>
                                                            <li class="entry-meta-share">
                                                                <div class="social-share-wrap">

                                                                    <ul class="social-share">
                                                                        <li>
                                                                            <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo get_permalink($post->id) ?>','sharer', 'toolbar=0,status=0,width=620,height=280');"
                                                                               data-toggle="tooltip" title="Share on Facebook"
                                                                               href="javascript:">
                                                                                <i class="fa fa-facebook"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a onclick="popUp=window.open('http://twitter.com/home?status=<?php echo $post->post_title ?> <?php echo get_permalink($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                               data-toggle="tooltip" title="Share on Twitter"
                                                                               href="javascript:;">
                                                                                <i class="fa fa-twitter"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a data-toggle="tooltip" title="Share on Google +1"
                                                                               href="javascript:;"
                                                                               onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                                                                                <i class="fa fa-google-plus"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a data-toggle="tooltip" title="Share on Linkedin"
                                                                               onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink($post->id) ?>;title=<?php echo $post->post_title ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                               href="javascript:;">
                                                                                <i class="fa fa-linkedin"></i>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a data-toggle="tooltip" title="Share on Tumblr"
                                                                               onclick="popUp=window.open('http://www.tumblr.com/share/link?url=<?php echo get_permalink($post->id) ?>;name=<?php echo $post->post_title ?>;description=<?php echo strip_tags($str) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                               href="javascript:;">
                                                                                <i class="fa fa-tumblr"></i>
                                                                            </a>
                                                                        </li>


                                                                        <li>
                                                                            <a data-toggle="tooltip" title="Share on Pinterest"
                                                                               onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=<?php echo get_permalink($post->id) ?>;description=<?php echo $post->post_title ?>;media=<?php echo get_the_post_thumbnail_url($post->id) ?>','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;"
                                                                               href="javascript:;">
                                                                                <i class="fa fa-pinterest"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <a class="share-main-icon" href="javascript:;"><i class="icon icon-share"></i>Shares </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--            <a class="cortana-button style4 size-sm" href="-->
                                                    <!--" rel="bookmark" title="--><!--">--><!--</a>-->
                                                </div>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                }
                                else {
                                    ?>
                                    <div class="site-content-archive-inner col-md-9">
                                        <div class="blog-wrap layout-container">
                                            <div class="blog-inner clearfix">
                                                <p>Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
                                                <form class="search-form" method="get" id="searchform" action="<?php echo site_url() ?>">
                                                    <input type="text" value="" name="s" id="s" placeholder="Nhập để tìm kiếm ...">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar right-sidebar col-md-3 hidden-sm hidden-xs">
                        <aside id="search-4" class="widget widget_search">
                            <h4 class="widget-title"><span>Tìm Kiếm</span></h4>
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
                </div>
            </div>
        </main>
    </div>
<?php get_footer(); ?>

<?php
get_footer();

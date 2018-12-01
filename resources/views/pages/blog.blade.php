@extends('layout')

@section('body-classes', 'blog full-width')

@section('content')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" >
                    <a href="{{ route ('blog-single') }}">Home</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Page 1
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                        <header class="entry-header">
                            <div class="media-attachment">
                                <div class="post-thumbnail">
                                    <a href="{{ route ('blog-single') }}">
                                        <img width="1619" height="827" src="assets/images/blog/blog-1.jpg" class="attachment-full size-full wp-post-image" alt="" />
                                    </a>
                                </div>
                            </div>
                            <h1 class="alpha entry-title">
                                <a href="{{ route ('blog-single') }}" rel="bookmark">Pizza Festival – Reopen</a>
                            </h1>
                            <div class="entry-meta">
                                <div class="cat-links">
                                    <a href="#" rel="category tag">Technology</a>
                                </div>
                                <span class="posted-on">
                              <a href="{{ route ('blog-single') }}" rel="bookmark">
                              <time class="entry-date published" datetime="2016-10-13T14:53:25+00:00">October 13, 2016</time>
                              <time class="updated" datetime="2016-10-14T06:48:31+00:00">October 14, 2016</time>
                              </a>
                              </span>
                                <div class="author">
                                    <div class="label">Posted by:</div>
                                    <a href="#" title="Posts by farook" rel="author">farook</a>
                                </div>
                            </div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                            <div class="post-readmore">
                                <a href="{{route ('blog-single')}}" class="read-more-text">Read More</a>
                            </div>
                            <span class="comments-link">
                           <a href="#">Leave a comment</a>
                           </span>
                        </div>
                    </article>
                    <!-- #post-## -->
                    <div class="blog-menu">
                        <div class="container">
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Design</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Links &amp; Quotes</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Music</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >News</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Social</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Technology</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Uncategorized</a></span>
                            <span class="menu-item"><a href="shop-grid-3-column.html" >Videos</a></span>
                        </div>
                    </div>
                    <div class="posts">
                        <article id="post-356" class="post-356 post type-post status-publish format-audio hentry category-design category-music category-social tag-audio tag-awsome tag-buy-it tag-music  post_format-post-format-audio">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <iframe style="height=:165px; width:100%;" width="870" height="165" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{ route ('blog-single') }}" rel="bookmark">Music for Dinner &#8211; Audio Player</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Design</a>,
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Music</a>,
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Social</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{ route ('blog-single') }}" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-13T14:47:34+00:00">October 13, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="{{ route ('blog-single') }}" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                <div class="post-readmore">
                                    <a href="{{ route ('blog-single') }}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link"><a href="#">Leave a comment</a></span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-354" class="post-354 post type-post status-publish format-video hentry category-videos tag-awsome tag-buy-it  tag-video tag-wordpress post_format-post-format-video">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <div class="video-container">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://player.vimeo.com/video/153747736" width="870" height="490" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{ route ('blog-single') }}" rel="bookmark">This is how we Baking our Pizza &#8211; Video Post</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Videos</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{ route ('blog-single') }}" rel="bookmark">
                                 <time class="entry-date published updated" datetime="2016-10-13T14:44:11+00:00">October 13, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="{{ route ('blog-single') }}" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                <div class="post-readmore">
                                    <a href="{{ route ('blog-single') }}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-343" class="post-343 post type-post status-publish format-quote hentry category-links-quotes category-uncategorized tag-awsome tag-bootstrap tag-clean-design tag-woocommerce tag-wordpress post_format-post-format-quote">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <blockquote>
                                    <p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat tristique. Aliquam luctus orci aliquet augue eleifend.</p>
                                    <cite> Steve Kowalsky</cite>
                                </blockquote>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                        <article id="post-340" class="post-340 post type-post status-publish format-link hentry category-links-quotes category-news category-social tag-awsome tag-bootstrap tag-buy-it tag-clean-design  tag-woocommerce tag-wordpress post_format-post-format-link">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <p>If you are looking for a developer on ThemeForest &#8211; check out the link</p>
                                <p>
                                    <a href="http://www.transvelo.com" target="_blank">
                                        <span>http://www.transvelo.com</span>
                                    </a>
                                </p>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                        <article id="post-255" class="post-255 post type-post status-publish format-standard hentry category-uncategorized">
                            <header class="entry-header">
                                <h1 class="alpha entry-title">
                                    <a href="{{ route ('blog-single') }}" rel="bookmark">Iced Caramel Latte</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Uncategorized</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{ route ('blog-single') }}" rel="bookmark">
                                 <time class="entry-date published updated" datetime="2016-10-04T13:53:51+00:00">October 4, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="#" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Quisque pretium turpis non tempus cursus. Nulla consequat, mi nec pellentesque imperdiet, mi quam congue magna, tristique commodo.</p>
                                <div class="post-readmore">
                                    <a href="{{ route ('blog-single') }}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-251" class="post-251 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <div class="post-thumbnail">
                                        <a href="{{ route ('blog-single') }}">
                                            <img width="1619" height="827" src="assets/images/blog/blog-2.jpg" class="attachment-full size-full wp-post-image" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{ route ('blog-single') }}" rel="bookmark">5th International Pizza Festival with New Better Competitors from All over the World.</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{ route ('blog-single') }}" rel="category tag">Uncategorized</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{ route ('blog-single') }}" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-04T13:49:25+00:00">October 4, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="#" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Although the legendary Double Burger really needs no introduction, please allow us....</p>
                                <div class="post-readmore">
                                    <a href="{{ route ('blog-single') }}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="{{ route ('blog-single') }}">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                    </div>
                    <!-- /.posts -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>


@endsection

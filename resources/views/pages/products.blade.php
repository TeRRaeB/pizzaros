
@extends('layout')

@section('body-classes','left-sidebar list-view columns-2 archive woocommerce-page lite')

@section('content')


    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-sorting">
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                    <input type="hidden" name="shop_view" value="grid-view"><input type="hidden" name="shop_style" value="lite"><input type="hidden" name="shop_layout" value="left-sidebar"><input type="hidden" name="shop_columns" value="3">
                </form>
                <form  class="form-pizzaro-wc-ppp">
                    <select name="ppp" onchange="this.form.submit()" class="pizzaro-wc-wppp-select c-select">
                        <option value="9" selected="selected">Show 9</option>
                        <option value="18">Show 18</option>
                        <option value="36">Show 36</option>
                        <option value="-1">Show All</option>
                    </select>
                    <input type="hidden" name="shop_view" value="grid-view"><input type="hidden" name="shop_style" value="lite"><input type="hidden" name="shop_layout" value="left-sidebar">
                    <input type="hidden" name="shop_columns" value="3">
                </form>
                <p class="woocommerce-result-count">Showing 1–9 of 54 results</p>
                <div class="product-filters-widgets">
                    <a class="dropdown-toggle collapsed" data-toggle="collapse" href="#products_filter_collapse" aria-expanded="false" aria-controls="products_filter_collapse">More Filters<i class="fa fa-chevron-down"></i></a>
                    <div class="collapse" id="products_filter_collapse">
                        <div id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
                            <span class="gamma widget-title">Filter by price</span>
                            <form method="get" action="#">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                    </div>
                                    <div class="price_slider_amount">


                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label" style="">Price: <span class="from">$1</span> — <span class="to">$59</span></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="woocommerce_layered_nav-2" class="widget woocommerce widget_layered_nav">
                            <span class="gamma widget-title">Food Type</span>
                            <ul>
                                <li class="wc-layered-nav-term "><a href="#">Meat</a> <span class="count">(7)</span></li>
                                <li class="wc-layered-nav-term "><a href="#">Spicy</a> <span class="count">(7)</span></li>
                                <li class="wc-layered-nav-term "><a href="#">Veg</a> <span class="count">(12)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <ul class="products">
                        @foreach($products as $product)
                        <li class="product ">
                            <div class="product-outer">
                                <div class="product-inner">
                                    <div class="product-image-wrapper">
                                        <a href="single-product-v1.html" class="woocommerce-LoopProduct-link"><img width="300" height="300" src="{{ $product->image }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="13" title="13"></a>
                                    </div>
                                    <div class="product-content-wrapper">
                                        <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                            <h3>{{ $product->name }}</h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">{{ $product->description }}</p>
                                            </div>
                                            <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                <h3><span>Pick Size</span></h3>
                                            @foreach($product->items as $item)
            <a href="{{route('add-to-cart', $item->id)}}">
                                                    <div class="ywapo_input_container ywapo_input_container_radio" ><span class="ywapo_label_tag_position_after">
                                                            <span class="ywapo_option_label ywapo_label_position_after">{{ $item->size }} {{ $item->dimension }} </span></span>
                                                        <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $item->price }}</span></span></div>
            </a>                                                 {{--<div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">{{ $item->size }}  {{ $item->dimension }} </span></span><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $item->price }}</span></span></div>--}}
                                                @endforeach
                                                </div>


                                        </a>
                                        <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a></div>
                                    </div>
                                </div>
                                <!-- /.product-inner --></div>
                            <!-- /.product-outer -->
                        </li>  @endforeach
                    </ul>


                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <div id="secondary" class="widget-area" role="complementary">
                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="menu-food-menu-container">
                        <ul id="menu-food-menu-2" class="menu">
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-pizza"></i>Pizza</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-burger"></i>Burgers</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-tacos"></i>Tacos</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-wraps"></i>Wraps</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-fries"></i>Fries</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                            <li class="menu-item"><a href="shop-grid-3-column.html"><i class="po po-drinks"></i>Drinks</a></li>
                        </ul>
                    </div>
                </div>
                <div id="search-2" class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="blog-single.html">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                    </form>
                </div>
                <div id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter">
                    <span class="gamma widget-title">Filter by price</span>
                    <form method="get" action="#">
                        <div class="price_slider_wrapper">
                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                            </div>
                            <div class="price_slider_amount">


                                <button type="submit" class="button">Filter</button>
                                <div class="price_label" style="">
                                    Price: <span class="from">$1</span> — <span class="to">$59</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="woocommerce_products-2" class="widget woocommerce widget_products">
                    <span class="gamma widget-title">Best Deals</span>
                    <ul class="product_list_widget">
                        <li>
                            <a href="#" title="Orange Juice">
                                <img width="180" height="180" src="assets/images/blog/sidebar-product-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="28" />
                                <span class="product-title">Orange Juice</span>
                            </a>
                            <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1.90</span>
                           </span>
                        </li>
                        <li>
                            <a href="#" title="Cola Bottle">
                                <img width="180" height="180" src="assets/images/blog/sidebar-product-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="22" />
                                <span class="product-title">Cola Bottle</span>
                            </a>
                            <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>2.90</span>
                           </span>
                        </li>
                        <li>
                            <a href="#" title="Hawaii Vegetarian Pizza">
                                <img width="180" height="180" src="assets/images/blog/sidebar-product-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="13" />
                                <span class="product-title">Hawaii Vegetarian Pizza</span>
                            </a>
                            <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>39.80</span>&ndash;<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>59.90</span>
                           </span>
                        </li>
                        <li>
                            <a href="#" title="Grand Italiano">
                                <img width="180" height="180" src="assets/images/blog/sidebar-product-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="2" />
                                <span class="product-title">Grand Italiano</span>
                            </a>
                            <span class="widget-price">
                           <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>22.90</span></del>
                           <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>19.90</span></ins>
                           </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- #secondary -->
        </div>
        <!-- .col-full -->
    </div>
    @endsection

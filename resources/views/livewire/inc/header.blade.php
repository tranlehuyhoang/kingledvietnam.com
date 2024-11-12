<header id="header" class="header ">
    @php
    $settings = App\Models\Setting::first(); // Truy vấn model Settings
    @endphp
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky nav-dark hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li class="header-contact-wrapper">
                            <ul id="header-contact"
                                class="nav nav-divided nav-uppercase header-contact">
                                <li class="">
                                    <a target="_blank" rel="noopener"
                                        href="https://maps.google.com/?q={{ $settings->address}}"
                                        title="{{ $settings->address}}" class="tooltip">
                                        <i class="icon-map-pin-fill" style="font-size:16px;"></i> <span>
                                            {{ $settings->address}} </span>
                                            
                                    </a>
                                </li>

                                <li class="">
                                    <a href="mailto:{{ $settings->email}}" class="tooltip"
                                        title="{{ $settings->email}}">
                                        <i class="icon-envelop" style="font-size:16px;"></i> <span>
                                            {{ $settings->email}} </span>
                                            
                                    </a>
                                </li>


                                <li class="">
                                    <a href="tel:{{ $settings->hotline}}" class="tooltip" title="{{ $settings->hotline}}">
                                        <i class="icon-phone" style="font-size:16px;"></i>
                                        <span>{{ $settings->hotline}}</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-divided">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                    </ul>
                </div>


            </div>
        </div>
        <div id="masthead" class="header-main hide-for-sticky">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">

                    <!-- Header logo -->
                    <a href="/"
                        title="Đèn LED KingLED - Nhà Phân Phối Đèn KingLED Việt Nam 2024" rel="home">
                        <img width="928" height="422"
                            src="{{ Storage::url($settings->logo)}}"
                            class="header_logo header-logo" alt="Đèn LED KingLED" /><img width="928"
                            height="422" src="{{ Storage::url($settings->logo)}}"
                            class="header-logo-dark" alt="Đèn LED KingLED" /></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left"
                                data-bg="main-menu-overlay" data-color="" class="is-small"
                                aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                                <span class="menu-title uppercase hide-for-small">Menu</span> </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                    <form role="search" method="get" class="searchform"
                                        action="/tim-kiem">
                                        <div class="flex-row relative">
                                            <div class="flex-col search-form-categories">
                                                <select class="search_categories resize-select mb-0" name="product_cat">
                                                    <option value="" selected='selected'>Tất cả</option>
                                                    @foreach ($categories as $category)
                                                            <option value="{{ $category->slug }}">{{ strtoupper($category->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                    for="woocommerce-product-search-field-0">Tìm
                                                    kiếm:</label>
                                                <input type="search"
                                                    id="woocommerce-product-search-field-0"
                                                    class="search-field mb-0"
                                                    placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                                <input type="hidden" name="post_type" value="product" />
                                            </div>
                                            <div class="flex-col">
                                                <button type="submit" value="Tìm kiếm"
                                                    class="ux-search-submit submit-button secondary button  icon mb-0"
                                                    aria-label="Gửi">
                                                    <i class="icon-search"></i> </button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Right Elements -->
                {{-- <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                        <li class="cart-item has-icon has-dropdown">

                            <a href="https://kingledvietnam.com/gio-hang/"
                                class="header-cart-link is-small" title="Giỏ hàng">

                                <span class="header-cart-title">
                                    Giỏ hàng </span>

                                <i class="icon-shopping-cart" data-icon-label="0">
                                </i>
                            </a>

                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="html widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">


                                        <div
                                            class="ux-mini-cart-empty flex flex-row-col text-center pt pb">
                                            <div class="ux-mini-cart-empty-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 17 19" style="opacity:.1;height:80px;">
                                                    <path
                                                        d="M8.5 0C6.7 0 5.3 1.2 5.3 2.7v2H2.1c-.3 0-.6.3-.7.7L0 18.2c0 .4.2.8.6.8h15.7c.4 0 .7-.3.7-.7v-.1L15.6 5.4c0-.3-.3-.6-.7-.6h-3.2v-2c0-1.6-1.4-2.8-3.2-2.8zM6.7 2.7c0-.8.8-1.4 1.8-1.4s1.8.6 1.8 1.4v2H6.7v-2zm7.5 3.4 1.3 11.5h-14L2.8 6.1h2.5v1.4c0 .4.3.7.7.7.4 0 .7-.3.7-.7V6.1h3.5v1.4c0 .4.3.7.7.7s.7-.3.7-.7V6.1h2.6z"
                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <p class="woocommerce-mini-cart__empty-message empty">Chưa
                                                có sản
                                                phẩm trong giỏ hàng.</p>
                                            <p class="return-to-shop">
                                                <a class="button primary wc-backward"
                                                    href="/cua-hang/">
                                                    Quay trở lại cửa hàng </a>
                                            </p>
                                        </div>


                                    </div>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div> --}}

                <!-- Mobile Right Elements -->
                <div style="opacity: 0" class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="cart-item has-icon">


                            <a href="https://kingledvietnam.com/gio-hang/"
                                class="header-cart-link is-small off-canvas-toggle nav-top-link"
                                title="Giỏ hàng" data-open="#cart-popup" data-class="off-canvas-cart"
                                data-pos="right">

                                <i class="icon-shopping-cart" data-icon-label="0">
                                </i>
                            </a>


                            <!-- Cart Sidebar Popup -->
                            <div id="cart-popup" class="mfp-hide">
                                <div class="cart-popup-inner inner-padding cart-popup-inner--sticky">
                                    <div class="cart-popup-title text-center">
                                        <span class="heading-font uppercase">Giỏ hàng</span>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">


                                            <div
                                                class="ux-mini-cart-empty flex flex-row-col text-center pt pb">
                                                <div class="ux-mini-cart-empty-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 17 19"
                                                        style="opacity:.1;height:80px;">
                                                        <path
                                                            d="M8.5 0C6.7 0 5.3 1.2 5.3 2.7v2H2.1c-.3 0-.6.3-.7.7L0 18.2c0 .4.2.8.6.8h15.7c.4 0 .7-.3.7-.7v-.1L15.6 5.4c0-.3-.3-.6-.7-.6h-3.2v-2c0-1.6-1.4-2.8-3.2-2.8zM6.7 2.7c0-.8.8-1.4 1.8-1.4s1.8.6 1.8 1.4v2H6.7v-2zm7.5 3.4 1.3 11.5h-14L2.8 6.1h2.5v1.4c0 .4.3.7.7.7.4 0 .7-.3.7-.7V6.1h3.5v1.4c0 .4.3.7.7.7s.7-.3.7-.7V6.1h2.6z"
                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                                <p class="woocommerce-mini-cart__empty-message empty">
                                                    Chưa có
                                                    sản phẩm trong giỏ hàng.</p>
                                                <p class="return-to-shop">
                                                    <a class="button primary wc-backward"
                                                        href="/cua-hang/">
                                                        Quay trở lại cửa hàng </a>
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <div id="wide-nav" class="header-bottom wide-nav hide-for-sticky">
            <div class="flex-row container">

                <div class="flex-col hide-for-medium flex-left">
                    <ul
                        class="nav header-nav header-bottom-nav nav-left  nav-divided nav-size-small nav-spacing-small nav-uppercase">
                        <li id="menu-item-3183"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-25 current_page_item menu-item-3183 active menu-item-design-default">
                            <a href="/" aria-current="page"
                                class="nav-top-link">Trang
                                Chủ</a>
                        </li>
                        <li id="menu-item-3186"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3186 menu-item-design-default">
                            <a href="/gioi-thieu/" class="nav-top-link">Giới
                                Thiệu</a>
                        </li>
                        <li id="menu-item-6390"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6390 menu-item-design-container-width menu-item-has-block has-dropdown nav-dropdown-toggle">
                            <a href="/cua-hang/" class="nav-top-link"
                                aria-expanded="false" aria-haspopup="menu">Danh mục Sản phẩm<i
                                    class="icon-angle-down"></i></a>
                            <div class="sub-menu nav-dropdown">
                                <div class="row row-collapse row-solid chem-no-tong" id="row-1054830396">
                                    @foreach($categories as $category)
                                        @if($category->is_active)
                                            <div id="col-{{ $category->id }}" class="col chem-no medium-3 small-6 large-3">
                                                <div class="col-inner text-center box-shadow-2-hover">
                                                    <a class="plain" href="{{ url('/cua-hang/' . $category->slug) }}">
                                                        <div class="icon-box featured-box icon-box-left text-left">
                                                            <div class="icon-box-img" style="width: 60px">
                                                                <div class="icon">
                                                                    <div class="icon-inner">
                                                                        <img width="100" height="100"
                                                                             src="{{ Storage::url($category->icon) }}"
                                                                             class="attachment-medium size-medium"
                                                                             alt="{{ $category->name }}"
                                                                             decoding="async" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-box-text last-reset">
                                                                <div id="text-{{ $category->id }}" class="text text-chem-no">
                                                                    <h3>
                                                                        <span style="color: #000000; font-family: avo; font-size: 75%;">
                                                                            <a style="color: #000000;" href="{{ url('/cua-hang/' . $category->slug) }}">
                                                                                {{ $category->name }}
                                                                            </a>
                                                                        </span>
                                                                    </h3>
                                                                    <style>
                                                                        #text-{{ $category->id }} {
                                                                            line-height: 1.4;
                                                                            text-align: left;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li id="menu-item-3184"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3184 menu-item-design-default">
                            <a href="/bao-gia/" class="nav-top-link">Báo
                                Giá</a>
                        </li>
                        <li id="menu-item-3187"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3187 menu-item-design-default">
                            <a href="/lien-he/" class="nav-top-link">Liên
                                Hệ</a>
                        </li>
                        <li id="menu-item-3188"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3188 menu-item-design-default">
                            <a href="/tin-tuc/" class="nav-top-link">Tin
                                Tức</a>
                        </li>
                    </ul>
                </div>


                <div class="flex-col hide-for-medium flex-right flex-grow">
                    <ul
                        class="nav header-nav header-bottom-nav nav-right  nav-divided nav-size-small nav-spacing-small nav-uppercase">
                    </ul>
                </div>

                <div class="flex-col show-for-medium flex-grow">
                    <ul
                        class="nav header-bottom-nav nav-center mobile-nav  nav-divided nav-size-small nav-spacing-small nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                    <form role="search" method="get" class="searchform"
                                        action="https://kingledvietnam.com/">
                                        <div class="flex-row relative">
                                            <div class="flex-col search-form-categories">
                                                <select class="search_categories resize-select mb-0"
                                                    name="product_cat">
                                                    <option value="" selected='selected'>Tất cả</option>
                                                    <option value="den-am-bac-cau-thang">ĐÈN ÂM BẬC CẦU
                                                        THANG
                                                    </option>
                                                    <option value="den-cot-san-vuon">ĐÈN CỘT SÂN VƯỜN
                                                    </option>
                                                    <option value="den-exit-chi-huong">ĐÈN EXIT CHỈ
                                                        HƯỚNG
                                                    </option>
                                                    <option value="den-khan-cap-kingled">ĐÈN KHẨN CẤP
                                                        KINGLED
                                                    </option>
                                                    <option value="den-led-am-tran-kingeco">ĐÈN LED ÂM
                                                        TRẦN
                                                        KINGECO</option>
                                                    <option value="den-led-am-tran-kingled">ĐÈN LED ÂM
                                                        TRẦN
                                                        KINGLED</option>
                                                    <option value="den-led-bup-kingled">ĐÈN LED BÚP
                                                        KINGLED
                                                    </option>
                                                    <option value="den-led-day-kingled">ĐÈN LED DÂY
                                                        KINGLED
                                                    </option>
                                                    <option value="den-led-ong-bo-kingled">ĐÈN LED ỐNG
                                                        BƠ
                                                        KINGLED</option>
                                                    <option value="den-led-op-tran-kingled">ĐÈN LED ỐP
                                                        TRẦN
                                                        KINGLED</option>
                                                    <option value="den-led-panel-kingled">ĐÈN LED PANEL
                                                        KINGLED
                                                    </option>
                                                    <option value="den-led-roi-ray-kingled">ĐÈN LED RỌI
                                                        RAY
                                                        KINGLED</option>
                                                    <option value="den-led-spot-light">ĐÈN LED SPOT
                                                        LIGHT
                                                    </option>
                                                    <option value="den-led-tuyp-kingled">ĐÈN LED TUÝP
                                                        KINGLED
                                                    </option>
                                                    <option value="den-nha-xuong">ĐÈN NHÀ XƯỞNG</option>
                                                    <option value="den-pha-led-kingled">ĐÈN PHA LED
                                                        KINGLED
                                                    </option>
                                                    <option value="den-ray-nam-cham">ĐÈN RAY NAM CHÂM
                                                    </option>
                                                    <option value="den-soi-tranh-kingled">ĐÈN SOI TRANH
                                                        KINGLED
                                                    </option>
                                                    <option value="den-tha-trang-tri-kingled">ĐÈN THẢ
                                                        TRANG TRÍ
                                                        KINGLED</option>
                                                    <option value="den-tuong-trang-tri">ĐÈN TƯỜNG TRANG
                                                        TRÍ
                                                    </option>
                                                    <option value="phu-kien-den-led-day">PHỤ KIỆN ĐÈN
                                                        LED DÂY
                                                    </option>
                                                    <option value="phu-kien-den-ray-nam-cham">PHỤ KIỆN
                                                        ĐÈN RAY
                                                        NAM CHÂM</option>
                                                    <option value="quat-suoi-dieu-hoa">QUẠT SƯỞI ĐIỀU
                                                        HÒA
                                                    </option>
                                                    <option value="san-pham-moi-ra-mat">SẢN PHẨM MỚI RA
                                                        MẮT
                                                    </option>
                                                    <option value="thanh-ray-nam-cham-mong">THANH RAY
                                                        NAM CHÂM
                                                        MỎNG</option>
                                                </select>
                                            </div>
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                    for="woocommerce-product-search-field-1">Tìm
                                                    kiếm:</label>
                                                <input type="search"
                                                    id="woocommerce-product-search-field-1"
                                                    class="search-field mb-0"
                                                    placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                                <input type="hidden" name="post_type" value="product" />
                                            </div>
                                            <div class="flex-col">
                                                <button type="submit" value="Tìm kiếm"
                                                    class="ux-search-submit submit-button secondary button  icon mb-0"
                                                    aria-label="Gửi">
                                                    <i class="icon-search"></i> </button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
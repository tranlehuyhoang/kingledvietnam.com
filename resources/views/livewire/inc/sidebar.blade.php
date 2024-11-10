<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">


    <div class="sidebar-menu no-scrollbar ">


        <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
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
                                        for="woocommerce-product-search-field-2">Tìm kiếm:</label>
                                    <input type="search" id="woocommerce-product-search-field-2"
                                        class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value=""
                                        name="s" />
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
            @foreach ($categories as $category)
        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
            <a href="/cua-hang/{{ $category->slug}}">{{ $category->name }}</a>
        </li>
    @endforeach
           
        </ul>


    </div>


</div>
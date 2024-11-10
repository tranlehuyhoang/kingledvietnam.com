<div id="shop-sidebar" class="sidebar-inner col-inner">
    <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
        <span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
        <div class="is-divider small"></div>
        <ul class="product-categories">
            @foreach($categories as $category)
                <li class="cat-item cat-item-{{ $category->id }} {{ $category->subcategories->isNotEmpty() ? 'cat-parent' : '' }}">
                    <a href="/cua-hang/{{ $category->slug }}" title="{{ $category->name }}">
                        {{ $category->name }}
                    </a>
                    @if ($category->subcategories->isNotEmpty())
                        <ul class='children'>
                            @foreach($category->subcategories as $subcategory)
                                <li class="cat-item cat-item-{{ $subcategory->id }}">
                                    <a href="/cua-hang/{{$category->slug}}/{{ $subcategory->slug }}" title="{{ $subcategory->name }}">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </aside>
    <aside id="woocommerce_products-2" class="widget woocommerce widget_products"><span
            class="widget-title shop-sidebar">Sản phẩm</span>
        <div class="is-divider small"></div>
        <ul class="product_list_widget">
            @foreach($randomProducts as $product)
                <li>
                    <a href="{{ $product->url }}"> <!-- Giả sử bạn có thuộc tính url trong mô hình Product -->
                        <img width="100" height="100"
                             src="{{ Storage::url($product->images[0]) }}" 
                             class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                             alt="{{ $product->name }}" decoding="async" />
                        <span class="product-title">{{ $product->name }}</span>
                    </a>
                    <del aria-hidden="true">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>{{ number_format($product->price, 0, ',', '.') }}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                        </span>
                    </del>
                    <ins aria-hidden="true">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>{{ number_format($product->discount_price, 0, ',', '.') }}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi>
                        </span>
                    </ins>
                </li>
            @endforeach
        </ul>
    </aside>
    <aside id="text-5" class="widget widget_text">
        <div class="textwidget">
            <div class="yentam-muahang">
                <h4><span style="font-size: 18px;">Tư vấn bán hàng</span></h4>
                <p><strong><span style="font-size: 14px; color: #01aef2;"><i
                                class="fa fa-check" aria-hidden="true"></i> VINALIGHT HÀ NỘI
                        </span></strong></p>
                <p><span style="font-size: 14px;">Hà Nội 1 : <a
                            href="tel:0989043239">0989.043.239</a> </span></p>
                <p><span style="font-size: 14px;">Hà Nội 2 : <a
                            href="tel:0904678922">0904.678.922</a> </span></p>
                <p><span style="font-size: 14px;">Hà Nội 3 : <a
                            href="tel:0982051651">0982.051.651</a> </span></p>
                <p><span style="font-size: 14px;">Hà Nội 4 : <a
                            href="tel:0912595868">0912.595.868</a> </span></p>
                <p><span style="font-size: 14px;">Hà Nội 5 : <a
                            href="tel:0936515888">0936.515.888</a> </span></p>
                <p><span style="font-size: 14px; color: #01aef2;"><strong><i
                                class="fa fa-check" aria-hidden="true"></i> VINALIGHT SÀI
                            GÒN</strong> </span></p>
                <p><span style="font-size: 16px;">Sài Gòn 1 : <a
                            href="tel:0909961962">0909.961.962</a> </span></p>
                <p><span style="font-size: 14px;">Sài Gòn 2 : <a
                            href="tel:0964611699">0964.611.699</a> </span></p>
                <p><span style="font-size: 14px; color: #01aef2;"><strong><i
                                class="fa fa-check" aria-hidden="true"></i> KHIẾU NẠI DỊCH
                            VỤ</strong> </span></p>
                <p><span style="font-size: 16px;">Mr. Toán: <a
                            href="tel:0989487999">0989.487.999</a> </span></p>
            </div>
        </div>
    </aside>
</div>
<div>
    @php
    $settings = App\Models\Setting::first(); // Truy vấn model Settings
    @endphp
    <footer id="footer" class="footer-wrapper">


        <!-- FOOTER 1 -->

        <!-- FOOTER 2 -->
        <div class="footer-widgets footer footer-2 dark">
            <div class="row dark large-columns-3 mb-0">

                <div id="block_widget-3" class="col pb-0 widget block_widget">

                    <div class="philips">
                        <h2 style="font-size:20px;">
                            <span>{{$settings->web_name}}</span><br />
                        </h2>
                        <p style="padding-top:10px;">
                            {{$settings->company_description}}
                        </p>
                    </div>
                </div>

                <div id="block_widget-2" class="col pb-0 widget block_widget">

                    <div class="thong-tin-a">
                        <p><b>Thông Tin Liên Hệ</b></p>
                        <ul>

                            <li><a><img style="width: 19px; float: left; margin-right: 7px; margin-left: -11px;" " src="
                                        /assets/wp-content/uploads/2019/06/icon-dia-chi.png" />
                                    {{$settings->address}}</a></li>
                            <li><a><img style="width: 19px; float: left; margin-right: 7px; margin-left: -11px;"
                                        src="/assets/wp-content/uploads/2019/06/line-clipart-transparent-2.png" />
                                    Hotline: {{$settings->hotline}}</a></li>
                            <li><a><img style="width: 19px; float: left; margin-right: 7px; margin-left: -11px;"
                                        src="/assets/wp-content/uploads/2019/06/Mail-min.png" />
                                    Email: {{$settings->email}}</a></li>
                            <li>
                                <a>
                                    <img style="width: 19px; float: left; margin-right: 7px; margin-left: -11px;"
                                        src="/assets/wp-content/uploads/2019/06/icon-blue-m-web-based-min.png" />
                                    Website: {{ config('app.url') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="pages-2" class="col pb-0 widget widget_pages"><span class="widget-title">Thông
                        tin</span>
                    <div class="is-divider small"></div>
                    <ul>
                        <li class="page_item page-item-4513"><a href="/chinh-sach-bao-hanh/">Chính sách bảo
                                hành</a></li>
                        <li class="page_item page-item-4515"><a href="/chinh-sach-doi-tra-hang/">Chính sách đổi
                                trả
                                hàng</a></li>
                        <li class="page_item page-item-4527"><a href="/dieu-khoan-dich-vu/">Điều khoản dịch vụ</a>
                        </li>
                        <li class="page_item page-item-4517"><a href="/hinh-thuc-thanh-toan/">Hình thức thanh
                                toán</a>
                        </li>
                        <li class="page_item page-item-4519"><a href="/huong-dan-mua-hang/">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="page_item page-item-893"><a href="/lien-he/">Liên
                                Hệ</a></li>
                    </ul>

                </div>
            </div>
        </div>



        <div class="absolute-footer dark medium-text-center text-center">
            <div class="container clearfix">


                <div class="footer-primary pull-left">
                    <div class="copyright-footer">
                        Copyright 2024 © <strong style="color:white;">Cung cấp bởi <span
                                style="text-transform: uppercase; color:white;">{{ parse_url(config('app.url'),
                                PHP_URL_HOST) }}</span></strong>
                        <p>
                            <a title="DMCA.com Protection Status" class="dmca-badge"> <img
                                    src="https://images.dmca.com/Badges/dmca-badge-w100-5x1-06.png?ID=1018acc3-d3fb-463f-a9a7-d52c69e68dad"
                                    alt="DMCA.com Protection Status" /></a>
                            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle" id="top-link"
            aria-label="Lên đầu trang"><i class="icon-angle-up"></i></a>

    </footer>
    <div class="call-mobile"> <a id="callnowbutton" href="tel:{{$settings->hotline}}">{{$settings->hotline}}</a><i
            class="fa fa-phone"><a id="callnowbutton" href="tel:{{$settings->hotline}}"></a></i></div>
    <div class="call-mobile-1"> <a id="callnowbutton" href="tel:{{$settings->hotline2}}">{{$settings->hotline2}}</a><i
            class="fa fa-phone"><a id="callnowbutton" href="tel:{{$settings->hotline2}}"></a></i></div>
</div>
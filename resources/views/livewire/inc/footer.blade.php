<div>
    <footer class="footer bg-footer">
        @php
        $settings = App\Models\Setting::first(); // Truy vấn model Settings
        @endphp
        <div class="site-footer">
            <div class="container">
                <div class="footer-inner padding-bottom-20">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="footer-widget footer-contact">
                                <h3>
                                    <a href="/" class="logo-wrapper" title="Kicap">
                                        <img src="{{ Storage::url($settings->logo) }}"
                                            data-lazyload="{{ Storage::url($settings->logo) }}" alt="Kicap"
                                            class="img-responsive center-block" />
                                    </a>
                                </h3>

                                <ul class="list-menu">

                                    <li><i class="fa fa-certificate" aria-hidden="true"></i> {{
                                        $settings->company_description }}</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a
                                            href="tel:{{ $settings->hotline }}" title="{{ $settings->hotline }}">{{
                                            $settings->hotline }}</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                            href="mailto:{{ $settings->email }}" title="{{ $settings->email }}">{{
                                            $settings->email }}</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="footer-widget had-click">
                                <h3>Chính sách khách hàng <span class="Collapsible__Plus"></span></h3>
                                <ul class="list-menu has-click">

                                    <li><a href="/chinh-sach-bao-hanh" title="Chính sách bảo hành" rel="nofollow">Chính
                                            sách
                                            bảo hành</a></li>

                                    <li><a href="/chinh-sach-kiem-hang" title="Chính sách kiểm hàng"
                                            rel="nofollow">Chính
                                            sách kiểm hàng</a></li>

                                    <li><a href="/chinh-sach-doi-tra-hang-hoan-tien"
                                            title="Chính sách đổi trả hàng hoàn tiền" rel="nofollow">Chính sách
                                            đổi trả hàng hoàn tiền</a></li>

                                    <li><a href="/chinh-sach-thanh-toan" title="Chính sách thanh toán"
                                            rel="nofollow">Chính
                                            sách thanh toán</a></li>

                                    <li><a href="/chinh-sach-bao-mat" title="Chính sách bảo mật" rel="nofollow">Chính
                                            sách
                                            bảo mật</a></li>

                                    <li><a href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển"
                                            rel="nofollow">Chính
                                            sách vận chuyển</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="footer-widget footer-subcrible">
                                <h3>Đăng ký nhận tin</h3>
                                <p>Mua bàn phím cơ, keycap bộ, keycap lẻ, keycap resin. Bảo hành chính hãng. Ưu
                                    đãi khi mua online. Dịch vụ mods phím cơ uy tín, chất lượng.</p>



                                <form action="/account/register" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" target="_blank">
                                    <input type="email" class="form-control" value="" placeholder="Email của bạn"
                                        name="EMAIL" id="mail">
                                    <button class="evo-button btn btn-default" name="subscribe" id="subscribe"
                                        type="submit">Đăng ký</button>
                                </form>
                                <div class="footer-payment">
                                    <ul class="list-menu clearfix">




                                        <li class="item">
                                            <img src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/payment_1.svg?1721662888170"
                                                alt="Kicap" />
                                        </li>





                                        <li class="item">
                                            <img src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/payment_2.svg?1721662888170"
                                                alt="Kicap" />
                                        </li>





                                        <li class="item">
                                            <img src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/payment_3.svg?1721662888170"
                                                alt="Kicap" />
                                        </li>


















                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="footer-widget had-click">
                                <h3>Liên kết mạng xã hội <span class="Collapsible__Plus"></span></h3>
                                @if ($settings->facebook || $settings->youtube || $settings->shopee ||
                                $settings->ministry_of_industry_and_trade_link)
                                <ul class="social-desktop">
                                    @if ($settings->facebook)
                                    <li class="fb">
                                        <a href="{{ $settings->facebook }}" rel="noreferrer" target="_blank"
                                            aria-label="Facebook" title="Facebook">
                                            <img width="40" height="40" class="lazy"
                                                src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/facebook1_-1.png?1721662888170"
                                                alt="Kênh Facebook liên hệ khách hàng - HAPA.vn" style="max-width:40px">
                                        </a>
                                    </li>
                                    @endif

                                    @if ($settings->youtube)
                                    <li class="yt">
                                        <a href="{{ $settings->youtube }}" rel="noreferrer" target="_blank"
                                            aria-label="Youtube" title="Youtube">
                                            <img width="40" height="40" class="lazy"
                                                src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/youtube1_-1.png?1721662888170"
                                                alt="Kênh Youtube liên hệ khách hàng - HAPA.vn" style="max-width:40px">
                                        </a>
                                    </li>
                                    @endif

                                    @if ($settings->shopee)
                                    <li class="shopee">
                                        <a href="{{ $settings->shopee }}" rel="noreferrer" target="_blank"
                                            aria-label="Shopee" title="Shopee">
                                            <img width="40" height="40" class="lazy"
                                                src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/shopee1.png?1721662888170"
                                                alt="Shop Điện máy HAPA trên sàn TMĐT Shopee" style="max-width:40px">
                                        </a>
                                    </li>
                                    @endif
                                </ul>

                                @if ($settings->ministry_of_industry_and_trade_link)
                                <a href="{{ $settings->ministry_of_industry_and_trade_link }}" target="_blank"
                                    aria-label="Bộ Công Thương" title="Bộ Công Thương">
                                    <img width="170" height="40" class="lazy" alt="Bộ Công Thương"
                                        title="Bộ Công Thương"
                                        src="/bizweb.dktcdn.net/100/436/596/themes/834446/assets/logosalenoti.png?1721662888170" />
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center" style="
                    color: white;
                ">
                        <span>
                            {{$settings->copyright}}
                        </span>

                    </div>
                </div>
            </div>
        </div>


        <style>
            .za-chat__head-box {
                height: 50px;
                display: flex;
                flex-direction: row-reverse;
                align-items: center;
                position: fixed;
                bottom: 52px;
                right: 52px;
                z-index: 9996;
                cursor: pointer;
            }

            .logo {
                cursor: pointer;
            }

            .za-chat {
                width: 100%;
                height: 100%;
                font-family: Roboto;
                position: absolute;
                right: 0;
                bottom: 0;
            }

            .copyright.clearfix {
                background-color: black;
                color: white;
            }
        </style>
    </footer>
    <div class="addThis_listSharing" style="display: none;">
        <div class="listSharing_action">
            <button type="button" class="addThis_close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g transform="translate(-1341.000000, -90.000000)">
                            <g transform="translate(1341.000000, 90.000000)">
                                <polygon
                                    points="19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12">
                                </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <ul class="addThis_listing">
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="tel:{{$settings->hotline}}" title="Gọi ngay cho chúng tôi" rel="nofollow"
                        aria-label="phone">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219" y2="40.5458"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#e8434c"></stop>
                                    <stop offset="100%" stop-color="#d61114"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="{{$settings->zalo}}" title="Chat với chúng tôi qua Zalo"
                        target="_blank" rel="nofollow noreferrer" aria-label="zalo">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)"></circle>
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                                    fill="white"></path>
                                <path
                                    d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                                    fill="white"></path>
                                <path
                                    d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                                    fill="white"></path>
                                <path
                                    d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                                    fill="#0068FF"></path>
                            </g>
                            <defs>
                                <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#3985f7"></stop>
                                    <stop offset="100%" stop-color="#1272e8"></stop>
                                </linearGradient>
                                <clipPath id="clip0">
                                    <rect width="26.3641" height="24.2" fill="white"
                                        transform="translate(8.78906 9.90234)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="/contact" title="Thông tin cửa hàng" aria-label="Liên hệ">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint5_linear)"></circle>
                            <path class="down"
                                d="M22 10C17.0374 10 13 13.7367 13 18.3297C13 24.0297 21.0541 32.3978 21.397 32.7512C21.7191 33.0832 22.2815 33.0826 22.603 32.7512C22.9459 32.3978 31 24.0297 31 18.3297C30.9999 13.7367 26.9626 10 22 10ZM22 22.5206C19.5032 22.5206 17.4719 20.6406 17.4719 18.3297C17.4719 16.0188 19.5032 14.1388 22 14.1388C24.4968 14.1388 26.528 16.0189 26.528 18.3297C26.528 20.6406 24.4968 22.5206 22 22.5206Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint5_linear" x1="22" y1="0" x2="22" y2="44"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#fecf72"></stop>
                                    <stop offset="100%" stop-color="#ef9f00"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Thông tin cửa hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="listSharing_overlay"></div>
    </div>
    <div class="addThis_iconContact">
        <div class="box-item item-contact">
            <div class="svgico">
                <svg width="34" height="35" viewBox="0 0 34 35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.35522 31V25.416H5.41122V30.064H7.61122V31H4.35522ZM8.97509 26.216C8.76176 26.216 8.60709 26.168 8.51109 26.072C8.42043 25.976 8.37509 25.8533 8.37509 25.704V25.544C8.37509 25.3947 8.42043 25.272 8.51109 25.176C8.60709 25.08 8.76176 25.032 8.97509 25.032C9.18309 25.032 9.33509 25.08 9.43109 25.176C9.52709 25.272 9.57509 25.3947 9.57509 25.544V25.704C9.57509 25.8533 9.52709 25.976 9.43109 26.072C9.33509 26.168 9.18309 26.216 8.97509 26.216ZM8.46309 26.824H9.48709V31H8.46309V26.824ZM12.834 24.712L13.842 25.944L13.33 26.344L12.37 25.424L11.41 26.344L10.898 25.944L11.906 24.712H12.834ZM12.362 31.096C12.0527 31.096 11.7754 31.0453 11.53 30.944C11.29 30.8373 11.0847 30.6907 10.914 30.504C10.7487 30.312 10.6207 30.0827 10.53 29.816C10.4394 29.544 10.394 29.24 10.394 28.904C10.394 28.5733 10.4367 28.2747 10.522 28.008C10.6127 27.7413 10.7407 27.5147 10.906 27.328C11.0714 27.136 11.274 26.9893 11.514 26.888C11.754 26.7813 12.026 26.728 12.33 26.728C12.6554 26.728 12.938 26.784 13.178 26.896C13.418 27.008 13.6154 27.16 13.77 27.352C13.9247 27.544 14.0394 27.768 14.114 28.024C14.194 28.2747 14.234 28.544 14.234 28.832V29.168H11.458V29.272C11.458 29.576 11.5434 29.8213 11.714 30.008C11.8847 30.1893 12.138 30.28 12.474 30.28C12.73 30.28 12.938 30.2267 13.098 30.12C13.2634 30.0133 13.41 29.8773 13.538 29.712L14.09 30.328C13.9194 30.568 13.6847 30.7573 13.386 30.896C13.0927 31.0293 12.7514 31.096 12.362 31.096ZM12.346 27.496C12.074 27.496 11.858 27.5867 11.698 27.768C11.538 27.9493 11.458 28.184 11.458 28.472V28.536H13.17V28.464C13.17 28.176 13.098 27.944 12.954 27.768C12.8154 27.5867 12.6127 27.496 12.346 27.496ZM15.135 31V26.824H16.159V27.52H16.199C16.2843 27.296 16.4176 27.1093 16.599 26.96C16.7856 26.8053 17.0416 26.728 17.367 26.728C17.799 26.728 18.1296 26.8693 18.359 27.152C18.5883 27.4347 18.703 27.8373 18.703 28.36V31H17.679V28.464C17.679 28.1653 17.6256 27.9413 17.519 27.792C17.4123 27.6427 17.2363 27.568 16.991 27.568C16.8843 27.568 16.7803 27.584 16.679 27.616C16.583 27.6427 16.495 27.6853 16.415 27.744C16.3403 27.7973 16.279 27.8667 16.231 27.952C16.183 28.032 16.159 28.128 16.159 28.24V31H15.135ZM21.7287 25.08H22.7527V27.52H22.7927C22.8781 27.296 23.0114 27.1093 23.1927 26.96C23.3794 26.8053 23.6354 26.728 23.9607 26.728C24.3927 26.728 24.7234 26.8693 24.9527 27.152C25.1821 27.4347 25.2967 27.8373 25.2967 28.36V31H24.2727V28.464C24.2727 28.1653 24.2194 27.9413 24.1127 27.792C24.0061 27.6427 23.8301 27.568 23.5847 27.568C23.4781 27.568 23.3741 27.584 23.2727 27.616C23.1767 27.6427 23.0887 27.6853 23.0087 27.744C22.9341 27.7973 22.8727 27.8667 22.8247 27.952C22.7767 28.032 22.7527 28.128 22.7527 28.24V31H21.7287V25.08ZM28.5918 24.712L29.5998 25.944L29.0878 26.344L28.1278 25.424L27.1678 26.344L26.6558 25.944L27.6638 24.712H28.5918ZM28.1198 31.096C27.8105 31.096 27.5332 31.0453 27.2878 30.944C27.0478 30.8373 26.8425 30.6907 26.6718 30.504C26.5065 30.312 26.3785 30.0827 26.2878 29.816C26.1972 29.544 26.1518 29.24 26.1518 28.904C26.1518 28.5733 26.1945 28.2747 26.2798 28.008C26.3705 27.7413 26.4985 27.5147 26.6638 27.328C26.8292 27.136 27.0318 26.9893 27.2718 26.888C27.5118 26.7813 27.7838 26.728 28.0878 26.728C28.4132 26.728 28.6958 26.784 28.9358 26.896C29.1758 27.008 29.3732 27.16 29.5278 27.352C29.6825 27.544 29.7972 27.768 29.8718 28.024C29.9518 28.2747 29.9918 28.544 29.9918 28.832V29.168H27.2158V29.272C27.2158 29.576 27.3012 29.8213 27.4718 30.008C27.6425 30.1893 27.8958 30.28 28.2318 30.28C28.4878 30.28 28.6958 30.2267 28.8558 30.12C29.0212 30.0133 29.1678 29.8773 29.2958 29.712L29.8478 30.328C29.6772 30.568 29.4425 30.7573 29.1438 30.896C28.8505 31.0293 28.5092 31.096 28.1198 31.096ZM28.1038 27.496C27.8318 27.496 27.6158 27.5867 27.4558 27.768C27.2958 27.9493 27.2158 28.184 27.2158 28.472V28.536H28.9278V28.464C28.9278 28.176 28.8558 27.944 28.7118 27.768C28.5732 27.5867 28.3705 27.496 28.1038 27.496ZM28.1038 32.552C27.8958 32.552 27.7465 32.5067 27.6558 32.416C27.5705 32.3307 27.5278 32.2213 27.5278 32.088V31.912C27.5278 31.7787 27.5705 31.6667 27.6558 31.576C27.7465 31.4907 27.8958 31.448 28.1038 31.448C28.3118 31.448 28.4585 31.4907 28.5438 31.576C28.6345 31.6667 28.6798 31.7787 28.6798 31.912V32.088C28.6798 32.2213 28.6345 32.3307 28.5438 32.416C28.4585 32.5067 28.3118 32.552 28.1038 32.552Z">
                    </path>
                    <path
                        d="M27.2212 0H10.7532C9.76511 0 8.97461 0.834345 8.97461 1.82643V12.334C8.97461 13.3487 9.78701 14.1604 10.7532 14.1604H22.1051L24.6741 16.8211C24.7839 16.9338 24.9157 17.0015 25.0693 17.0015C25.3768 17.0015 25.6402 16.7535 25.6402 16.4153V14.1604H27.2212C28.2092 14.1604 28.9997 13.3261 28.9997 12.334V1.82643C28.9997 0.811779 28.1873 0 27.2212 0ZM13.2783 9.04195C12.378 9.04195 11.6315 8.2753 11.6315 7.35077C11.6315 6.42631 12.378 5.65966 13.2783 5.65966C14.1785 5.65966 14.925 6.42631 14.925 7.35077C14.925 8.2753 14.2005 9.04195 13.2783 9.04195ZM19.0531 9.04195C18.1528 9.04195 17.4062 8.2753 17.4062 7.35077C17.4062 6.42631 18.1528 5.65966 19.0531 5.65966C19.9533 5.65966 20.6998 6.42631 20.6998 7.35077C20.6998 8.2753 19.9533 9.04195 19.0531 9.04195ZM24.8059 9.04195C23.9056 9.04195 23.1591 8.2753 23.1591 7.35077C23.1591 6.42631 23.9056 5.65966 24.8059 5.65966C25.7061 5.65966 26.4526 6.42631 26.4526 7.35077C26.4526 8.2753 25.7061 9.04195 24.8059 9.04195Z">
                    </path>
                    <path
                        d="M7.9649 12.3782V8.79297H6.16437C5.52762 8.79297 5.00066 9.33418 5.00066 9.98807V16.8878C4.97869 17.5868 5.50564 18.128 6.16437 18.128H7.19637V19.6162C7.19637 19.8192 7.37202 19.9995 7.56964 19.9995C7.67944 19.9995 7.76727 19.9544 7.83312 19.8868L9.52385 18.1505H16.9894C17.6261 18.1505 18.1531 17.6094 18.1531 16.9555V15.2418H10.7535C9.2165 15.2418 7.9649 13.9566 7.9649 12.3782Z">
                    </path>
                </svg>
                <span class="svgico--close">
                    <svg viewBox="0 0 19 19" role="presentation">
                        <path
                            d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                            fill-rule="evenodd"></path>
                    </svg> </span>
            </div>
        </div>
    </div>
    <script>
        $('.addThis_iconContact .item-contact,.addThis_listSharing .addThis_close').on('click', function(e){
            if($('.addThis_listSharing').hasClass('active')){
                $('.addThis_listSharing').removeClass('active');
                $('.addThis_listSharing').fadeOut(150);				
            }
            else{		
                $('.addThis_listSharing').fadeIn(100);
                $('.addThis_listSharing').addClass('active');
            }
        });
        $('.listSharing_overlay').on('click', function(e){
            $('.addThis_listSharing').removeClass('active');
            $('.addThis_listSharing').fadeOut(150);				
        })
    </script>
    <a target="_blank" class="livechat-mes" href="{{$settings->facebook}}">
        <img src="https://bizweb.dktcdn.net/100/485/241/themes/911577/assets/messenger.svg?1705567372895"
            alt="Messenger">
    </a>
    <a href="#" class="   back-to-top show" title="Lên đầu trang">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="angle-up" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-up fa-w-10">
            <path fill="currentColor"
                d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z"
                class=""></path>
        </svg>
    </a>
    <style>
        .addThis_listSharing {
            width: 295px;
            padding: 0;
            position: fixed;
            right: 3rem;
            bottom: 15rem;
            z-index: 990;
            background-color: white;
            display: none;
            transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
            top: auto !important;
        }

        .listSharing_overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            z-index: -1;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        .addThis_listSharing .addThis_close {
            position: absolute;
            z-index: 10;
            right: 0;
            top: 0;
            border: 0;
            outline: none;
            padding: 6px;
            background: transparent;
        }

        .addThis_listing {
            padding: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .addThis_listSharing .addThis_close svg {
            opacity: 0.6;
            width: 24px;
            height: 24px;
            display: block;
            margin: auto;
        }

        .addThis_listing .addThis_item:not(:last-of-type) {
            border-bottom: 1px solid #ecedf1;
            box-shadow: 0 1px 0 0 #fff;
        }

        .addThis_listing .addThis_item {
            margin: 0;
            padding: 10px 15px;
        }

        .addThis_listing .addThis_item .addThis_item--icon {
            width: 100%;
            height: auto;
            border-radius: 0;
            box-shadow: none;
            display: -webkit-flex;
            display: -moz-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
        }

        .addThis_listing .addThis_item .addThis_item--icon svg {
            display: block;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.11);
        }

        .addThis_iconContact {
            position: fixed;
            margin: 0;
            z-index: 990;
            cursor: pointer;
            top: auto !important;
            right: 20px;
            bottom: 100px;
        }

        .addThis_iconContact .box-item {
            position: relative;
        }

        .addThis_iconContact .box-item .svgico {
            position: relative;
            z-index: 4;
            height: 48px;
            width: 48px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #ffffff;
            cursor: pointer;
            background: #000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            animation: pulse 2s infinite;
            animation: pulse 2s infinite;
        }

        .addThis_listSharing.active+.addThis_iconContact .svgico>svg {
            opacity: 0;
            visibility: hidden;
            transform: scale(0.3);
        }

        .addThis_iconContact .box-item .svgico>svg {
            animation: iconSkew 1s infinite ease-out;
            min-height: -webkit-fill-available;
        }

        .addThis_iconContact .svgico svg {
            fill: #ffffff;
            width: 30px;
            height: 46px;
            transition: opacity 0.35s ease-in-out, -webkit-transform 0.35s ease-in-out;
            transition: opacity 0.35s ease-in-out, transform 0.35s ease-in-out;
            transition: opacity 0.35s ease-in-out, transform 0.35s ease-in-out, -webkit-transform 0.35s ease-in-out;
        }

        .addThis_listSharing.active+.addThis_iconContact .svgico .svgico--close {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .addThis_iconContact .svgico .svgico--close {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            visibility: hidden;
            transform: scale(0.3);
            transition: opacity 0.35s ease-in-out, -webkit-transform 0.35s ease-in-out;
            transition: opacity 0.35s ease-in-out, transform 0.35s ease-in-out;
            transition: opacity 0.35s ease-in-out, transform 0.35s ease-in-out, -webkit-transform 0.35s ease-in-out;
        }

        .addThis_iconContact .svgico .svgico--close svg {
            fill: #ffffff;
            width: 17px;
            height: 46px;
        }

        .livechat-mes {
            display: inline-block;
            position: fixed;
            top: auto !important;
            bottom: 40px;
            right: 20px;
            z-index: 990;
        }

        .livechat-mes img {
            width: 48px;
            height: 48px;
        }

        .back-to-top {
            position: fixed;
            top: auto !important;
            background: #000;
            height: 40px;
            width: 40px;
            text-align: center;
            border-radius: 10px;
            line-height: 40px;
            z-index: 989;
            opacity: 0;
            border: 1px solid #fff;
            right: 23px;
            bottom: 160px;
        }

        .back-to-top.show {
            opacity: 1;
        }

        .back-to-top svg {
            width: 30px;
            height: 30px;
            color: #fff;
        }

        @keyframes iconSkew {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            10% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }

            100% {
                transform: rotate(0deg) scale(1) skew(1deg)
            }
        }

        .addThis_iconContact .box-item:after {
            animation: euiBeaconPulseSmall 2s infinite ease-out 0.4s;
        }

        .addThis_iconContact .box-item:before,
        .addThis_iconContact .box-item:after {
            position: absolute;
            content: '';
            height: 48px;
            width: 48px;
            left: 0;
            top: 0;
            background: #000;
            border-radius: 50%;
        }

        @keyframes euiBeaconPulseSmall {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1
            }

            50% {
                opacity: 0.6
            }

            100% {
                -webkit-transform: scale(1.6);
                transform: scale(1.4);
                opacity: 0
            }
        }
        span.tooltip-text {
    margin-left: 10px;
}
*{
    font-family:  "Roboto",sans-serif;
    font-weight: 700;
    font-weight: bold;
}
.details-product .details-pro .product-top .title-head {
    margin-top: 0;
    font-size: 26px;
    line-height: 29px;
    font-weight: 500;
    text-transform: initial;
    margin-bottom: 5px;
    letter-spacing: 0.5px;
}
header .nav-item>a {
    color: #1c1c1c;
    font-size: 14px;
    padding: 10px;
    font-weight: 500;
    text-transform: initial;
    letter-spacing: 1.5px;
    text-align: center;
}
.slick-slide img {
    display: block;
    border-radius: 5px;
}
    </style>
       <style>
        .product-card {
            border: 1px solid gray .5;
            padding: 0 10px;
            border-radius: 5px;
            box-shadow:0 0 3px rgba(0, 0, 0, 0.08);
        }
        .section_product .product-blocks .evo-owl-product.owl-carousel .product-card .product-card__inner .product-card__image img {
    width: auto;
    max-height: 100%;
    position: absolute;
    top: 0;
    border-radius: 10px;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}
.category-products .products-view-grid .product-card .product-card__inner .product-card__image img {
    width: auto;
    max-height: 100%;
    position: absolute;
    top: 0;
    border-radius: 10px;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

    </style>
</div>
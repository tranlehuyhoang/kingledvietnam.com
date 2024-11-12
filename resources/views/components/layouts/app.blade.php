<!DOCTYPE html>
@php
$settings = App\Models\Setting::first(); // Truy vấn model Settings
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Storage::url($settings->web_icon)}}" type="image/png">
    <meta name="google" content="notranslate">
 
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta name="twitter:url" content="{{ request()->fullUrl() }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireStyles
</head>

<body>
 
  
    <script>
        document.addEventListener('livewire:navigated', function() {
            // Re-enable scroll after loading
            document.getElementById('loadingScreen').remove();
        });
    
    </script>
    {{ $slot }}

    @livewireScripts
    <div class="gtranslate_wrapper"></div>
    <script>
 window.gtranslateSettings = {
    "default_language": "vi",
    "wrapper_selector": ".gtranslate_wrapper",
    "flag_style": "3d",
    "alt_flags": { 
        "en": "usa",
        "zh": "china" // Thêm quốc kỳ cho tiếng Trung
    },
    "languages": ["vi", "en", "zh-CN"], // Thêm tiếng Trung vào danh sách ngôn ngữ
    "language_codes": { 
        "vi": "vi", 
        "en": "en", 
        "zh": "zh" // Đảm bảo tiếng Trung có mã riêng
    },
};

    // Đặt ngôn ngữ mặc định là tiếng Việt
    document.documentElement.lang = "vi";
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets_client/frontend/common/js/slick.min.js?v=1721231848" defer></script>
    <x-livewire-alert::scripts />

    
</body>
<style>
    .header-bottom {
    background-color: #737373;
}
.header-top {
    background-color: #737373 !important;
}
.searchform .button.icon {
    min-width: 70px;
    background-color: #737373;
    min-height: 33px;
}
li.html input {
    border: 1px solid #737373;
}
.search_categories.resize-select.mb-0 {
    border: 1px solid #737373;
}
.absolute-footer, html {
    background-color: #737373;
}
.title_dacbiet>span {
    background: #ff3131;
    margin-right: 15px;
    padding: 4px 10px 4px 15px;
}
</style>

</html>
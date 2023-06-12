@extends('layouts.layout_main')
@section('content')
    <main class="  tours-body  ">

        <div id="before-breadcrumbs"></div>

        <div class="breadcrumbs bx-breadcrumb js-page-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList"> <span class="breadcrumbs__item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/" title="Главная">
                                <span itemprop="name">Главная</span>
                                <meta itemprop="position" content="1">
                            </a>
                        </span> <span class="breadcrumbs__item" id="bx_breadcrumb_1" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/tours/" title="Все туры">
                                <span itemprop="name">Все туры</span>
                                <meta itemprop="position" content="2">
                            </a>
                        </span> <span class="breadcrumbs__item" id="bx_breadcrumb_2" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/tours/" title="Путешествия">
                                <span itemprop="name">Путешествия</span>
                                <meta itemprop="position" content="3">
                            </a>
                        </span>
            <div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Поиск туров и приключений</span>
                <meta itemprop="position" content="4">
            </div>
        </div>
        <div class="header-h1 ">
            <h1>Поиск туров и приключений</h1>
        </div>
        <div class="hidden" itemscope="" itemtype="http://schema.org/Organization">
            <a itemprop="url" href="https://youtravel.me/"></a>
            <meta itemprop="name" content="YouTravelMe">
            <div class="hidden" itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                <meta itemprop="streetAddress" content="Никитина 114к3">
                <meta itemprop="postalCode" content="630039">
                <meta itemprop="addressLocality" content="г. Новосибирск, Россия">
            </div>
            <meta itemprop="telephone" content="+74951204160">
            <meta itemprop="email" content="support@youtravel.com">
            <a itemprop="sameAs" href="https://www.facebook.com/youtravel.me/"></a>
            <a itemprop="sameAs" href="https://www.instagram.com/youtravel.me/"></a>
            <a itemprop="sameAs" href="https://vk.com/youtravelme" rel="nofollow"></a>
            <a itemprop="sameAs" href="https://tele.click/youtravelme" rel="nofollow"></a>
            <meta itemprop="logo" content="https://cf.youtravel.me/local/templates/youtravel/assets/i/main-page/yt-logo.png">
        </div>
        <style>.seo-uppercontent {
            / / styleName: text / semibold;
                font-family: SF Pro Text;
                font-size: 14px;
                font-weight: 600;
                line-height: 18px;
                letter-spacing: -0.02em;
                text-align: left;
                width: 100%;
                max-width: 1256px;
                margin: 0 auto;
                padding: 40px 40px 0 40px;
                color: #9999A9;
            }
        </style>


        <script type="application/ld+json">
        {"@context":"https://schema.org","@type":"Product","name":"Путешествия","description":"Путешествия. YouTravel.me - удобный поиск, доступные цены и покупка онлайн.","image":["https://youtravel.me/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg","https://youtravel.me/upload/tours/25392/media/3d9/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg","https://youtravel.me/upload/tours/8233/media/d9e/d9ed27f52a7a5f47b55bbad05133763f.jpg"],"offers":{"@type":"AggregateOffer","lowPrice":1280.65,"highPrice":1648069.5,"priceCurrency":"rub","offerCount":4985},"aggregateRating":{"@type":"AggregateRating","ratingValue":4.9372,"reviewCount":4985}}







        </script>
        <link href="./assets/chunk-ff8ef73e.a3041658.css" rel="prefetch">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="https://youtravel.me/local/templates/youtravel/vue-app/dist/css/chunk-vue-tel-input.0ed9a311.css" rel="prefetch">
        <link href="./assets/chunk-ff8ef73e.2aec7ec6.js" rel="prefetch">
        <link href="{{asset('chunk-vue-tel-input.908d1187.js')}}" rel="prefetch">
        <link href="./assets/chunk-common.b1879136.css" rel="preload" as="style">
        <link href="./assets/chunk-vendors.40a8dc72.css" rel="preload" as="style">
        <link href="./assets/serp.b644ef7b.css" rel="preload" as="style">
        <link href="./assets/chunk-common.470a7f8c.js" rel="preload" as="script">
        <link href="./assets/chunk-serp-vendors.3ff07486.js" rel="preload" as="script">
        <link href="./assets/chunk-vendors.8bb4d435.js" rel="preload" as="script">
        <link href="./assets/serp.2dd21a0d.js" rel="preload" as="script">
        <link href="./assets/chunk-common.b1879136.css" rel="stylesheet">
        <link href="./assets/serp.b644ef7b.css" rel="stylesheet">
        <div class="serp">
            <div data-v-b616b9fc="" class="top-menu">
                <div data-v-b616b9fc="" class="tour-date-selector-container"><!----></div>
                <div data-v-b616b9fc="" class="top-menu__search-fixed" style="display: none;">
                    <div data-v-427b8cfe="" data-v-b616b9fc="" class="search-tools search"><!---->
                        <div data-v-2a0d30d6="" data-v-427b8cfe="" class="serp-tour-selector search-tools__destination">
                            <svg data-v-a42e6310="" data-v-7045e8a0="" data-v-2a0d30d6="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#121212" class="svg serp-tour-selector__icon-search #121212 ">
                                <path data-v-a42e6310="" d="M11.7138 2.8382C14.1647 5.28913 14.1647 9.26287 11.7138 11.7138C9.26287 14.1647 5.28913 14.1647 2.8382 11.7138C0.387267 9.26287 0.387267 5.28913 2.8382 2.8382C5.28913 0.387267 9.26287 0.387267 11.7138 2.8382" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path data-v-a42e6310="" d="M15 15L11.71 11.71" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <div data-v-2a0d30d6="" tabindex="-1" class="multiselect multiselect-search">
                                <div data-v-2a0d30d6="" class="empty"></div>
                                <div class="multiselect__tags">
                                    <div class="multiselect__tags-wrap" style="display: none;"></div> <!---->
                                    <div class="multiselect__spinner" style="display: none;"></div>
                                    <input name="" type="text" autocomplete="nope" placeholder="" tabindex="0" class="multiselect__input" readonly="true" style="width: 0px; position: absolute; padding: 0px;"> <!----> <span class="multiselect__placeholder"><span data-v-2a0d30d6="">Куда вы хотите?</span></span></div>
                                <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;">
                                    <ul class="multiselect__content" style="display: block;">
                                        <div data-v-2a0d30d6="" class="serp-tour-selector__before-list">
                                            <div data-v-7ed389a8="" data-v-2a0d30d6="" class="location-nearby">
                                                <div data-v-7ed389a8="" class="location-nearby__container">
                                                    <button data-v-147a8467="" data-v-7ed389a8="" type="button" class="button location-nearby__trigger u-w-full _gray _default font-h2 _squared"><span data-v-7ed389a8="" data-v-147a8467="" class="location-nearby__trigger-container"><span data-v-7ed389a8="" data-v-147a8467="" class="location-nearby__trigger-icon u-flex-shrink-0"><span data-v-7ed389a8="" class="svg-inline" data-v-147a8467=""><svg data-v-7045e8a0="" data-v-7ed389a8=""
                                                                                                                                                                                                                                                                                                                                                                                                                                                              xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                                                                                                                                                                                                                                                                                                                                                                                                              viewBox="0 0 20 20" width="20" height="20"
                                                                                                                                                                                                                                                                                                                                                                                                                                                              color="inherit"
                                                                                                                                                                                                                                                                                                                                                                                                                                                              class="svg inherit "><path stroke="#121212"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         stroke-width="1.5"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         d="M12.394 16.965l-1.209-1.449a10.75 10.75 0 0 0-4.53-3.196l-2.638-.973 11.1-6.746-2.723 12.364z"></path></svg></span></span><span
                                                                data-v-7ed389a8="" data-v-147a8467="" class="location-nearby__trigger-text font-semibold">Искать поблизости</span></span></button>
                                                    <div data-v-7ed389a8="" class="location-nearby__hint u-text-center font-text-small">Покажем все туры на расстоянии до 1000 километров от вас</div>
                                                </div><!----></div>
                                        </div> <!---->
                                        <li style="display: none;"><span class="multiselect__option"><span data-v-2a0d30d6="" class="serp-tour-selector__placeholder">Совпадений не найдено ;(</span></span></li>
                                        <li><span class="multiselect__option"><span data-v-2a0d30d6="" class="serp-tour-selector__placeholder">Начните вводить название тура или места</span><!----></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div data-v-2a0d30d6="" class="serp-tour-selector__icon-remove" style="display: none;">
                                <svg data-v-84c06756="" data-v-7045e8a0="" data-v-2a0d30d6="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" color="#121212" class="svg #121212 ">
                                    <path data-v-84c06756="" d="M1.19922 10.8003L10.7992 1.20032" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-84c06756="" d="M1.19922 1.19971L10.7992 10.7997" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div><!----></div>
                        <div data-v-427b8cfe="" class="search-tools__divider">
                            <div data-v-427b8cfe=""></div>
                        </div>
                        <div data-v-2c88ca1a="" data-v-427b8cfe="" class="date-selector search-tools__date">
                            <div data-v-2c88ca1a="" class="date-selector__icon-wrapper">
                                <svg data-v-37d36e85="" data-v-7045e8a0="" data-v-2c88ca1a="" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" color="#121212" class="svg date-selector__icon #121212 ">
                                    <path data-v-37d36e85="" d="M12.3332 1.66663V4.99996" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-37d36e85="" d="M5.66667 1.66663V4.99996" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-37d36e85="" d="M1.5 7.49992H16.5" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-37d36e85="" fill-rule="evenodd" clip-rule="evenodd" d="M14.8333 3.33325H3.16667C2.24583 3.33325 1.5 4.07909 1.5 4.99992V15.8333C1.5 16.7541 2.24583 17.4999 3.16667 17.4999H14.8333C15.7542 17.4999 16.5 16.7541 16.5 15.8333V4.99992C16.5 4.07909 15.7542 3.33325 14.8333 3.33325Z" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-37d36e85="" d="M13.1776 10.6075C13.0626 10.6075 12.9692 10.7008 12.9701 10.8158C12.9701 10.9308 13.0634 11.0242 13.1784 11.0242C13.2934 11.0242 13.3867 10.9308 13.3867 10.8158C13.3867 10.7008 13.2934 10.6075 13.1776 10.6075" stroke="#121212" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div data-v-2c88ca1a="" class="date-selector__icon-remove" style="display: none;">
                                <svg data-v-84c06756="" data-v-7045e8a0="" data-v-2c88ca1a="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" color="#121212" class="svg #121212 ">
                                    <path data-v-84c06756="" d="M1.19922 10.8003L10.7992 1.20032" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-84c06756="" d="M1.19922 1.19971L10.7992 10.7997" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div data-v-2c88ca1a="" class="date-selector__placeholder serp-datepicker serp-datepicker-range">
                                <div class="serp-input-wrapper"><input name="date" type="text" autocomplete="off" readonly="readonly" placeholder="Месяц или даты" class="serp-input"><i class="serp-icon-calendar">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em">
                                            <path
                                                d="M940.218182 107.054545h-209.454546V46.545455h-65.163636v60.50909H363.054545V46.545455H297.890909v60.50909H83.781818c-18.618182 0-32.581818 13.963636-32.581818 32.581819v805.236363c0 18.618182 13.963636 32.581818 32.581818 32.581818h861.090909c18.618182 0 32.581818-13.963636 32.581818-32.581818V139.636364c-4.654545-18.618182-18.618182-32.581818-37.236363-32.581819zM297.890909 172.218182V232.727273h65.163636V172.218182h307.2V232.727273h65.163637V172.218182h176.872727v204.8H116.363636V172.218182h181.527273zM116.363636 912.290909V442.181818h795.927273v470.109091H116.363636z"></path>
                                        </svg>
                                    </i></div><!----></div>
                        </div>
                    </div><!----></div>
                <div data-v-75217744="" data-v-b616b9fc="" class="custom-modal__wrapper banner-app__wrapper" style="display: none;">
                    <div data-v-75217744="" class="custom-modal__blur">
                        <div data-v-75217744="" class="custom-modal">
                            <div data-v-75217744="" class="custom-modal__focus-lock">
                                <div tabindex="0" aria-hidden="true"></div>
                                <div data-lock="">
                                    <focustrap data-v-75217744="" class="custom-modal__focus-trap">
                                        <div class="banner-app__header">
                                            <div class="banner-app__header__icon-close">
                                                <svg data-v-84c06756="" data-v-7045e8a0="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" color="#9999A9" class="svg #9999A9 ">
                                                    <path data-v-84c06756="" d="M1.19922 10.8003L10.7992 1.20032" stroke="#9999A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path data-v-84c06756="" d="M1.19922 1.19971L10.7992 10.7997" stroke="#9999A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="banner-app__body banner-app__desktop">
                                            <svg data-v-7045e8a0="" viewBox="0 0 296 296" fill="none" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg banner-app__image inherit ">
                                                <rect x="0" y="0" width="296" height="296" fill="#ffffff"></rect>
                                                <defs>
                                                    <rect id="p" width="8" height="8"></rect>
                                                </defs>
                                                <g fill="#000000">
                                                    <use xlink:href="#p" x="32" y="32"></use>
                                                    <use xlink:href="#p" x="32" y="40"></use>
                                                    <use xlink:href="#p" x="32" y="48"></use>
                                                    <use xlink:href="#p" x="32" y="56"></use>
                                                    <use xlink:href="#p" x="32" y="64"></use>
                                                    <use xlink:href="#p" x="32" y="72"></use>
                                                    <use xlink:href="#p" x="32" y="80"></use>
                                                    <use xlink:href="#p" x="32" y="96"></use>
                                                    <use xlink:href="#p" x="32" y="104"></use>
                                                    <use xlink:href="#p" x="32" y="120"></use>
                                                    <use xlink:href="#p" x="32" y="144"></use>
                                                    <use xlink:href="#p" x="32" y="208"></use>
                                                    <use xlink:href="#p" x="32" y="216"></use>
                                                    <use xlink:href="#p" x="32" y="224"></use>
                                                    <use xlink:href="#p" x="32" y="232"></use>
                                                    <use xlink:href="#p" x="32" y="240"></use>
                                                    <use xlink:href="#p" x="32" y="248"></use>
                                                    <use xlink:href="#p" x="32" y="256"></use>
                                                    <use xlink:href="#p" x="40" y="32"></use>
                                                    <use xlink:href="#p" x="40" y="80"></use>
                                                    <use xlink:href="#p" x="40" y="96"></use>
                                                    <use xlink:href="#p" x="40" y="104"></use>
                                                    <use xlink:href="#p" x="40" y="136"></use>
                                                    <use xlink:href="#p" x="40" y="152"></use>
                                                    <use xlink:href="#p" x="40" y="160"></use>
                                                    <use xlink:href="#p" x="40" y="184"></use>
                                                    <use xlink:href="#p" x="40" y="192"></use>
                                                    <use xlink:href="#p" x="40" y="208"></use>
                                                    <use xlink:href="#p" x="40" y="256"></use>
                                                    <use xlink:href="#p" x="48" y="32"></use>
                                                    <use xlink:href="#p" x="48" y="48"></use>
                                                    <use xlink:href="#p" x="48" y="56"></use>
                                                    <use xlink:href="#p" x="48" y="64"></use>
                                                    <use xlink:href="#p" x="48" y="80"></use>
                                                    <use xlink:href="#p" x="48" y="112"></use>
                                                    <use xlink:href="#p" x="48" y="120"></use>
                                                    <use xlink:href="#p" x="48" y="144"></use>
                                                    <use xlink:href="#p" x="48" y="152"></use>
                                                    <use xlink:href="#p" x="48" y="168"></use>
                                                    <use xlink:href="#p" x="48" y="176"></use>
                                                    <use xlink:href="#p" x="48" y="184"></use>
                                                    <use xlink:href="#p" x="48" y="192"></use>
                                                    <use xlink:href="#p" x="48" y="208"></use>
                                                    <use xlink:href="#p" x="48" y="224"></use>
                                                    <use xlink:href="#p" x="48" y="232"></use>
                                                    <use xlink:href="#p" x="48" y="240"></use>
                                                    <use xlink:href="#p" x="48" y="256"></use>
                                                    <use xlink:href="#p" x="56" y="32"></use>
                                                    <use xlink:href="#p" x="56" y="48"></use>
                                                    <use xlink:href="#p" x="56" y="56"></use>
                                                    <use xlink:href="#p" x="56" y="64"></use>
                                                    <use xlink:href="#p" x="56" y="80"></use>
                                                    <use xlink:href="#p" x="56" y="112"></use>
                                                    <use xlink:href="#p" x="56" y="120"></use>
                                                    <use xlink:href="#p" x="56" y="136"></use>
                                                    <use xlink:href="#p" x="56" y="152"></use>
                                                    <use xlink:href="#p" x="56" y="160"></use>
                                                    <use xlink:href="#p" x="56" y="168"></use>
                                                    <use xlink:href="#p" x="56" y="176"></use>
                                                    <use xlink:href="#p" x="56" y="184"></use>
                                                    <use xlink:href="#p" x="56" y="192"></use>
                                                    <use xlink:href="#p" x="56" y="208"></use>
                                                    <use xlink:href="#p" x="56" y="224"></use>
                                                    <use xlink:href="#p" x="56" y="232"></use>
                                                    <use xlink:href="#p" x="56" y="240"></use>
                                                    <use xlink:href="#p" x="56" y="256"></use>
                                                    <use xlink:href="#p" x="64" y="32"></use>
                                                    <use xlink:href="#p" x="64" y="48"></use>
                                                    <use xlink:href="#p" x="64" y="56"></use>
                                                    <use xlink:href="#p" x="64" y="64"></use>
                                                    <use xlink:href="#p" x="64" y="80"></use>
                                                    <use xlink:href="#p" x="64" y="104"></use>
                                                    <use xlink:href="#p" x="64" y="112"></use>
                                                    <use xlink:href="#p" x="64" y="136"></use>
                                                    <use xlink:href="#p" x="64" y="152"></use>
                                                    <use xlink:href="#p" x="64" y="160"></use>
                                                    <use xlink:href="#p" x="64" y="208"></use>
                                                    <use xlink:href="#p" x="64" y="224"></use>
                                                    <use xlink:href="#p" x="64" y="232"></use>
                                                    <use xlink:href="#p" x="64" y="240"></use>
                                                    <use xlink:href="#p" x="64" y="256"></use>
                                                    <use xlink:href="#p" x="72" y="32"></use>
                                                    <use xlink:href="#p" x="72" y="80"></use>
                                                    <use xlink:href="#p" x="72" y="96"></use>
                                                    <use xlink:href="#p" x="72" y="112"></use>
                                                    <use xlink:href="#p" x="72" y="120"></use>
                                                    <use xlink:href="#p" x="72" y="136"></use>
                                                    <use xlink:href="#p" x="72" y="144"></use>
                                                    <use xlink:href="#p" x="72" y="160"></use>
                                                    <use xlink:href="#p" x="72" y="176"></use>
                                                    <use xlink:href="#p" x="72" y="184"></use>
                                                    <use xlink:href="#p" x="72" y="208"></use>
                                                    <use xlink:href="#p" x="72" y="256"></use>
                                                    <use xlink:href="#p" x="80" y="32"></use>
                                                    <use xlink:href="#p" x="80" y="40"></use>
                                                    <use xlink:href="#p" x="80" y="48"></use>
                                                    <use xlink:href="#p" x="80" y="56"></use>
                                                    <use xlink:href="#p" x="80" y="64"></use>
                                                    <use xlink:href="#p" x="80" y="72"></use>
                                                    <use xlink:href="#p" x="80" y="80"></use>
                                                    <use xlink:href="#p" x="80" y="96"></use>
                                                    <use xlink:href="#p" x="80" y="112"></use>
                                                    <use xlink:href="#p" x="80" y="128"></use>
                                                    <use xlink:href="#p" x="80" y="144"></use>
                                                    <use xlink:href="#p" x="80" y="160"></use>
                                                    <use xlink:href="#p" x="80" y="176"></use>
                                                    <use xlink:href="#p" x="80" y="192"></use>
                                                    <use xlink:href="#p" x="80" y="208"></use>
                                                    <use xlink:href="#p" x="80" y="216"></use>
                                                    <use xlink:href="#p" x="80" y="224"></use>
                                                    <use xlink:href="#p" x="80" y="232"></use>
                                                    <use xlink:href="#p" x="80" y="240"></use>
                                                    <use xlink:href="#p" x="80" y="248"></use>
                                                    <use xlink:href="#p" x="80" y="256"></use>
                                                    <use xlink:href="#p" x="88" y="96"></use>
                                                    <use xlink:href="#p" x="88" y="104"></use>
                                                    <use xlink:href="#p" x="88" y="112"></use>
                                                    <use xlink:href="#p" x="88" y="120"></use>
                                                    <use xlink:href="#p" x="88" y="128"></use>
                                                    <use xlink:href="#p" x="88" y="136"></use>
                                                    <use xlink:href="#p" x="88" y="144"></use>
                                                    <use xlink:href="#p" x="88" y="168"></use>
                                                    <use xlink:href="#p" x="88" y="176"></use>
                                                    <use xlink:href="#p" x="88" y="184"></use>
                                                    <use xlink:href="#p" x="96" y="56"></use>
                                                    <use xlink:href="#p" x="96" y="64"></use>
                                                    <use xlink:href="#p" x="96" y="80"></use>
                                                    <use xlink:href="#p" x="96" y="104"></use>
                                                    <use xlink:href="#p" x="96" y="112"></use>
                                                    <use xlink:href="#p" x="96" y="128"></use>
                                                    <use xlink:href="#p" x="96" y="144"></use>
                                                    <use xlink:href="#p" x="96" y="160"></use>
                                                    <use xlink:href="#p" x="96" y="168"></use>
                                                    <use xlink:href="#p" x="96" y="192"></use>
                                                    <use xlink:href="#p" x="96" y="200"></use>
                                                    <use xlink:href="#p" x="96" y="208"></use>
                                                    <use xlink:href="#p" x="96" y="216"></use>
                                                    <use xlink:href="#p" x="96" y="248"></use>
                                                    <use xlink:href="#p" x="96" y="256"></use>
                                                    <use xlink:href="#p" x="104" y="32"></use>
                                                    <use xlink:href="#p" x="104" y="48"></use>
                                                    <use xlink:href="#p" x="104" y="72"></use>
                                                    <use xlink:href="#p" x="104" y="88"></use>
                                                    <use xlink:href="#p" x="104" y="96"></use>
                                                    <use xlink:href="#p" x="104" y="112"></use>
                                                    <use xlink:href="#p" x="104" y="128"></use>
                                                    <use xlink:href="#p" x="104" y="144"></use>
                                                    <use xlink:href="#p" x="104" y="152"></use>
                                                    <use xlink:href="#p" x="104" y="160"></use>
                                                    <use xlink:href="#p" x="104" y="192"></use>
                                                    <use xlink:href="#p" x="104" y="200"></use>
                                                    <use xlink:href="#p" x="104" y="208"></use>
                                                    <use xlink:href="#p" x="104" y="216"></use>
                                                    <use xlink:href="#p" x="104" y="248"></use>
                                                    <use xlink:href="#p" x="104" y="256"></use>
                                                    <use xlink:href="#p" x="112" y="32"></use>
                                                    <use xlink:href="#p" x="112" y="48"></use>
                                                    <use xlink:href="#p" x="112" y="56"></use>
                                                    <use xlink:href="#p" x="112" y="64"></use>
                                                    <use xlink:href="#p" x="112" y="72"></use>
                                                    <use xlink:href="#p" x="112" y="80"></use>
                                                    <use xlink:href="#p" x="112" y="96"></use>
                                                    <use xlink:href="#p" x="112" y="104"></use>
                                                    <use xlink:href="#p" x="112" y="120"></use>
                                                    <use xlink:href="#p" x="112" y="128"></use>
                                                    <use xlink:href="#p" x="112" y="136"></use>
                                                    <use xlink:href="#p" x="112" y="160"></use>
                                                    <use xlink:href="#p" x="112" y="184"></use>
                                                    <use xlink:href="#p" x="112" y="200"></use>
                                                    <use xlink:href="#p" x="112" y="208"></use>
                                                    <use xlink:href="#p" x="112" y="224"></use>
                                                    <use xlink:href="#p" x="112" y="232"></use>
                                                    <use xlink:href="#p" x="112" y="240"></use>
                                                    <use xlink:href="#p" x="112" y="256"></use>
                                                    <use xlink:href="#p" x="120" y="32"></use>
                                                    <use xlink:href="#p" x="120" y="40"></use>
                                                    <use xlink:href="#p" x="120" y="48"></use>
                                                    <use xlink:href="#p" x="120" y="56"></use>
                                                    <use xlink:href="#p" x="120" y="112"></use>
                                                    <use xlink:href="#p" x="120" y="120"></use>
                                                    <use xlink:href="#p" x="120" y="184"></use>
                                                    <use xlink:href="#p" x="120" y="192"></use>
                                                    <use xlink:href="#p" x="120" y="224"></use>
                                                    <use xlink:href="#p" x="120" y="240"></use>
                                                    <use xlink:href="#p" x="120" y="248"></use>
                                                    <use xlink:href="#p" x="120" y="256"></use>
                                                    <use xlink:href="#p" x="128" y="40"></use>
                                                    <use xlink:href="#p" x="128" y="64"></use>
                                                    <use xlink:href="#p" x="128" y="80"></use>
                                                    <use xlink:href="#p" x="128" y="88"></use>
                                                    <use xlink:href="#p" x="128" y="96"></use>
                                                    <use xlink:href="#p" x="128" y="112"></use>
                                                    <use xlink:href="#p" x="128" y="136"></use>
                                                    <use xlink:href="#p" x="128" y="152"></use>
                                                    <use xlink:href="#p" x="128" y="160"></use>
                                                    <use xlink:href="#p" x="128" y="176"></use>
                                                    <use xlink:href="#p" x="128" y="200"></use>
                                                    <use xlink:href="#p" x="128" y="216"></use>
                                                    <use xlink:href="#p" x="128" y="224"></use>
                                                    <use xlink:href="#p" x="128" y="240"></use>
                                                    <use xlink:href="#p" x="136" y="32"></use>
                                                    <use xlink:href="#p" x="136" y="64"></use>
                                                    <use xlink:href="#p" x="136" y="72"></use>
                                                    <use xlink:href="#p" x="136" y="88"></use>
                                                    <use xlink:href="#p" x="136" y="128"></use>
                                                    <use xlink:href="#p" x="136" y="136"></use>
                                                    <use xlink:href="#p" x="136" y="144"></use>
                                                    <use xlink:href="#p" x="136" y="152"></use>
                                                    <use xlink:href="#p" x="136" y="176"></use>
                                                    <use xlink:href="#p" x="136" y="200"></use>
                                                    <use xlink:href="#p" x="136" y="208"></use>
                                                    <use xlink:href="#p" x="136" y="216"></use>
                                                    <use xlink:href="#p" x="136" y="224"></use>
                                                    <use xlink:href="#p" x="144" y="32"></use>
                                                    <use xlink:href="#p" x="144" y="48"></use>
                                                    <use xlink:href="#p" x="144" y="56"></use>
                                                    <use xlink:href="#p" x="144" y="64"></use>
                                                    <use xlink:href="#p" x="144" y="72"></use>
                                                    <use xlink:href="#p" x="144" y="80"></use>
                                                    <use xlink:href="#p" x="144" y="96"></use>
                                                    <use xlink:href="#p" x="144" y="104"></use>
                                                    <use xlink:href="#p" x="144" y="120"></use>
                                                    <use xlink:href="#p" x="144" y="128"></use>
                                                    <use xlink:href="#p" x="144" y="136"></use>
                                                    <use xlink:href="#p" x="144" y="144"></use>
                                                    <use xlink:href="#p" x="144" y="152"></use>
                                                    <use xlink:href="#p" x="144" y="160"></use>
                                                    <use xlink:href="#p" x="144" y="176"></use>
                                                    <use xlink:href="#p" x="144" y="184"></use>
                                                    <use xlink:href="#p" x="144" y="208"></use>
                                                    <use xlink:href="#p" x="152" y="32"></use>
                                                    <use xlink:href="#p" x="152" y="40"></use>
                                                    <use xlink:href="#p" x="152" y="56"></use>
                                                    <use xlink:href="#p" x="152" y="64"></use>
                                                    <use xlink:href="#p" x="152" y="96"></use>
                                                    <use xlink:href="#p" x="152" y="120"></use>
                                                    <use xlink:href="#p" x="152" y="144"></use>
                                                    <use xlink:href="#p" x="152" y="160"></use>
                                                    <use xlink:href="#p" x="152" y="168"></use>
                                                    <use xlink:href="#p" x="152" y="176"></use>
                                                    <use xlink:href="#p" x="152" y="192"></use>
                                                    <use xlink:href="#p" x="152" y="200"></use>
                                                    <use xlink:href="#p" x="152" y="208"></use>
                                                    <use xlink:href="#p" x="152" y="224"></use>
                                                    <use xlink:href="#p" x="152" y="232"></use>
                                                    <use xlink:href="#p" x="152" y="240"></use>
                                                    <use xlink:href="#p" x="160" y="48"></use>
                                                    <use xlink:href="#p" x="160" y="72"></use>
                                                    <use xlink:href="#p" x="160" y="80"></use>
                                                    <use xlink:href="#p" x="160" y="120"></use>
                                                    <use xlink:href="#p" x="160" y="128"></use>
                                                    <use xlink:href="#p" x="160" y="152"></use>
                                                    <use xlink:href="#p" x="160" y="160"></use>
                                                    <use xlink:href="#p" x="160" y="168"></use>
                                                    <use xlink:href="#p" x="160" y="176"></use>
                                                    <use xlink:href="#p" x="160" y="192"></use>
                                                    <use xlink:href="#p" x="160" y="208"></use>
                                                    <use xlink:href="#p" x="160" y="224"></use>
                                                    <use xlink:href="#p" x="160" y="232"></use>
                                                    <use xlink:href="#p" x="160" y="240"></use>
                                                    <use xlink:href="#p" x="168" y="40"></use>
                                                    <use xlink:href="#p" x="168" y="56"></use>
                                                    <use xlink:href="#p" x="168" y="72"></use>
                                                    <use xlink:href="#p" x="168" y="96"></use>
                                                    <use xlink:href="#p" x="168" y="104"></use>
                                                    <use xlink:href="#p" x="168" y="112"></use>
                                                    <use xlink:href="#p" x="168" y="136"></use>
                                                    <use xlink:href="#p" x="168" y="160"></use>
                                                    <use xlink:href="#p" x="168" y="168"></use>
                                                    <use xlink:href="#p" x="168" y="192"></use>
                                                    <use xlink:href="#p" x="168" y="256"></use>
                                                    <use xlink:href="#p" x="176" y="32"></use>
                                                    <use xlink:href="#p" x="176" y="80"></use>
                                                    <use xlink:href="#p" x="176" y="104"></use>
                                                    <use xlink:href="#p" x="176" y="120"></use>
                                                    <use xlink:href="#p" x="176" y="136"></use>
                                                    <use xlink:href="#p" x="176" y="152"></use>
                                                    <use xlink:href="#p" x="176" y="168"></use>
                                                    <use xlink:href="#p" x="176" y="200"></use>
                                                    <use xlink:href="#p" x="176" y="208"></use>
                                                    <use xlink:href="#p" x="176" y="232"></use>
                                                    <use xlink:href="#p" x="176" y="248"></use>
                                                    <use xlink:href="#p" x="176" y="256"></use>
                                                    <use xlink:href="#p" x="184" y="64"></use>
                                                    <use xlink:href="#p" x="184" y="88"></use>
                                                    <use xlink:href="#p" x="184" y="96"></use>
                                                    <use xlink:href="#p" x="184" y="104"></use>
                                                    <use xlink:href="#p" x="184" y="128"></use>
                                                    <use xlink:href="#p" x="184" y="136"></use>
                                                    <use xlink:href="#p" x="184" y="160"></use>
                                                    <use xlink:href="#p" x="184" y="168"></use>
                                                    <use xlink:href="#p" x="184" y="176"></use>
                                                    <use xlink:href="#p" x="184" y="184"></use>
                                                    <use xlink:href="#p" x="184" y="192"></use>
                                                    <use xlink:href="#p" x="184" y="208"></use>
                                                    <use xlink:href="#p" x="184" y="224"></use>
                                                    <use xlink:href="#p" x="184" y="240"></use>
                                                    <use xlink:href="#p" x="184" y="256"></use>
                                                    <use xlink:href="#p" x="192" y="48"></use>
                                                    <use xlink:href="#p" x="192" y="56"></use>
                                                    <use xlink:href="#p" x="192" y="64"></use>
                                                    <use xlink:href="#p" x="192" y="72"></use>
                                                    <use xlink:href="#p" x="192" y="80"></use>
                                                    <use xlink:href="#p" x="192" y="88"></use>
                                                    <use xlink:href="#p" x="192" y="104"></use>
                                                    <use xlink:href="#p" x="192" y="112"></use>
                                                    <use xlink:href="#p" x="192" y="120"></use>
                                                    <use xlink:href="#p" x="192" y="128"></use>
                                                    <use xlink:href="#p" x="192" y="136"></use>
                                                    <use xlink:href="#p" x="192" y="144"></use>
                                                    <use xlink:href="#p" x="192" y="168"></use>
                                                    <use xlink:href="#p" x="192" y="176"></use>
                                                    <use xlink:href="#p" x="192" y="184"></use>
                                                    <use xlink:href="#p" x="192" y="192"></use>
                                                    <use xlink:href="#p" x="192" y="200"></use>
                                                    <use xlink:href="#p" x="192" y="208"></use>
                                                    <use xlink:href="#p" x="192" y="216"></use>
                                                    <use xlink:href="#p" x="192" y="224"></use>
                                                    <use xlink:href="#p" x="192" y="240"></use>
                                                    <use xlink:href="#p" x="200" y="104"></use>
                                                    <use xlink:href="#p" x="200" y="112"></use>
                                                    <use xlink:href="#p" x="200" y="144"></use>
                                                    <use xlink:href="#p" x="200" y="152"></use>
                                                    <use xlink:href="#p" x="200" y="168"></use>
                                                    <use xlink:href="#p" x="200" y="192"></use>
                                                    <use xlink:href="#p" x="200" y="224"></use>
                                                    <use xlink:href="#p" x="200" y="232"></use>
                                                    <use xlink:href="#p" x="200" y="240"></use>
                                                    <use xlink:href="#p" x="200" y="248"></use>
                                                    <use xlink:href="#p" x="208" y="32"></use>
                                                    <use xlink:href="#p" x="208" y="40"></use>
                                                    <use xlink:href="#p" x="208" y="48"></use>
                                                    <use xlink:href="#p" x="208" y="56"></use>
                                                    <use xlink:href="#p" x="208" y="64"></use>
                                                    <use xlink:href="#p" x="208" y="72"></use>
                                                    <use xlink:href="#p" x="208" y="80"></use>
                                                    <use xlink:href="#p" x="208" y="120"></use>
                                                    <use xlink:href="#p" x="208" y="128"></use>
                                                    <use xlink:href="#p" x="208" y="136"></use>
                                                    <use xlink:href="#p" x="208" y="152"></use>
                                                    <use xlink:href="#p" x="208" y="168"></use>
                                                    <use xlink:href="#p" x="208" y="176"></use>
                                                    <use xlink:href="#p" x="208" y="184"></use>
                                                    <use xlink:href="#p" x="208" y="192"></use>
                                                    <use xlink:href="#p" x="208" y="208"></use>
                                                    <use xlink:href="#p" x="208" y="224"></use>
                                                    <use xlink:href="#p" x="208" y="240"></use>
                                                    <use xlink:href="#p" x="208" y="248"></use>
                                                    <use xlink:href="#p" x="216" y="32"></use>
                                                    <use xlink:href="#p" x="216" y="80"></use>
                                                    <use xlink:href="#p" x="216" y="104"></use>
                                                    <use xlink:href="#p" x="216" y="120"></use>
                                                    <use xlink:href="#p" x="216" y="136"></use>
                                                    <use xlink:href="#p" x="216" y="144"></use>
                                                    <use xlink:href="#p" x="216" y="152"></use>
                                                    <use xlink:href="#p" x="216" y="160"></use>
                                                    <use xlink:href="#p" x="216" y="168"></use>
                                                    <use xlink:href="#p" x="216" y="184"></use>
                                                    <use xlink:href="#p" x="216" y="192"></use>
                                                    <use xlink:href="#p" x="216" y="224"></use>
                                                    <use xlink:href="#p" x="216" y="240"></use>
                                                    <use xlink:href="#p" x="216" y="248"></use>
                                                    <use xlink:href="#p" x="224" y="32"></use>
                                                    <use xlink:href="#p" x="224" y="48"></use>
                                                    <use xlink:href="#p" x="224" y="56"></use>
                                                    <use xlink:href="#p" x="224" y="64"></use>
                                                    <use xlink:href="#p" x="224" y="80"></use>
                                                    <use xlink:href="#p" x="224" y="96"></use>
                                                    <use xlink:href="#p" x="224" y="104"></use>
                                                    <use xlink:href="#p" x="224" y="112"></use>
                                                    <use xlink:href="#p" x="224" y="120"></use>
                                                    <use xlink:href="#p" x="224" y="136"></use>
                                                    <use xlink:href="#p" x="224" y="144"></use>
                                                    <use xlink:href="#p" x="224" y="152"></use>
                                                    <use xlink:href="#p" x="224" y="168"></use>
                                                    <use xlink:href="#p" x="224" y="192"></use>
                                                    <use xlink:href="#p" x="224" y="200"></use>
                                                    <use xlink:href="#p" x="224" y="208"></use>
                                                    <use xlink:href="#p" x="224" y="216"></use>
                                                    <use xlink:href="#p" x="224" y="224"></use>
                                                    <use xlink:href="#p" x="224" y="240"></use>
                                                    <use xlink:href="#p" x="224" y="248"></use>
                                                    <use xlink:href="#p" x="232" y="32"></use>
                                                    <use xlink:href="#p" x="232" y="48"></use>
                                                    <use xlink:href="#p" x="232" y="56"></use>
                                                    <use xlink:href="#p" x="232" y="64"></use>
                                                    <use xlink:href="#p" x="232" y="80"></use>
                                                    <use xlink:href="#p" x="232" y="96"></use>
                                                    <use xlink:href="#p" x="232" y="120"></use>
                                                    <use xlink:href="#p" x="232" y="144"></use>
                                                    <use xlink:href="#p" x="232" y="160"></use>
                                                    <use xlink:href="#p" x="232" y="176"></use>
                                                    <use xlink:href="#p" x="232" y="200"></use>
                                                    <use xlink:href="#p" x="232" y="208"></use>
                                                    <use xlink:href="#p" x="232" y="224"></use>
                                                    <use xlink:href="#p" x="232" y="232"></use>
                                                    <use xlink:href="#p" x="232" y="240"></use>
                                                    <use xlink:href="#p" x="232" y="248"></use>
                                                    <use xlink:href="#p" x="232" y="256"></use>
                                                    <use xlink:href="#p" x="240" y="32"></use>
                                                    <use xlink:href="#p" x="240" y="48"></use>
                                                    <use xlink:href="#p" x="240" y="56"></use>
                                                    <use xlink:href="#p" x="240" y="64"></use>
                                                    <use xlink:href="#p" x="240" y="80"></use>
                                                    <use xlink:href="#p" x="240" y="104"></use>
                                                    <use xlink:href="#p" x="240" y="144"></use>
                                                    <use xlink:href="#p" x="240" y="152"></use>
                                                    <use xlink:href="#p" x="240" y="160"></use>
                                                    <use xlink:href="#p" x="240" y="168"></use>
                                                    <use xlink:href="#p" x="240" y="192"></use>
                                                    <use xlink:href="#p" x="240" y="208"></use>
                                                    <use xlink:href="#p" x="240" y="232"></use>
                                                    <use xlink:href="#p" x="240" y="240"></use>
                                                    <use xlink:href="#p" x="240" y="248"></use>
                                                    <use xlink:href="#p" x="240" y="256"></use>
                                                    <use xlink:href="#p" x="248" y="32"></use>
                                                    <use xlink:href="#p" x="248" y="80"></use>
                                                    <use xlink:href="#p" x="248" y="104"></use>
                                                    <use xlink:href="#p" x="248" y="136"></use>
                                                    <use xlink:href="#p" x="248" y="168"></use>
                                                    <use xlink:href="#p" x="248" y="192"></use>
                                                    <use xlink:href="#p" x="248" y="216"></use>
                                                    <use xlink:href="#p" x="248" y="224"></use>
                                                    <use xlink:href="#p" x="248" y="240"></use>
                                                    <use xlink:href="#p" x="256" y="32"></use>
                                                    <use xlink:href="#p" x="256" y="40"></use>
                                                    <use xlink:href="#p" x="256" y="48"></use>
                                                    <use xlink:href="#p" x="256" y="56"></use>
                                                    <use xlink:href="#p" x="256" y="64"></use>
                                                    <use xlink:href="#p" x="256" y="72"></use>
                                                    <use xlink:href="#p" x="256" y="80"></use>
                                                    <use xlink:href="#p" x="256" y="128"></use>
                                                    <use xlink:href="#p" x="256" y="136"></use>
                                                    <use xlink:href="#p" x="256" y="152"></use>
                                                    <use xlink:href="#p" x="256" y="168"></use>
                                                    <use xlink:href="#p" x="256" y="176"></use>
                                                    <use xlink:href="#p" x="256" y="192"></use>
                                                    <use xlink:href="#p" x="256" y="224"></use>
                                                    <use xlink:href="#p" x="256" y="232"></use>
                                                    <use xlink:href="#p" x="256" y="248"></use>
                                                </g>
                                            </svg>
                                            <div class="banner-app__title font-h2">Приложение YouTravel.me</div>
                                            <div class="banner-app__text"> Наведите камеру на QR-код, чтобы установить приложение</div>
                                        </div>
                                        <div class="banner-app__body banner-app__mobile">
                                            <svg data-v-7045e8a0="" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg banner-app__image inherit ">
                                                <rect width="48" height="48" rx="11" fill="url(#paint0_linear_17130_157807)"></rect>
                                                <path d="M25.6859 34.4547L31.0001 39.3148L33.3861 9.25111C33.3865 9.24647 33.3797 9.24538 33.3786 9.24989L9.73234 28.8305L18.4756 30.7267C21.1663 31.3102 23.6542 32.5966 25.6859 34.4547Z" fill="#BAD238"></path>
                                                <defs>
                                                    <lineargradient id="paint0_linear_17130_157807" x1="32.4348" y1="46.0274" x2="3.43092" y2="32.4186" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#7D20B8"></stop>
                                                        <stop offset="0.965193" stop-color="#5D16B9"></stop>
                                                    </lineargradient>
                                                </defs>
                                            </svg>
                                            <div class="banner-app__title font-h2">С приложением удобнее</div>
                                            <div class="banner-app__text"> Проще управлять бронированиямии копить бонусы</div>
                                            <a data-v-88c13612="" class="btn banner-app__btn btn-violet" onclick="fakeWindow.open(&#39;/download-app&#39;)"><span data-v-88c13612="" class="font-h2">Открыть приложение</span></a><a data-v-88c13612="" class="btn banner-app__btn-cancel btn-white"><span data-v-88c13612="" class="font-h2">Спасибо, не нужно</span></a></div>
                                    </focustrap>
                                </div>
                                <div tabindex="0" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-9e643754="" class="serp-tours__container">
                <div data-v-9e643754="" class="serp-tours__content">
                    <div data-v-9e643754="" class="serp-tours__reset">
                        <div data-v-9e643754="" class="serp-tours__reset-item">
                            <div data-v-4cd55fe6="" data-v-9e643754="" class="yt-pill"><span data-v-4cd55fe6="" class="yt-pill__text font-text u-decor"> Русский </span><span data-v-4cd55fe6="" class="yt-pill__icon u-flex-shrink-0 u-clickable"><span data-v-4cd55fe6="" class="yt-pill__icon-container"><span data-v-4cd55fe6="" class="svg-inline u-decor u-stroke-deep-current"><svg data-v-7045e8a0="" data-v-4cd55fe6="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16"
                                                                                                                                                                                                                                                                                                                                                                                           height="16" color="inherit" class="svg inherit "><rect width="16" height="16" fill="#fff" rx="8"></rect><path
                                                    stroke="#87A038" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4.8 11.2l6.4-6.4M4.8 4.8l6.4 6.4"></path></svg></span></span></span></div>
                        </div>

                        <div data-v-9e643754="" class="serp-tours__reset-all"><span data-v-9e643754="" class="font-text">Сбросить все фильтры</span>
                            <svg data-v-84c06756="" data-v-7045e8a0="" data-v-9e643754="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" color="#1f1f1f" class="svg #1f1f1f ">
                                <path data-v-84c06756="" d="M1.19922 10.8003L10.7992 1.20032" stroke="#1f1f1f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path data-v-84c06756="" d="M1.19922 1.19971L10.7992 10.7997" stroke="#1f1f1f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                    <div data-v-9e643754="" class="serp-tours__sort">
                        <div data-v-9e643754="" class="serp-tours__total font-text">
                            <div data-v-9e643754="" class="serp-tours__total-mobile">4597 найдено</div>
                            <div data-v-9e643754="" class="serp-tours__total-desktop">Найдено 4597 туров</div>
                        </div>
                        <div data-v-9e643754="">
                            <div data-v-9e643754="" class="serp-tours__sort__mobile font-text">
                                <div data-v-9e643754="" class="serp-tours__sort__mobile__title font-text">Сортировать:</div>
                                <div data-v-9e643754="" class="serp-tours__sort__mobile__sort-wrapper">
                                    <div data-v-9e643754="" class="serp-tours__sort__mobile__sort font-text">По популярности</div>
                                    <div data-v-9e643754="" class="serp-tours__sort__mobile__sort-arrow"></div>
                                </div>
                            </div>
                            <div data-v-9e643754="" class="serp-tours__sort__dropdown">
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">По популярности</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">Рекомендовано Вам</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">Новые</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">Ближайшие</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">Сначала дешевые</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">Сначала дорогие</div>
                                <div data-v-9e643754="" class="serp-tours__sort__button font-text">По скидке</div>
                            </div>
                        </div>
                    </div>
                    <div data-v-017434b4="" data-v-9e643754="" class="filters-container serp-tours__filters">
                        <div data-v-017434b4="" class="filters">
                            <div data-v-75217744="" data-v-017434b4="" class="custom-modal__wrapper filters-modal" style="display: none;">
                                <div data-v-75217744="" class="custom-modal__blur">
                                    <div data-v-75217744="" class="custom-modal">
                                        <div data-v-75217744="" class="custom-modal__focus-lock">
                                            <div tabindex="0" aria-hidden="true"></div>
                                            <div data-lock="">
                                                <focustrap data-v-75217744="" class="custom-modal__focus-trap">
                                                    <div data-v-017434b4="" class="filters-modal-wrapper">
                                                        <div data-v-017434b4="" class="filters-modal__header">
                                                            <div data-v-017434b4="" class="font-caps"></div>
                                                            <div data-v-017434b4="" class="filters-modal__header__icon">
                                                                <svg data-v-84c06756="" data-v-7045e8a0="" data-v-017434b4="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" color="#9999a9" class="svg #9999a9 ">
                                                                    <path data-v-84c06756="" d="M1.19922 10.8003L10.7992 1.20032" stroke="#9999a9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path data-v-84c06756="" d="M1.19922 1.19971L10.7992 10.7997" stroke="#9999a9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div data-v-017434b4="" class="filters-modal__body"></div>
                                                    </div>
                                                </focustrap>
                                            </div>
                                            <div tabindex="0" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-017434b4="" class="filters__header">
                                <div data-v-017434b4="" class="filters__header__back">
                                    <svg data-v-0ada7490="" data-v-7045e8a0="" data-v-017434b4="" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" color="#121212" class="svg #121212 ">
                                        <path data-v-0ada7490="" d="M5 9L1 5L5 1" stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div data-v-017434b4="" class="filters__header__text font-h2">Фильтры</div>
                            </div>
                            <div data-v-017434b4="" class="filters__item">
                                <div data-v-017434b4="" class="filters__item__range">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Длительность</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon filters__item__dropdown__icon--active">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu filters__item__dropdown__menu--visible-range">
                                        <div data-v-017434b4="" class="filters__item__range__inputs">
                                            <div data-v-428ce7b8="" data-v-017434b4="" class="filters__item__range__inputs__left">
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input1" class="input-label font-text-small"> От (дней) </label><input data-v-428ce7b8="" name="" id="input1" type="text" placeholder="1" autocomplete="" class="input"><!----><!----></div><!----></div>
                                            <div data-v-428ce7b8="" data-v-017434b4="" class="filters__item__range__inputs__right">
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input2" class="input-label font-text-small"> До (дней) </label><input data-v-428ce7b8="" name="" id="input2" type="text" placeholder="30" autocomplete="" class="input"><!----><!----></div><!----></div>
                                        </div>
                                        <div data-v-017434b4="" class="vue-slider-component vue-slider-horizontal" style="width: auto; padding: 10px;">
                                            <div aria-hidden="true" class="vue-slider" style="height: 4px; background: rgb(209, 215, 232);">
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(-9.6px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;"><span class="vue-slider-tooltip">1</span></div>
                                                </div>
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(214.4px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;"><span class="vue-slider-tooltip">30</span></div>
                                                </div>
                                                <ul class="vue-slider-piecewise"></ul>
                                                <div class="vue-slider-process" style="background: rgb(171, 194, 50); transition-duration: 0s; width: 224px; left: 0px;">
                                                    <div class="vue-merged-tooltip vue-slider-tooltip-top vue-slider-tooltip-wrap" style="top: -16px; left: 50%; visibility: hidden;"><span class="vue-slider-tooltip">
            1 - 30
          </span></div>
                                                </div> <!----></div>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!---->
                                <div data-v-017434b4="" class="filters__item__checks">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Тип тура</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox1" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox1" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Авторский</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox2" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox2" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Автотур</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox3" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox3" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Арт тур</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox4" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox4" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Блог-тур</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox5" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox5" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Велотур</div>
                                        </div>
                                        <div data-v-88c13612="" data-v-017434b4="" class="btn filters__item__checks__button btn-gray"><span data-v-88c13612="" class="font-h2">Все типы (46)</span></div>
                                    </div>
                                </div><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item">
                                <div data-v-017434b4="" class="filters__item__range">
                                    <div data-v-017434b4="" class="filters__item__dropdown">
                                        <div data-v-017434b4="" class="font-text">Цена</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon filters__item__dropdown__icon--active">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu filters__item__dropdown__menu--visible-range">
                                        <div data-v-017434b4="" class="filters__item__range__inputs">
                                            <div data-v-428ce7b8="" data-v-017434b4="" class="filters__item__range__inputs__left">
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input3" class="input-label font-text-small"> От </label><input data-v-428ce7b8="" name="" id="input3" type="text" placeholder="1290" autocomplete="" class="input"><!----><!----></div><!----></div>
                                            <div data-v-428ce7b8="" data-v-017434b4="" class="filters__item__range__inputs__right">
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input4" class="input-label font-text-small"> До </label><input data-v-428ce7b8="" name="" id="input4" type="text" placeholder="3023481" autocomplete="" class="input"><!----><!----></div><!----></div>
                                        </div>
                                        <div data-v-017434b4="" class="vue-slider-component vue-slider-horizontal" style="width: auto; padding: 10px;">
                                            <div aria-hidden="true" class="vue-slider" style="height: 4px; background: rgb(209, 215, 232);">
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(-9.6px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;"><span class="vue-slider-tooltip">1290</span></div>
                                                </div>
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(214.4px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;"><span class="vue-slider-tooltip">3023481</span></div>
                                                </div>
                                                <ul class="vue-slider-piecewise"></ul>
                                                <div class="vue-slider-process" style="background: rgb(171, 194, 50); transition-duration: 0s; width: 224px; left: 0px;">
                                                    <div class="vue-merged-tooltip vue-slider-tooltip-top vue-slider-tooltip-wrap" style="top: -16px; left: 50%; visibility: hidden;"><span class="vue-slider-tooltip">
            1290 - 3023481
          </span></div>
                                                </div> <!----></div>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!----><!----><!---->
                                <div data-v-017434b4="" class="filters__item__input">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Сколько вас человек</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-428ce7b8="" data-v-017434b4="" type="number">
                                            <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input5" class="input-label font-text-small"> Человек </label><input data-v-428ce7b8="" name="" id="input5" type="text" placeholder="" autocomplete="" class="input"><!---->
                                                <div data-v-428ce7b8="" class="input-number__btns">
                                                    <div data-v-428ce7b8="" class="input-number__btns__minus input-number__btns__minus--disabled"></div>
                                                    <div data-v-428ce7b8="" class="input-number__btns__plus"></div>
                                                </div>
                                            </div><!----></div>
                                    </div>
                                </div><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!----><!----><!----><!---->
                                <div data-v-017434b4="" class="filters__item__radios">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Рейтинг тревел-эксперта</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                            <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__radios__item">
                                            <div data-v-58af75d8="" data-v-017434b4="" class="radio filters__item__radios__radio"><input data-v-58af75d8="" type="radio" class="radio-input"><span data-v-58af75d8="" class="radio-checkmark"></span></div><!---->
                                            <div data-v-017434b4="" class="font-text-small">Любой</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__radios__item">
                                            <div data-v-58af75d8="" data-v-017434b4="" class="radio filters__item__radios__radio"><input data-v-58af75d8="" type="radio" class="radio-input"><span data-v-58af75d8="" class="radio-checkmark"></span></div>
                                            <div data-v-017434b4="" class="filters__item__radios__rating font-caps">4.5</div>
                                            <div data-v-017434b4="" class="font-text-small">Превосходно и выше</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__radios__item">
                                            <div data-v-58af75d8="" data-v-017434b4="" class="radio filters__item__radios__radio"><input data-v-58af75d8="" type="radio" class="radio-input"><span data-v-58af75d8="" class="radio-checkmark"></span></div>
                                            <div data-v-017434b4="" class="filters__item__radios__rating font-caps">4.0</div>
                                            <div data-v-017434b4="" class="font-text-small">Очень хорошо и выше</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__radios__item">
                                            <div data-v-58af75d8="" data-v-017434b4="" class="radio filters__item__radios__radio"><input data-v-58af75d8="" type="radio" class="radio-input"><span data-v-58af75d8="" class="radio-checkmark"></span></div>
                                            <div data-v-017434b4="" class="filters__item__radios__rating font-caps">3.5</div>
                                            <div data-v-017434b4="" class="font-text-small">Хорошо и выше</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__radios__item">
                                            <div data-v-58af75d8="" data-v-017434b4="" class="radio filters__item__radios__radio"><input data-v-58af75d8="" type="radio" class="radio-input"><span data-v-58af75d8="" class="radio-checkmark"></span></div>
                                            <div data-v-017434b4="" class="filters__item__radios__rating font-caps">3.0</div>
                                            <div data-v-017434b4="" class="font-text-small">Удовлетворительно и выше</div>
                                        </div>
                                    </div>
                                </div><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!---->
                                <div data-v-017434b4="" class="filters__item__switch filters-uniq-serp__item__switch">
                                    <div data-v-017434b4="" class="filters__item__switch__label">
                                        <div data-v-017434b4="" class="font-text switch-filter__uniq-serp-class">Гарантированный тур</div>
                                        <div data-v-017434b4="" class="filters__item__helper font-text-small">
                                            <div data-v-017434b4="" class="filters__item__helper-icon">
                                                <svg data-v-c5bb0706="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#828296" class="svg #828296 ">
                                                    <path data-v-c5bb0706="" d="M7.99967 14.6667C11.6816 14.6667 14.6663 11.6819 14.6663 8.00004C14.6663 4.31814 11.6816 1.33337 7.99967 1.33337C4.31778 1.33337 1.33301 4.31814 1.33301 8.00004C1.33301 11.6819 4.31778 14.6667 7.99967 14.6667Z" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path data-v-c5bb0706="" d="M8 10.6667V8" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path data-v-c5bb0706="" d="M8 5.33337H8.00667" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div data-v-017434b4="" class="filters__item__helper-modal">Тур точно состоится – даже если группа не наберется</div>
                                        </div>
                                    </div>
                                    <div data-v-0d4a7a42="" data-v-017434b4="" class="switch">
                                        <div data-v-0d4a7a42="">
                                            <svg data-v-7045e8a0="" data-v-0d4a7a42="" width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg inherit " style="fill: none !important; display: none;">
                                                <path d="M11 1L4.33333 8L1 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!---->
                                <div data-v-017434b4="" class="filters__item__checks">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Комфорт</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox6" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox6" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Палатки или кемпинги</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox7" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox7" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Гостиницы 1* или гостевые дома</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox8" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox8" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Гостиницы 2* или аппартаменты</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox9" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox9" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Гостиницы 3* или виллы</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox10" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox10" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Гостиницы 4-5* или глемпинги</div>
                                        </div><!----></div>
                                </div><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!----><!---->
                                <div data-v-017434b4="" class="filters__item__buttons-select">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Возраст группы</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__buttons-select__buttons">
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">18-39</span></div>
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">30+</span></div>
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">40+</span></div>
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">50+</span></div>
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">60+</span></div>
                                            <div data-v-913f8b88="" data-v-017434b4="" class="button-select"><span data-v-913f8b88="" class="font-text">70+</span></div>
                                        </div>
                                    </div>
                                </div><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!----><!----><!----><!----><!---->
                                <div data-v-017434b4="" class="filters__item__select">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Можно с детьми</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__helper-text font-text-small">Выберите возраст самого младшего ребенка:</div>
                                        <div data-v-017434b4="" tabindex="0" class="multiselect yt-input-select"><!---->
                                            <button type="button" class="yt-input-select__caret u-decor u-flex-shrink-0"><span data-dir="down" class="svg-inline u-stroke-deep-current"><svg data-v-7045e8a0="" data-v-c421b3c4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg inherit svg inherit "><path d="M4 9L8 5L12 9" fill="none" stroke="#121212" stroke-width="1.5" stroke-linecap="round"
                                                                                                                                                                                                                                                                                                                                                                                    stroke-linejoin="round"></path></svg></span></button>
                                            <div class="multiselect__tags">
                                                <div class="multiselect__tags-wrap" style="display: none;"></div> <!---->
                                                <div class="multiselect__spinner" style="display: none;"></div> <!----> <!----> <span class="multiselect__placeholder">
          Возраст не выбран
        </span></div>
                                            <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;">
                                                <ul class="multiselect__content" style="display: inline-block;"> <!---->
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option multiselect__option--highlight"><span>Все</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>Младше 1 года</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>1 год</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>2 года</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>3 года</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>4 года</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>5 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>6 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>7 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>8 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>9 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>10 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>11 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>12 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>13 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>14 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>15 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>16 лет</span></span> <!----></li>
                                                    <li class="multiselect__element"><span data-select="" data-selected="" data-deselect="" class="multiselect__option"><span>17 лет</span></span> <!----></li>
                                                    <li style="display: none;"><span class="multiselect__option"><span>Нет результатов</span></span></li>
                                                    <li style="display: none;"><span class="multiselect__option"><span>Список пуст</span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-017434b4="" class="filters__item"><!---->
                                <div data-v-017434b4="" class="filters__item__checks">
                                    <div data-v-017434b4="" class="filters__item__dropdown wrapped">
                                        <div data-v-017434b4="" class="font-text">Уровень активности</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="display: none;">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu">
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox11" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox11" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Расслабляющая</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox12" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox12" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Спокойная</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox13" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox13" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Умеренная</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox14" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox14" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Интенсивная</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox15" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox15" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Экстрим</div>
                                        </div><!----></div>
                                </div><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!---->
                                <div data-v-017434b4="" class="filters__item__switch filters-uniq-serp__item__switch">
                                    <div data-v-017434b4="" class="filters__item__switch__label">
                                        <div data-v-017434b4="" class="font-text switch-filter__uniq-serp-class">Доступен индивидуальный тур</div>
                                        <div data-v-017434b4="" class="filters__item__helper font-text-small">
                                            <div data-v-017434b4="" class="filters__item__helper-icon">
                                                <svg data-v-c5bb0706="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#828296" class="svg #828296 ">
                                                    <path data-v-c5bb0706="" d="M7.99967 14.6667C11.6816 14.6667 14.6663 11.6819 14.6663 8.00004C14.6663 4.31814 11.6816 1.33337 7.99967 1.33337C4.31778 1.33337 1.33301 4.31814 1.33301 8.00004C1.33301 11.6819 4.31778 14.6667 7.99967 14.6667Z" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path data-v-c5bb0706="" d="M8 10.6667V8" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path data-v-c5bb0706="" d="M8 5.33337H8.00667" stroke="#828296" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div data-v-017434b4="" class="filters__item__helper-modal">Можно организовать только для вас и ваших друзей</div>
                                        </div>
                                    </div>
                                    <div data-v-0d4a7a42="" data-v-017434b4="" class="switch">
                                        <div data-v-0d4a7a42="">
                                            <svg data-v-7045e8a0="" data-v-0d4a7a42="" width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg inherit " style="fill: none !important; display: none;">
                                                <path d="M11 1L4.33333 8L1 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!---->
                                <div data-v-017434b4="" class="filters__item__checks">
                                    <div data-v-017434b4="" class="filters__item__dropdown">
                                        <div data-v-017434b4="" class="font-text">Язык тура</div>
                                        <div data-v-017434b4="" class="filters__item__dropdown__reset">
                                            <div data-v-017434b4="" class="font-text filters__item__reset" style="">Сбросить</div>
                                            <div data-v-017434b4="" class="filters__item__dropdown__icon filters__item__dropdown__icon--active">
                                                <svg data-v-8b70bac4="" data-v-7045e8a0="" data-v-017434b4="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" color="#C1CEDE" class="svg #C1CEDE ">
                                                    <path data-v-8b70bac4="" d="M4 5.59998L8 9.59998L12 5.59998" stroke="#C1CEDE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-017434b4="" class="filters__item__dropdown__menu filters__item__dropdown__menu--visible">
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox16" class="input g-visually-hidden checked"></div>
                                                <label data-v-3e35006e="" for="checkbox16" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Русский</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox17" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox17" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Азербайджанский</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox18" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox18" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Английский</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox19" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox19" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Арабский</div>
                                        </div>
                                        <div data-v-017434b4="" class="filters__item__checks__item">
                                            <div data-v-3e35006e="" data-v-017434b4="" class="checkbox-wrapper">
                                                <div data-v-3e35006e="" id="checkbox20" class="input g-visually-hidden"></div>
                                                <label data-v-3e35006e="" for="checkbox20" class="label"><span data-v-3e35006e="" class="checkbox"></span></label></div>
                                            <div data-v-017434b4="" class="font-text-small">Армянский</div>
                                        </div>
                                        <div data-v-88c13612="" data-v-017434b4="" class="btn filters__item__checks__button btn-gray"><span data-v-88c13612="" class="font-h2">Все языки (21)</span></div>
                                    </div>
                                </div><!----><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!---->
                                <div data-v-017434b4="" class="filters__item__switch filters-uniq-serp__item__switch">
                                    <div data-v-017434b4="" class="filters__item__switch__label">
                                        <div data-v-017434b4="" class="font-text switch-filter__uniq-serp-class">Можно в рассрочку</div><!----></div>
                                    <div data-v-0d4a7a42="" data-v-017434b4="" class="switch">
                                        <div data-v-0d4a7a42="">
                                            <svg data-v-7045e8a0="" data-v-0d4a7a42="" width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg inherit " style="fill: none !important; display: none;">
                                                <path d="M11 1L4.33333 8L1 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----></div>
                            <div data-v-017434b4="" class="filters__item"><!----><!---->
                                <div data-v-017434b4="" class="filters__item__switch filters-uniq-serp__item__switch">
                                    <div data-v-017434b4="" class="filters__item__switch__label">
                                        <div data-v-017434b4="" class="font-text switch-filter__uniq-serp-class">Только со скидками</div><!----></div>
                                    <div data-v-0d4a7a42="" data-v-017434b4="" class="switch">
                                        <div data-v-0d4a7a42="">
                                            <svg data-v-7045e8a0="" data-v-0d4a7a42="" width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg" color="inherit" class="svg inherit " style="fill: none !important; display: none;">
                                                <path d="M11 1L4.33333 8L1 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!----></div>
                            <div data-v-88c13612="" data-v-017434b4="" class="btn filters__button btn-green btn-hidden"><span data-v-88c13612="" class="font-h2">Показать путешествия</span></div><!----></div>
                        <div data-v-017434b4="">
                            <div data-v-9e643754="" data-v-017434b4=""></div>
                        </div>
                    </div>
                    <div data-v-9e643754="" class="serp-tours__result"><!---->
                        <a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/23607/_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D1%8F_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="★ МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="23607" data-name="★ МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!" data-price="63000" data-countries="Россия, Кавказ" data-type="Экскурсионный, Гастрономический, Тур в горы, Этнографический, Для соло путешественников, На внедорожниках" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="★ МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!" src="./assets/48251d31f292a23197529527b1445c01.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg" class="">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">На внедорожниках</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="23607" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/a86/a868b306f332b2b8efa91dafc98548dd.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/a86/a868b306f332b2b8efa91dafc98548dd.jpeg"
                                                                                                                src="./assets/a868b306f332b2b8efa91dafc98548dd.jpeg" srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/a86/a868b306f332b2b8efa91dafc98548dd.jpeg" alt="Арсен А" class="tour-card__image__expert__photo awards_photo ls-is-cached lazyloaded">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1 awards_title">Арсен А</div>
                                                <div data-v-3859ed36="" class="awards_item best_tour">Лучший тур 2022</div>
                                            </div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-40%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(223)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кавказ</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">★ МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Скорее всего, вы давно мечтали познать Мелодию Дагестана, но...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 63 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 38 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 24 - 28 авг.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">2 места</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +26 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!",
  "startDate": "2023-08-24T00:00:00.000Z",
  "endDate": "2023-08-28T00:00:00.000Z",
  "url": "https://youtravel.me/tours/23607/_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D1%8F_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Скорее всего, вы давно мечтали познать Мелодию Дагестана, но, по какой-то причине, еще не приняли решение?&nbsp;Скорее присоединяйтесь к нам...",
  "organizer": {
    "@type": "Person",
    "name": "Арсен А.",
    "url": "https://youtravel.me/expert/69962/%D0%B0%D1%80%D1%81%D0%B5%D0%BD"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Арсен А.",
    "url": "https://youtravel.me/expert/69962/%D0%B0%D1%80%D1%81%D0%B5%D0%BD"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кавказ",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кавказ",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-08-24T00:00:00.000Z",
    "url": "https://youtravel.me/tours/23607/_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D1%8F_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 63000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/25392/_%D0%B2%D0%BE%D0%BB%D1%88%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE" title="☆  ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО " target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="25392" data-name="☆  ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО " data-price="50000" data-countries="Россия, Дагестан" data-type="На внедорожниках, Водный тур, Тур в горы, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="☆  ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО " src="./assets/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/25392/media/3d9/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/25392/media/3d9/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/25392/media/3d9/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg" class=" ls-is-cached lazyloaded">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!----><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="25392" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/132/8fj597xsxxewfiktzkqgfvrg46r4gl3j.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/132/8fj597xsxxewfiktzkqgfvrg46r4gl3j.jpeg"
                                                                                                                src="./assets/8fj597xsxxewfiktzkqgfvrg46r4gl3j.jpeg" srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/132/8fj597xsxxewfiktzkqgfvrg46r4gl3j.jpeg" alt="Мурад" class="tour-card__image__expert__photo ls-is-cached lazyloaded">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Мурад</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-24%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(210)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Дагестан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">☆  ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">ТЫ ИЩЕШЬ ТУР И НИКАК НЕ МОЖЕШЬ ОПРЕДЕЛИТЬСЯ С ВЫБОРОМ ?
ТЕБ...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 50 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 38 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 16 июн.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">2 места</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +40 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129505;ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-16T00:00:00.000Z",
  "url": "https://youtravel.me/tours/25392/_%D0%B2%D0%BE%D0%BB%D1%88%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/25392/media/3d9/nya1yhlz0sjaaz4i9ims65vaf9mvmt6q.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "ТЫ ИЩЕШЬ ТУР И НИКАК НЕ МОЖЕШЬ ОПРЕДЕЛИТЬСЯ С ВЫБОРОМ ?\r\nТЕБЯ МУЧАЮТ СОМНЕНИЯ ПО ПОВОДУ БЕЗОПАСНОСТИ, ОРГАНИЗАЦИИ ОТДЫХА, ЖИЛЬЯ , ЕДЫ И МНОГОЕ...",
  "organizer": {
    "@type": "Person",
    "name": "Мурад.",
    "url": "https://youtravel.me/expert/49249/%D0%BC%D1%83%D1%80%D0%B0%D0%B4"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Мурад.",
    "url": "https://youtravel.me/expert/49249/%D0%BC%D1%83%D1%80%D0%B0%D0%B4"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Дагестан",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дагестан",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/25392/_%D0%B2%D0%BE%D0%BB%D1%88%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE",
    "price": 50000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38737/%D0%BA%D1%83%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8_%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80" title="КУНДАЛИНИ ЙОГА-ТУР" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="38737" data-name="КУНДАЛИНИ ЙОГА-ТУР" data-price="45000" data-countries="Россия, Кавказ" data-type="На внедорожниках, Девичник, Авторский, Тур в горы, Йога" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="КУНДАЛИНИ ЙОГА-ТУР" src="./assets/mu2gvvsvnyob8ssu0hof62k7gdvegwlh.JPG" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/bc9/mu2gvvsvnyob8ssu0hof62k7gdvegwlh.JPG"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/bc9/mu2gvvsvnyob8ssu0hof62k7gdvegwlh.JPG" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/bc9/mu2gvvsvnyob8ssu0hof62k7gdvegwlh.JPG" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Йога</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="38737" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/933/93353c7f99076fa453ff139cdac45279.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/933/93353c7f99076fa453ff139cdac45279.jpg"
                                                                                                                src="./assets/93353c7f99076fa453ff139cdac45279.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/933/93353c7f99076fa453ff139cdac45279.jpg" alt="Анастасия " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Анастасия</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(38)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кавказ</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">КУНДАЛИНИ ЙОГА-ТУР</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">КТО Я? Я - Ольга, мне немножко за тридцать. Я обожаю практик...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 45 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 6 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 5 - 10 июл.</div><!----></div><!----></div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#11088;КУНДАЛИНИ ЙОГА-ТУР",
  "startDate": "2023-07-05T00:00:00.000Z",
  "endDate": "2023-07-10T00:00:00.000Z",
  "url": "https://youtravel.me/tours/38737/%D0%BA%D1%83%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8_%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/bc9/mu2gvvsvnyob8ssu0hof62k7gdvegwlh.JPG"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "КТО Я? Я - Ольга, мне немножко за тридцать. Я обожаю практики Кундалини и путешествовать.&nbsp;\r\nНедавно поняла, что это можно безумно вкусно и...",
  "organizer": {
    "@type": "Person",
    "name": "Анастасия .",
    "url": "https://youtravel.me/expert/28544/%D0%B0%D0%BD%D0%B0%D1%81%D1%82%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Анастасия .",
    "url": "https://youtravel.me/expert/28544/%D0%B0%D0%BD%D0%B0%D1%81%D1%82%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кавказ",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кавказ",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-07-05T00:00:00.000Z",
    "url": "https://youtravel.me/tours/38737/%D0%BA%D1%83%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8_%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80",
    "price": 45000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38866/%D1%8D%D0%BA%D1%81%D0%BF%D1%80%D0%B5%D1%81%D1%81_%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D0%B8%D0%BD%D0%B4%D0%B8%D0%B8_%D0%B7%D0%B0_3_%D0%B4%D0%BD%D1%8F" title="Экспресс Золотой Треугольник Индии за 3 дня" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="38866" data-name="Экспресс Золотой Треугольник Индии за 3 дня" data-price="34293" data-countries="Индия, Дели" data-type="Авторский, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Экспресс Золотой Треугольник Индии за 3 дня" src="./assets/15i486fgdq2aqh09tlbasqdi1gg0qu7v.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/2e2/15i486fgdq2aqh09tlbasqdi1gg0qu7v.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/2e2/15i486fgdq2aqh09tlbasqdi1gg0qu7v.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/2e2/15i486fgdq2aqh09tlbasqdi1gg0qu7v.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="38866" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/3fe/3fe875e5b14f60a96df19cb4e78e36f1.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/3fe/3fe875e5b14f60a96df19cb4e78e36f1.jpg"
                                                                                                                src="./assets/3fe875e5b14f60a96df19cb4e78e36f1.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/3fe/3fe875e5b14f60a96df19cb4e78e36f1.jpg" alt="Ali A" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Ali A</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(5)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Индия, Дели</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Экспресс Золотой Треугольник Индии за 3 дня</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Загадочная и контрастная страна махараджей и заклинателей зм...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 34 293</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 3 дня </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 14 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +29 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Экспресс Золотой Треугольник Индии за 3 дня",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-14T00:00:00.000Z",
  "url": "https://youtravel.me/tours/38866/%D1%8D%D0%BA%D1%81%D0%BF%D1%80%D0%B5%D1%81%D1%81_%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D0%B8%D0%BD%D0%B4%D0%B8%D0%B8_%D0%B7%D0%B0_3_%D0%B4%D0%BD%D1%8F",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/chat/2e2/15i486fgdq2aqh09tlbasqdi1gg0qu7v.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Загадочная и контрастная страна махараджей и заклинателей змей приоткроет вам свои секреты. Мы познакомим вас с самыми знаменитыми городами...",
  "organizer": {
    "@type": "Person",
    "name": "Ali A.",
    "url": "https://youtravel.me/expert/59508/ali"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Ali A.",
    "url": "https://youtravel.me/expert/59508/ali"
  },
  "location": {
    "@type": "Place",
    "name": "Индия, Дели",
    "url": "https://youtravel.me/tours/country/индия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дели",
      "addressCountry": "Индия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/38866/%D1%8D%D0%BA%D1%81%D0%BF%D1%80%D0%B5%D1%81%D1%81_%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D0%B8%D0%BD%D0%B4%D0%B8%D0%B8_%D0%B7%D0%B0_3_%D0%B4%D0%BD%D1%8F",
    "price": 34293,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/17952/_%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D1%82%D1%8B_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_%D0%B7%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="✼ КРАСОТЫ ДАГЕСТАНА ✼ за 5 дней - Всё включено!" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="17952" data-name="✼ КРАСОТЫ ДАГЕСТАНА ✼ за 5 дней - Всё включено!" data-price="42000" data-countries="Россия, Кавказ" data-type="Автотур, Семейный, Гастрономический, Тур в горы, На внедорожниках" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="✼ КРАСОТЫ ДАГЕСТАНА ✼ за 5 дней - Всё включено!" src="./assets/b71fc255c0f7af1c4459e5f06115dcee.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/17952/media/b71/b71fc255c0f7af1c4459e5f06115dcee.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/17952/media/b71/b71fc255c0f7af1c4459e5f06115dcee.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/17952/media/b71/b71fc255c0f7af1c4459e5f06115dcee.jpeg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">На внедорожниках</div><!----><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="17952" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/546/5460890b51278f6ef7e81ece0e38642e.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/546/5460890b51278f6ef7e81ece0e38642e.jpeg"
                                                                                                                src="./assets/5460890b51278f6ef7e81ece0e38642e.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/546/5460890b51278f6ef7e81ece0e38642e.jpeg" alt="Шамиль " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Шамиль</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-17%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.8</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(233)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кавказ</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">✼ КРАСОТЫ ДАГЕСТАНА ✼ за 5 дней - Всё включено!</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Вы всё ещё думаете, куда съездить, чтобы за короткое время у...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 42 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 35 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 16 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +53 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#128293;КРАСОТЫ ДАГЕСТАНА ✼ за 5 дней - Всё включено!",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-16T00:00:00.000Z",
  "url": "https://youtravel.me/tours/17952/_%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D1%82%D1%8B_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_%D0%B7%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/17952/media/b71/b71fc255c0f7af1c4459e5f06115dcee.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Вы всё ещё думаете, куда съездить, чтобы за короткое время увидеть сразу множество удивительных мест?&nbsp;\r\nПриглашаем вас, вместе с нами...",
  "organizer": {
    "@type": "Person",
    "name": "Шамиль .",
    "url": "https://youtravel.me/expert/44733/%D1%88%D0%B0%D0%BC%D0%B8%D0%BB%D1%8C"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Шамиль .",
    "url": "https://youtravel.me/expert/44733/%D1%88%D0%B0%D0%BC%D0%B8%D0%BB%D1%8C"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кавказ",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кавказ",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/17952/_%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D1%82%D1%8B_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B0_%D0%B7%D0%B0_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 42000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/15902/_%D0%BA%D0%BE%D0%BC%D1%84%D0%BE%D1%80%D1%82%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B7%D0%B0_6_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="✅ Комфортный Дагестан за 6 дней «Все включено» " target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="15902" data-name="✅ Комфортный Дагестан за 6 дней «Все включено» " data-price="66900" data-countries="Россия, Дагестан" data-type="На внедорожниках, Семейный, Этнографический, Для соло путешественников, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="✅ Комфортный Дагестан за 6 дней «Все включено» " src="./assets/d26a03cf793c5d04b0b2c22e35cec2b0.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/15902/media/d26/d26a03cf793c5d04b0b2c22e35cec2b0.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/15902/media/d26/d26a03cf793c5d04b0b2c22e35cec2b0.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/15902/media/d26/d26a03cf793c5d04b0b2c22e35cec2b0.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="15902" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/ba7/4hcnxbzahf14ax7nrfjpdv3zwwwyi5ch.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/ba7/4hcnxbzahf14ax7nrfjpdv3zwwwyi5ch.jpeg"
                                                                                                                src="./assets/4hcnxbzahf14ax7nrfjpdv3zwwwyi5ch.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/ba7/4hcnxbzahf14ax7nrfjpdv3zwwwyi5ch.jpeg" alt="Евгений Б" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Евгений Б</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-27%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(145)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Дагестан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">✅ Комфортный Дагестан за 6 дней «Все включено» </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Хотите c комфортом за 6 дней увидеть лучшие локации Дагестан...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 66 900</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 48 900</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 6 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 26 июн. - 1 июл.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">3 места</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +32 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Комфортный Дагестан за 6 дней «Все включено»",
  "startDate": "2023-06-26T00:00:00.000Z",
  "endDate": "2023-07-01T00:00:00.000Z",
  "url": "https://youtravel.me/tours/15902/_%D0%BA%D0%BE%D0%BC%D1%84%D0%BE%D1%80%D1%82%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B7%D0%B0_6_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/15902/media/d26/d26a03cf793c5d04b0b2c22e35cec2b0.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Хотите c комфортом&nbsp;за 6 дней&nbsp;увидеть&nbsp;лучшие&nbsp;локации Дагестана, узнать&nbsp;историю республики и побывать в малодоступных для...",
  "organizer": {
    "@type": "Person",
    "name": "Евгений Б.",
    "url": "https://youtravel.me/expert/12774/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D0%B9"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Евгений Б.",
    "url": "https://youtravel.me/expert/12774/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D0%B9"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Дагестан",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дагестан",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-26T00:00:00.000Z",
    "url": "https://youtravel.me/tours/15902/_%D0%BA%D0%BE%D0%BC%D1%84%D0%BE%D1%80%D1%82%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B7%D0%B0_6_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 66900,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/18881/%D0%BA%D0%B0%D0%B1%D0%B0%D1%80%D0%B4%D0%B8%D0%BD%D0%BE_%D0%B1%D0%B0%D0%BB%D0%BA%D0%B0%D1%80%D0%B8%D1%8F_%D0%BA%D1%80%D0%B0%D0%B9_%D0%B3%D0%BE%D1%80_" title="Кабардино-Балкария. Край гор. " target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="18881" data-name="Кабардино-Балкария. Край гор. " data-price="32000" data-countries="Россия, Кабардино-Балкария" data-type="[object Object]" data-currency-code="RUB" data-meta="{&quot;sponsored&quot;:true}" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Кабардино-Балкария. Край гор. " src="./assets/286zv6hp07qtajadkp6kyxwtapfbp78o.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18881/media/505/286zv6hp07qtajadkp6kyxwtapfbp78o.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18881/media/505/286zv6hp07qtajadkp6kyxwtapfbp78o.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18881/media/505/286zv6hp07qtajadkp6kyxwtapfbp78o.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!----><!----><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Спонсировано</span></div><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="18881" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/e7c/925nl9h2bv7ktrct7lyhwvndt60zoj8b.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/e7c/925nl9h2bv7ktrct7lyhwvndt60zoj8b.jpg"
                                                                                                                src="./assets/925nl9h2bv7ktrct7lyhwvndt60zoj8b.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/e7c/925nl9h2bv7ktrct7lyhwvndt60zoj8b.jpg" alt="Абдул М" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Абдул М</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-10%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(109)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кабардино-Балкария</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Кабардино-Балкария. Край гор. </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Насыщенный тур, с погружением  в культуру Балкарцев и лучшим...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 32 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 29 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 11 - 15 июн.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">3 места</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +8 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Кабардино-Балкария. Край гор.",
  "startDate": "2023-06-11T00:00:00.000Z",
  "endDate": "2023-06-15T00:00:00.000Z",
  "url": "https://youtravel.me/tours/18881/%D0%BA%D0%B0%D0%B1%D0%B0%D1%80%D0%B4%D0%B8%D0%BD%D0%BE_%D0%B1%D0%B0%D0%BB%D0%BA%D0%B0%D1%80%D0%B8%D1%8F_%D0%BA%D1%80%D0%B0%D0%B9_%D0%B3%D0%BE%D1%80_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/18881/media/505/286zv6hp07qtajadkp6kyxwtapfbp78o.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Насыщенный тур, с погружением&nbsp; в культуру Балкарцев и лучшим гидом гор)...",
  "organizer": {
    "@type": "Person",
    "name": "Абдул М.",
    "url": "https://youtravel.me/expert/39919/%D0%B0%D0%B1%D0%B4%D1%83%D0%BB"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Абдул М.",
    "url": "https://youtravel.me/expert/39919/%D0%B0%D0%B1%D0%B4%D1%83%D0%BB"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кабардино-Балкария",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кабардино-Балкария",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-11T00:00:00.000Z",
    "url": "https://youtravel.me/tours/18881/%D0%BA%D0%B0%D0%B1%D0%B0%D1%80%D0%B4%D0%B8%D0%BD%D0%BE_%D0%B1%D0%B0%D0%BB%D0%BA%D0%B0%D1%80%D0%B8%D1%8F_%D0%BA%D1%80%D0%B0%D0%B9_%D0%B3%D0%BE%D1%80_",
    "price": 32000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38996/%D0%BC%D0%B0%D0%B4%D0%B0%D0%B3%D0%B0%D1%81%D0%BA%D0%B0%D1%80_%D0%BD%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D0%B0%D1%80%D0%BA%D0%B8_%D0%B8_%D0%BE%D1%82%D0%B4%D1%8B%D1%85_%D0%BD%D0%B0_%D0%BE%D0%BA%D0%B5%D0%B0%D0%BD%D0%B5" title="МАДАГАСКАР: НАЦИОНАЛЬНЫЕ ПАРКИ И ОТДЫХ НА ОКЕАНЕ" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="38996" data-name="МАДАГАСКАР: НАЦИОНАЛЬНЫЕ ПАРКИ И ОТДЫХ НА ОКЕАНЕ" data-price="314725" data-countries="Мадагаскар" data-type="Экскурсионный, Автотур, Этнографический, На море, Авторский" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="МАДАГАСКАР: НАЦИОНАЛЬНЫЕ ПАРКИ И ОТДЫХ НА ОКЕАНЕ" src="./assets/zz6t8ga7bbu97jej4qzwyilc0t4wnyqd.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/c6f/zz6t8ga7bbu97jej4qzwyilc0t4wnyqd.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/c6f/zz6t8ga7bbu97jej4qzwyilc0t4wnyqd.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/c6f/zz6t8ga7bbu97jej4qzwyilc0t4wnyqd.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Авторский</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="38996" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/400/4003bbab140cbd43422a7fed83f0d658.JPG" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/400/4003bbab140cbd43422a7fed83f0d658.JPG"
                                                                                                                src="./assets/4003bbab140cbd43422a7fed83f0d658.JPG" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/400/4003bbab140cbd43422a7fed83f0d658.JPG" alt="Евгения " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Евгения</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__new"> Новый</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Мадагаскар</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">МАДАГАСКАР: НАЦИОНАЛЬНЫЕ ПАРКИ И ОТДЫХ НА ОКЕАНЕ</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Групповой тур по северу Мадагаскара: посещение национальных ...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 314 725</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 12 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 8 - 19 окт.</div><!----></div><!----></div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129523;МАДАГАСКАР: НАЦИОНАЛЬНЫЕ ПАРКИ И ОТДЫХ НА ОКЕАНЕ",
  "startDate": "2023-10-08T00:00:00.000Z",
  "endDate": "2023-10-19T00:00:00.000Z",
  "url": "https://youtravel.me/tours/38996/%D0%BC%D0%B0%D0%B4%D0%B0%D0%B3%D0%B0%D1%81%D0%BA%D0%B0%D1%80_%D0%BD%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D0%B0%D1%80%D0%BA%D0%B8_%D0%B8_%D0%BE%D1%82%D0%B4%D1%8B%D1%85_%D0%BD%D0%B0_%D0%BE%D0%BA%D0%B5%D0%B0%D0%BD%D0%B5",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/c6f/zz6t8ga7bbu97jej4qzwyilc0t4wnyqd.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Групповой тур по северу Мадагаскара: посещение&nbsp;национальных парков и пляжный отдых на Нуси-Бе....",
  "organizer": {
    "@type": "Person",
    "name": "Евгения .",
    "url": "https://youtravel.me/expert/14645/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D1%8F"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Евгения .",
    "url": "https://youtravel.me/expert/14645/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D1%8F"
  },
  "location": {
    "@type": "Place",
    "name": "Мадагаскар",
    "url": "https://youtravel.me/tours/country/мадагаскар",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Мадагаскар"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-10-08T00:00:00.000Z",
    "url": "https://youtravel.me/tours/38996/%D0%BC%D0%B0%D0%B4%D0%B0%D0%B3%D0%B0%D1%81%D0%BA%D0%B0%D1%80_%D0%BD%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D0%B0%D1%80%D0%BA%D0%B8_%D0%B8_%D0%BE%D1%82%D0%B4%D1%8B%D1%85_%D0%BD%D0%B0_%D0%BE%D0%BA%D0%B5%D0%B0%D0%BD%D0%B5",
    "price": 314725,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/22643/%D1%80%D0%B0%D0%B4%D1%83%D1%88%D0%BD%D1%8B%D0%B9_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%81_%D1%85%D0%B8%D0%B2%D0%BE%D0%B9_%D0%B8_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D1%85%D0%BE%D1%80%D0%B5%D0%B7%D0%BC%D0%BE%D0%BC" title="Радушный Узбекистан с Хивой и древним Хорезмом" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="22643" data-name="Радушный Узбекистан с Хивой и древним Хорезмом" data-price="90245" data-countries="Узбекистан" data-type="Семейный, Гастрономический, Экскурсионный" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/"
                                 class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Радушный Узбекистан с Хивой и древним Хорезмом" src="./assets/scajhna1400q17m1zsktka7oxt8j1069.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22643/media/cd5/scajhna1400q17m1zsktka7oxt8j1069.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22643/media/cd5/scajhna1400q17m1zsktka7oxt8j1069.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22643/media/cd5/scajhna1400q17m1zsktka7oxt8j1069.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!----><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="22643" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/13f/13f6caf5615bf342d824713d50da2a58.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/13f/13f6caf5615bf342d824713d50da2a58.jpg"
                                                                                                                src="./assets/13f6caf5615bf342d824713d50da2a58.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/13f/13f6caf5615bf342d824713d50da2a58.jpg" alt="Евгения Д" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Евгения Д</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.7</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(16)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Радушный Узбекистан с Хивой и древним Хорезмом</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Узбекистан - это разноцветная мозаика. Каждый город и регион...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 90 245</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 9 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 9 - 17 сент.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +3 даты</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#128293;Радушный Узбекистан с Хивой и древним Хорезмом",
  "startDate": "2023-09-09T00:00:00.000Z",
  "endDate": "2023-09-17T00:00:00.000Z",
  "url": "https://youtravel.me/tours/22643/%D1%80%D0%B0%D0%B4%D1%83%D1%88%D0%BD%D1%8B%D0%B9_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%81_%D1%85%D0%B8%D0%B2%D0%BE%D0%B9_%D0%B8_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D1%85%D0%BE%D1%80%D0%B5%D0%B7%D0%BC%D0%BE%D0%BC",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/22643/media/cd5/scajhna1400q17m1zsktka7oxt8j1069.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Узбекистан - это разноцветная&nbsp;мозаика. Каждый город и регион уникальны и колоритны. За 9 дней вы соберете яркий неповторимый орнамент...",
  "organizer": {
    "@type": "Person",
    "name": "Евгения Д.",
    "url": "https://youtravel.me/expert/15513/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D1%8F"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Евгения Д.",
    "url": "https://youtravel.me/expert/15513/%D0%B5%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D1%8F"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-09-09T00:00:00.000Z",
    "url": "https://youtravel.me/tours/22643/%D1%80%D0%B0%D0%B4%D1%83%D1%88%D0%BD%D1%8B%D0%B9_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%81_%D1%85%D0%B8%D0%B2%D0%BE%D0%B9_%D0%B8_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D1%85%D0%BE%D1%80%D0%B5%D0%B7%D0%BC%D0%BE%D0%BC",
    "price": 90245,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/39073/%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BD%D0%B0%D0%BC_%D0%B0%D1%80%D0%BA%D1%82%D0%B8%D0%BA%D0%B8_%D0%BA%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9_%D0%BF%D0%BE%D0%BB%D1%83%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2" title="По волнам Арктики - Кольский полуостров" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="39073" data-name="По волнам Арктики - Кольский полуостров" data-price="39200" data-countries="Россия, Кольский полуостров" data-type="Семейный, Водный тур, Восхождение, Для соло путешественников, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="По волнам Арктики - Кольский полуостров" src="./assets/ch5baha94yqpzbeyxal6g2ckwm5m7jgf.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/39073/media/87a/ch5baha94yqpzbeyxal6g2ckwm5m7jgf.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/39073/media/87a/ch5baha94yqpzbeyxal6g2ckwm5m7jgf.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/39073/media/87a/ch5baha94yqpzbeyxal6g2ckwm5m7jgf.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="39073" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/7ac/mmth6jca3ozu9rye8ucdocw6ghpf37vf.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/7ac/mmth6jca3ozu9rye8ucdocw6ghpf37vf.jpg"
                                                                                                                src="./assets/mmth6jca3ozu9rye8ucdocw6ghpf37vf.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/7ac/mmth6jca3ozu9rye8ucdocw6ghpf37vf.jpg" alt="Роман " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Роман</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-3%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__new"> Новый</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кольский полуостров</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">По волнам Арктики - Кольский полуостров</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">4 дня - Териберка, выход в море, подъем в горы, северные жив...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 39 200</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 38 200</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 4 дня </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 20 - 23 июл.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +5 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#11088;По волнам Арктики - Кольский полуостров",
  "startDate": "2023-07-20T00:00:00.000Z",
  "endDate": "2023-07-23T00:00:00.000Z",
  "url": "https://youtravel.me/tours/39073/%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BD%D0%B0%D0%BC_%D0%B0%D1%80%D0%BA%D1%82%D0%B8%D0%BA%D0%B8_%D0%BA%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9_%D0%BF%D0%BE%D0%BB%D1%83%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/39073/media/87a/ch5baha94yqpzbeyxal6g2ckwm5m7jgf.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "4 дня - Териберка, выход в море, подъем в горы, северные животные, Мурманск1...",
  "organizer": {
    "@type": "Person",
    "name": "Роман .",
    "url": "https://youtravel.me/expert/98527/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Роман .",
    "url": "https://youtravel.me/expert/98527/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кольский полуостров",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кольский полуостров",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-07-20T00:00:00.000Z",
    "url": "https://youtravel.me/tours/39073/%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BD%D0%B0%D0%BC_%D0%B0%D1%80%D0%BA%D1%82%D0%B8%D0%BA%D0%B8_%D0%BA%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B9_%D0%BF%D0%BE%D0%BB%D1%83%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2",
    "price": 39200,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/13094/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B5_%D0%BA%D0%BE%D0%BB%D1%8C%D1%86%D0%BE_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F" title="Золотое Кольцо Алтая" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="13094" data-name="Золотое Кольцо Алтая" data-price="69000" data-countries="Россия, Алтай" data-type="Автотур, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Золотое Кольцо Алтая" src="./assets/73311ac144d0325f5172ae8d816423d1.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/13094/media/733/73311ac144d0325f5172ae8d816423d1.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/13094/media/733/73311ac144d0325f5172ae8d816423d1.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/13094/media/733/73311ac144d0325f5172ae8d816423d1.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="13094" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/278/doxnpl4fz7cqmt8903tuuhc5itwzqfin.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/278/doxnpl4fz7cqmt8903tuuhc5itwzqfin.jpg"
                                                                                                                src="./assets/doxnpl4fz7cqmt8903tuuhc5itwzqfin.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/278/doxnpl4fz7cqmt8903tuuhc5itwzqfin.jpg" alt="Андрей К" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Андрей К</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-29%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.7</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(84)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Алтай</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Золотое Кольцо Алтая</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Бесспорно, этот маршрут самый крутой и популярный среди всех...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 69 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 49 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 7 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 11 - 17 июн.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">2 места</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +24 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129505;Золотое Кольцо Алтая",
  "startDate": "2023-06-11T00:00:00.000Z",
  "endDate": "2023-06-17T00:00:00.000Z",
  "url": "https://youtravel.me/tours/13094/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B5_%D0%BA%D0%BE%D0%BB%D1%8C%D1%86%D0%BE_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/13094/media/733/73311ac144d0325f5172ae8d816423d1.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Бесспорно, этот маршрут самый крутой и популярный среди всех туров на Алтае!&nbsp;Мы всю неделю будем путешествовать и увидим уголки с суровой и...",
  "organizer": {
    "@type": "Person",
    "name": "Андрей К.",
    "url": "https://youtravel.me/expert/21399/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Андрей К.",
    "url": "https://youtravel.me/expert/21399/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Алтай",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Алтай",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-11T00:00:00.000Z",
    "url": "https://youtravel.me/tours/13094/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B5_%D0%BA%D0%BE%D0%BB%D1%8C%D1%86%D0%BE_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F",
    "price": 69000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/24893/%D0%BF%D1%80%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD" title="Прекрасный Дагестан" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="24893" data-name="Прекрасный Дагестан" data-price="46000" data-countries="Россия, Дагестан" data-type="Авторский, На внедорожниках" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Прекрасный Дагестан" src="./assets/24f5453475e97cc39a80ce88b277d779.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24893/media/24f/24f5453475e97cc39a80ce88b277d779.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24893/media/24f/24f5453475e97cc39a80ce88b277d779.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24893/media/24f/24f5453475e97cc39a80ce88b277d779.jpeg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">На внедорожниках</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="24893" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/575/ufsdl7dlhcqlgiywtpwlp50uyfon5t59.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/575/ufsdl7dlhcqlgiywtpwlp50uyfon5t59.jpeg"
                                                                                                                src="./assets/ufsdl7dlhcqlgiywtpwlp50uyfon5t59.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/575/ufsdl7dlhcqlgiywtpwlp50uyfon5t59.jpeg" alt="Магомедарип И" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Магомедарип И</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-9%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(119)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Дагестан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Прекрасный Дагестан</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">«У нас в горах не бывает гостей маленьких или больших, важны...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 46 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 42 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 6 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 13 - 18 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +19 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Прекрасный Дагестан",
  "startDate": "2023-06-13T00:00:00.000Z",
  "endDate": "2023-06-18T00:00:00.000Z",
  "url": "https://youtravel.me/tours/24893/%D0%BF%D1%80%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/24893/media/24f/24f5453475e97cc39a80ce88b277d779.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "«У нас в горах не бывает гостей маленьких или больших, важных или неважных.Самый маленький гость для нас важен, потому что он - гость. Самый...",
  "organizer": {
    "@type": "Person",
    "name": "Магомедарип И.",
    "url": "https://youtravel.me/expert/15174/%D0%BC%D0%B0%D0%B3%D0%BE%D0%BC%D0%B5%D0%B4%D0%B0%D1%80%D0%B8%D0%BF"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Магомедарип И.",
    "url": "https://youtravel.me/expert/15174/%D0%BC%D0%B0%D0%B3%D0%BE%D0%BC%D0%B5%D0%B4%D0%B0%D1%80%D0%B8%D0%BF"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Дагестан",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дагестан",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-13T00:00:00.000Z",
    "url": "https://youtravel.me/tours/24893/%D0%BF%D1%80%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD",
    "price": 46000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/28022/_%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_4_%D0%B4%D0%BD%D1%8F_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="✵ Планета Дагестан ✵ 4 дня ✵ Всё включено ✵" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="28022" data-name="✵ Планета Дагестан ✵ 4 дня ✵ Всё включено ✵" data-price="39500" data-countries="Россия, Кавказ" data-type="Экскурсионный, Гастрономический, Тур в горы, На внедорожниках" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="✵ Планета Дагестан ✵ 4 дня ✵ Всё включено ✵" src="./assets/00fcad1344a34a5eefce9f98d42e7383.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/28022/media/00f/00fcad1344a34a5eefce9f98d42e7383.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/28022/media/00f/00fcad1344a34a5eefce9f98d42e7383.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/28022/media/00f/00fcad1344a34a5eefce9f98d42e7383.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">На внедорожниках</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="28022" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/c99/n2u4xd545vdfmttj21orpcrxevj1m4on.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/c99/n2u4xd545vdfmttj21orpcrxevj1m4on.jpeg"
                                                                                                                src="./assets/n2u4xd545vdfmttj21orpcrxevj1m4on.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/c99/n2u4xd545vdfmttj21orpcrxevj1m4on.jpeg" alt="Мухаммад М" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Мухаммад М</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-25%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(49)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Кавказ</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">✵ Планета Дагестан ✵ 4 дня ✵ Всё включено ✵</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">“Дагестан - это Вселенная в миниатюре” - как-то сказал руков...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 39 500</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 29 625</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 4 дня </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 15 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +37 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;Планета Дагестан ✵ 4 дня ✵ Всё включено ✵",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-15T00:00:00.000Z",
  "url": "https://youtravel.me/tours/28022/_%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_4_%D0%B4%D0%BD%D1%8F_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/28022/media/00f/00fcad1344a34a5eefce9f98d42e7383.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "“Дагестан - это Вселенная в миниатюре” - как-то сказал&nbsp;руководитель нашей команды Муртазали Магомедов.\r\nПожалуй, с этим согласится каждый,...",
  "organizer": {
    "@type": "Person",
    "name": "Мухаммад М.",
    "url": "https://youtravel.me/expert/21254/%D0%BC%D1%83%D1%85%D0%B0%D0%BC%D0%BC%D0%B0%D0%B4"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Мухаммад М.",
    "url": "https://youtravel.me/expert/21254/%D0%BC%D1%83%D1%85%D0%B0%D0%BC%D0%BC%D0%B0%D0%B4"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Кавказ",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Кавказ",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/28022/_%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_4_%D0%B4%D0%BD%D1%8F_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 39500,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/16945/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82_%D0%B1%D1%83%D1%85%D0%B0%D1%80%D0%B0_%D1%81%D0%B0%D0%BC%D0%B0%D1%80%D0%BA%D0%B0%D0%BD%D0%B4_%D1%87%D0%B8%D0%BC%D0%B3%D0%B0%D0%BD_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_"
                               title="Золотой Треугольник: Ташкент-Бухара-Самарканд+Чимган ( завтраки+обеды)" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="16945" data-name="Золотой Треугольник: Ташкент-Бухара-Самарканд+Чимган ( завтраки+обеды)" data-price="79416" data-countries="Узбекистан" data-type="[object Object]" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/"
                                 class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Золотой Треугольник: Ташкент-Бухара-Самарканд+Чимган ( завтраки+обеды)" src="./assets/3r6e22rk9s5cq2bvchqjcs8ytaytwzj4.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16945/media/fd8/3r6e22rk9s5cq2bvchqjcs8ytaytwzj4.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16945/media/fd8/3r6e22rk9s5cq2bvchqjcs8ytaytwzj4.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16945/media/fd8/3r6e22rk9s5cq2bvchqjcs8ytaytwzj4.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="16945" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg"
                                                                                                                src="./assets/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" alt="Асия " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Асия</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(37)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Золотой Треугольник: Ташкент-Бухара-Самарканд+Чимган ( завтраки+обеды)</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Если Вам хочется новых  впечатлений, наивкуснейшей еды, позн...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 79 416</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 7 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 11 - 17 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +17 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Золотой Треугольник: Ташкент-Бухара-Самарканд+Чимган ( завтраки+обеды)",
  "startDate": "2023-06-11T00:00:00.000Z",
  "endDate": "2023-06-17T00:00:00.000Z",
  "url": "https://youtravel.me/tours/16945/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82_%D0%B1%D1%83%D1%85%D0%B0%D1%80%D0%B0_%D1%81%D0%B0%D0%BC%D0%B0%D1%80%D0%BA%D0%B0%D0%BD%D0%B4_%D1%87%D0%B8%D0%BC%D0%B3%D0%B0%D0%BD_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/16945/media/fd8/3r6e22rk9s5cq2bvchqjcs8ytaytwzj4.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Если Вам хочется новых&nbsp; впечатлений, наивкуснейшей еды, познакомиться с самым гостеприимным народом и еще очутиться в сказке 1001 ночи, то вы...",
  "organizer": {
    "@type": "Person",
    "name": "Асия .",
    "url": "https://youtravel.me/expert/37356/%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Асия .",
    "url": "https://youtravel.me/expert/37356/%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-11T00:00:00.000Z",
    "url": "https://youtravel.me/tours/16945/%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9_%D1%82%D1%80%D0%B5%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82_%D0%B1%D1%83%D1%85%D0%B0%D1%80%D0%B0_%D1%81%D0%B0%D0%BC%D0%B0%D1%80%D0%BA%D0%B0%D0%BD%D0%B4_%D1%87%D0%B8%D0%BC%D0%B3%D0%B0%D0%BD_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_",
    "price": 79416,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/18029/%D1%8D%D1%82%D0%BD%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD%D1%83_%D0%B3%D0%BE%D1%80%D1%8B_%D0%BB%D1%8E%D0%B4%D0%B8_%D0%B8_%D1%82%D1%80%D0%B0%D0%B4%D0%B8%D1%86%D0%B8%D0%B8" title="Этнотур по Узбекистану: горы, люди и традиции" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="18029" data-name="Этнотур по Узбекистану: горы, люди и традиции" data-price="96262" data-countries="Узбекистан" data-type="Экскурсионный, Поход, Авторский, Этнографический" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/"
                                 class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Этнотур по Узбекистану: горы, люди и традиции" src="./assets/b296c161361515962b32486facb3141f.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18029/media/b29/b296c161361515962b32486facb3141f.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18029/media/b29/b296c161361515962b32486facb3141f.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/18029/media/b29/b296c161361515962b32486facb3141f.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Этнографический</div><!----><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="18029" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/b1b/b1b9b2887e1044bc93ac1fed2fd66b9a.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/b1b/b1b9b2887e1044bc93ac1fed2fd66b9a.jpg"
                                                                                                                src="./assets/b1b9b2887e1044bc93ac1fed2fd66b9a.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/b1b/b1b9b2887e1044bc93ac1fed2fd66b9a.jpg" alt="Николай Х" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Николай Х</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-20%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.8</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(267)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Этнотур по Узбекистану: горы, люди и традиции</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Знакомство с загадочным Узбекистаном: неспешные прогулки по ...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 96 262</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 77 254</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 8 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 25 июн. - 2 июл.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +13 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129505;Этнотур по Узбекистану: горы, люди и традиции",
  "startDate": "2023-06-25T00:00:00.000Z",
  "endDate": "2023-07-02T00:00:00.000Z",
  "url": "https://youtravel.me/tours/18029/%D1%8D%D1%82%D0%BD%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD%D1%83_%D0%B3%D0%BE%D1%80%D1%8B_%D0%BB%D1%8E%D0%B4%D0%B8_%D0%B8_%D1%82%D1%80%D0%B0%D0%B4%D0%B8%D1%86%D0%B8%D0%B8",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/18029/media/b29/b296c161361515962b32486facb3141f.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Знакомство с загадочным Узбекистаном: неспешные прогулки по древним городам, погружение в культуру Востока, увлекательные мастер-классы,...",
  "organizer": {
    "@type": "Person",
    "name": "Николай Х.",
    "url": "https://youtravel.me/expert/10992/%D0%BD%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Николай Х.",
    "url": "https://youtravel.me/expert/10992/%D0%BD%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-25T00:00:00.000Z",
    "url": "https://youtravel.me/tours/18029/%D1%8D%D1%82%D0%BD%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD%D1%83_%D0%B3%D0%BE%D1%80%D1%8B_%D0%BB%D1%8E%D0%B4%D0%B8_%D0%B8_%D1%82%D1%80%D0%B0%D0%B4%D0%B8%D1%86%D0%B8%D0%B8",
    "price": 96262,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38979/%D0%B2%D0%B5%D0%BB%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BE%D0%B3%D0%BE%D0%B4%D1%81%D0%BA%D0%BE%D0%B9_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8" title="Велотур по Вологодской области" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="38979" data-name="Велотур по Вологодской области" data-price="50000" data-countries="Россия, Вологда и Вологодская область" data-type="Экскурсионный, Поход, Авторский, Велотур" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Велотур по Вологодской области" src="./assets/b0uepg8akjgdw4cqx7pklkqn64ib6c4r.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/d03/b0uepg8akjgdw4cqx7pklkqn64ib6c4r.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/d03/b0uepg8akjgdw4cqx7pklkqn64ib6c4r.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/chat/d03/b0uepg8akjgdw4cqx7pklkqn64ib6c4r.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Велотур</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="38979" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/f66/f66dfb6e566aef63bf5da3ff97c355f6.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/f66/f66dfb6e566aef63bf5da3ff97c355f6.jpg"
                                                                                                                src="./assets/f66dfb6e566aef63bf5da3ff97c355f6.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/f66/f66dfb6e566aef63bf5da3ff97c355f6.jpg" alt="Владимир Ф" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Владимир Ф</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__new"> Новый</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Вологда и Вологодская область</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Велотур по Вологодской области</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Велотур по лучшим местам Вологодской области. Маршрут проход...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 50 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 23 - 27 июл.</div><!----></div><!----></div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129505;Велотур по Вологодской области",
  "startDate": "2023-07-23T00:00:00.000Z",
  "endDate": "2023-07-27T00:00:00.000Z",
  "url": "https://youtravel.me/tours/38979/%D0%B2%D0%B5%D0%BB%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BE%D0%B3%D0%BE%D0%B4%D1%81%D0%BA%D0%BE%D0%B9_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/chat/d03/b0uepg8akjgdw4cqx7pklkqn64ib6c4r.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Велотур по лучшим местам Вологодской области. Маршрут проходит по...",
  "organizer": {
    "@type": "Person",
    "name": "Владимир Ф.",
    "url": "https://youtravel.me/expert/25295/%D0%B2%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Владимир Ф.",
    "url": "https://youtravel.me/expert/25295/%D0%B2%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Вологда и Вологодская область",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Вологда и Вологодская область",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-07-23T00:00:00.000Z",
    "url": "https://youtravel.me/tours/38979/%D0%B2%D0%B5%D0%BB%D0%BE%D1%82%D1%83%D1%80_%D0%BF%D0%BE_%D0%B2%D0%BE%D0%BB%D0%BE%D0%B3%D0%BE%D0%B4%D1%81%D0%BA%D0%BE%D0%B9_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D0%B8",
    "price": 50000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/2319/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_" title="Узбекистан: от Ташкента до Хивы." target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="2319" data-name="Узбекистан: от Ташкента до Хивы." data-price="73056" data-countries="Узбекистан" data-type="Гастрономический, Экскурсионный" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Узбекистан: от Ташкента до Хивы." src="./assets/e8f5fb38e434765b39ef6bccbe0325ad.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/2319/media/e8f/e8f5fb38e434765b39ef6bccbe0325ad.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/2319/media/e8f/e8f5fb38e434765b39ef6bccbe0325ad.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/2319/media/e8f/e8f5fb38e434765b39ef6bccbe0325ad.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!----><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="2319" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/a3c/a3cb99d5ac3cbefda06bc2d1805a243b.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/a3c/a3cb99d5ac3cbefda06bc2d1805a243b.jpg"
                                                                                                                src="./assets/a3cb99d5ac3cbefda06bc2d1805a243b.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/a3c/a3cb99d5ac3cbefda06bc2d1805a243b.jpg" alt="Александр Г" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Александр Г</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.6</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(49)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Узбекистан: от Ташкента до Хивы.</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">ВАЖНО! Просьба покупать билеты только после согласования с н...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 73 056</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 12 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 2 - 13 сент.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +3 даты</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;Узбекистан: от Ташкента до Хивы.",
  "startDate": "2023-09-02T00:00:00.000Z",
  "endDate": "2023-09-13T00:00:00.000Z",
  "url": "https://youtravel.me/tours/2319/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/2319/media/e8f/e8f5fb38e434765b39ef6bccbe0325ad.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "ВАЖНО! Просьба покупать билеты только после согласования с нами. Иногда программу по дням приходится переставлять местами, сначала может быть...",
  "organizer": {
    "@type": "Person",
    "name": "Александр Г.",
    "url": "https://youtravel.me/expert/1435/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Александр Г.",
    "url": "https://youtravel.me/expert/1435/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-09-02T00:00:00.000Z",
    "url": "https://youtravel.me/tours/2319/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_",
    "price": 73056,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/22856/%D0%BE%D1%82_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F_%D0%B4%D0%BE_%D0%BC%D0%BE%D0%BD%D0%B3%D0%BE%D0%BB%D0%B8%D0%B8_%D0%B8_%D0%BE%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D0%BE" title="От Алтая до Монголии и обратно" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="22856" data-name="От Алтая до Монголии и обратно" data-price="52000" data-countries="Россия, Алтай" data-type="Экскурсионный, Автотур, Фототур, Семейный, Авторский" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="От Алтая до Монголии и обратно" src="./assets/8na2masfgq3cyr75kp9dj90bz16dq7is.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22856/media/ccc/8na2masfgq3cyr75kp9dj90bz16dq7is.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22856/media/ccc/8na2masfgq3cyr75kp9dj90bz16dq7is.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/22856/media/ccc/8na2masfgq3cyr75kp9dj90bz16dq7is.jpeg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Авторский</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="22856" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/10a/10a307dec0ed2e5807b15219105580e9.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/10a/10a307dec0ed2e5807b15219105580e9.jpeg"
                                                                                                                src="./assets/10a307dec0ed2e5807b15219105580e9.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/10a/10a307dec0ed2e5807b15219105580e9.jpeg" alt="Лена К" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Лена К</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(51)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Алтай</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">От Алтая до Монголии и обратно</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Тур «От Алтая до Монголии и обратно» предназначен для тех, к...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 52 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 6 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 20 - 25 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +13 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;От Алтая до Монголии и обратно",
  "startDate": "2023-06-20T00:00:00.000Z",
  "endDate": "2023-06-25T00:00:00.000Z",
  "url": "https://youtravel.me/tours/22856/%D0%BE%D1%82_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F_%D0%B4%D0%BE_%D0%BC%D0%BE%D0%BD%D0%B3%D0%BE%D0%BB%D0%B8%D0%B8_%D0%B8_%D0%BE%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D0%BE",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/22856/media/ccc/8na2masfgq3cyr75kp9dj90bz16dq7is.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Тур «От Алтая до Монголии и обратно» предназначен для тех, кому не интересны пакетные предложения и отдых, ограниченный гостиничным...",
  "organizer": {
    "@type": "Person",
    "name": "Лена К.",
    "url": "https://youtravel.me/expert/12648/%D0%BB%D0%B5%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Лена К.",
    "url": "https://youtravel.me/expert/12648/%D0%BB%D0%B5%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Алтай",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Алтай",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-20T00:00:00.000Z",
    "url": "https://youtravel.me/tours/22856/%D0%BE%D1%82_%D0%B0%D0%BB%D1%82%D0%B0%D1%8F_%D0%B4%D0%BE_%D0%BC%D0%BE%D0%BD%D0%B3%D0%BE%D0%BB%D0%B8%D0%B8_%D0%B8_%D0%BE%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D0%BE",
    "price": 52000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/10520/_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="«ДАГЕСТАН-ВСЕ ВКЛЮЧЕНО!»" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="10520" data-name="«ДАГЕСТАН-ВСЕ ВКЛЮЧЕНО!»" data-price="26000" data-countries="Россия, Дагестан" data-type="На внедорожниках, Семейный, Тур в горы, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="«ДАГЕСТАН-ВСЕ ВКЛЮЧЕНО!»" src="./assets/iz0v14pec3kxm1ykj47bdqcahkw526oi.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10520/media/f4b/iz0v14pec3kxm1ykj47bdqcahkw526oi.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10520/media/f4b/iz0v14pec3kxm1ykj47bdqcahkw526oi.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10520/media/f4b/iz0v14pec3kxm1ykj47bdqcahkw526oi.jpeg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!----><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="10520" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/9be/9be5102489e8f920aa721a361f1aae03.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/9be/9be5102489e8f920aa721a361f1aae03.jpeg"
                                                                                                                src="./assets/9be5102489e8f920aa721a361f1aae03.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/9be/9be5102489e8f920aa721a361f1aae03.jpeg" alt="Ахмад M" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Ахмад M</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-5%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(223)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Дагестан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">«ДАГЕСТАН-ВСЕ ВКЛЮЧЕНО!»</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Отличие наших туров в том, что мы команда молодых и професси...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 26 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 24 700</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 3 дня </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 14 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +37 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;«ДАГЕСТАН-ВСЕ ВКЛЮЧЕНО!»",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-14T00:00:00.000Z",
  "url": "https://youtravel.me/tours/10520/_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/10520/media/f4b/iz0v14pec3kxm1ykj47bdqcahkw526oi.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Отличие наших туров в том, что мы команда молодых и профессиональных гидов, прошедших обучение по специальности!&nbsp;&nbsp;&nbsp;\r\n&nbsp;Вас...",
  "organizer": {
    "@type": "Person",
    "name": "Ахмад M.",
    "url": "https://youtravel.me/expert/13248/%D0%B0%D1%85%D0%BC%D0%B0%D0%B4"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Ахмад M.",
    "url": "https://youtravel.me/expert/13248/%D0%B0%D1%85%D0%BC%D0%B0%D0%B4"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Дагестан",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дагестан",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/10520/_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 26000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/11073/%D1%8F%D1%85%D1%82%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D1%80%D1%83%D0%B8%D0%B7_%D0%B2%D0%B4%D0%BE%D0%BB%D1%8C_%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B9_%D1%82%D1%80%D0%BE%D0%BF%D1%8B_%D0%B4%D0%BB%D1%8F_%D0%BE%D0%B4%D0%BD%D0%BE%D0%B3%D0%BE_%D0%B8%D0%BB%D0%B8_%D0%BF%D0%B0%D1%80" title="Яхтенный круиз вдоль Ликийской тропы. Для одного или пар" target="_blank"
                               class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="11073" data-name="Яхтенный круиз вдоль Ликийской тропы. Для одного или пар" data-price="82384" data-countries="Турция" data-type="Экскурсионный, Семейный, Гастрономический, На море, Яхтинг" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Яхтенный круиз вдоль Ликийской тропы. Для одного или пар" src="./assets/b1619068e9d41efa4660deb9f8e5a269.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/11073/media/b16/b1619068e9d41efa4660deb9f8e5a269.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/11073/media/b16/b1619068e9d41efa4660deb9f8e5a269.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/11073/media/b16/b1619068e9d41efa4660deb9f8e5a269.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Яхтинг</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="11073" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/ccd/ccdbdd0e0d2fe05a9dead3c13cd4c38d.JPG" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/ccd/ccdbdd0e0d2fe05a9dead3c13cd4c38d.JPG"
                                                                                                                src="./assets/ccdbdd0e0d2fe05a9dead3c13cd4c38d.JPG" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/ccd/ccdbdd0e0d2fe05a9dead3c13cd4c38d.JPG" alt="Pavel K" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Pavel K</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(38)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Турция</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Яхтенный круиз вдоль Ликийской тропы. Для одного или пар</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Белоснежная парусная яхта
это абсолютно другой стиль путеше...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 82 384</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 8 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 17 - 24 июн.</div>
                                                <div data-v-3859ed36="" class="tour-card__body__date__free-spaces">
                                                    <svg data-v-6cd26eb7="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14" width="8" height="14" color="inherit" class="svg inherit ">
                                                        <path data-v-6cd26eb7="" fill="currentColor" d="M3.987.492c.004-.054-.07-.075-.095-.025L.036 8.28a.05.05 0 0 0 .044.072h3.525l-.382 5.155c-.004.054.07.075.095.026l3.82-7.742a.1.1 0 0 0-.089-.145H3.605L3.987.492z"></path>
                                                    </svg>
                                                    <span data-v-3859ed36="">1 место</span></div>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +21 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#11088;Яхтенный круиз вдоль Ликийской тропы. Для одного или пар",
  "startDate": "2023-06-17T00:00:00.000Z",
  "endDate": "2023-06-24T00:00:00.000Z",
  "url": "https://youtravel.me/tours/11073/%D1%8F%D1%85%D1%82%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D1%80%D1%83%D0%B8%D0%B7_%D0%B2%D0%B4%D0%BE%D0%BB%D1%8C_%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B9_%D1%82%D1%80%D0%BE%D0%BF%D1%8B_%D0%B4%D0%BB%D1%8F_%D0%BE%D0%B4%D0%BD%D0%BE%D0%B3%D0%BE_%D0%B8%D0%BB%D0%B8_%D0%BF%D0%B0%D1%80",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/11073/media/b16/b1619068e9d41efa4660deb9f8e5a269.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Белоснежная парусная яхта\r\nэто абсолютно другой стиль путешествия! Романтика моря, потрясающие пейзажи, зажигательные вечеринки и вкусная кухня -...",
  "organizer": {
    "@type": "Person",
    "name": "Pavel K.",
    "url": "https://youtravel.me/expert/6526/pavel"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Pavel K.",
    "url": "https://youtravel.me/expert/6526/pavel"
  },
  "location": {
    "@type": "Place",
    "name": "Турция",
    "url": "https://youtravel.me/tours/country/турция",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Турция"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-17T00:00:00.000Z",
    "url": "https://youtravel.me/tours/11073/%D1%8F%D1%85%D1%82%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D1%80%D1%83%D0%B8%D0%B7_%D0%B2%D0%B4%D0%BE%D0%BB%D1%8C_%D0%BB%D0%B8%D0%BA%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B9_%D1%82%D1%80%D0%BE%D0%BF%D1%8B_%D0%B4%D0%BB%D1%8F_%D0%BE%D0%B4%D0%BD%D0%BE%D0%B3%D0%BE_%D0%B8%D0%BB%D0%B8_%D0%BF%D0%B0%D1%80",
    "price": 82384,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/27947/%D0%BB%D1%83%D1%87%D1%88%D0%B5%D0%B5_%D0%B2_%D0%B3%D1%80%D1%83%D0%B7%D0%B8%D0%B8_%D0%B7%D0%B0_7_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80%D1%8B_%D0%B5%D0%B4%D0%B0_%D0%B2%D0%B8%D0%BD%D0%BE_%D1%85%D1%80%D0%B0%D0%BC%D1%8B" title="Лучшее в Грузии за 7 дней! Горы, еда, вино, храмы" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="27947" data-name="Лучшее в Грузии за 7 дней! Горы, еда, вино, храмы" data-price="44000" data-countries="Грузия, Казбек" data-type="Автотур, Авторский, Этнографический, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Лучшее в Грузии за 7 дней! Горы, еда, вино, храмы" src="./assets/8e4f6cd079409a6d32acf09bd68b967e.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/27947/media/8e4/8e4f6cd079409a6d32acf09bd68b967e.jpeg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/27947/media/8e4/8e4f6cd079409a6d32acf09bd68b967e.jpeg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/27947/media/8e4/8e4f6cd079409a6d32acf09bd68b967e.jpeg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="27947" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/45e/45e7899558b7738a7a2d0e33f8bf419a.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/45e/45e7899558b7738a7a2d0e33f8bf419a.jpg"
                                                                                                                src="./assets/45e7899558b7738a7a2d0e33f8bf419a.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/45e/45e7899558b7738a7a2d0e33f8bf419a.jpg" alt="Снежанна К" class="tour-card__image__expert__photo lazyload awards_photo">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1 awards_title">Снежанна К</div>
                                                <div data-v-3859ed36="" class="awards_item best_expert">Лучший организатор 2022</div>
                                            </div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-25%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(457)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Грузия, Казбек</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Лучшее в Грузии за 7 дней! Горы, еда, вино, храмы</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">За 7 дней мы посмотрим самые знаковые достопримечательности ...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 44 000</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 33 000</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 7 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 11 - 17 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +23 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129505;Лучшее в Грузии за 7 дней! Горы, еда, вино, храмы",
  "startDate": "2023-06-11T00:00:00.000Z",
  "endDate": "2023-06-17T00:00:00.000Z",
  "url": "https://youtravel.me/tours/27947/%D0%BB%D1%83%D1%87%D1%88%D0%B5%D0%B5_%D0%B2_%D0%B3%D1%80%D1%83%D0%B7%D0%B8%D0%B8_%D0%B7%D0%B0_7_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80%D1%8B_%D0%B5%D0%B4%D0%B0_%D0%B2%D0%B8%D0%BD%D0%BE_%D1%85%D1%80%D0%B0%D0%BC%D1%8B",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/27947/media/8e4/8e4f6cd079409a6d32acf09bd68b967e.jpeg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "За 7&nbsp;дней мы посмотрим самые знаковые достопримечательности Грузии! Древние храмы, вкусные винодельни, парки, крепости с богатой историей,...",
  "organizer": {
    "@type": "Person",
    "name": "Снежанна К.",
    "url": "https://youtravel.me/expert/9103/%D1%81%D0%BD%D0%B5%D0%B6%D0%B0%D0%BD%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Снежанна К.",
    "url": "https://youtravel.me/expert/9103/%D1%81%D0%BD%D0%B5%D0%B6%D0%B0%D0%BD%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Грузия, Казбек",
    "url": "https://youtravel.me/tours/country/грузия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Казбек",
      "addressCountry": "Грузия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-11T00:00:00.000Z",
    "url": "https://youtravel.me/tours/27947/%D0%BB%D1%83%D1%87%D1%88%D0%B5%D0%B5_%D0%B2_%D0%B3%D1%80%D1%83%D0%B7%D0%B8%D0%B8_%D0%B7%D0%B0_7_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80%D1%8B_%D0%B5%D0%B4%D0%B0_%D0%B2%D0%B8%D0%BD%D0%BE_%D1%85%D1%80%D0%B0%D0%BC%D1%8B",
    "price": 44000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38809/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2_%D0%BF%D0%BE_%D1%80%D0%B5%D0%BA%D0%B5_%D0%BE%D0%BA%D0%B0_%D1%81%D0%B0%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F" title="СПЛАВ ПО РЕКЕ ОКА САЯНСКАЯ" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="38809" data-name="СПЛАВ ПО РЕКЕ ОКА САЯНСКАЯ" data-price="45000" data-countries="Россия, Байкал" data-type="Экспедиция, Экстрим, Водный тур, Сплав" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="СПЛАВ ПО РЕКЕ ОКА САЯНСКАЯ" src="./assets/26lzgn53lsxbbn2dm24nki05qph4ebck.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/d06/26lzgn53lsxbbn2dm24nki05qph4ebck.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/d06/26lzgn53lsxbbn2dm24nki05qph4ebck.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/d06/26lzgn53lsxbbn2dm24nki05qph4ebck.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Сплав</div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__new"><span data-v-3859ed36="">Новый</span></div><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="38809" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/02e/ay3pbwzgx46xiaf3p5to71bgh7c3zs2m.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/02e/ay3pbwzgx46xiaf3p5to71bgh7c3zs2m.jpeg"
                                                                                                                src="./assets/ay3pbwzgx46xiaf3p5to71bgh7c3zs2m.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/02e/ay3pbwzgx46xiaf3p5to71bgh7c3zs2m.jpeg" alt="Екатерина А" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Екатерина А</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__new"> Новый</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Байкал</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">СПЛАВ ПО РЕКЕ ОКА САЯНСКАЯ</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Сплав по горной реке  Ока Саянская  на рафтах или катамарана...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 45 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 7 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 11 - 17 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +100 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;СПЛАВ ПО РЕКЕ ОКА САЯНСКАЯ",
  "startDate": "2023-06-11T00:00:00.000Z",
  "endDate": "2023-06-17T00:00:00.000Z",
  "url": "https://youtravel.me/tours/38809/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2_%D0%BF%D0%BE_%D1%80%D0%B5%D0%BA%D0%B5_%D0%BE%D0%BA%D0%B0_%D1%81%D0%B0%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/d06/26lzgn53lsxbbn2dm24nki05qph4ebck.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Сплав по горной реке &nbsp;Ока Саянская&nbsp; на рафтах или катамаранах, &nbsp;одной из живописных рек Сибири.&nbsp;Наличие опыта сплава по реке...",
  "organizer": {
    "@type": "Person",
    "name": "Екатерина А.",
    "url": "https://youtravel.me/expert/120050/%D0%B5%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Екатерина А.",
    "url": "https://youtravel.me/expert/120050/%D0%B5%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Байкал",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Байкал",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-11T00:00:00.000Z",
    "url": "https://youtravel.me/tours/38809/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2_%D0%BF%D0%BE_%D1%80%D0%B5%D0%BA%D0%B5_%D0%BE%D0%BA%D0%B0_%D1%81%D0%B0%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F",
    "price": 45000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/24917/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%87%D0%B0%D1%80%D1%83%D1%8E%D1%89%D0%B5%D0%B5_%D0%BF%D1%83%D1%82%D0%B5%D1%88%D0%B5%D1%81%D1%82%D0%B2%D0%B8%D0%B5_%D0%BF%D0%BE_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0%D0%BC" title="Узбекистан, чарующее путешествие по древним городам " target="_blank" class="serp-tours__result__item"
                               style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="24917" data-name="Узбекистан, чарующее путешествие по древним городам " data-price="42000" data-countries="Узбекистан" data-type="Семейный, Экскурсионный" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Узбекистан, чарующее путешествие по древним городам " src="./assets/89f512346b694b0223321c45841632b3.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24917/media/89f/89f512346b694b0223321c45841632b3.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24917/media/89f/89f512346b694b0223321c45841632b3.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/24917/media/89f/89f512346b694b0223321c45841632b3.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="24917" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/c41/l5vauhvyb1srwfvl7wp09de1ve1kkyqm.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/c41/l5vauhvyb1srwfvl7wp09de1ve1kkyqm.jpeg"
                                                                                                                src="./assets/l5vauhvyb1srwfvl7wp09de1ve1kkyqm.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/c41/l5vauhvyb1srwfvl7wp09de1ve1kkyqm.jpeg" alt="Мадина D" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Мадина D</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.5</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(17)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Узбекистан, чарующее путешествие по древним городам </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Узбекистан – гостеприимный и теплый край, где практически кр...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 42 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 17 - 21 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +17 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;Узбекистан, чарующее путешествие по древним городам",
  "startDate": "2023-06-17T00:00:00.000Z",
  "endDate": "2023-06-21T00:00:00.000Z",
  "url": "https://youtravel.me/tours/24917/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%87%D0%B0%D1%80%D1%83%D1%8E%D1%89%D0%B5%D0%B5_%D0%BF%D1%83%D1%82%D0%B5%D1%88%D0%B5%D1%81%D1%82%D0%B2%D0%B8%D0%B5_%D0%BF%D0%BE_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0%D0%BC",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/24917/media/89f/89f512346b694b0223321c45841632b3.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Узбекистан – гостеприимный и теплый край, где практически круглый год светит яркое солнце. \r\nВ нашей стране вы поистине почувствуете себя как...",
  "organizer": {
    "@type": "Person",
    "name": "Мадина D.",
    "url": "https://youtravel.me/expert/72323/%D0%BC%D0%B0%D0%B4%D0%B8%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Мадина D.",
    "url": "https://youtravel.me/expert/72323/%D0%BC%D0%B0%D0%B4%D0%B8%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-17T00:00:00.000Z",
    "url": "https://youtravel.me/tours/24917/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD_%D1%87%D0%B0%D1%80%D1%83%D1%8E%D1%89%D0%B5%D0%B5_%D0%BF%D1%83%D1%82%D0%B5%D1%88%D0%B5%D1%81%D1%82%D0%B2%D0%B8%D0%B5_%D0%BF%D0%BE_%D0%B4%D1%80%D0%B5%D0%B2%D0%BD%D0%B8%D0%BC_%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0%D0%BC",
    "price": 42000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/29744/%D1%82%D1%80%D0%BE%D0%BF%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2_%D1%80%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B0%D0%B9%D0%B2%D0%B8%D0%BD%D0%B3_%D1%80%D0%B5%D0%BB%D0%B0%D0%BA%D1%81_%D0%B8_%D1%84%D1%80%D1%83%D0%BA%D1%82%D0%BE%D0%B2%D1%8B%D0%B5_%D0%BF%D0%BB%D0%B0%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D0%B8"
                               title="Тропический остров: райский дайвинг, релакс и фруктовые плантации" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="29744" data-name="Тропический остров: райский дайвинг, релакс и фруктовые плантации" data-price="107864" data-countries="Мальдивы" data-type="Экскурсионный, На море, Рыбалка, Дайвинг, Авторский" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Тропический остров: райский дайвинг, релакс и фруктовые плантации" src="./assets/qs4180k2g1h3b2era7phet0er4nh3s7u.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/29744/media/ae8/qs4180k2g1h3b2era7phet0er4nh3s7u.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/29744/media/ae8/qs4180k2g1h3b2era7phet0er4nh3s7u.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/29744/media/ae8/qs4180k2g1h3b2era7phet0er4nh3s7u.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Авторский</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="29744" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/aaf/27lkcbl3rzaoamnloqtl53vfjk0thgbe.JPG" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/aaf/27lkcbl3rzaoamnloqtl53vfjk0thgbe.JPG"
                                                                                                                src="./assets/27lkcbl3rzaoamnloqtl53vfjk0thgbe.JPG" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/aaf/27lkcbl3rzaoamnloqtl53vfjk0thgbe.JPG" alt="Сергей П" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Сергей П</div><!----></div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__image__discount font-text">-3%</div>
                                    </div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.8</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(31)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Мальдивы</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Тропический остров: райский дайвинг, релакс и фруктовые плантации</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Главная цель программы позволит бюджетно отдохнуть на Мальди...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1 tour-card__body__price__original--discount">₽ 107 864</span><span data-v-3859ed36="" class="tour-card__body__price__discount font-h1">₽ 104 629</span><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 9 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 7 - 15 июл.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +18 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#10004;&#65039;Тропический остров: райский дайвинг, релакс и фруктовые плантации",
  "startDate": "2023-07-07T00:00:00.000Z",
  "endDate": "2023-07-15T00:00:00.000Z",
  "url": "https://youtravel.me/tours/29744/%D1%82%D1%80%D0%BE%D0%BF%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2_%D1%80%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B0%D0%B9%D0%B2%D0%B8%D0%BD%D0%B3_%D1%80%D0%B5%D0%BB%D0%B0%D0%BA%D1%81_%D0%B8_%D1%84%D1%80%D1%83%D0%BA%D1%82%D0%BE%D0%B2%D1%8B%D0%B5_%D0%BF%D0%BB%D0%B0%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D0%B8",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/29744/media/ae8/qs4180k2g1h3b2era7phet0er4nh3s7u.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Главная цель программы позволит бюджетно отдохнуть на Мальдивских островах, но в тоже время получить максимум ярких&nbsp;эмоций. Предлагаю вашему...",
  "organizer": {
    "@type": "Person",
    "name": "Сергей П.",
    "url": "https://youtravel.me/expert/83876/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Сергей П.",
    "url": "https://youtravel.me/expert/83876/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9"
  },
  "location": {
    "@type": "Place",
    "name": "Мальдивы",
    "url": "https://youtravel.me/tours/country/мальдивы",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Мальдивы"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-07-07T00:00:00.000Z",
    "url": "https://youtravel.me/tours/29744/%D1%82%D1%80%D0%BE%D0%BF%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2_%D1%80%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B0%D0%B9%D0%B2%D0%B8%D0%BD%D0%B3_%D1%80%D0%B5%D0%BB%D0%B0%D0%BA%D1%81_%D0%B8_%D1%84%D1%80%D1%83%D0%BA%D1%82%D0%BE%D0%B2%D1%8B%D0%B5_%D0%BF%D0%BB%D0%B0%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D0%B8",
    "price": 107864,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/10557/wow_%D1%88%D1%80%D0%B8_%D0%BB%D0%B0%D0%BD%D0%BA%D0%B0_%D0%B2_%D0%BF%D0%BE%D0%B3%D0%BE%D0%BD%D0%B5_%D0%B7%D0%B0_%D0%BF%D1%80%D0%B8%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8_%D0%BA%D0%B8%D1%82%D1%8B_%D0%B3%D0%BE%D1%80%D1%8B_%D1%87%D0%B0%D0%B9_%D0%B8_%D1%81%D0%B2%D1%8F%D1%82%D1%8B%D0%BD%D0%B8_" title="WOW, ШРИ-ЛАНКА! В погоне за приключениями: киты, горы, чай и святыни."
                               target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="10557" data-name="WOW, ШРИ-ЛАНКА! В погоне за приключениями: киты, горы, чай и святыни." data-price="150408" data-countries="Шри-Ланка" data-type="Авторский, На море, Для соло путешественников, Экскурсионный" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="WOW, ШРИ-ЛАНКА! В погоне за приключениями: киты, горы, чай и святыни." src="./assets/o6yoafv55pwp3ye2f0azb8ktrhflhv5o.png" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10557/media/41c/o6yoafv55pwp3ye2f0azb8ktrhflhv5o.png"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10557/media/41c/o6yoafv55pwp3ye2f0azb8ktrhflhv5o.png" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/10557/media/41c/o6yoafv55pwp3ye2f0azb8ktrhflhv5o.png" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="10557" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/9eb/9ebc25c8e0e70929b26a902505de7433.jpeg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/9eb/9ebc25c8e0e70929b26a902505de7433.jpeg"
                                                                                                                src="./assets/9ebc25c8e0e70929b26a902505de7433.jpeg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/9eb/9ebc25c8e0e70929b26a902505de7433.jpeg" alt="Полина А" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Полина А</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(38)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Шри-Ланка</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">WOW, ШРИ-ЛАНКА! В погоне за приключениями: киты, горы, чай и святыни.</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">ТЫ ГОТОВ К НАСТОЯЩЕМУ ПРИКЛЮЧЕНИЮ ВМЕСТО БАНАЛЬНОГО НАБОРА Э...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 150 408</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 14 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 2 - 15 нояб.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +7 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#129523;WOW, ШРИ-ЛАНКА! В погоне за приключениями: киты, горы, чай и святыни.",
  "startDate": "2023-11-02T00:00:00.000Z",
  "endDate": "2023-11-15T00:00:00.000Z",
  "url": "https://youtravel.me/tours/10557/wow_%D1%88%D1%80%D0%B8_%D0%BB%D0%B0%D0%BD%D0%BA%D0%B0_%D0%B2_%D0%BF%D0%BE%D0%B3%D0%BE%D0%BD%D0%B5_%D0%B7%D0%B0_%D0%BF%D1%80%D0%B8%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8_%D0%BA%D0%B8%D1%82%D1%8B_%D0%B3%D0%BE%D1%80%D1%8B_%D1%87%D0%B0%D0%B9_%D0%B8_%D1%81%D0%B2%D1%8F%D1%82%D1%8B%D0%BD%D0%B8_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/10557/media/41c/o6yoafv55pwp3ye2f0azb8ktrhflhv5o.png"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "ТЫ ГОТОВ К НАСТОЯЩЕМУ ПРИКЛЮЧЕНИЮ ВМЕСТО БАНАЛЬНОГО НАБОРА ЭКСКУРСИЙ?Наши групповые туры по Шри-Ланке - это&nbsp;эксклюзивные путешествия с...",
  "organizer": {
    "@type": "Person",
    "name": "Полина А.",
    "url": "https://youtravel.me/expert/13913/%D0%BF%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Полина А.",
    "url": "https://youtravel.me/expert/13913/%D0%BF%D0%BE%D0%BB%D0%B8%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Шри-Ланка",
    "url": "https://youtravel.me/tours/country/шри-ланка",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Шри-Ланка"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-11-02T00:00:00.000Z",
    "url": "https://youtravel.me/tours/10557/wow_%D1%88%D1%80%D0%B8_%D0%BB%D0%B0%D0%BD%D0%BA%D0%B0_%D0%B2_%D0%BF%D0%BE%D0%B3%D0%BE%D0%BD%D0%B5_%D0%B7%D0%B0_%D0%BF%D1%80%D0%B8%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%D0%BC%D0%B8_%D0%BA%D0%B8%D1%82%D1%8B_%D0%B3%D0%BE%D1%80%D1%8B_%D1%87%D0%B0%D0%B9_%D0%B8_%D1%81%D0%B2%D1%8F%D1%82%D1%8B%D0%BD%D0%B8_",
    "price": 150408,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/16244/%D0%BD%D0%B0%D1%81%D0%BB%D0%B0%D0%B4%D0%B8%D1%81%D1%8C_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_" title="Насладись мелодией гор! Всё включено!  " target="_blank" class="serp-tours__result__item" style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="16244" data-name="Насладись мелодией гор! Всё включено!  " data-price="39000" data-countries="Россия, Дагестан" data-type="Экскурсионный, Семейный, Тур в горы, Авторский" data-currency-code="RUB" data-list="/tours/" class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="Насладись мелодией гор! Всё включено!  " src="./assets/5a872795302cc14a06d1790cffee43fb.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16244/media/5a8/5a872795302cc14a06d1790cffee43fb.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16244/media/5a8/5a872795302cc14a06d1790cffee43fb.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/16244/media/5a8/5a872795302cc14a06d1790cffee43fb.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Авторский</div><!----><!----><!----><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="16244" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/495/495b0fbdeea0f30faa36e2efc54b2b98.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/495/495b0fbdeea0f30faa36e2efc54b2b98.jpg"
                                                                                                                src="./assets/495b0fbdeea0f30faa36e2efc54b2b98.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/495/495b0fbdeea0f30faa36e2efc54b2b98.jpg" alt="Татьяна Ш" class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Татьяна Ш</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">5.0</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(75)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Россия, Дагестан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">Насладись мелодией гор! Всё включено!  </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36="">Если вы устали от стандартных пакетных туров, хотите путешес...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 39 000</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 5 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 12 - 16 июн.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +21 дат</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#11088;Насладись мелодией гор! Всё включено!",
  "startDate": "2023-06-12T00:00:00.000Z",
  "endDate": "2023-06-16T00:00:00.000Z",
  "url": "https://youtravel.me/tours/16244/%D0%BD%D0%B0%D1%81%D0%BB%D0%B0%D0%B4%D0%B8%D1%81%D1%8C_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/16244/media/5a8/5a872795302cc14a06d1790cffee43fb.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "Если вы устали от стандартных пакетных туров, хотите путешествовать в своем ритме и любите проводить время в теплой дружной компании, то ждем Вас...",
  "organizer": {
    "@type": "Person",
    "name": "Татьяна Ш.",
    "url": "https://youtravel.me/expert/32411/%D1%82%D0%B0%D1%82%D1%8C%D1%8F%D0%BD%D0%B0"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Татьяна Ш.",
    "url": "https://youtravel.me/expert/32411/%D1%82%D0%B0%D1%82%D1%8C%D1%8F%D0%BD%D0%B0"
  },
  "location": {
    "@type": "Place",
    "name": "Россия, Дагестан",
    "url": "https://youtravel.me/tours/country/россия",
    "address": {
      "@type": "PostalAddress",
      "addressRegion": "Дагестан",
      "addressCountry": "Россия"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-06-12T00:00:00.000Z",
    "url": "https://youtravel.me/tours/16244/%D0%BD%D0%B0%D1%81%D0%BB%D0%B0%D0%B4%D0%B8%D1%81%D1%8C_%D0%BC%D0%B5%D0%BB%D0%BE%D0%B4%D0%B8%D0%B5%D0%B9_%D0%B3%D0%BE%D1%80_%D0%B2%D1%81%D1%91_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE_",
    "price": 39000,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/20461/%D1%81%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0_%D0%B0%D0%BB%D0%BB%D0%B0%D0%B4%D0%B8%D0%BD%D0%B0_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_" title="СКАЗКА АЛЛАДИНА: От Ташкента до Хивы (завтраки+обеды)" target="_blank" class="serp-tours__result__item"
                               style="display: inline-block;">
                            <div data-v-3859ed36="" data-id="20461" data-name="СКАЗКА АЛЛАДИНА: От Ташкента до Хивы (завтраки+обеды)" data-price="90417" data-countries="Узбекистан" data-type="Гастрономический, Авторский, Экскурсионный" data-currency-code="RUB" data-meta="{&quot;user_id&quot;:false,&quot;guest_id&quot;:true,&quot;model&quot;:&quot;ALS_v2_2&quot;,&quot;model_version&quot;:&quot;2023-04-21T09-13-54&quot;,&quot;strategy&quot;:&quot;unknown_by_history&quot;}" data-list="/tours/"
                                 class="tour-card">
                                <div data-v-3859ed36="" class="tour-card__image"><img data-v-3859ed36="" loading="lazy" alt="СКАЗКА АЛЛАДИНА: От Ташкента до Хивы (завтраки+обеды)" src="./assets/x39ivo3djpv5ra6z35aj3kzdjkoqlqjf.jpg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/20461/media/441/x39ivo3djpv5ra6z35aj3kzdjkoqlqjf.jpg"
                                                                                      data-src="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/20461/media/441/x39ivo3djpv5ra6z35aj3kzdjkoqlqjf.jpg" data-srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/20461/media/441/x39ivo3djpv5ra6z35aj3kzdjkoqlqjf.jpg" class="lazyload">
                                    <div data-v-3859ed36="" class="tour-card__image__top">
                                        <div data-v-3859ed36="" class="tour-card__image__top__left">
                                            <div data-v-3859ed36="" class="tour-card__image__top__type">Экскурсионный</div><!---->
                                            <div data-v-3859ed36="" class="tour-card__image__top__private"><span data-v-3859ed36="">Можно индивидуально</span></div>
                                            <div data-v-3859ed36="" class="tour-card__image__top__additional"><span data-v-3859ed36="">Рекомендуем!</span></div><!----><!----><!----></div>
                                        <div data-v-3859ed36="" data-itemid="20461" class="tour-card__image__top__favorite">
                                            <svg data-v-c404d214="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                <path data-v-c404d214="" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.75 3.75c-1.341 0-2.91 1.52-3.75 2.5-.84-.98-2.409-2.5-3.75-2.5-2.374 0-3.75 1.852-3.75 4.209 0 2.61 2.5 5.374 7.5 8.291 5-2.917 7.5-5.625 7.5-8.125 0-2.357-1.376-4.375-3.75-4.375z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div data-v-3859ed36="" class="tour-card__image__bottom">
                                        <div data-v-3859ed36="" class="tour-card__image__expert font-text"><img data-v-3859ed36="" loading="lazy" data-src="https://cf.youtravel.me/tr:w-128,h-128/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" data-srcset="https://cf.youtravel.me/tr:w-128,h-128/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg"
                                                                                                                src="./assets/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" srcset="https://cf.youtravel.me/tr:w-2,h-2/upload/main/995/wi6dpzdtdh7xc093afdgjeiaqp2k694b.jpg" alt="Асия " class="tour-card__image__expert__photo lazyload">
                                            <div data-v-3859ed36="" class="tour-card__image__expert__title">
                                                <div data-v-3859ed36="" class="tour-card__image__expert__name font-h1">Асия</div><!----></div>
                                        </div><!----></div>
                                </div>
                                <div data-v-3859ed36="" class="tour-card__body">
                                    <div data-v-3859ed36="" class="tour-card__body__section">
                                        <div data-v-3859ed36="" class="tour-card__body__rating">
                                            <div data-v-3859ed36="" class="tour-card__body__rating__icon">
                                                <svg data-v-27e4a090="" data-v-7045e8a0="" data-v-3859ed36="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 13" width="13" height="13" color="inherit" class="svg inherit ">
                                                    <mask data-v-27e4a090="" id="a" fill="#fff">
                                                        <path data-v-27e4a090=""
                                                              d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    </mask>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.979 2.655C5.597 1.44 5.905.833 6.365.73a1 1 0 0 1 .437 0c.46.103.768.71 1.386 1.925l.696 1.37c.019.036.028.054.042.066a.1.1 0 0 0 .016.012c.017.01.037.012.077.018l1.45.206c1.414.2 2.12.3 2.365.715a1 1 0 0 1 .135.424c.04.48-.479.97-1.516 1.95l-1.008.953c-.03.03-.045.044-.053.062a.095.095 0 0 0-.007.019c-.004.02 0 .04.007.081l.249 1.409c.241 1.367.362 2.05.052 2.41a1.001 1.001 0 0 1-.354.261c-.435.192-1.053-.124-2.29-.755l-1.384-.706a.217.217 0 0 0-.072-.03h-.02a.217.217 0 0 0-.072.03l-1.384.706c-1.236.631-1.854.947-2.29.755a1 1 0 0 1-.353-.261c-.31-.36-.19-1.043.052-2.41l.249-1.409a.218.218 0 0 0 .006-.081.1.1 0 0 0-.006-.02c-.008-.017-.023-.032-.054-.06l-1.007-.953C.676 6.437.158 5.946.198 5.467a1 1 0 0 1 .135-.425c.245-.415.951-.515 2.364-.715l1.45-.206c.04-.006.06-.009.078-.018a.1.1 0 0 0 .015-.012c.015-.012.024-.03.043-.067l.696-1.369z"></path>
                                                    <path data-v-27e4a090="" fill="#9AAE2D"
                                                          d="M4.147 4.12l-.21-1.484.21 1.485zm.078-.017L4.976 5.4l-.751-1.298zm.015-.012l.985 1.132L4.24 4.09zM1.714 7.417l1.03-1.09-1.03 1.09zM.198 5.467l-1.495-.127 1.495.126zm.135-.425l-1.292-.761 1.292.761zm2.442 3.49l1.477.26-1.477-.26zm.006-.082l-1.463.328L2.78 8.45zm-.06-.08l-1.03 1.09 1.03-1.09zm.054.06l1.371-.608-1.37.609zm.053 4.181l.605-1.372-.605 1.372zM2.526 9.94l-1.477-.261 1.477.261zm-.052 2.41l-1.135.98 1.135-.98zm4.191-1.2l-.682 1.336.682-1.336zm-.072-.03l.141-1.493-.141 1.493zm-.091.03l.681 1.336-.681-1.336zm.072-.03l.141 1.494-.141-1.494zm4.119 1.23l-1.136-.98 1.136.98zm-2.643-.494l.682-1.336-.682 1.336zm2.289.755l-.605-1.372.605 1.372zm.106-4.242l-1.03-1.09 1.03 1.09zm-.053.062L9.02 7.82l1.37.61zm0 .1l1.477-.26-1.477.26zm-.007-.081l1.464.328-1.464-.328zm2.449-3.408l1.292-.761-1.292.761zm-1.381 2.375l1.03 1.09-1.03-1.09zm1.516-1.95l-1.495.125 1.495-.126zM8.884 4.023l-1.337.68 1.337-.68zm.042.067l-.985 1.132.985-1.132zm.093.03l.211-1.485-.21 1.485zm-.077-.018l.751-1.299-.751 1.299zm-.754-1.448l-1.337.68 1.337-.68zM6.802.73l.327-1.464L6.802.73zm-.437 0L6.038-.734 6.365.73zm.486 2.605l.696 1.37 2.674-1.36-.696-1.37-2.674 1.36zm1.958 2.271l1.45.206.42-2.97-1.449-.206-.421 2.97zm1.613.72l-1.007.953 2.061 2.18 1.007-.952-2.06-2.18zM8.915 8.793l.249 1.409 2.954-.522-.249-1.409-2.954.522zm-.183 1.728l-1.385-.706-1.364 2.672 1.385.706 1.364-2.672zM5.82 9.814l-1.385.706 1.364 2.672 1.384-.706L5.82 9.814zm-1.817.387l.249-1.409-2.954-.522-.25 1.409 2.955.522zm-.251-2.922l-1.008-.952-2.06 2.18 1.007.952 2.06-2.18zm-.844-1.467l1.45-.206-.421-2.97-1.45.206.421 2.97zM5.62 4.704l.696-1.37-2.674-1.359-.697 1.37 2.675 1.36zm-1.262.902c.007 0 .027-.004.048-.007s.06-.01.107-.02c.1-.022.273-.068.463-.178L3.473 2.804c.173-.1.327-.14.403-.156.035-.008.06-.012.066-.013h-.005l.421 2.971zM2.945 3.344c-.006.012-.004.01-.002.005l.033-.058c.04-.066.128-.2.279-.33l1.97 2.262a1.598 1.598 0 0 0 .372-.476l.023-.043-2.675-1.36zm2.031 2.057a1.6 1.6 0 0 0 .25-.178L3.254 2.96a1.4 1.4 0 0 1 .218-.156l1.503 2.597zm-2.232.926c-.548-.518-.857-.814-1.04-1.034-.201-.241.02-.082-.011.299l-2.99-.252c-.072.861.39 1.505.697 1.874.325.39.794.83 1.283 1.293l2.061-2.18zm-.257-3.485c-.667.094-1.304.182-1.795.312-.464.124-1.213.382-1.651 1.127l2.584 1.523c-.194.33-.467.33-.163.25.277-.074.7-.136 1.446-.242l-.421-2.97zm-.794 2.75a.5.5 0 0 1-.068.212L-.959 4.28a2.5 2.5 0 0 0-.338 1.06l2.99.25zm2.559 3.2l.008-.049a1.598 1.598 0 0 0-.015-.621l-2.927.656a1.403 1.403 0 0 1-.02-.513c.002-.005.002-.008 0 .005l2.954.522zM1.69 9.46l.004.004a1.403 1.403 0 0 1-.29-.423l2.741-1.218a1.598 1.598 0 0 0-.358-.508l-.036-.035L1.69 9.46zm2.554-1.337a1.6 1.6 0 0 0-.099-.3L1.404 9.04a1.4 1.4 0 0 1-.086-.262l2.927-.656zm.19 2.398c-.654.334-1.023.52-1.282.615-.28.103-.061-.047.28.104l-1.21 2.745c.776.342 1.52.13 1.967-.034.468-.172 1.027-.46 1.609-.758L4.435 10.52zM1.049 9.68c-.114.644-.226 1.262-.254 1.76-.026.475-.01 1.25.544 1.89l2.27-1.96c.244.283.165.535.182.237.015-.275.084-.682.212-1.405l-2.954-.522zm2.384 1.56a.5.5 0 0 1 .177.13l-2.271 1.96a2.5 2.5 0 0 0 .884.655l1.21-2.745zm3.914-1.425l-.043-.022a1.598 1.598 0 0 0-.57-.165l-.283 2.987a1.403 1.403 0 0 1-.472-.13l.004.002 1.364-2.672zm-.164 2.672c.012-.006.01-.005.005-.003a1.403 1.403 0 0 1-.473.13l-.282-2.986a1.598 1.598 0 0 0-.57.165l-.043.022 1.363 2.672zm-.449-2.859a1.6 1.6 0 0 0-.301 0l.282 2.987a1.402 1.402 0 0 1-.264 0l.283-2.987zm2.43.574c.127.723.197 1.13.212 1.405.017.298-.062.046.181-.236l2.271 1.96c.554-.642.57-1.416.543-1.891-.027-.498-.14-1.116-.253-1.76l-2.954.522zm-1.796 2.991c.582.298 1.14.586 1.609.758.446.164 1.19.376 1.967.034l-1.21-2.745c.341-.15.56-.001.28-.104-.26-.096-.628-.28-1.282-.615l-1.364 2.672zm2.19-1.822a.5.5 0 0 1 .176-.131l1.21 2.745c.34-.15.641-.373.884-.654l-2.27-1.96zm-.143-4.09l-.036.034a1.597 1.597 0 0 0-.358.508l2.741 1.218c-.084.189-.19.315-.243.374-.024.027-.043.045-.047.05-.004.003-.006.005.004-.005L9.415 7.28zm2.454.99l-.001-.005.009.068a1.4 1.4 0 0 1-.028.445l-2.927-.656a1.598 1.598 0 0 0-.016.621l.009.05 2.954-.523zm-2.848-.448a1.6 1.6 0 0 0-.1.3l2.928.656a1.4 1.4 0 0 1-.087.262L9.021 7.822zm1.237-2.01c.747.106 1.17.168 1.447.242.303.08.03.08-.164-.25l2.585-1.523c-.439-.745-1.187-1.003-1.651-1.127-.491-.13-1.128-.218-1.795-.312l-.421 2.97zm2.225 2.695c.49-.463.959-.903 1.284-1.293.308-.369.769-1.013.696-1.874l-2.99.252c-.031-.381.19-.54-.01-.299-.184.22-.493.516-1.04 1.034l2.06 2.18zm-.942-2.703a.5.5 0 0 1-.067-.212l2.99-.252a2.5 2.5 0 0 0-.338-1.06L11.54 5.805zm-3.994-1.1l.022.043a1.598 1.598 0 0 0 .372.475l1.97-2.262a1.404 1.404 0 0 1 .313.39l-.003-.006-2.674 1.36zM9.23 2.636c-.013-.002-.01-.002-.005 0a1.403 1.403 0 0 1 .469.17L8.19 5.4a1.598 1.598 0 0 0 .57.198l.048.007.421-2.97zM7.941 5.223a1.6 1.6 0 0 0 .25.178l1.502-2.597a1.4 1.4 0 0 1 .219.156l-1.97 2.263zm1.584-3.248c-.29-.571-.57-1.125-.843-1.534C8.419.048 7.946-.55 7.129-.734l-.655 2.928c-.358-.08-.446-.324-.285-.084.15.224.335.582.662 1.225l2.674-1.36zm-3.21 1.36c.328-.643.513-1.001.663-1.225.16-.24.072.004-.286.084L6.038-.734C5.22-.55 4.748.048 4.485.441c-.274.41-.553.963-.843 1.534l2.674 1.36zM7.13-.734a2.5 2.5 0 0 0-1.091 0l.654 2.928a.5.5 0 0 1-.218 0L7.13-.734z"
                                                          mask="url(#a)"></path>
                                                </svg>
                                            </div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__rating">4.9</div>
                                            <div data-v-3859ed36="" class="tour-card__body__rating__number">(37)</div>
                                            <div data-v-3859ed36="" class="tour-card__body__location font-text"> · Узбекистан</div>
                                        </div>
                                        <div data-v-3859ed36="" class="tour-card__body__title font-semibold"><span data-v-3859ed36="">СКАЗКА АЛЛАДИНА: От Ташкента до Хивы (завтраки+обеды)</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__description"><span data-v-3859ed36=""> Мы с Вами проложим через Узбекистан: яркий, теплый, весенни...</span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__price"><span data-v-3859ed36="" class="tour-card__body__price__original font-h1">₽ 90 417</span><!----><span data-v-3859ed36="" class="tour-card__body__price__days font-text"> / 7 дней </span></div>
                                        <div data-v-3859ed36="" class="tour-card__body__dates">
                                            <div data-v-3859ed36="" class="tour-card__body__date font-text">
                                                <div data-v-3859ed36="" class="tour-card__body__date__text"> 24 - 30 сент.</div><!----></div>
                                            <div data-v-3859ed36="" class="tour-card__body__more-dates font-text"> +3 даты</div>
                                        </div>
                                    </div>
                                </div>
                                <script data-v-3859ed36="" type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "&#9728;&#65039;СКАЗКА АЛЛАДИНА: От Ташкента до Хивы (завтраки+обеды)",
  "startDate": "2023-09-24T00:00:00.000Z",
  "endDate": "2023-09-30T00:00:00.000Z",
  "url": "https://youtravel.me/tours/20461/%D1%81%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0_%D0%B0%D0%BB%D0%BB%D0%B0%D0%B4%D0%B8%D0%BD%D0%B0_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_",
  "image": [
    "https://cf.youtravel.me/tr:w-2000,h-2000/upload/tours/20461/media/441/x39ivo3djpv5ra6z35aj3kzdjkoqlqjf.jpg"
  ],
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "eventStatus": "https://schema.org/EventScheduled",
  "description": "&nbsp;Мы с Вами проложим через Узбекистан: яркий, теплый, весенний, солнечный и добродушный Узбекистан!!\r\nВперёд за новыми впечатлениями!\r\nВ этом...",
  "organizer": {
    "@type": "Person",
    "name": "Асия .",
    "url": "https://youtravel.me/expert/37356/%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "performer": {
    "@type": "PerformingGroup",
    "name": "Асия .",
    "url": "https://youtravel.me/expert/37356/%D0%B0%D1%81%D0%B8%D1%8F"
  },
  "location": {
    "@type": "Place",
    "name": "Узбекистан",
    "url": "https://youtravel.me/tours/country/узбекистан",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Узбекистан"
    }
  },
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "validFrom": "2023-09-24T00:00:00.000Z",
    "url": "https://youtravel.me/tours/20461/%D1%81%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0_%D0%B0%D0%BB%D0%BB%D0%B0%D0%B4%D0%B8%D0%BD%D0%B0_%D0%BE%D1%82_%D1%82%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82%D0%B0_%D0%B4%D0%BE_%D1%85%D0%B8%D0%B2%D1%8B_%D0%B7%D0%B0%D0%B2%D1%82%D1%80%D0%B0%D0%BA%D0%B8_%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B_",
    "price": 90417,
    "priceCurrency": "RUB"
  }
}







                                </script>
                            </div>
                        </a><!----></div>
                    <div data-v-9e643754="" class="serp-tours__show-more">
                        <div data-v-88c13612="" data-v-9e643754="" class="btn serp-tours__show-more__btn btn-green"><span data-v-88c13612="" class="font-h2">Показать еще</span></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

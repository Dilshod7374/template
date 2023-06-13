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

        <link href="./assets/chunk-ff8ef73e.a3041658.css" rel="prefetch">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/chunk-vue-tel-input.0ed9a311.css" rel="prefetch">
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
                                    <input name="" type="text" autocomplete="nope" placeholder="" tabindex="0" class="multiselect__input" readonly="true" style="width: 0px; position: absolute; padding: 0px;"> <!---->
                                    <span class="multiselect__placeholder"><span data-v-2a0d30d6="">Куда вы хотите?
                                        </span>
                                    </span>
                                </div>
                                <div tabindex="-1" class="multiselect__content-wrapper" style="max-height: 300px; display: none;">
                                    <ul class="multiselect__content" style="display: block;">
                                        <div data-v-2a0d30d6="" class="serp-tour-selector__before-list">
                                            <div data-v-7ed389a8="" data-v-2a0d30d6="" class="location-nearby">
                                                <div data-v-7ed389a8="" class="location-nearby__container">
                                                    <button data-v-147a8467="" data-v-7ed389a8="" type="button" class="button location-nearby__trigger u-w-full _gray _default font-h2 _squared">
                                                        <span data-v-7ed389a8="" data-v-147a8467="" class="location-nearby__trigger-container">
                                                            <span data-v-7ed389a8="" data-v-147a8467="" class="location-nearby__trigger-icon u-flex-shrink-0">
                                                                <span data-v-7ed389a8="" class="svg-inline" data-v-147a8467="">
                                                                    <svg data-v-7045e8a0="" data-v-7ed389a8="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" width="20" height="20" color="inherit" class="svg inherit ">
                                                                        <path stroke="#121212" stroke-width="1.5" d="M12.394 16.965l-1.209-1.449a10.75 10.75 0 0 0-4.53-3.196l-2.638-.973 11.1-6.746-2.723 12.364z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span
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
                            <div data-v-4cd55fe6="" data-v-9e643754="" class="yt-pill">
                                <span data-v-4cd55fe6="" class="yt-pill__text font-text u-decor"> Русский </span>
                                <span data-v-4cd55fe6="" class="yt-pill__icon u-flex-shrink-0 u-clickable">
                                    <span data-v-4cd55fe6="" class="yt-pill__icon-container">
                                        <span data-v-4cd55fe6="" class="svg-inline u-decor u-stroke-deep-current">
                                            <svg data-v-7045e8a0="" data-v-4cd55fe6="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" width="16" height="16" color="inherit" class="svg inherit ">
                                                <rect width="16" height="16" fill="#fff" rx="8"></rect>
                                                <path stroke="#87A038" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4.8 11.2l6.4-6.4M4.8 4.8l6.4 6.4"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                            </div>
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
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!---->
                                                    <label data-v-428ce7b8="" for="input1" class="input-label font-text-small"> От (дней) </label>
                                                    <input data-v-428ce7b8="" name="" id="input1" type="text" placeholder="1" autocomplete="" class="input"><!----><!----></div><!----></div>
                                            <div data-v-428ce7b8="" data-v-017434b4="" class="filters__item__range__inputs__right">
                                                <div data-v-428ce7b8="" class="input-wrapper input-wrapper--label"><!----><label data-v-428ce7b8="" for="input2" class="input-label font-text-small"> До (дней) </label><input data-v-428ce7b8="" name="" id="input2" type="text" placeholder="30" autocomplete="" class="input"><!----><!----></div><!----></div>
                                        </div>
                                        <div data-v-017434b4="" class="vue-slider-component vue-slider-horizontal" style="width: auto; padding: 10px;">
                                            <div aria-hidden="true" class="vue-slider" style="height: 4px; background: rgb(209, 215, 232);">
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(-9.6px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;">
                                                        <span class="vue-slider-tooltip">1</span>
                                                    </div>
                                                </div>
                                                <div class="vue-slider-dot" style="width: 20px; height: 20px; top: -7px; transition-duration: 0s; transform: translateX(214.4px);">
                                                    <div class="vue-slider-dot-handle" style="background: rgb(171, 194, 50); border: 2px solid rgb(255, 255, 255); transform: translateY(-1px); box-shadow: none;"></div>
                                                    <div class="vue-slider-tooltip-top vue-slider-tooltip-wrap" style="visibility: inherit;"><span class="vue-slider-tooltip">30</span></div>
                                                </div>
                                                <ul class="vue-slider-piecewise"></ul>
                                                <div class="vue-slider-process" style="background: rgb(171, 194, 50); transition-duration: 0s; width: 224px; left: 0px;">
                                                    <div class="vue-merged-tooltip vue-slider-tooltip-top vue-slider-tooltip-wrap" style="top: -16px; left: 50%; visibility: hidden;">
                                                        <span class="vue-slider-tooltip">1 - 30</span>
                                                    </div>
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
                                                    <div class="vue-merged-tooltip vue-slider-tooltip-top vue-slider-tooltip-wrap" style="top: -16px; left: 50%; visibility: hidden;">
                                                        <span class="vue-slider-tooltip">1290 - 3023481</span>
                                                    </div>
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
                                                <div class="multiselect__spinner" style="display: none;"></div> <!----> <!---->
                                                <span class="multiselect__placeholder">Возраст не выбран</span>
                                            </div>
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
                                <div data-v-3859ed36="" class="tour-card__image">
                                    <img data-v-3859ed36="" loading="lazy" alt="★ МЕЛОДИЯ ДАГЕСТАНА: 5 дней ★ Всё включено!" src="./assets/48251d31f292a23197529527b1445c01.jpeg" srcset="https://cf.youtravel.me/tr:w-552,h-512/upload/tours/23607/media/482/48251d31f292a23197529527b1445c01.jpeg"
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
                            </div>
                        </a>
                        <a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/25392/_%D0%B2%D0%BE%D0%BB%D1%88%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9_%D0%B4%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD_5_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%B2%D1%81%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%BE" title="☆  ВОЛШЕБНЫЙ ДАГЕСТАН  ☆ 5 ДНЕЙ ВСЕ ВКЛЮЧЕНО " target="_blank" class="serp-tours__result__item" style="display: inline-block;">
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
                            </div>
                        </a>
                        <a data-v-3859ed36="" data-v-9e643754="" href="https://youtravel.me/tours/38737/%D0%BA%D1%83%D0%BD%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8_%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80" title="КУНДАЛИНИ ЙОГА-ТУР" target="_blank" class="serp-tours__result__item" style="display: inline-block;">
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
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </main>

@endsection

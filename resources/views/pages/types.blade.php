@extends('layouts.layout_main')
@section('content')
    <main class="  tours-body  ">

        <div id="before-breadcrumbs"></div>

        <div class="breadcrumbs bx-breadcrumb js-page-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <span class="breadcrumbs__item" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/" title="Главная">
                                <span itemprop="name">Главная</span>
                                <meta itemprop="position" content="1">
                            </a>
                        </span>
            <span class="breadcrumbs__item" id="bx_breadcrumb_1" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/tours/" title="Все туры">
                                <span itemprop="name">Все туры</span>
                                <meta itemprop="position" content="2">
                            </a>
                        </span>
            <span class="breadcrumbs__item" id="bx_breadcrumb_2" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/tours/type" title="Типы туров">
                                <span itemprop="name">Типы туров</span>
                                <meta itemprop="position" content="3">
                            </a>
                        </span>
            <div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Типы туров</span>
                <meta itemprop="position" content="4">
            </div>
        </div>
        <div class="header-h1 ">
            <h1>Типы туров</h1>
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
        <section class="trips" style="margin-top:50px;">
            <div class="item">
                <a href="https://youtravel.me/tours/type/relocation">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/47a/400_400_1/47a4ad2832f7602d4d41f5a8995e486a.jpg);"></div>
                    <div class="item-name">Релокационные</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BA%D1%83%D1%80%D1%81%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/80b/400_400_1/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg);"></div>
                    <div class="item-name">Экскурсионные</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D0%B4%D0%B6%D0%B8%D0%BF_%D1%82%D1%83%D1%80%D1%8B">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/a37/400_400_1/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg);"></div>
                    <div class="item-name">Джип туры</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D1%82%D1%80%D0%B5%D0%BA%D0%BA%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/780/400_400_1/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg);"></div>
                    <div class="item-name">Походы</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%B8">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/2c2/400_400_1/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg);"></div>
                    <div class="item-name">Экспедиции</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D1%8F%D1%85%D1%82_%D1%82%D1%83%D1%80%D1%8B">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/179/400_400_1/dibft41ob7ji0wf8myrwwl6apwpym209.jpg);"></div>
                    <div class="item-name">Яхтинг</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80%D1%8B">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/055/400_400_1/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg);"></div>
                    <div class="item-name">Йога туры</div>
                </a>
            </div>
            <div class="item">
                <a href="https://youtravel.me/tours/type/roadtrip">
                    <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/c16/400_400_1/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg);"></div>
                    <div class="item-name">Автотуры</div>
                </a>
            </div>
        </section>
    </main>

@endsection

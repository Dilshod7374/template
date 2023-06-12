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
                            <a class="breadcrumbs__item" itemprop="item" href="https://youtravel.me/tours/type" title="Типы туров">
                                <span itemprop="name">Типы туров</span>
                                <meta itemprop="position" content="3">
                            </a>
                        </span>
        <div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <span itemprop="name">Типы туров</span>
            <meta itemprop="position" content="4">
        </div></div>
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
    </div><section class="trips" style="margin-top:50px;">
        <div class="item">
            <a href="https://youtravel.me/gift">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800);"></div>
                <div class="item-name">Подарочный сертификат</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/relocation">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/47a/400_400_1/47a4ad2832f7602d4d41f5a8995e486a.jpg);"></div>
                <div class="item-name">Релокационные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BA%D1%83%D1%80%D1%81%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/80b/400_400_1/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg);"></div>
                <div class="item-name">Экскурсионные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B4%D0%B6%D0%B8%D0%BF_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/a37/400_400_1/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg);"></div>
                <div class="item-name">Джип туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%82%D1%80%D0%B5%D0%BA%D0%BA%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/780/400_400_1/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg);"></div>
                <div class="item-name">Походы</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%B8">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/2c2/400_400_1/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg);"></div>
                <div class="item-name">Экспедиции</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%8F%D1%85%D1%82_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/179/400_400_1/dibft41ob7ji0wf8myrwwl6apwpym209.jpg);"></div>
                <div class="item-name">Яхтинг</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/055/400_400_1/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg);"></div>
                <div class="item-name">Йога туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/roadtrip">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/c16/400_400_1/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg);"></div>
                <div class="item-name">Автотуры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/237/400_400_1/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg);"></div>
                <div class="item-name">Сплавы</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D1%82%D1%80%D0%B8%D0%BC_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/051/400_400_1/gc58wzmfbm96vclxrhbtba06oheftexp.jpg);"></div>
                <div class="item-name">Экстрим туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%84%D0%B8%D1%82%D0%BD%D0%B5%D1%81_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/c20/400_400_1/c20698ccf01650cecde06dc2d76fa30d.jpg);"></div>
                <div class="item-name">Фитнес туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%84%D0%BE%D1%82%D0%BE%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/6ad/400_400_1/0lnniidvirn7w47vwhjf7es4nhy7n9qf.jpg);"></div>
                <div class="item-name">Фототуры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B3%D0%BE%D1%80%D0%BD%D0%BE%D0%BB%D1%8B%D0%B6%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/1c5/400_400_1/fw9ies5mua9et39daf63djp3dovj0phn.jpg);"></div>
                <div class="item-name">Горнолыжные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/b03/400_400_1/b0303940a0a7690389ed027ec0c068bd.jpg);"></div>
                <div class="item-name">Образовательные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%81%D0%B5%D0%BC%D0%B5%D0%B9%D0%BD%D1%8B%D0%B9_%D1%82%D1%83%D1%80">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/42f/400_400_1/prvtr6jsbolso72e7m19r5ofe6bje2wi.jpg);"></div>
                <div class="item-name">Семейные </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%88%D0%BE%D0%BF%D0%BF%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/c89/400_400_1/c89946a6c1b5e952205973bab1f89027.jpg);"></div>
                <div class="item-name">Шоппинг туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B3%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/bf2/400_400_1/q9ljughyxjr2u58qv5pehp6fpjh9w8nr.jpg);"></div>
                <div class="item-name">Гастрономические</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B4%D0%B5%D0%B2%D0%B8%D1%87%D0%BD%D0%B8%D0%BA%D0%B8">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/712/400_400_1/16ckppra7eznx8ic4mcyhej2ao68zeuc.jpeg);"></div>
                <div class="item-name">Девичники</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B0%D0%B2%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/bd5/400_400_1/kltu3he1bc3ltgfd16orrmik22369b7r.jpg);"></div>
                <div class="item-name">Авторские</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/blog_tour">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/662/400_400_1/8fn4n8cgrsuye8631zkl2sbe1x2hhhk2.jpg);"></div>
                <div class="item-name">Блог-туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B1%D0%B5%D0%B7_%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D1%8B_%D0%B8_%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D0%B2%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D1%8F">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/04d/400_400_1/04dd73e2089002b4930ece30e5047da6.jpg);"></div>
                <div class="item-name">Самостоятельные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/coworking_trips">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/44e/400_400_1/44ed94ce66135c0b431c456c0ee85ad2.jpg);"></div>
                <div class="item-name">Коворкинг кэмпы</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/speleo">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/7ff/400_400_1/7ff51a0e76ebff59d3a41987dd706cec.jpg);"></div>
                <div class="item-name">По Пещерам</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B2%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D1%82%D1%83%D1%80">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/666/400_400_1/nvjp2kwe2ktw0xam5yrf1q357h0twde8.jpg);"></div>
                <div class="item-name">Водные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9_%D1%82%D1%83%D1%80">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/da4/400_400_1/da427efecf4c796663665acf6e4ded5e.jpg);"></div>
                <div class="item-name">Спортивные </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/snowmobile">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/ad0/400_400_1/2e5aghrrvp5rrkydzkbt80c3d8mcsz8k.jpg);"></div>
                <div class="item-name">На Снегоходах</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%82%D1%83%D1%80_%D0%B2_%D0%B3%D0%BE%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/47d/400_400_1/nxuxqzvo8b7pb698912b07n9ep57fcp5.jpg);"></div>
                <div class="item-name">В Горы</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/ethno">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/9bd/400_400_1/y0cidvmwalzby76kpa09ms1bqxhkmw98.jpg);"></div>
                <div class="item-name">Этнографические</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B2%D0%BE%D1%81%D1%85%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/251/400_400_1/zfpn42qmk1zx5xh1mhh5iutsrd5ka2fo.jpg);"></div>
                <div class="item-name">Восхождения</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/konnyi">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/1b3/400_400_1/otc0uu11915l822jux3ez3t6owmidi7a.jpg);"></div>
                <div class="item-name">Конные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BD%D0%B0_%D0%BC%D0%BE%D1%80%D0%B5">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/af6/400_400_1/dr0f5w0f4wvp1csy467qm4ilinjz56wt.jpg);"></div>
                <div class="item-name">На Море</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%80%D1%8B%D0%B1%D0%B0%D0%BB%D0%BA%D0%B0">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/a84/400_400_1/vh3uynmc9qih2txrjgi07vycdxrtz358.jpg);"></div>
                <div class="item-name">Рыболовные </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/safari">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/d2e/400_400_1/d2e9a6e86fac534ac64a219c361169ed.jpg);"></div>
                <div class="item-name">Сафари </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/diving-tours">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/286/400_400_1/28679683f5a2bd2479c9abb49f525f43.jpg);"></div>
                <div class="item-name">Дайвинг</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/skiing-tours">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/933/400_400_1/933c3794594e82f009dc78c5774b1c75.jpg);"></div>
                <div class="item-name">Лыжные </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B2%D0%B5%D0%BB%D0%BE%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/329/400_400_1/hxktxmlcl3mhjyobmnaov9jrdbz9m0v1.jpg);"></div>
                <div class="item-name">Велотуры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%8F%D0%B7%D1%8B%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/303/400_400_1/3038036afc07f939c15537278a3aad85.jpg);"></div>
                <div class="item-name">Языковые</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B8%D0%BC%D0%B8%D0%B4%D0%B6_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/05d/400_400_1/05dedd795becd0d8aacb5470d21f9e9a.jpg);"></div>
                <div class="item-name">Имидж туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BE%D0%B1%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B8%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/a89/400_400_1/86bbbe6ua5z8r3p2hflqasnj364hatsc.jpg);"></div>
                <div class="item-name">Обучающие </div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BC%D0%BE%D1%82%D0%BE_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/933/400_400_1/i31nut437kpeqhypxxsew364vbx98s5b.jpg);"></div>
                <div class="item-name">Мото туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BC%D0%B0%D0%BC%D0%B0_%D0%B8_%D0%BC%D0%B0%D0%BB%D1%8B%D1%88">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/e85/400_400_1/ow839t190j1n8e6lwsxm022fy9wh6owj.jpg);"></div>
                <div class="item-name">Для Мам С Маленькими Детьми</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B0%D1%80%D1%82_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/34f/400_400_1/34f192c38efb597233e6251f407d53f7.jpg);"></div>
                <div class="item-name">Арт туры</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D1%81%D0%B5%D1%80%D1%84%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/fb0/400_400_1/jden9zazxwgwfupltl016rsxb50d7yb7.jpeg);"></div>
                <div class="item-name">Серфинг</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%BA%D0%B2%D0%B5%D1%81%D1%82_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/170/400_400_1/058lgl1ispwxrlppcqnl8u9iioia7zwh.jpg);"></div>
                <div class="item-name">Квесты</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/%D0%B2%D0%B8%D0%BD%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/271/400_400_1/196zx2i6jyg2dh3jzsv8lpn7ubcz3kyk.JPG);"></div>
                <div class="item-name">Винные</div>
            </a>
        </div><div class="item">
            <a href="https://youtravel.me/tours/type/solo_travellers">
                <div class="item-pic" style="background-image:url(https://cf.youtravel.me/tr:w-800/upload/resize_cache/iblock/fe0/400_400_1/hp9ymdj5wrse18oyt7se8nwiacl9wow4.jpg);"></div>
                <div class="item-name">Для Соло Путешественников</div>
            </a>
        </div></section>
</main>

@endsection

@extends('layouts.layout')
@section('content')
    <main class="  index-body index-page ">

        <div id="before-breadcrumbs"></div>

        <div class="breadcrumbs bx-breadcrumb js-page-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <div class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <span itemprop="name">Главная</span>
                <meta itemprop="position" content="1">
            </div>
        </div>
        <div class="header-h1 ">
            <h1></h1>
        </div>
        <main>
            <div class="main-page__block">
                <div class="icons-row">
                    <div class="icons-row__item">
                        <div class="icons-row__icon icons-row__icon--lock"></div>
                        <div class="icons-row__title">Безопасная оплата</div>
                        <div class="icons-row__description">Бронируйте туры через нашу надежную платежную систему</div>
                    </div>
                    <div class="icons-row__item">
                        <div class="icons-row__icon icons-row__icon--laughing"></div>
                        <div class="icons-row__title">Продуманная спонтанность</div>
                        <div class="icons-row__description">Маршруты могут адаптироваться под пожелания группы</div>
                    </div>
                    <div class="icons-row__item">
                        <div class="icons-row__icon icons-row__icon--verified-experts"></div>
                        <div class="icons-row__title">Проверенные тревел-эксперты</div>
                        <div class="icons-row__description">В нашей базе 10&nbsp;437 гидов, которые прошли тщательный отбор</div>
                    </div>
                    <div class="icons-row__item">
                        <div class="icons-row__icon icons-row__icon--pin-start"></div>
                        <div class="icons-row__title">Гарантированные туры</div>
                        <div class="icons-row__description">У нас вы найдете более 124&nbsp;469 туров с гарантированным отправлением</div>
                    </div>
                    <div class="icons-row__item">
                        <div class="icons-row__icon icons-row__icon--verified"></div>
                        <div class="icons-row__title">Небольшие группы</div>
                        <div class="icons-row__description">Особенная атмосфера в компании единомышленников</div>
                    </div>
                </div>
            </div>
            <div class="main-page__block  main-page__block--inspiration  lazyloaded" data-script-function="loadContent" data-url="/local/ajax/homepage/ajax.get.inspired.places.php"><h2>Места для вдохновения</h2>
                <div class="main-page__block_description">Подборки путешествий для вашего wish-листа</div>
                <div class="images-row images-row_selection">
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/okunutsya_v_yarkie_kraski_i_ritm_otkrytoy_azii&#39;)" href="https://youtravel.me/tours/specials/okunutsya_v_yarkie_kraski_i_ritm_otkrytoy_azii">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Окунуться в таинственную культуру Востока" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/ac2/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg 1000w"
                                 src="./assets/boyicoxzisvj3dhveghq7l1qv3pjspxj.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Окунуться в таинственную культуру Востока</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/prikosnutsya_k_chistoy_i_velikoy_prirode_altaya&#39;)" href="https://youtravel.me/tours/specials/prikosnutsya_k_chistoy_i_velikoy_prirode_altaya">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Прикоснуться к великой природе Алтая" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c74/c7403006de5beced008ea2acf8bc8049.jpg 1000w"
                                 src="./assets/c7403006de5beced008ea2acf8bc8049.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Прикоснуться к великой природе Алтая</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/tury_vykhodnogo_dnya&#39;)" href="https://youtravel.me/tours/specials/tury_vykhodnogo_dnya">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Вырваться из города на выходные" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/939/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg 1000w"
                                 src="./assets/o0c18f5k51owtc7vb6hcq6ibxp4bj84c.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Вырваться из города на выходные</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/poznakomitsya_s_gostepriimstvom_kavkaza&#39;)" href="https://youtravel.me/tours/specials/poznakomitsya_s_gostepriimstvom_kavkaza">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Познакомиться с гостеприимством Кавказа" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/fe2/fe281e9578622225aed1d3df66ae3a4a.jpg 1000w"
                                 src="./assets/fe281e9578622225aed1d3df66ae3a4a.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Познакомиться с гостеприимством Кавказа</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/oshchutit_silu_okeana_i_vulkanov_v_rossii&#39;)" href="https://youtravel.me/tours/specials/oshchutit_silu_okeana_i_vulkanov_v_rossii">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Ощутить силу океана и вулканов в России" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/006/00674c8622625984798ce3d9f60e33af.jpg 1000w"
                                 src="./assets/00674c8622625984798ce3d9f60e33af.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Ощутить силу океана и вулканов в России</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/pogruzitsya_v_mir_dikoy_prirody&#39;)" href="https://youtravel.me/tours/specials/pogruzitsya_v_mir_dikoy_prirody">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Погрузиться в мир дикой природы" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c8c/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg 1000w"
                                 src="./assets/qbv31uw92i830cwfaxuiwn1wrhzwlt5k.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Погрузиться в мир дикой природы</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/kogda_otdykh_bez_morya_ne_otdykh&#39;)" href="https://youtravel.me/tours/specials/kogda_otdykh_bez_morya_ne_otdykh">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Исследовать морские глубины и отдохнуть на пляже" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/ec2/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg 1000w"
                                 src="./assets/ec2f106ad749e2ee27cd9cec8eb4e94e.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Исследовать морские глубины и отдохнуть на пляже</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/sdelat_fotografii_samykh_redkikh_mest&#39;)" href="https://youtravel.me/tours/specials/sdelat_fotografii_samykh_redkikh_mest">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Сделать фото уникальных мест" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/12d/9if0tnov65ur617jkb1zdugiwftpg59j.jpg 1000w"
                                 src="./assets/9if0tnov65ur617jkb1zdugiwftpg59j.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Сделать фото уникальных мест</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/tury_vesnoy&#39;)" href="https://youtravel.me/tours/specials/tury_vesnoy">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Весенние туры" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/e11/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg 1000w"
                                 src="./assets/tb4qwag3mdqoni41jezldp6bj6crnun6.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Весенние туры</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/tury_letom&#39;)" href="https://youtravel.me/tours/specials/tury_letom">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Насладиться летним отдыхом" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/589/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg 1000w"
                                 src="./assets/g9yzsc9ns1r2wjjqvpzl1j998icxca64.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Насладиться летним отдыхом</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/vlyubitsya_v_gory_i_uvidet_velikiy_elbrus&#39;)" href="https://youtravel.me/tours/specials/vlyubitsya_v_gory_i_uvidet_velikiy_elbrus">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Влюбиться в горы и увидеть великий Эльбрус" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/b31/b3197a3c98f40a53bd6ebaf86ab131ba.jpg 1000w"
                                 src="./assets/b3197a3c98f40a53bd6ebaf86ab131ba.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Влюбиться в горы и увидеть великий Эльбрус</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item images-row__item_mobile">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page Inspiration Click&#39;, &#39;engagement&#39;, &#39;/tours/specials/vyyti_v_more_na_yakhte_i_nasladitsya_svobodoy&#39;)" href="https://youtravel.me/tours/specials/vyyti_v_more_na_yakhte_i_nasladitsya_svobodoy">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Выйти в море на яхте и насладиться свободой" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 1000w"
                                 sizes="(min-width: 760px) 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/add/addb92aa9d8514e5916576432d45e5b9.jpg 1000w"
                                 src="./assets/addb92aa9d8514e5916576432d45e5b9.jpg">
                            <span class="images-block__info" style="">
                  <span class="icon icon-logo hidden-sm"></span>
                  <span class="images-block__info-bottom">
                      <span class="images-block__name">Выйти в море на яхте и насладиться свободой</span>
                      <span class="images-block__amount"></span>
                  </span>
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-page__block">
                <h2>Новый способ путешествовать</h2>
                <div class="main-page__block_description"></div>
                <div class="images-row images-row_type js-blazy-container js-helper-slider-container">
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;Подарочный сертификат&#39;)" href="https://youtravel.me/gift">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Подарочный сертификат" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/static/i/tours/type/sert.png"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/static/i/tours/type/sert.png 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/static/i/tours/type/sert.png 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/static/i/tours/type/sert.png 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/static/i/tours/type/sert.png 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/static/i/tours/type/sert.png 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/static/i/tours/type/sert.png 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/static/i/tours/type/sert.png 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/static/i/tours/type/sert.png 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/static/i/tours/type/sert.png 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/static/i/tours/type/sert.png 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/static/i/tours/type/sert.png 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/static/i/tours/type/sert.png 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/static/i/tours/type/sert.png 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/static/i/tours/type/sert.png 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/static/i/tours/type/sert.png 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/static/i/tours/type/sert.png 1000w"
                                 src="./assets/sert.png">
                            <span class="images-block__info">
                 <span class="images-block__name">Подарочный сертификат</span>
                 <span class="images-block__amount">Более 3500 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/relocation&#39;)" href="https://youtravel.me/tours/type/relocation">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Релокационный" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/47a/47a4ad2832f7602d4d41f5a8995e486a.jpg 1000w"
                                 src="./assets/47a4ad2832f7602d4d41f5a8995e486a.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Релокационный</span>
                 <span class="images-block__amount">19 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%8D%D0%BA%D1%81%D0%BA%D1%83%D1%80%D1%81%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BA%D1%83%D1%80%D1%81%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Экскурсионный" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/80b/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg 1000w"
                                 src="./assets/9p2rzw2r25hdna0af02323n9qjqf4apl.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Экскурсионный</span>
                 <span class="images-block__amount">3222 тура</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D0%B4%D0%B6%D0%B8%D0%BF_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D0%B4%D0%B6%D0%B8%D0%BF_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="На внедорожниках" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/a37/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg 1000w"
                                 src="./assets/3mapqy8s5af7e8ir8ejjaft07azc8cml.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">На внедорожниках</span>
                 <span class="images-block__amount">781 тур</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%82%D1%80%D0%B5%D0%BA%D0%BA%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D1%82%D1%80%D0%B5%D0%BA%D0%BA%D0%B8%D0%BD%D0%B3_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Поход" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/780/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg 1000w"
                                 src="./assets/8dk6ytidmw0no0js8tyh4fcbkrwa0270.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Поход</span>
                 <span class="images-block__amount">1285 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%B8&#39;)" href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D0%BF%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%B8">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Экспедиция" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/2c2/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg 1000w"
                                 src="./assets/uiz5t1o1p04dat44c2qvxums1c7y6xzk.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Экспедиция</span>
                 <span class="images-block__amount">439 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%8F%D1%85%D1%82_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D1%8F%D1%85%D1%82_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Яхтинг" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/179/dibft41ob7ji0wf8myrwwl6apwpym209.jpg 1000w"
                                 src="./assets/dibft41ob7ji0wf8myrwwl6apwpym209.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Яхтинг</span>
                 <span class="images-block__amount">172 тура</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D0%B9%D0%BE%D0%B3%D0%B0_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Йога" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/055/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg 1000w"
                                 src="./assets/ciqvsx05e9nt057qzgvvrbfk9zhl8pzj.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Йога</span>
                 <span class="images-block__amount">167 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/roadtrip&#39;)" href="https://youtravel.me/tours/type/roadtrip">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Автотур" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/c16/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg 1000w"
                                 src="./assets/z2n7rij3mpeikhjk8thfkp0ndmjw0635.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Автотур</span>
                 <span class="images-block__amount">910 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2&#39;)" href="https://youtravel.me/tours/type/%D1%81%D0%BF%D0%BB%D0%B0%D0%B2">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Сплав" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/237/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg 1000w"
                                 src="./assets/yxcfyt8j2u5bana4h6o868tsz1kskyll.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Сплав</span>
                 <span class="images-block__amount">339 туров</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" onclick="trackEvent(&#39;Main Page New Way travel&#39;, &#39;engagement&#39;, &#39;/tours/type/%D1%8D%D0%BA%D1%81%D1%82%D1%80%D0%B8%D0%BC_%D1%82%D1%83%D1%80%D1%8B&#39;)" href="https://youtravel.me/tours/type/%D1%8D%D0%BA%D1%81%D1%82%D1%80%D0%B8%D0%BC_%D1%82%D1%83%D1%80%D1%8B">
                            <img class="images-block__bg yt-img-bg ls-is-cached lazyloaded" alt="Экстрим" data-src="https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg"
                                 data-srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 1000w"
                                 sizes="(max-width: 760px) 145px, 25vw"
                                 srcset="https://cf.youtravel.me/tr:w-145%2Ch-92/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 145w, https://cf.youtravel.me/tr:w-290%2Ch-184/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 350w, https://cf.youtravel.me/tr:w-500%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-300/upload/iblock/051/gc58wzmfbm96vclxrhbtba06oheftexp.jpg 1000w"
                                 src="./assets/gc58wzmfbm96vclxrhbtba06oheftexp.jpg">
                            <span class="images-block__info">
                 <span class="images-block__name">Экстрим</span>
                 <span class="images-block__amount">204 тура</span>
             </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/type">
                            <span class="images-block__link">ПОСМОТРЕТЬ ВСЕ</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-page__block">
                <h2>Как тут все устроено</h2>
                <div class="main-page__block_description">Пришло время стряхнуть пыль с паспорта!</div>
                <div class="features-list">
                    <div class="features-list__item">
                        <div class="features-list__icon features-list__icon--mobile lazyloaded" data-remove-attr="style"></div>
                        <div class="features-list__description">Используйте фильтры, чтобы найти идеальное путешествие</div>
                    </div>
                    <div class="features-list__item">
                        <div class="features-list__icon features-list__icon--chat lazyloaded" data-remove-attr="style"></div>
                        <div class="features-list__description">Задайте вопросы тревел-эксперту через чат на сайте</div>
                    </div>
                    <div></div>
                    <div class="features-list__item">
                        <div class="features-list__icon features-list__icon--buy lazyloaded" data-remove-attr="style"></div>
                        <div class="features-list__description">Бронируйте тур через безопасную платежную систему</div>
                    </div>
                    <div class="features-list__item">
                        <div class="features-list__icon features-list__icon--reviews lazyloaded" data-remove-attr="style"></div>
                        <div class="features-list__description">Получайте тревел-предложения по лучшей цене</div>
                    </div>
                </div>
            </div>
            <div id="where-to-go" class="main-page__block  main-page__block--where-to-go  lazyloaded" data-script-function="loadContent" data-url="/local/ajax/homepage/ajax.get.choose.destination.php"><h2>Куда уже можно ехать?</h2>
                <div class="main-page__block_description">Мы тщательно следим за открытием границ и подбираем проверенные варианты</div>
                <div class="images-row images-row_type js-blazy-container js-helper-slider-container">
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/?discounts=Y&amp;dates.place_available=1&amp;dates%5B0%5D%5Bdate_from%5D=10.06.2023&amp;dates%5B0%5D%5Bdate_to%5D=10.07.2023&amp;sort=date_from" onclick="trackEvent(&#39;Main Page Hot Deals Click&#39;, &#39;engagement&#39;, &#39;tours/?discounts=Y&amp;dates.place_available=1&amp;dates%5B0%5D%5Bdate_from%5D=10.06.2023&amp;dates%5B0%5D%5Bdate_to%5D=10.07.2023&amp;sort=date_from&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Горящие туры" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/local/templates/youtravel/assets/i/main-page/hot_deals_tour.jpg 1000w"
                                 src="./assets/hot_deals_tour.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Горящие туры</span>
                    <span class="images-block__amount"></span>
                    <span class="images-block__label images-block__label_sale">
                        Скидки до 40%                    </span>
                </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D1%82%D1%83%D1%80%D1%86%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D1%82%D1%83%D1%80%D1%86%D0%B8%D1%8F&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Турция" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/8bf/8bfb94d5ecb206343d0b79bbf667f0c2.jpg 1000w"
                                 src="./assets/8bfb94d5ecb206343d0b79bbf667f0c2.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Турция</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D0%B0%D0%B7%D0%B5%D1%80%D0%B1%D0%B0%D0%B9%D0%B4%D0%B6%D0%B0%D0%BD" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D0%B0%D0%B7%D0%B5%D1%80%D0%B1%D0%B0%D0%B9%D0%B4%D0%B6%D0%B0%D0%BD&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Азербайджан" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/4e7/4e7f7bb15bff538ef25991c60a57cbe4.jpg 1000w"
                                 src="./assets/4e7f7bb15bff538ef25991c60a57cbe4.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Азербайджан</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D0%B5%D0%B3%D0%B8%D0%BF%D0%B5%D1%82" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D0%B5%D0%B3%D0%B8%D0%BF%D0%B5%D1%82&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Египет" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/6f6/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg 1000w"
                                 src="./assets/6f6e1e02dcc345e32d0b0efe7ecb66dc.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Египет</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D0%BC%D0%B0%D0%BB%D1%8C%D0%B4%D0%B8%D0%B2%D1%8B" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D0%BC%D0%B0%D0%BB%D1%8C%D0%B4%D0%B8%D0%B2%D1%8B&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Мальдивы" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/d78/d786daae0fbfa6051f951b3da5f8ebd0.jpg 1000w"
                                 src="./assets/d786daae0fbfa6051f951b3da5f8ebd0.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Мальдивы</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D0%B3%D1%80%D1%83%D0%B7%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D0%B3%D1%80%D1%83%D0%B7%D0%B8%D1%8F&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Грузия" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/7d2/7d2401a8c3a9deff3d5d128509ebcb56.jpg 1000w"
                                 src="./assets/7d2401a8c3a9deff3d5d128509ebcb56.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Грузия</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D1%83%D0%B7%D0%B1%D0%B5%D0%BA%D0%B8%D1%81%D1%82%D0%B0%D0%BD&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Узбекистан" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/087/087a5a6abddfb1990af768016adc963c.jpg 1000w"
                                 src="./assets/087a5a6abddfb1990af768016adc963c.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Узбекистан</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D1%82%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D1%82%D0%B0%D0%B8%D0%BB%D0%B0%D0%BD%D0%B4&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Таиланд" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/145/1459a29c553a0fe2d09dd47586d04db6.jpg 1000w"
                                 src="./assets/1459a29c553a0fe2d09dd47586d04db6.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Таиланд</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/abhazia" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/abhazia&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Абхазия" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/50a/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg 1000w"
                                 src="./assets/50a68d7bb45abf7d4f4a7f35cad19cd9.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Абхазия</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE%D1%80%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE%D1%80%D0%B8%D1%8F&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Черногория" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/604/6046683cb59742139b7ebe2bed787f8f.jpg 1000w"
                                 src="./assets/6046683cb59742139b7ebe2bed787f8f.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Черногория</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D1%81%D0%B5%D1%80%D0%B1%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D1%81%D0%B5%D1%80%D0%B1%D0%B8%D1%8F&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Сербия" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/4f4/4f410e9674f7f22a0261fbb76dc86249.jpg 1000w"
                                 src="./assets/4f410e9674f7f22a0261fbb76dc86249.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Сербия</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                    <div class="images-row__item">
                        <a class="images-block" href="https://youtravel.me/tours/country/%D0%B2%D1%8C%D0%B5%D1%82%D0%BD%D0%B0%D0%BC" onclick="trackEvent(&#39;Main Page Country Click&#39;, &#39;engagement&#39;, &#39;/tours/country/%D0%B2%D1%8C%D0%B5%D1%82%D0%BD%D0%B0%D0%BC&#39;)">
                            <img class="images-block__bg yt-img-bg b-loaded ls-is-cached lazyloaded" alt="Вьетнам" data-sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 data-srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 1000w"
                                 data-src="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg" sizes="(max-width: 512px) 50vw,
                            (max-width: 760px) 20vw,
                            (max-width: 1024px) 25vw,
                            16.6vw"
                                 srcset="https://cf.youtravel.me/tr:w-180%2Ch-150/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 180w, https://cf.youtravel.me/tr:w-200%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 200w, https://cf.youtravel.me/tr:w-290%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 290w, https://cf.youtravel.me/tr:w-350%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 350w, https://cf.youtravel.me/tr:w-400%2Ch-200/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 400w, https://cf.youtravel.me/tr:w-500%2Ch-250/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 500w, https://cf.youtravel.me/tr:w-600%2Ch-300/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 600w, https://cf.youtravel.me/tr:w-700%2Ch-400/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 700w, https://cf.youtravel.me/tr:w-800%2Ch-500/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 800w, https://cf.youtravel.me/tr:w-1000%2Ch-700/upload/iblock/958/9587b8dac4057180606ba45cf3948464.jpg 1000w"
                                 src="./assets/9587b8dac4057180606ba45cf3948464.jpg">
                            <span class="images-block__info">
                    <span class="images-block__name">Вьетнам</span>
                    <span class="images-block__amount"></span>
                                    </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-page__block hidden js-rrwidjet-wrapper">
                <h2>Туры специально для тебя</h2>
                <div class="main-page__block_description"></div>
                <div class="tours tours--one_row" id="latestwidjet">
                    <div data-retailrocket-markup-block="5e1bfc0d97a5281728734140" data-block-id="5e1bfc0d97a5281728734140" class="js-rrwidget" data-ga-list-name="Main Page Popular Recommendations" data-script="latest" data-content="#latestwidjet" data-asis="true" data-template="tours" data-sessid="f0744f2db0059ac4babc0696b8936369" initialized="true">
                        <style>
                            .retailrocket-widget .retailrocket-item-description {
                                display: none;
                            }
                        </style>
                        <div class="retailrocket retailrocket-widget retailrocket-theme-tiny" data-algorithm-type="visitor-category-interest" data-algorithm-param-stock-id="{{--{{data-stock-id}}--}}" data-algorithm="latest" data-template-param-header-text="Наиболее интересные пользователю новинки" data-template-param-number-of-items="5" data-template-param-item-image-width="150" data-template-param-item-image-height="150" data-textoverflowhidden="true" data-retailrocket-morebutton="false"
                             data-retailrocket-buybutton="false" data-template-container-id="widget-template-latest-main-page" data-widget-applied="true" data-number-of-rendered-items="0" data-rendered-items-ids=""></div>
                        <script id="widget-template-latest-main-page" type="text/html">
                            <% window.new_tours = items; %>
                            <% if (window.rpWidgetManager) { %>
                            <% window.rpWidgetManager.updateData("5e1bfc0d97a5281728734140", items); %>
                            <% } %>
                        </script>
                        <script>retailrocket.widget.render();</script>
                    </div>
                </div>
            </div>

            <div class="main-page__block  main-page__block--countries  main-page__block_bg--img lazyloaded" data-remove-attr="style">
                <h2>Мир большой, сделайте первый шаг к его покорению</h2>
                <div class="main-page__block_description"></div>
                <div class="destinations-list">
                    <a href="https://youtravel.me/tours/continent/%D0%B5%D0%B2%D1%80%D0%BE%D0%BF%D0%B0" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D0%B5%D0%B2%D1%80%D0%BE%D0%BF%D0%B0&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--europe lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Европа</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D0%B1%D0%BB%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9_%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D0%B1%D0%BB%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9_%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--near-east lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Ближний Восток</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D0%B0%D0%B2%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%8F_%D0%B8_%D0%BE%D0%BA%D0%B5%D0%B0%D0%BD%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D0%B0%D0%B2%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%8F_%D0%B8_%D0%BE%D0%BA%D0%B5%D0%B0%D0%BD%D0%B8%D1%8F&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--australia lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Австралия и Океания</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D1%8E%D0%B6%D0%BD%D0%B0%D1%8F_%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D1%8E%D0%B6%D0%BD%D0%B0%D1%8F_%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--south-america lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Южная Америка</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D1%81%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D1%81%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--north-america lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Северная Америка</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D0%B0%D1%84%D1%80%D0%B8%D0%BA%D0%B0" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D0%B0%D1%84%D1%80%D0%B8%D0%BA%D0%B0&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--africa lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Африка</span>
                    </a>
                    <a href="https://youtravel.me/tours/continent/%D0%B0%D0%B7%D0%B8%D1%8F" onclick="trackEvent(&#39;Main Page Continent Widget Click&#39;, &#39;engagement&#39;, &#39;/tours/continent/%D0%B0%D0%B7%D0%B8%D1%8F&#39;)" class="destinations-list__item">
                        <span class="destinations-list__icon destinations-list__icon--asia lazyloaded" data-remove-attr="style"></span>
                        <span class="destinations-list__name">Азия</span>
                    </a>
                </div>
            </div>
        </main>
    </main>
@endsection

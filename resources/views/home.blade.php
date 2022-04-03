<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template_styles.css') }}">
</head>
<body>
<header class="header">
    <div class="header__container container">
        <div class="header__sticky">
            <div class="d-flex container">
                <div class="d-none-sm header__logo">
                    <a href="#heading" class="header__link">
                        <div class="header__icon">
                            <img src="{{ asset('images/logo.png') }}">
                        </div>
                        <span>криосистемы</span>
                    </a>
                </div>
                <div class="header__content align-items-center flex-wrap flex-xl-nowrap">
                    <div class="header__logo d-none-md order-1">
                        <a href="#heading" class="header__link">
                            <div class="header__icon">
                                <img src="{{ asset('images/logo.png') }}">
                            </div>
                            <span>криосистемы</span>
                        </a>
                    </div>

                    <button class="mobile-menu-toggle d-inline-block d-md-none order-2">
                        <img src="{{ asset('images/svg/sprite.svg#burger') }}" alt="">
                    </button>
                    <div class="header__mob-menu d-md-none order-3">
                        <nav class="header-menu">
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#products">Товары</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#clients">Наши клиенты</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#delivery">Доставка</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#about">О компании</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#contacts">Контакты</a>
                            </div>
                        </nav>
                        <div class="header__contact header__contact_mob order-3">
                            <a href="tel:{{ $contacts->phones }}" class="header__phone">
                                {{ $contacts->phones }}
                            </a>
                            <span class="header__adress">Москва «IQ-park», ул. Угрешская, д.2, стр.22</span>
                            <button data-fancybox="" data-type="ajax" data-src="{{ route('modal-callback') }}"
                                    class="btn header__callback">Связаться с нами
                            </button>
                        </div>
                    </div>
                    <div class="header__contact order-2">
                        <a href="tel:+74956633039" class="header__phone">+7 (495) 663-30-39</a>
                        <span class="header__adress">Москва «IQ-park», ул. Угрешская, д.2, стр.22</span>
                        <button data-fancybox="" data-type="ajax" data-src="{{ route('modal-callback') }}"
                                class="btn header__callback">Связаться с нами
                        </button>
                    </div>
                    <div class="header__line order-3"></div>
                    <div class="header__menu order-4">
                        <nav class="header-menu">
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#products">Товары</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#clients">Наши клиенты</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#delivery">Доставка</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#about">О компании</a>
                            </div>
                            <div class="header-menu__item">
                                <a class="header-menu__link" href="#contacts">Контакты</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__heading" id="heading">
            <h1 class="heading heading--white">Успейте купить вакуумное и криогенное оборудование со склада в
                Москве!</h1>
        </div>
        <div class="header__button d-none-md_sm">
            <button data-fancybox="" data-type="ajax" data-src="{{ route('modal-callback') }}"
                    class="btn header__callback">Связаться с нами
            </button>
        </div>
        <div class="header-adv">
            <div class="header-adv__heading">наши преимущества</div>
            <div class="header-adv__items swiper">
                <div class="swiper-wrapper row flex-nowrap flex-md-wrap">

                    <div class="swiper-slide col-12 col-md-6 col-xl-3 mb-4">
                        <div class="header-adv__item">Высокое качество ведущих мировых производителей</div>
                    </div>

                    <div class="swiper-slide col-12 col-md-6 col-xl-3 mb-4">
                        <div class="header-adv__item">Приемлемые цены</div>
                    </div>

                    <div class="swiper-slide col-12 col-md-6 col-xl-3 mb-4">
                        <div class="header-adv__item">Профессиональная консультация инженера по продажам</div>
                    </div>

                    <div class="swiper-slide col-12 col-md-6 col-xl-3 mb-4">
                        <div class="header-adv__item">Сервисное обслуживание в Москве всего поставляемого оборудования
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</header>
<div class="page">
    <section class="block-available" id="products">
        <div class="container">
            <div class="heading heading--icon">В наличии на складе</div>
            <div class="row flex-nowrap flex-xl-wrap block-available__container">
                @foreach($catalog as $item)
                    <div class="col-md-6 col-xl-3 mb-4 block-available__item">
                        <div class="card h-100" data-product-id="{{ $item->id }}" data-product-code="spiralnye-nasosy-isp"
                             data-auto-focus="false">
                            <div class="block-available__image">
                                <img src="/storage/images/{{ $item->image->name }}"
                                     class="card-img-top mx-auto d-block">
                            </div>
                            <div class="card__body">
                                <div class="card__title">
                                    {{ $item->name }}
                                </div>
                                <button class="button mt-auto">Подробнее</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="block-belive" id="clients">
        <div class=" container">
            <div class="row">
                <div class="col-12 col-xl-5">
                    <div class="block-belive__blue">
                        <div class="heading heading--white">нам доверяют</div>
                        <div class="block-belive__text">Нашими клиентами являются: предприятия федерального агентства
                            «Роскосмос», предприятия федерального агентства «Росатом», технологические институты и
                            предприятия российских технических концернов, университеты и институты Министерства
                            образования и Академии Наук.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-7">
                    <div class="row block-belive__images">

                        @foreach($partners as $partner)
                            <div class="col-6 col-md-4 col-xl-4">
                                <div class="block-belive__image">
                                    <img src="/storage/images/{{ $partner->image->name }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-delivery" id="delivery">
        <div class="container">
            <div class="heading">Условия доставки</div>
            <div class="block-delivery__top">
                <div class="block-delivery__icon">
                    <svg class="icon">
                        <use xlink:href="{{ asset('images/svg/sprite.svg#deliver') }}"></use>
                                </svg>
                            </div>
                            <div class="block-delivery__desc">При доставке товаров транспортными компаниями возможно
                                оплата как
                                получателем груза, так и отправителем. Условия по оплате за доставку товаров
                                согласовываются с
                                Заказчиком дополнительно
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2">
                        </div>
                        <div class="col-12 col-md-12 col-xl-10">
                            <div class="block-delivery__gray">
                                <div class="car"></div>
                                <div class="block-delivery__head">Доставку осуществляем транспортными компаниями:</div>
                                <div class="row">

                                    <div class="col-12 col-xl-4 block-delivery__column">
                                        <div class="block-delivery__text"><b>По Москве и Московской области</b> своим
                                            транспортом — доставка осуществляется за 1 рабочий день с момента
                                            согласования
                                            отгрузки
                                        </div>
                                    </div>

                                    <div class="col-12 col-xl-4 block-delivery__column">
                                        <div class="block-delivery__text"><b>По России</b> осуществляем доставку
                                            посредством
                                            транспортной компании ООО «Деловые линии» и ООО «КурьерРегион» доставка
                                            осуществляется в сроки от 1 рабочего дня в соответствии со сроками поставки,
                                            указанными на сайтах соответствующей ТК
                                        </div>
                                    </div>

                                    <div class="col-12 col-xl-4 block-delivery__column">
                                        <div class="block-delivery__text"><b>В страны ЕАС</b> доставка товаров
                                            осуществляется
                                            посредством транспортных компаний ООО «Деловые линии», Компания ПЭК и
                                            «КурьерСервисЭспресс» — доставка осуществляется в сроки от 1 рабочего дня в
                                            соответствии со сроками поставки, указанными на сайтах соответствующей ТК
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <section class="block-about" id="about">
                    <div class=" container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-8">
                                <div class="block-about__left">
                                    <div class="heading heading--white">О КОМПАНИИ</div>
                                    <div class="block-about__text">
                                        Компания «Криосистемы» была образована в 2002 году и начала свою деятельность с
                                        поставок
                                        криогенных вакуумных насосов. В дальнейшем, отвечая на запросы заказчиков, ряд
                                        поставляемой
                                        вакуумной продукции постоянно расширялся и в настоящее время компания предлагает
                                        самый
                                        полный спектр вакуумного и криогенного оборудования.

                                        Большинство марок оборудования поставляется нами на основе эксклюзивных
                                        контрактов с
                                        компаниями-производителями. Наши поставщики — Brooks Automation, Shimadzu, Anest
                                        Iwata,
                                        Kashiyama, Janis и другие являются общепризнанными лидерами в своих областях и
                                        мы рады
                                        поставлять их продукцию на российский рынок и в страны СНГ.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-xl-4">
                                <div class="block-about__right">
                                    <div class="block-about__icon"><img src="{{ asset('images/svg/service.svg') }}"></div>
                        <div class="block-about__text">
                            Компания специализируется исключительно на вакуумном и криогенном оборудовании и поэтому
                            наши специалисты имеют большой технический опыт в этих областях. Они могут не только помочь
                            выбрать нужную модель, но также и помочь в разработке любой вакуумной системы. Инженеры
                            компании выезжают к заказчикам для установки, запуска и обслуживания оборудования, обучения
                            персонала.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer" id="contacts">
    <div class="footer__container container">

        <div class="row">
            <div class="col-12 col-md-12 col-xl-8">
                <div class="footer-map">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3fc72739f61f2e36f91251f1d585d5ff59f3ca3b2f8c783a9c49d8e13fa6f778&amp;width=100%25&amp;height=395&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-4">
                <div class="footer-contacts">
                    <div class="footer-contacts__block">
                        <div class="heading">контакты</div>
                        <div class="footer-contacts__field">
                            <div class="footer-contacts__icon">
                                <svg class="icon icon--geo">
                                    <use xlink:href="{{ asset('images/svg/sprite.svg#geo') }}"></use>
                                </svg>
                            </div>
                            <div class="footer-contacts__line">{{ $contacts->address }}
                            </div>
                        </div>
                        <div class="footer-contacts__field">
                            <div class="footer-contacts__icon">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/svg/sprite.svg#phone') }}"></use>
                                </svg>
                            </div>
                            <div class="footer-contacts__line">
                                <a href="tel:{{ $contacts->phones }}">{{ $contacts->phones }}</a>
                                <a href="tel:{{ $contacts->phone_added }}">{{ $contacts->phone_added }}</a>
                            </div>
                        </div>
                        <div class="footer-contacts__field">
                            <div class="footer-contacts__icon">
                                <svg class="icon icon--email">
                                    <use xlink:href="{{ asset('images/svg/sprite.svg#email') }}"></use>
                                </svg>
                            </div>
                            <div class="footer-contacts__line footer-contacts__line--email">
                                <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                            </div>
                        </div>
                    </div>
                    <!--noindex-->
                    <div class="footer-contacts__copy">Дизайн и разработка сайта — <a href="#">UTLab</a></div>
                    <!--/noindex-->
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="tel:{{ $contacts->phones }}" class="right_phone"></a>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

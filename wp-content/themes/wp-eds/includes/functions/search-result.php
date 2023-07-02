<?php

namespace Like;

function search_result()
{ ?>
    <div class="search-result">
        <div class="search-result__left">

            <div class="search-result__name">Hip hop</div>
            <div class="search-result__course-details">
                <div class="search-result__date">Poniedziałek 13:45-15:15</div>
                <div class="search-result__duration">(1 raz w tygodniu, 90 minut)</div>
            </div>

            <div class="search-result__info">
                <div class="search-result__info__item">
                    <span class="search-result__info__label">Poziom:</span>
                    <span class="search-result__info__text">Podstawowy</span>
                </div>
                <div class="search-result__info__item">
                    <span class="search-result__info__label"><?php echo get_svg('age'); ?> Wiek:</span>
                    <span class="search-result__info__text">19+ lat</span>
                </div>
                <div class="search-result__info__item">
                    <span class="search-result__info__label"><?php echo get_svg('marker'); ?> Lokalizacja:</span>
                    <span class="search-result__info__text">Wrocław</span>
                </div>
                <div class="search-result__info__item">
                    <span class="search-result__info__label"><?php echo get_svg('instructor'); ?> Instruktor:</span>
                    <span class="search-result__info__text">Katarzyna Mieczkowska</span>
                </div>
                <div class="search-result__info__item">
                    <span class="search-result__info__label"><?php echo get_svg(
                          'calendar'
                        ); ?> Najbliższe zajęcia:</span>
                    <span class="search-result__info__text">20.04.2023</span>
                </div>

            </div>
        </div>
        <div class="search-result__btn">
            <a href="" class="btn btn--white btn--red-bg">Zapisz się</a>
        </div>
        <ul class="search-result__links">
            <li>
                <a href="">Opis zajęć</a>
            </li>
            <li>
                <a href="">O instruktorze</a>
            </li>
            <li>
                <a href="">Cennik</a>
            </li>
        </ul>
    </div>

<?php }
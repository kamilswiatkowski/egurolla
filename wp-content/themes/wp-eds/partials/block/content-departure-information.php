<?php

use function Like\get_svg;

$fields = [
  'label'   => 'WSZYSTKO CO MUSISZ WIEDZIEĆ, BY Z NAMI POJECHAĆ',
  'title'   => 'Informacje o wyjeździe i zebrania',
  'turnusy' => [
    [
      'name'         => 'I Turnus',
      'date'         => '25.06 - 05.07',
      'last_places'  => false,
      'sign_up_link' => [
        'url'   => '#',
        'title' => 'Zapisz się',
      ],
      'closed'       => true,
    ],
    [
      'name'         => 'I Turnus',
      'date'         => '25.06 - 05.07',
      'last_places'  => true,
      'sign_up_link' => [
        'url'   => '#',
        'title' => 'Zapisz się',
      ],
    ],
    [
      'name'         => 'I Turnus',
      'date'         => '25.06 - 05.07',
      'last_places'  => false,
      'sign_up_link' => [
        'url'   => '#',
        'title' => 'Zapisz się',
      ],
    ],
    [
      'name'         => 'I Turnus',
      'date'         => '25.06 - 05.07',
      'last_places'  => false,
      'sign_up_link' => [
        'url'   => '#',
        'title' => 'Zapisz się',
      ],
    ],
  ],
];

?>


<section class="departure-information">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo Like\get_section_header(
                  $fields['label'],
                  $fields['title'],
                  ''
                ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="departure-information__title">Turnusy:</h3>
            </div>
            <div class="col-12 col-md-4">
                <?php foreach ($fields['turnusy'] as $turnus) { ?>
                    <div class="turnus__box">
                        <?php if ($turnus['last_places']) { ?>
                            <span class="turnus__last-places">Ostatnie miejsca</span>
                        <?php } ?>
                        <div class="turnus__info">
                            <div class="turnus__left">
                                <span class="turnus__name"><?php echo $turnus['name']; ?></span>
                                <span class="turnus__date"><?php echo get_svg('calendar') . $turnus['date']; ?></span>
                            </div>
                            <div class="turnus__right">
                                <?php if ($turnus['closed']) { ?>
                                    <div class="turnus__right__no-places">
                                        <span>Brak miejsc</span>
                                        <a href="">Zapisz się na listę rezerwową</a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?php echo $turnus['sign_up_link']['url']; ?>"
                                       class="btn btn--red btn--outline-red"><?php echo $turnus['sign_up_link']['title']; ?></a>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 col-md-8">
                <div class="departure-information__box">
                    <h4 class="departure-information__box__title">Zebrania</h4>
                    <p class="departure-information__box__description">Tutaj proszę o copy, dlaczego warto pojawić się
                        na zebraniu, czego one dotyczą i jaka jest z tego korzyść dla uczestników spotkań. Z uwagi na
                        Państwa bezpieczeństwo zebrania odbędą się w formie online, za pośrednictwem platformy Zoom.</p>
                </div>
                <div class="departure-information__box">
                    <h4 class="departure-information__box__title">Zebrania INFORMACYJNE</h4>
                    <span class="departure-information__box__date"><?php echo get_svg(
                                                                                'calendar'
                                                                              ) . ' 20.03. 2023, godzina 18.00'; ?></span>
                    <br>
                    <p class="departure-information__box__description">Wpisz Twój adres e-mail i otrzymaj zaproszenie na
                        zebranie informacyjne w aplikacji zoom.</p>
                    <input type="email">
                    <span class="departure-information__box__input-label">Wysyłając wiadomość akceptuję politykę prywatności oraz wyrażam zgodę na przetwarzanie moich danych w celach kontaktowych, jak również w celach wynikających z treści zapytania.</span>
                </div>
                <div class="departure-information__box">
                    <h4 class="departure-information__box__title">ZEBRANIA ORGANIZACYJNE</h4>
                    <div class="departure-information__box__inner">
                        <h4 class="departure-information__box__title departure-information__box__title--small-mb">I, II
                            turnus</h4>
                        <span class="departure-information__box__date">
                            <?php echo get_svg('calendar') . ' 12.06.2023, godzina 18:00'; ?>
                        </span>
                    </div>
                    <div class="departure-information__box__inner">
                        <h4 class="departure-information__box__title departure-information__box__title--small-mb">I, II
                            turnus</h4>
                        <span class="departure-information__box__date">
                            <?php echo get_svg('calendar') . ' 12.06.2023, godzina 18:00'; ?>
                        </span>
                    </div>
                    <div class="departure-information__box__inner">
                        <h4 class="departure-information__box__title departure-information__box__title--small-mb">I, II
                            turnus</h4>
                        <span class="departure-information__box__date">
                            <?php echo get_svg('calendar') . ' 12.06.2023, godzina 18:00'; ?>
                        </span>
                    </div>
                </div>
                <div class="departure-information__box">
                    <h4 class="departure-information__box__title">Dokumenty do pobrania</h4>
                    <a class="download" href="#" download>
                        <?php echo Like\get_svg('download'); ?>
                        Karta Kwalifikacyjna Uczestnika Obozu
                    </a>
                    <a class="download" href="#" download>
                        <?php echo Like\get_svg('download'); ?>
                        Karta Kwalifikacyjna Uczestnika Obozu
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
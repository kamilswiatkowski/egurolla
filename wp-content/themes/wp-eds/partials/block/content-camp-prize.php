<?php

$fields = [
  'label'          => get_field('label'),
  'title'          => get_field('title'),
  'boxes'          => get_field('boxes'),
  'prize_contains' => get_field('prize_contains'),
  'good_to_know'   => get_field('good_to_know'),
  'need_invoice'   => get_field('need_invoice'),
];
?>

<section class="camp-prize">
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
            <?php
            $currentDate = strtotime(date('d.m.Y H:i:s'));

            foreach ($fields['boxes'] as $box) {
                $start = strtotime($box['start']);
                $finish = strtotime($box['finish']);

                if ($finish > $currentDate) {
                    $open = false;
                }
                if ($finish > $currentDate && ( ! isset($start) || $start < $currentDate)) {
                    $open = true;
                }
                ?>
                <div class="col-12 col-md-4">
                    <div class="camp-prize__prize-box <?php echo ($open) ? 'open' : 'closed'; ?>"
                         <?php if ($open) { ?>data-timer="<?php echo $finish; ?>"<?php } ?>>
                        <div class="camp-prize__prize-box__label <?php echo ($open) ? 'open' : 'closed'; ?>">
                            <?php if ($open) { ?>
                                Dostępne jeszcze przez:
                                <span>
                                    <span data-timer-number="days"></span>
                                    <span>d:</span>
                                    <span data-timer-number="hours"></span>
                                    <span>:</span>
                                    <span data-timer-number="minutes"></span>
                                    <span>:</span>
                                    <span data-timer-number="seconds"></span>
                                </span>
                            <?php } else { ?>
                                Dostępne od: <?php echo date('d.m', $start); ?>
                                <?php if ($finish) {
                                    echo ' - ' . date('d.m', $finish);
                                } ?>
                            <?php } ?>
                        </div>
                        <div class="camp-prize__prize-box__info">
                            <span class="camp-prize__prize-box__name"><?php echo $box['name']; ?></span>
                            <span class="camp-prize__prize-box__prize"><?php echo $box['prize']; ?></span>
                            <?php if ($open) { ?>
                                <a href="<?php echo $box['sign_up_link']['url']; ?>"
                                   class="btn btn--white btn--red-bg"><?php echo $box['sign_up_link']['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="camp-prize__box">
                    <h4 class="camp-prize__box__title">Cena zawiera:</h4>
                    <?php echo $fields['prize_contains']; ?>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="camp-prize__box">
                    <h4 class="camp-prize__box__title"><?php echo Like\get_svg('bulb'); ?> Co warto wiedzieć:</h4>
                    <?php echo $fields['good_to_know']; ?>
                </div>
                <div class="camp-prize__box">
                    <h4 class="camp-prize__box__title">Potrzebujesz faktury:</h4>
                    <?php echo $fields['need_invoice']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
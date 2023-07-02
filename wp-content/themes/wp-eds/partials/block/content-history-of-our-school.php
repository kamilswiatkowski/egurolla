<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'boxes' => get_field('boxes'),
];

?>


<section class="history-of-our-school">
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
                <div class="history-of-our-school__years__slider">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="history-of-our-school__years__slider__item">
                            <?php echo $box['year']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12">
                <div class="history-of-our-school__slider">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="history-of-our-school__item">
                            <div class="history-of-our-school__item__thumb"
                                 style="background-image: url(<?php echo $box['image']; ?>);"></div>
                            <div class="history-of-our-school__item__text">
                                <div class="history-of-our-school__item__title"><?php echo $box['year']; ?></div>
                                <div class="history-of-our-school__item__description"><?php echo $box['description']; ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

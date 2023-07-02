<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'boxes' => get_field('boxes'),
];

?>
<section class="only-one-school-in-poland">
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
        <div class="row justify-content-center">
            <?php foreach ($fields['boxes'] as $box) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="only-one-school-in-poland__box">
                        <div class="only-one-school-in-poland__box__label"><?php echo $box['red_text']; ?></div>
                        <div class="only-one-school-in-poland__box__title"><?php echo $box['title']; ?></div>
                        <div class="only-one-school-in-poland__box__description"><?php echo $box['description']; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
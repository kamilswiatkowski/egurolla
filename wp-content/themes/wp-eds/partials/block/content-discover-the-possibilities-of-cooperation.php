<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'boxes' => get_field('boxes'),
];
?>
<div class="discover-the-possibilities-of-cooperation">
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
                <div class="discover-the-possibilities-of-cooperation__slider">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="discover-the-possibilities-of-cooperation__box">
                            <div class="discover-the-possibilities-of-cooperation__box__thumb"
                                 style="background-image: url(<?php echo $box['image']; ?>);"></div>
                            <h4 class="discover-the-possibilities-of-cooperation__box__title"><?php echo $box['title']; ?></h4>
                            <p class="discover-the-possibilities-of-cooperation__description"><?php echo $box['description']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
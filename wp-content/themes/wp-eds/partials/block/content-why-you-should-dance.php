<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'image' => get_field('image'),
  'boxes' => get_field('boxes'),
];

?>

<section class="why-you-should-dance" style="background-image: url(<?php echo $fields['image']; ?>);">
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
                <div class="why-you-should-dance__slider">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="why-you-should-dance-box">
                            <h4 class="why-you-should-dance-box__title"><?php echo $box['title']; ?></h4>
                            <p class="why-you-should-dance-box__description"><?php echo $box['description']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

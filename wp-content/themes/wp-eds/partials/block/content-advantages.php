<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'boxes' => get_field('boxes'),
  'image' => get_field('image'),
];
if ($fields['boxes']) { ?>

    <section class="advantages">
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
                <div class="col-12" style="position: relative">
                    <div class="advantages__slider">
                        <?php foreach ($fields['boxes'] as $box) { ?>
                            <div class="advantage-box">
                                <img src="<?php echo $box['icon']; ?>"
                                     alt="<?php echo $box['title']; ?>"
                                     class="advantage-box__icon">
                                <h4 class="advantage-box__title"><?php echo $box['title']; ?></h4>
                                <p class="advantage-box__description"><?php echo $box['description']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <img src="<?php echo $fields['image']; ?>" alt="" class="advantages__image">
                </div>
            </div>
        </div>
    </section>

<?php }
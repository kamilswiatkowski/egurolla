<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'boxes' => get_field('boxes'),
];
?>
<div class="see-cooperation-posibilites">
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
        <div class="row d-lg-none">
            <div class="col-12">
                <div class="see-cooperation-posibilites__slider">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="see-cooperation-posibilites__box">
                            <img src="<?php echo $box['icon'] ?>" alt="<?php echo $box['title']; ?>">
                            <h4 class="see-cooperation-posibilites__box__title"><?php echo $box['title']; ?></h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row d-none d-lg-flex">
            <div class="col-12">
                <div class="see-cooperation-posibilites__boxes">
                    <?php foreach ($fields['boxes'] as $box) { ?>
                        <div class="see-cooperation-posibilites__box">
                            <img src="<?php echo $box['icon'] ?>" alt="<?php echo $box['title']; ?>">
                            <h4 class="see-cooperation-posibilites__box__title"><?php echo $box['title']; ?></h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
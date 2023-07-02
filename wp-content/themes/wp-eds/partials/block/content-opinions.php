<?php

$fields = [
  'label'    => get_field('label'),
  'title'    => get_field('title'),
  'opinions' => get_field('opinions'),
];

?>

<section class="opinions">
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
                <div class="opinions__slider">
                    <?php foreach ($fields['opinions'] as $opinion) { ?>
                        <div class="opinions__box">
                            <div class="opinions__box__logo">
                                <img src="<?php echo $opinion['image']; ?>" alt="<?php echo $opinion['name']; ?>">
                            </div>
                            <div class="opinions__box__opinion"><?php echo $opinion['opinion']; ?></div>
                            <div class="opinions__box__name"><?php echo $opinion['name']; ?></div>
                            <div class="opinions__box__position"><?php echo $opinion['position']; ?></div>
                        </div>
                    <?php } ?>
                    <?php foreach ($fields['opinions'] as $opinion) { ?>
                        <div class="opinions__box">
                            <div class="opinions__box__logo">
                                <img src="<?php echo $opinion['image']; ?>" alt="<?php echo $opinion['name']; ?>">
                            </div>
                            <div class="opinions__box__opinion"><?php echo $opinion['opinion']; ?></div>
                            <div class="opinions__box__name"><?php echo $opinion['name']; ?></div>
                            <div class="opinions__box__position"><?php echo $opinion['position']; ?></div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
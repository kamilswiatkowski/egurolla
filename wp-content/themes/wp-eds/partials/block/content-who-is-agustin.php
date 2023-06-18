<?php

$fields = [
  'boxes' => get_field('slides'),
];

?>

<section class="who-is-agustin">
    <div class="who-is-agustin__slider">
        <?php foreach ($fields['boxes'] as $box) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-md-flex align-items-md-center">
                        <img src="<?php echo $box['image']; ?>" alt="" class="about-agustin__main-img">
                        <div class="about-agustin__inner about-agustin__inner--slider">
                            <?php echo Like\get_section_header(
                              $box['label'],
                              $box['title'],
                              ''
                            ); ?>
                            <span class="about-agustin__position"><?php echo $box['position']; ?></span>
                            <p class="about-agustin__quote"><?php echo $box['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
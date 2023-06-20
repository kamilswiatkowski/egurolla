<?php

$fields = [
  'title'       => get_field('title'),
  'description' => get_field('description'),
  'images'      => get_field('images'),
];

?>

<section class="about-instructor">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-12 col-md-6 order-md-2">
                <div class="about-instructor__slider">
                    <?php foreach ($fields['images'] as $image) { ?>
                        <div class="about-instructor__slider__item">
                            <img src="<?php echo $image['image']; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-6 order-md-1">
                <div class="about-instructor__wrapper">
                    <h3 class="about-instructor__title"><?php echo $fields['title']; ?></h3>
                    <div class="about-instructor__description"><?php echo $fields['description']; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
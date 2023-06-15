<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'quote' => get_field('quote'),
  'sign'  => get_field('sign'),
  'link'  => get_field('link'),
  'image' => get_field('image'),
];
?>

<section class="about-agustin">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-flex align-items-md-center">
                <img src="<?php echo $fields['image']; ?>" alt="" class="about-agustin__main-img">
                <div class="about-agustin__inner">
                    <?php echo Like\get_section_header(
                      $fields['label'],
                      $fields['title'],
                      ''
                    ); ?>
                    <p class="about-agustin__quote"><?php echo $fields['quote']; ?></p>
                    <img src="<?php echo $fields['sign']; ?>" alt="" class="about-agustin__sign">
                    <div class="about-agustin__btn-wrapper">
                        <a href="<?php echo $fields['link']['url']; ?>"
                           class="btn btn--white btn--red-bg"><?php echo $fields['link']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
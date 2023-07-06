<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'link'  => get_field('link'),
  'image' => get_field('image'),
  'sign'  => get_field('sign'),
];

?>

<section class="discover-more">
    <div class="container">
        <div class="row d-lg-flex align-items-lg-center">
            <div class="col-12 col-lg-6 order-lg-2">
                <?php echo Like\get_section_header(
                  $fields['label'],
                  $fields['title'],
                  ''
                ); ?>
                <a href="<?php echo $fields['link']['url']; ?>"
                   class="btn btn--red btn--white-bg"><?php echo $fields['link']['title']; ?></a>
                <?php if ($fields['sign']) { ?>
                    <img src="<?php echo $fields['sign']; ?>" alt="" class="d-none discover-more__sign">
                <?php } ?>
            </div>
            <div class="col-12 col-lg-6 order-lg-1">
                <img src="<?php echo $fields['image']; ?>" alt="" class="discover-more__main-image">
            </div>
        </div>
    </div>
</section>
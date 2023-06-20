<?php

$fields = [
  'title' => get_field('title'),
  'link'  => get_field('link'),
  'image' => get_field('image'),
];

?>

<section class="looking-for-idea">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="looking-for-idea__wrapper">
                    <div class="looking-for-idea__wrapper__inner">
                        <h4 class="looking-for-idea__title"><?php echo $fields['title']; ?></h4>
                        <a href="<?php echo $fields['link']['url']; ?>"
                           class="looking-for-idea__btn btn btn--red btn--white-bg"><?php echo $fields['link']['title']; ?></a>
                    </div>
                    <img src="<?php echo $fields['image']; ?>" class="looking-for-idea__image">
                </div>
            </div>
        </div>
    </div>
</section>

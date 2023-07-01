<?php

$fields = [
  'label' => get_field('label'),
  'sublabel' => get_field('sublabel'),
  'title' => get_field('title'),
  'description' => get_field('description'),
  'button'  => get_field('button'),
  'image'  => get_field('image'),
];
?>

<section class="thankyou-page">
        <div class="container">
            <div class="row d-lg-flex align-items-lg-center">
                        <div class="col-12">
                            <div class="thankyou-page__message">
                                <p class="thankyou-page__message-label"><?php echo $fields['label']; ?></p>
                                <span class="thankyou-page__message-sublabel"><?php echo $fields['sublabel']; ?></span>
                            </div>
                        </div>
            </div>
        </div>
    <div class="thankyou-page__banner">
        <div class="container">
            <div class="row d-lg-flex align-items-lg-center">
                    <div class="col-lg-5 col-12">
                        <div class="thankyou-page__image-box">
                            <img src="<?php echo $fields['image']; ?>" class="thankyou-page__image" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        
                            <p class="thankyou-page__banner-title"><?php echo $fields['title']; ?></p>
                            <span class="thankyou-page__banner-description"><?php echo $fields['description']; ?></span>
                            <a href="<?php echo $fields['button']['url']; ?>" class="btn btn--white-bg btn--red">Odwiedź sklep taneczny</a>
                        
                    </div>
            </div>
        </div>
    </div>
</section>
<?php

$fields = [
  'description' => get_field('footer__banner__description', 'options'),
  'link'        => get_field('footer__banner__link', 'options'),
];

?>

<section class="footer__banner">
    <div class="container">
        <div class="row d-lg-flex align-items-lg-center">
            <div class="col-12 col-lg-3">
                <div class="footer__banner__logo">
                    <?php echo Like\get_svg('logo-white'); ?>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <p class="footer__banner__description"><?php echo $fields['description']; ?></p>
            </div>
            <div class="col-12 offset-lg-1 col-lg-3">
                <a href="<?php echo $fields['link']['url']; ?>"
                   class="btn btn--white-bg btn--red"><?php echo $fields['link']['title']; ?></a>
            </div>
        </div>
    </div>
</section>
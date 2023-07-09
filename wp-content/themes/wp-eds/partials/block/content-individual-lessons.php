<?php

$fields = [
  'title'                => get_field('title'),
  'description'          => get_field('description'),
  'advantages'           => get_field('advantages'),
  'show_pricing'         => get_field('show_pricing'),
  'offer'                => get_field('offer'),
  'packages'             => get_field('packages'),
  'packages_description' => get_field('packages_description'),
  'packages_phone'       => get_field('packages_phone'),
];

?>

<section class="individual-lessons">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-12 col-lg-5">
                <h2 class="individual-lessons__title"><?php echo $fields['title']; ?></h2>
                <p class="section__description section__description--white section__description--bold"><?php echo $fields['description']; ?></p>
                <div class="d-none d-lg-block">
                    <h3 class="section__title section__title--white">Oferta:</h3>
                    <?php foreach ($fields['offer'] as $box) { ?>
                        <div class="why-you-should-dance-box accordion">
                            <h4 class="why-you-should-dance-box__title"
                                data-accordion-toggle><?php echo $box['name']; ?>
                                <?php echo Like\get_svg('arrow-red-bottom'); ?>
                            </h4>
                            <div class="why-you-should-dance-box__description"
                                 data-accordion-content><p><?php echo $box['description']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="individual-lessons__advantages">
                    <?php foreach ($fields['advantages'] as $advantage) { ?>
                        <div class="individual-lessons__advantages__box">
                            <div class="individual-lessons__advantages__box__thumb"
                                 style="background-image: url(<?php echo $advantage['image']; ?>);"></div>
                            <div class="individual-lessons__advantages__box__name"><?php echo $advantage['name']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row d-lg-none">
            <div class="col-12">
                <?php foreach ($fields['offer'] as $box) { ?>
                    <div class="why-you-should-dance-box accordion">
                        <h4 class="why-you-should-dance-box__title"
                            data-accordion-toggle><?php echo $box['name']; ?>
                            <?php echo Like\get_svg('arrow-red-bottom'); ?>
                        </h4>
                        <div class="why-you-should-dance-box__description"
                             data-accordion-content><p><?php echo $box['description']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if ($fields['show_pricing']) { ?>
            <div class="row">
                <div class="col-12">
                    <h2 class="section__title section__title--white" style="margin-bottom: 40px;">Cennik lekcji
                        indywidualnych</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($fields['packages'] as $offer) {
                    $is_super = $offer['super_offer']; ?>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="individual-lessons__box <?php echo ($is_super) ? 'super' : ''; ?>">
                            <div class="individual-lessons__box__top">
                                <?php echo $offer['name']; ?>
                                <span class="individual-lessons__box__top__label">Super oferta</span>
                            </div>
                            <div class="individual-lessons__box__bottom">
                                <div class="individual-lessons__box__price">
                                    <?php echo $offer['price']; ?>
                                    <span> / <?php echo $offer['number_of_lessons']; ?></span>
                                </div>
                                <div class="individual-lessons__box__description">
                                    <p><?php echo $offer['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="individual-lessons__contact">
                        <div class="individual-lessons__contact__left">
                            <?php echo \Like\get_svg('phone'); ?>
                        </div>
                        <div class="individual-lessons__contact__right">
                            <span><?php echo $fields['packages_description']; ?></span>
                            <a href="tel:<?php echo $fields['packages_phone']; ?>"><?php echo $fields['packages_phone']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
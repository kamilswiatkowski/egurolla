<?php

$fields = [
  'label'    => get_field('label'),
  'title'    => get_field('title'),
  'partners' => get_field('partners'),
];

?>

<section class="partners">
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
                <div class="partners__slider d-md-none">
                    <?php foreach ($fields['partners'] as $partner) { ?>
                        <div class="partners__box">
                            <img src="<?php echo $partner['logo']['url']; ?>" alt="<?php echo $partner['name']; ?>">
                            <div class="partners__box__name"><?php echo $partner['name']; ?></div>
                            <div class="partners__box__description"><?php echo $partner['description']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <?php foreach ($fields['partners'] as $partner) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="partners__box">
                        <img src="<?php echo $partner['logo']['url']; ?>" alt="<?php echo $partner['name']; ?>">
                        <div class="partners__box__name"><?php echo $partner['name']; ?></div>
                        <div class="partners__box__description"><?php echo $partner['description']; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php

$fields = [
  'label'               => get_field('label'),
  'title'               => get_field('title'),
  'contact_people'      => get_field('contact_people'),
  'contact_people_time' => get_field('contact_people_time'),
  'email'               => get_field('email'),
  'contact_email_time'  => get_field('contact_email_time'),
  'czat'                => get_field('czat'),
  'contact_czat_time'   => get_field('contact_czat_time'),
  'image'               => get_field('image'),
];
?>

<section class="do-you-have-questions">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <?php echo Like\get_section_header(
                          $fields['label'],
                          $fields['title'],
                          ''
                        ); ?>
                    </div>
                </div>
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-6">
                        <?php foreach ($fields['contact_people'] as $contactPerson) { ?>
                            <div class="do-you-have-questions__box">
                                <div class="do-you-have-questions__box__left">
                                    <?php echo Like\get_svg('phone'); ?>
                                </div>
                                <div class="do-you-have-questions__box__right">
                                    <span class="do-you-have-questions__box__name">
                                        <?php if (isset($contactPerson['position']) && $contactPerson['position']) {
                                            echo $contactPerson['position'] . '<br>';
                                        } ?>
                                        <?php echo $contactPerson['name']; ?>
                                    </span>
                                    <a href="tel:<?php echo $contactPerson['number']; ?>"
                                       class="do-you-have-questions__box__link"><?php echo $contactPerson['number']; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                        <p class="do-you-have-questions__box__desc"><?php echo $fields['contact_people_time']; ?></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="do-you-have-questions__box">
                            <div class="do-you-have-questions__box__left">
                                <?php echo Like\get_svg('envelope'); ?>
                            </div>
                            <div class="do-you-have-questions__box__right">
                                <a href="mailto:<?php echo $fields['email']; ?>"
                                   class="do-you-have-questions__box__link"><?php echo $fields['email']; ?></a>
                            </div>
                        </div>
                        <p class="do-you-have-questions__box__desc"><?php echo $fields['contact_email_time']; ?></p>
                        <div class="do-you-have-questions__box">
                            <div class="do-you-have-questions__box__left">
                                <?php echo Like\get_svg('chat'); ?>
                            </div>
                            <div class="do-you-have-questions__box__right">
                                <a href="<?php echo $fields['czat']; ?>"
                                   class="do-you-have-questions__box__link"><?php echo $fields['czat']; ?></a>
                            </div>
                        </div>
                        <p class="do-you-have-questions__box__desc"><?php echo $fields['contact_czat_time']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="do-you-have-questions__image"
                     style="background-image: url(<?php echo $fields['image']; ?>);"></div>
            </div>
        </div>
    </div>
</section>
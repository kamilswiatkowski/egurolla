<?php

$fields = [
  'title' => get_field('title'),
  'name' => get_field('name'),
  'mail' => get_field('mail'),
 
];
?>

<section class="contact-coop">
    <div class="container">
        <div class="row d-lg-flex align-items-lg-center">
            <div class="col-12">
                <div class="contact-coop__items">

                    <h3 class="red-title-italic heading"><?php echo $fields['title']; ?></h3>
                        <div class="contact-coop__item-headline">
                            <span class="contact-coop__item-headline black-subtitle-italic extra-pr"><?php echo $fields['name']; ?> </span><?php echo Like\get_svg('mail'); ?>
                            <a href="mailto:<?php echo $fields['mail']; ?>" class="mail-link"><?php echo $fields['mail']; ?></a>
                        </div>
                
                </div>        
            </div>
        </div>
    </div>
</section>
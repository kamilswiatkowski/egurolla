<?php

$fields = [
  'phone' => get_field('phone'),
  'phonedesc' => get_field('phonedesc'),
  'mail' => get_field('mail'),
  'maildesc'  => get_field('maildesc'),
  'chat'  => get_field('chat'),
  'chatdesc' => get_field('chatdesc'),
];
?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                
                <div class="contact__item">
                    
                        <div class="contact__item-headline">
                            <?php echo Like\get_svg('phone'); ?>
                            <h4 class="contact__item-header"><?php echo $fields['phone']; ?></h4>
                        </div>
                    
                 <p class="contact__item-desc"><?php echo $fields['phonedesc']; ?></p>
                </div>       
            </div>

            <div class="col-lg-4 col-12">
                
                <div class="contact__item">
                    
                        <div class="contact__item-headline">
                            <?php echo Like\get_svg('mail'); ?>
                            <h4 class="contact__item-header"><?php echo $fields['mail']; ?></h4>
                        </div>
                    
                 <p class="contact__item-desc"><?php echo $fields['maildesc']; ?></p>
                </div>        
            </div>

            <div class="col-lg-4 col-12">
                <div class="contact__item">
                    
                        <div class="contact__item-headline">
                            <?php echo Like\get_svg('chat'); ?>
                            <h4 class="contact__item-header"><?php echo $fields['chat']; ?></h4>
                        </div>
                    
                 <p class="contact__item-desc"><?php echo $fields['chatdesc']; ?></p>       
                </div>
            </div>
        </div>
    </div>
</section>
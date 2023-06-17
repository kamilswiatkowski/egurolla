<?php

$fields = [
  'title' => get_field('title'),
  'address' => get_field('address'),
  'path' => get_field('path'),
  'companydata'  => get_field('companydata'),
  'find'  => get_field('find'),
  'fb' => get_field('fb'),
  'ig' => get_field('ig'),
  'yt' => get_field('yt'),
  'tiktok' => get_field('tiktok'),
];
?>

<section class="contact-map">
<div class="container">
	<div class="row">
        <div class="col-lg-4 col-12 col-left">
            <div class="contact-map_data">
                <h3 class="contact-map_data-title"><?php echo $fields['title']; ?></h3>
                <p class="contact-map_data-address"><?php echo $fields['address']; ?></p><br>
                <a href="<?php echo $fields['path']; ?>" class="contact-map_data-path">Pokaż trasę</a><br>
                <br>
                <p class="contact-map_data-address"><?php echo $fields['companydata']; ?></p>
                <a href="<?php echo $fields['find']['url']; ?>" class="contact-map_data-button">Znajdź szkołę</a>
            </div>
            <div class="contact-map_data-socials">
                <?php if($fields['fb']) { ?>
                        <div class="contact-map_data-socials-icons">
                                <a href="<?php echo $fields['fb']; ?>" target="_blank">
                                        <?php echo Like\get_svg('fb'); ?> 
                                </a>
                        </div>
                <?php } ?>

                <?php if($fields['yt']) { ?>
                        <div class="contact-map_data-socials-icons">
                                <a href="<?php echo $fields['yt']; ?>" target="_blank">
                                        <?php echo Like\get_svg('yt'); ?> 
                                </a>
                        </div>
                <?php } ?>

                <?php if($fields['ig']) { ?>
                        <div class="contact-map_data-socials-icons">
                                <a href="<?php echo $fields['ig']; ?>" target="_blank">
                                        <?php echo Like\get_svg('ig'); ?> 
                                </a>
                        </div>
                <?php } ?>

                <?php if($fields['tiktok']) { ?>
                        <div class="contact-map_data-socials-icons">
                                <a href="<?php echo $fields['tiktok']; ?>" target="_blank">
                                        <?php echo Like\get_svg('tiktok'); ?> 
                                </a>
                        </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-8 col-12 col-right">
           <div class="contact-map_map">
            <?php echo Like\get_png('contact-map'); ?>
           </div>
        </div>
	</div>
</div>
</section>
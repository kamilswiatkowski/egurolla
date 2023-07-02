<?php

$fields = [
  'title' => get_field('title'),
  'date' => get_field('date'),
  'location' => get_field('location'),
  'forwho'  => get_field('forwho'),
  'description'  => get_field('description'),
  'casting_image' => get_field('casting_image'),
];
?>

<section class="casting-desc">
<div class="container">
	<div class="row">
        <div class="col-lg-6 col-12 col-left">
            <div class="casting-desc__data">
            <h3 class="casting-desc__data-title"><?php echo $fields['title']; ?></h3>

            <div class="casting-desc__data-bullets"> <?php echo Like\get_svg('img-cal'); ?> <p class="casting-desc__data-date"><?php echo $fields['date']; ?></p></div>
            <div class="casting-desc__data-bullets"><?php echo Like\get_svg('img-pin'); ?>    <p class="casting-desc__data-date"><?php echo $fields['location']; ?></p></div>
            <div class="casting-desc__data-bullets"><?php echo Like\get_svg('img-date'); ?>  <p class="casting-desc__data-date"><?php echo $fields['forwho']; ?></p></div>
           
                <p class="casting-desc__data-description"><?php echo $fields['description']; ?></p>
            </div>
        </div>
        <div class="col-lg-6 col-12 col-right">
           <div class="casting-desc__image">
           <img src="<?php echo $fields['casting_image']['url'] ?>" alt="">
           </div>
        </div>
	</div>
</div>
</section>
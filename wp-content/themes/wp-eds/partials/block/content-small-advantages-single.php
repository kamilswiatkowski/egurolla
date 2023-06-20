<?php

$fields = [
  'advantages' => get_field('advantages'),
];

?>

<section class="small-advantages-single">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="small-advantages-single__wrapper">
                    <?php foreach ($fields['advantages'] as $advantage) { ?>
                        <div class="small-advantages-single__item">
                            <img src="<?php echo $advantage['icon']; ?>" alt="">
                            <h4><?php echo $advantage['title']; ?></h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
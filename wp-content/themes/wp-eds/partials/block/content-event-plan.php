<?php

$fields = [
  'label' => get_field('label'),
  'title' => get_field('title'),
  'plan'  => get_field('plan'),
];
?>


<section class="event-plan">
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
                <div class="event-plan__slider">
                    <?php foreach ($fields['plan'] as $key => $plan) {
                        echo Like\plan_box($plan, $key + 1);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
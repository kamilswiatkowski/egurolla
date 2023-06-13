<?php

$fields = [
  'label'       => 'Wydarzenia',
  'title'       => 'Poznajmy się podczas wyjątkowych spotkań',
  'description' => '',
];
?>
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo Like\get_section_header(
                  $fields['label'],
                  $fields['title'],
                  $fields['description']
                ); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo Like\get_event_box(); ?>
                <?php echo Like\get_event_box(); ?>
                <?php echo Like\get_event_box(); ?>
            </div>
        </div>
    </div>
</section>
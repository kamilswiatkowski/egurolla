<?php

$fields = [
  'label'      => get_field('label'),
  'title'      => get_field('title'),
  'instructor' => get_field('instructor'),
];

?>


<section class="our-team">
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
                <div class="our-team__slider">
                    <?php foreach ($fields['instructor'] as $instructor) {
                        echo Like\instructor_box($instructor);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
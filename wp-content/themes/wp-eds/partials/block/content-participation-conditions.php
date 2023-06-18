<?php

$fields = [
  'label'      => get_field('label'),
  'title'      => get_field('title'),
  'conditions' => get_field('conditions'),
];
?>


<section class="participation-conditions">
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
                <?php foreach ($fields['conditions'] as $key => $condition) { ?>
                    <div class="participation-conditions__box">
                        <div class="participation-conditions__top">
                            <span class="participation-conditions__index"><?php echo $key + 1; ?>.</span>
                            <span class="participation-conditions__title"><?php echo $condition['title']; ?></span>
                        </div>
                        <div class="participation-conditions__description"><?php echo $condition['description']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
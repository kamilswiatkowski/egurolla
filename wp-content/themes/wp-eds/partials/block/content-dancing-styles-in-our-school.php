<?php

$fields = [
  'label' => 'Wybierz styl odpowiedni dla siebe',
  'title' => 'Style tańca dostępne w naszej szkole',
];

$styles = get_posts(
  [
    'post_type' => 'styl',
  ]
);

?>

<div class="dancing-styles-in-our-school">
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
                <div class="dancing-styles-in-our-school__slider">
                    <?php foreach ($styles as $style) {
                        Like\dance_style_box($style);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
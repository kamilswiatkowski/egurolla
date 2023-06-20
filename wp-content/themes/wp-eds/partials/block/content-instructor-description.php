<?php

$id = get_post()->ID;
$fields = [
  'label'              => '',
  'title'              => get_the_title($id),
  'description'        => get_field('description'),
  'all_dancing_styles' => get_field('all_dancing_styles'),
  'image'              => get_field('image'),
];
?>

<section class="about-agustin instructor-description">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-flex align-items-md-center">
                <img src="<?php echo $fields['image']; ?>" alt="" class="about-agustin__main-img">
                <div class="about-agustin__inner">
                    <?php echo Like\get_section_header(
                      $fields['label'],
                      $fields['title'],
                      ''
                    ); ?>
                    <?php if ($fields['all_dancing_styles']) { ?>
                        <ul class="instructor-description__styles">
                            <?php foreach ($fields['all_dancing_styles'] as $allDancingStyle) { ?>
                                <li>
                                    <?php echo $allDancingStyle['dancing_style']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                    <p class="instructor-description__description"><?php echo $fields['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
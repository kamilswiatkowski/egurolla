<?php

$fields = [
  'title' => get_field('title'),
  'teams' => get_field('teams'),
];

?>

<section class="teams-led-by">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title"><?php echo $fields['title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="teams-led-by__slider">
                    <?php foreach ($fields['teams'] as $team) {
                        Like\showTeam($team);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
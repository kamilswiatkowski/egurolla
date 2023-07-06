<?php

namespace Like;

function showTeams(array $teams)
{
    foreach ($teams as $team) {
        ?>
        <div class="col-lg-4 col-12">
            <?php showTeam($team); ?>
        </div>
    <?php }
}

function showTeam($team)
{
    $categories = get_the_terms($team->ID, 'teams-cat');
    ?>
    <div class="teams__team">
        <div class="teams__team-content" style="background: url('<?php echo get_the_post_thumbnail_url(
          $team->ID
        ); ?>') center center no-repeat">
            <div class="teams__team-overlay flex-center">
                <a href="<?php echo get_permalink($team->ID); ?>"
                   class="teams__team-btn btn btn--white-text">DOWIEDZ SIĘ WIĘCEJ</a>
            </div>
            <?php ?>
            <?php if (get_field('open_casting', $team->ID)) { ?>
                <div class="teams__team-casting">
                    <?php echo get_svg('open-casting'); ?>Otwarty Casting
                </div>
            <?php } ?>
            <?php if (is_array($categories)) { ?>
                <div class="teams__team-categories">
                    <?php foreach ($categories as $category) {
                        if($category->parent === 0) continue;
                        ?>
                        <div class="teams__team-category">
                            <?php echo $category->name; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="teams__team-title"><?php echo $team->post_title; ?></div>
    </div>
<?php }
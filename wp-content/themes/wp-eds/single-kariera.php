<?php

$post = get_post();
$content = $post->post_content;
get_header();

$fields = [
  'description'     => get_field('description'),
  'required_skills' => get_field('required_skills'),
  'requirements'    => get_field('requirements'),
  'duties'          => get_field('duties'),
  'we_offer'        => get_field('we_offer'),
];

?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="section__description single-kariera__description"><?php echo $fields['description']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php Like\kariera_box($post->ID); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="single-kariera__required_skills__title">Wymagane umiejętności</h3>
                <ul class="single-kariera__required_skills">
                    <?php foreach ($fields['required_skills'] as $item) { ?>
                        <li>
                            <?php echo $item['skill']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single-kariera__box">
                    <div class="single-kariera__box__left">
                        <div class="single-kariera__box__title">Wymagania</div>
                        <ul>
                            <?php foreach ($fields['requirements'] as $requirement) { ?>
                                <li><?php echo $requirement['requirement']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="single-kariera__box__right">
                        <div class="single-kariera__box__right__salary">min <br> <?php echo get_field('payment_min'); ?>
                            PLN<br>
                            BRUTTO
                        </div>
                        <div class="single-kariera__box__right__salary">max<br> <?php echo get_field('payment_max'); ?>
                            PLN<br>
                            BRUTTO
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single-kariera__box">
                    <div class="single-kariera__box__left">
                        <div class="single-kariera__box__title">Zakres obowiązków</div>
                        <ul>
                            <?php foreach ($fields['duties'] as $requirement) { ?>
                                <li><?php echo $requirement['duty']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single-kariera__box">
                    <div class="single-kariera__box__left">
                        <div class="single-kariera__box__title">Oferujemy</div>
                        <ul>
                            <?php foreach ($fields['we_offer'] as $requirement) { ?>
                                <li><?php echo $requirement['offer']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
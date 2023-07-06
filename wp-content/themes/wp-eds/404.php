<?php 
get_header();
?>

<?php
$title = get_field('404_headline', 'option');
$label = get_field('404_subtitle', 'option');
$image = get_field('404_image', 'option');

?>

<section class="about-augstin 404">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-flex align-items-md-center">
                <img src="<?php echo $fields['image']; ?>" alt="" class="about-agustin__main-img">
                <div class="about-agustin__inner">
                    <span class="404">404</span>
                    <?php echo Like\get_section_header(
                      $fields['title'],
                      $fields['label'],
                      ''
                    ); ?>
                    <div class="about-agustin__btn-wrapper">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               class="btn btn--white btn--red-bg">Przejdz na stronę główną</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?get_footer(); 
?>

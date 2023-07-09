<?php 
get_header();
?>

<?php
$fields = [
'title' => get_field('404_headline', 'option'),
'label' => get_field('404_subtitle', 'option'),
'image' => get_field('404_image', 'option'),
];
?>
<?php if($fields['title']) { ?>
<section class="about-augstin error-404">
    <div class="container">
        <div class="row">
            <div class="col-12 d-md-flex align-items-md-center">
            
            <img src="<?php echo $fields['image']; ?>" alt="" class="about-agustin__main-img">
                <div class="about-agustin__inner">
                <span class="section__404">404</span>
                    
                    <p class="section__label"><?php echo $fields['title']; ?><span class="section__title"><?php echo $fields['label']; ?></span></p>
                    
                    <div class="button">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               class="btn btn--white btn--red-bg">Przejdz na stronę główną</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php
    get_footer();
?>

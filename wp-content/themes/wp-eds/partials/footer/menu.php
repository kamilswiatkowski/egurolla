<?php

$footer_menu = get_field('footer_menu', 'options');
?>

<section class="footer__menu">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <ul>
                    <?php foreach ($footer_menu as $footerMenu) { ?>
                        <li>
                            <a href="<?php echo $footerMenu['link']['url']; ?>"><?php echo $footerMenu['link']['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-12 col-lg-4">
                <?php include(Like\get_partial('socials')); ?>
            </div>
        </div>
    </div>

</section>
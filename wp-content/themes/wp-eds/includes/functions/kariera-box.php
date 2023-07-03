<?php

namespace Like;

function kariera_box(int $id)
{
    $apply_url = (is_single($id)) ? '#form' : get_permalink($id);
    ?>
    <div class="kariera__box">
        <div class="kariera__box__top">
            <div class="kariera__box__name"><?php echo get_the_title($id); ?></div>
            <div class="kariera__box__salary"><?php echo get_field('payment_min', $id) . '-' . get_field(
                    'payment_max',
                    $id
                  ); ?> PLN
                Brutto
            </div>
        </div>
        <div class="kariera__box__published">Data publikacji: <?php echo get_the_date('d.m.Y', $id); ?></div>
        <div class="kariera__box__bottom">
            <div class="kariera__box__info">
                <div class="kariera__box__info__item">
                    <span>Miejsce pracy:</span>
                    <span><?php echo get_field('work_place', $id); ?></span>
                </div>
                <div class="kariera__box__info__item">
                    <span><?php echo get_svg('work-type'); ?>Rodzaj pracy:</span>
                    <span><?php echo get_field('work_type', $id); ?></span>
                </div>
                <div class="kariera__box__info__item">
                    <span><?php echo get_svg('work-mode'); ?>Tryb pracy:</span>
                    <span><?php echo get_field('work_mode', $id); ?></span>
                </div>
                <div class="kariera__box__info__item">
                    <span><?php echo get_svg('work-contract'); ?>Forma zatrudnienia:</span>
                    <span><?php echo get_field('work_contract', $id); ?></span>
                </div>
            </div>
            <div class="kariera__box__btn-wrapper">
            <a href="<?php echo esc_url($apply_url); ?>" class="btn btn--white btn--red-bg">Aplikuj</a>
            </div>
        </div>
    </div>

<?php }
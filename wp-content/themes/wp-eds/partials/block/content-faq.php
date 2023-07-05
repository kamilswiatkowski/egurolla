<?php

$fields = [
  'title'     => get_field('title'),
  'questions' => get_field('questions'),
];

?>

<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title"><?php echo $fields['title']; ?></h2>
            </div>
            <div class="col-12">
                <div class="faq__filter">
                    <span class="faq__filter__label">Filtruj po:</span>
                    <ul>
                        <li class="faq__filter__button active" data-filter-value="all">Wszystkie</li>
                        <?php foreach ($fields['questions'] as $questions) { ?>
                            <li class="faq__filter__button" data-filter-value="<?php echo str_replace(
                              ' ',
                              '-',
                              strtolower($questions['topic'])
                            ); ?>"><?php echo $questions['topic']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="faq-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php foreach ($fields['questions'] as $questions) { ?>
                    <div data-filter-block="<?php echo str_replace(
                      ' ',
                      '-',
                      strtolower($questions['topic'])
                    ); ?>">
                        <h4 class="faq__sub-title"><?php echo $questions['topic']; ?></h4>
                        <?php foreach ($questions['questions'] as $question) { ?>
                            <div class="faq__item">
                                <div class="faq__item__top" data-accordion-toggle>
                                    <?php echo $question['question']; ?>
                                    <?php echo Like\get_svg('arrow-red-bottom'); ?>
                                </div>
                                <p class="faq__item__bottom"
                                   data-accordion-content><?php echo $question['answer']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
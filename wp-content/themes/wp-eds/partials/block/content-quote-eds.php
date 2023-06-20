<?php

$fields = [
  'quote'       => get_field('quote'),
  'author'      => get_field('author'),
  'description' => get_field('description'),
];

?>

<section class="quote-eds">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="quote-eds__wrapper">
                    <p class="quote-eds__quote"><?php echo $fields['quote']; ?></p>
                    <h4 class="quote-eds__author"><?php echo $fields['author']; ?></h4>
                    <p class="quote-eds__description"><?php echo $fields['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$fields = [
  'title' => get_field('title'),
  'attachment' => get_field('attachment'),
  'doc_name' => get_field('doc_name'),
 
];
?>

<section class="document-download">

<?php echo $fields['title']; ?>

    <div class="container">
        <div class="row d-lg-flex align-items-lg-center">

        <?php $attachment = get_field('attachment'); ?>
        <?php $doc_name = get_field('doc_name'); ?>

        <?php if ($attachment && $doc_name) : ?>
            <div class="col-lg-3 col-12"><a href="<?php echo $attachment['url']; ?>" target="_blank"><?php echo $doc_name; ?></a></div>
        <?php endif; ?>

        </div>
    </div>
    
</section>
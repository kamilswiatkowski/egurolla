<?php
$fields = [
  'title' => get_field('title'),
  'attachment' => get_field('attachment'),
  'doc_name' => get_field('doc_name'),
];
?>

<?php
$documents = get_field('document_download');
?>

<section class="document-download">
  <div class="container">
    <h3 class="red-title-italic heading"><?php echo $fields['title']; ?></h3>
    <div class="row d-lg-flex align-items-lg-center">
        <?php if ($documents) : ?>
            <?php foreach ($documents as $document) : ?>
            <?php $attachment = $document['attachment']; ?>
            <?php $doc_name = $document['doc_name']; ?>
            <?php if ($attachment && $doc_name) : ?>
                <div class="col-lg-4 col-12">
                  <div class="document-download__filebox"> 
                    <?php echo Like\get_svg('download'); ?>
                    <a href="<?php echo $attachment['url']; ?>" target="_blank" class="document-download__filebox-link"><?php echo $doc_name; ?></a>
                  </div>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
  </div>
</section>
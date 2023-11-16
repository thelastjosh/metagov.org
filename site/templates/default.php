<?php
$width = 'max-w-3xl';

if ($page->width()->toBool()) {
  $width = 'max-w-[1120px]';
}

?>

<?php snippet('header') ?>

<div class="container <?= $width ?>">
  <div class="mb-8">
    <div class="flex gap-4 items-center">
      <h1 class="text-xl font-semibold mb-2"><?= $page->title()->esc() ?></h1>
    </div>
  </div>

  <?php if ($image = $page->cover()->toFile()) : ?>
    <img class="mb-8 w-full" src="<?= $image->url() ?>" alt="<?= $image->alt()->esc() ?>">
  <?php endif ?>

  <article class="mb-8 prose">
    <?= $page->text()->toBlocks() ?>
  </article>
</div>

<?php snippet('footer') ?>
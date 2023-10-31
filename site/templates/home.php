<?php snippet('header') ?>

<div class="min-h-screen flex-col items-center justify-between p-5">
  <image class="w-[480px] h-[480px] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10" alt="Dithered image of the globe in green" src="/src/globe-dithered.png" width="480px" height="480px" />

  <div class="flex gap-4">
    <?php snippet('window', ['title' => 'Hello!', 'subheading' => 'Subheading'], slots: true) ?>
    <?php slot('body') ?>
    <p>This is some body text</p>
    <?php endslot() ?>
    <?php endsnippet() ?>
    <?php snippet('window', ['title' => 'Hello!', 'subheading' => 'Subheading'], slots: true) ?>
    <?php slot('body') ?>
    <p>This is some body text</p>
    <?php endslot() ?>
    <?php endsnippet() ?>
    <?php snippet('window', ['title' => 'Hello!', 'subheading' => 'Subheading'], slots: true) ?>
    <?php slot('body') ?>
    <p>This is some body text</p>
    <?php endslot() ?>
    <?php endsnippet() ?>
  </div>


</div>

<?php snippet('footer', ['title' => 'Hello!', 'subheading' => 'Subheading']) ?>
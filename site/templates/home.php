<?php snippet('header') ?>

<div x-data="{order: false}" class="min-h-screen flex-col items-center justify-between p-5">
  <image class="w-[480px] h-[480px] fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10" alt="Dithered image of the globe in green" src="/src/globe-dithered.png" width="480px" height="480px" />
  <?php snippet('chaos-order') ?>
  <!-- chaos -->
  <div x-cloak x-show="!order" x-transition.duration.450ms x-transition:enter.delay.500ms class="min-h-screen" id="window-container">
    <div class="draggable absolute top-32 right-44">
      <?php snippet('window', ['title' => 'Weekly seminar', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>weekly seminar on topics in online governance</p>
        <p>other weds at 12pm ET</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
    <div class="draggable absolute top-[440px] left-56">
      <?php snippet('window', ['title' => 'Project', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>At the heart of Metagov is projects. Projects include software or research developed by members of Metagov and are conducted by both formal and informal working groups. The following tables provide and overview of current projects being incubated in Metagov.</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
    <div class="draggable absolute bottom-48 right-24">
      <?php snippet('window', ['title' => 'Welcome', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>metagov is an interdisciplinary research collective. we build standards & infrastructure for digital self-governance.</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
  </div>

  <!-- ordered -->
  <div x-cloak x-show="order" class="" x-transition.duration.450ms x-transition:enter.delay.500ms>
    <div>
      <?php snippet('window', ['title' => 'Weekly seminar', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>weekly seminar on topics in online governance</p>
        <p>other weds at 12pm ET</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
    <div>
      <?php snippet('window', ['title' => 'Project', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>At the heart of Metagov is projects. Projects include software or research developed by members of Metagov and are conducted by both formal and informal working groups. The following tables provide and overview of current projects being incubated in Metagov.</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
    <div>
      <?php snippet('window', ['title' => 'Welcome', 'subheading' => 'Subheading'], slots: true) ?>
      <?php slot('body') ?>
      <div class="p-4">
        <p>metagov is an interdisciplinary research collective. we build standards & infrastructure for digital self-governance.</p>
      </div>
      <?php endslot() ?>
      <?php endsnippet() ?>
    </div>
  </div>
</div>

<?php snippet('footer', ['title' => 'Hello!', 'subheading' => 'Subheading']) ?>


<script>
  Draggable.create(".draggable", {
    bounds: document.getElementById("window-container"),
  });
</script>
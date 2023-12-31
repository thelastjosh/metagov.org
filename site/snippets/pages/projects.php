<div class="container max-w-[924px]">
  <div class="mb-8">
    <h1 class="text-xl font-semibold mb-2">Projects</h1>
    <h2 class="text-large font-serif font-normal">Subheading to go here.</h2>
  </div>
  <ul class="grid sm:grid-cols-2 gap-4 sm:gap-6 mx-auto mt-8">
    <?php foreach ($page->children()->listed() as $project) : ?>
      <li>
        <a href="<?= $project->url() ?>">
          <?php snippet('window', ['title' => $project->title(), 'subheading' => $project->subheading()], slots: true) ?>
          <?php if ($image = $project->cover()->toFile()) : ?>
            <img class="w-full" src="<?= $image->crop(434, 235, "center")->url() ?>" srcset="<?= $image->srcset(
                                                                                                [
                                                                                                  '1x'  => ['width' => 434, 'height' => 235, 'crop' => 'center'],
                                                                                                  '2x'  => ['width' => 868, 'height' => 470, 'crop' => 'center'],
                                                                                                  '3x'  => ['width' => 1320, 'height' => 705, 'crop' => 'center'],
                                                                                                ]
                                                                                              ) ?>" alt="<?= $image->alt()->esc() ?>" width="<?= $image->resize(434)->width() ?>" height="<?= $image->resize(235)->height() ?>">
          <?php endif ?>
          <?php endsnippet() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
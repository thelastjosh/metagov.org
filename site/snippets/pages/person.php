<div class="container lg:flex lg:gap-8">
  <div class="mb-8 flex-shrink-0">
    <?php if ($image = $page->image()) : ?>
      <img class="w-full border border-brand/30 rounded mb-4" src="<?= $image->crop(200, 200, "center")->url() ?>" srcset="<?= $image->srcset(
                                                                                                                              [
                                                                                                                                '1x'  => ['width' => 200, 'height' => 200, 'crop' => 'center'],
                                                                                                                                '2x'  => ['width' => 400, 'height' => 400, 'crop' => 'center'],
                                                                                                                                '3x'  => ['width' => 600, 'height' => 600, 'crop' => 'center'],
                                                                                                                              ]
                                                                                                                            ) ?>" alt="<?= $image->alt()->esc() ?>" width="<?= $image->resize(154)->width() ?>" height="<?= $image->resize(235)->height() ?>">
    <?php endif ?>
    <h1 class="text-small text-secondary mb-1"><?= $page->title()->esc() ?></h1>
    <p class="mb-1 italic font-serif"><?= $page->affiliation() ?></p>
    <span class="button inline-block mb-1"><?= $page->role()->split()[0] ?></span>

    <div>
      <a href="<?= $page->website() ?>" target="_blank">🌐 www</a>
      <a href="mailto:<?= $page->email() ?>" target="_blank" class="ml-4">📧 email</a>
    </div>
  </div>

  <div>
    <h3 class="text-xs font-mono text-secondary">BIO</h3>
    <div class="prose mb-4">
      <?= $page->bio()->kt() ?>
    </div>
    <h3 class="text-xs font-mono text-secondary">RESEARCH INTERESTS</h3>
    <p><?= $page->interests() ?>
    <h3 class="text-xs font-mono text-secondary">JOINED</h3>
    <p><?= $page->dateJoined()->toDate('F Y') ?></p>
  </div>
</div>
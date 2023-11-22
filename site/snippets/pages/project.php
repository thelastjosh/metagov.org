<div class="container max-w-3xl pb-16">
  <div class="mb-8">
    <div class="flex gap-4 items-center">
      <h1 class="text-xl font-semibold"><?= $page->title()->esc() ?></h1>
      <?php foreach ($page->projectStatus()->split() as $key => $status) : ?>
        <?php if ($key == 0) : ?>
          <span class="tag active"><?= $status ?></span>
        <?php else : ?>
          <span class="tag secondary active"><?= $status ?></span>
        <?php endif ?>
      <?php endforeach ?>
      <?php if ($page->seekingParticipants()->toBool()) : ?>
        <span class="tag secondary active">✅ SEEKING PARTICIPANTS</span>
      <?php endif ?>
    </div>
    <h2 class="text-large font-serif font-normal">
      <?= $page->subHeading()->esc() ?>
    </h2>
  </div>

  <img class="mb-8" src="<?= $page->image()->url() ?>" alt="<?= $page->image()->alt()->esc() ?>">


  <div class="mb-8 grid grid-cols-3 justify-evenly gap-6">
    <div>
      <?php if ($page->links()->isNotEmpty()) : ?>
        <h3 class="text-small font-medium">LINKS</h3>
        <div>
          <?php
          $links = $page->links()->toStructure();
          foreach ($links as $link) : ?>
            <a class="inline-block mr-2" href="<?= $link->content()->url() ?>" target="_blank">
              <?= $link->content()->text() ?>
            </a>
          <?php endforeach ?>
        </div>
      <?php endif ?>
    </div>
    <div class="space-y-1">
      <?php if ($page->type()->isNotEmpty()) : ?>
        <h3 class="text-small font-medium">PROJECT TYPE</h3>
        <?php foreach ($page->type()->split() as $type) : ?>
          <span class="tag"><?= $type ?></span>
        <?php endforeach ?>
      <?php endif ?>
    </div>
    <div>
      <?php if ($page->members()->isNotEmpty()) : ?>
        <div class="mb-4">
          <h3 class="text-small font-medium">MEMBERS</h3>
          <?php
          $members =  $page->members()->toPages();
          foreach ($members as $member) : ?>
            <p><?= $member->title() ?></p>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <?php if ($page->contact()->isNotEmpty()) : ?>
        <div>
          <h3 class="text-small font-medium">PRINCIPLE CONTACT</h3>
          <?= Html::email($page->contact()) ?>
        </div>
      <?php endif ?>
    </div>
  </div>

  <?php if ($page->description()->isNotEmpty()) : ?>
    <div class="mb-8">
      <h3 class="text-small font-medium">DESCRIPTION</h3>
      <div class="font-serif">
        <?= $page->description()->kt() ?>
      </div>
    </div>
  <?php endif ?>

  <?php if ($page->participation()->isNotEmpty()) : ?>
    <div class="mb-8">
      <h3 class="text-small font-medium">PATHS TO PARTICIPATION + DISCUSSION FORUM</h3>
      <div class="font-serif">
        <?= $page->participation()->kt() ?>
      </div>
    </div>
  <?php endif ?>

  <?php if ($page->meetings()->isNotEmpty()) : ?>
    <div>
      <h3 class="text-small font-medium">MEETINGS</h3>
      <div class="font-serif">
        <?= $page->meetings()->kt() ?>
      </div>
    </div>
  <?php endif ?>


</div>
<?php

// main menu items
$items = $site->mainMenu()->toStructure();

// only show the menu if items are available
if ($items->isNotEmpty()) :

?>
  <div x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }
 
                this.$refs.button.focus()
 
                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return
 
                this.open = false
 
                focusAfter && focusAfter.focus()
            }
        }" x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']" class="relative">
    <button class="flex gap-2 items-center text-brand font-sans text-smal" x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" type="button">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect y="1" width="16" height="2" fill="#00CC99" />
        <path d="M0 7H16V9H0V7Z" fill="#00CC99" />
        <path d="M0 13H16V15H0V13Z" fill="#00CC99" />
      </svg>
      <span>Menu</span>
    </button>
    <nav x-ref="panel" x-show="open" x-transition.origin.top.right x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" class="shadow-window hover:shadow-windowhover bg-white dark:bg-black border-brand border text-brand absolute z-[99999999] top-8 right-0 rounded-sm p-1 min-w-[200px] transition" x-cloak>
      <ul>
        <?php foreach ($items as $item) : ?>
          <?php
          $link = $item->page()->related()->toPage();
          $seperator = $item->seperator()->toBool()
          ?>

          <li class="button border-none py-2 <?php if ($link->isActive()) echo 'active-page' ?>">
            <a class="block" href="<?= $link->url() ?>"><?= $link->title() ?></a>
          </li>
          <?php if ($item->seperator()->toBool() === true) : ?>
            <hr class="my-1 border-brand" />
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </nav>
  </div>
<?php endif ?>
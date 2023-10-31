<div class="bg-bg border border-secondary opacity-[0.85] hover:opacity-100 shadow-window hover:shadow-windowhover transition w-96">
  <div class="border-b border-secondary flex gap-2 items-center px-2 text-secondary">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.5 11.5V0.5H11.5V11.5H0.5Z" stroke="#008060" stroke-miterlimit="10" />
      <path d="M0.5 5.5V0.5H5.5V5.5H0.5Z" stroke="#008060" stroke-miterlimit="10" />
    </svg>
    <div class="grow space-y-1">
      <div class="border-t border-secondary"></div>
      <div class="border-t border-secondary"></div>
      <div class="border-t border-secondary"></div>
    </div>
    <span><?= $title ?></span>
    <div class="grow space-y-1">
      <div class="border-t border-secondary"></div>
      <div class="border-t border-secondary"></div>
      <div class="border-t border-secondary"></div>
    </div>
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.846 6L8.82 4.026C8.934 3.918 9 3.768 9 3.6C9 3.27 8.73 3 8.4 3C8.232 3 8.082 3.066 7.974 3.174L6 5.154L4.026 3.174C3.918 3.066 3.768 3 3.6 3C3.27 3 3 3.27 3 3.6C3 3.768 3.066 3.918 3.174 4.026L5.154 6L3.18 7.974C3.066 8.082 3 8.232 3 8.4C3 8.73 3.27 9 3.6 9C3.768 9 3.918 8.934 4.026 8.826L6 6.846L7.974 8.82C8.082 8.934 8.232 9 8.4 9C8.73 9 9 8.73 9 8.4C9 8.232 8.934 8.082 8.826 7.974L6.846 6Z" fill="#008060" />
      <rect x="0.5" y="0.5" width="11" height="11" stroke="#008060" />
    </svg>

  </div>
  <div class="mr-4 border-r border-secondary h-60">
    <?= $slots->body() ?>
  </div>
  <div class="border-t border-secondary text-secondary">
    <p class="font-mono text-center"><?= $subheading ?></p>
  </div>
</div>
<?php

return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));
  $roles = $page->children()->pluck("role", ",", true);
  return A::merge($shared, compact('roles'));
};

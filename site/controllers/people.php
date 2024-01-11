<?php

return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));
  $roles = $page->children()->pluck("role", ",", true);
  $researchInterests = $page->children()->pluck("interests", ",", true);
  return A::merge($shared, compact('roles', 'researchInterests',));
};

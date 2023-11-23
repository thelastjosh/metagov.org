<?php

return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));
  $titleTag = $site->title();
  $metaDescription = $site->seoDescription();
  return A::merge($shared, compact('titleTag', 'metaDescription'));
};

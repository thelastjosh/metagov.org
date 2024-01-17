<?php

return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));
  $titleTag = $site->title();
  $metaDescription = $site->seoDescription();
  $categories = $site->find('projects')->children()->pluck("category", ",", true);
  $types = $site->find('projects')->children()->pluck("type", ",", true);
  $status = ['Active', 'Paused'];
  $seekingParticipants = ['Yes', 'No'];
  $windows = $page->windows()->toStructure();
  $chaosHeight = count($windows) * 125;
  return A::merge($shared, compact('titleTag', 'metaDescription', 'categories', 'types', 'status', 'seekingParticipants', 'windows', 'chaosHeight'));
};

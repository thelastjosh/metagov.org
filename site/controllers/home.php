<?php

return function ($page, $pages, $site, $kirby) {
  $shared = $kirby->controller('site', compact('page', 'pages', 'site', 'kirby'));
  $titleTag = $site->title();
  $metaDescription = $site->seoDescription();

  $categoryPages = $site->page("project-categories")->children()->published();
  $categories = [];
  foreach ($categoryPages as $category) {
    $title = $category->title();
    array_push($categories, $title);
  }
  $status = ['Active', 'Paused'];
  $seekingParticipants = ['Yes', 'No'];

  return A::merge($shared, compact('titleTag', 'metaDescription', 'categories', 'status', 'seekingParticipants'));
};

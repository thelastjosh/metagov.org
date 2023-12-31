<?php

return [
  'debug' => true,
  'markdown' => [
    'extra' => true
  ],
  'blocks' => [
    'fieldsets' => [
      'text' => [
        'label' => 'Text',
        'type' => 'group',
        'fieldsets' => [
          'text',
          'heading',
          'table',
          'markdown',
          'line'
        ]
      ],
      'media' => [
        'label' => 'Media',
        'type' => 'group',
        'fieldsets' => [
          'image',
          'video'
        ]
      ]
    ]
  ],
  'thathoff.git-content.disable' => true,
];

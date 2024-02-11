<?php

Kirby::plugin('components/BaseCollapsible', [
  'blueprints' => [
    'blocks/BaseCollapsible' => __DIR__ . '/blueprints/BaseCollapsible.yml',
  ],
  'snippets' => [
    'blocks/BaseCollapsible' => __DIR__ . '/markup/BaseCollapsible.php',
  ],
]);
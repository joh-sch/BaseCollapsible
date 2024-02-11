<?php

Kirby::plugin('components/BaseCollapsible', [
  'blueprints' => [
    'blocks/BaseCollapsible' => __DIR__ . '/blueprints/BaseCollapsible.yml',
  ],
  'snippets' => [
    'blocks/BaseCollapsible'  => __DIR__ . '/markup/BaseCollapsible.php',
    //////
    "BaseCollapsible/content" => __DIR__ . "/markup/content.php",
    "BaseCollapsible/button"  => __DIR__ . "/markup/button.php",
  ],
]);
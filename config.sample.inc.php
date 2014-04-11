<?php

// Project config
$project_root = '';
$project_base = '';

// RainTPL configuration
Rain\Tpl::configure('tpl_dir', $project_root . 'templates/');
Rain\Tpl::configure('cache_dir', $project_root . 'caches/');
Rain\Tpl::configure('base_url', $project_base);
Rain\Tpl::configure('tpl_ext', 'html');
Rain\Tpl::configure('path_replace', true);
Rain\Tpl::configure('debug', true);

// Navigation
$pages = array();
<?php

require 'vendor/autoload.php';
require 'includes/config.inc.php';
require 'includes/cms.inc.php';
require 'includes/navigation.inc.php';

$cms = new CMS($pages);
$cms->renderAskedPage();
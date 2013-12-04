<?php

require 'vendor/autoload.php';
require 'config.inc.php';

// Navigation
$pages = array(
    array(
        'type' => 'page',
        'id' => 'html-encode',
        'title' => 'HTML Encode',
    ),
    array(
        'type' => 'dropdown',
        'id' => 'regex',
        'title' => 'Regex',
        'pages' => array(
            array(
                'type' => 'page',
                'id' => 'regex-preg-match',
                'title' => 'preg_match'
            ),
            array(
                'type' => 'page',
                'id' => 'regex-preg-match-all',
                'title' => 'preg_match_all'
            ),
            array(
                'type' => 'page',
                'id' => 'regex-preg-replace',
                'title' => 'preg_replace'
            ),
        )
    ),
    array(
        'type' => 'page',
        'id' => 'form-inout',
        'title' => 'Form In/Out',
    ),
    array(
        'type' => 'dropdown',
        'id' => 'serialization',
        'title' => 'Serialization',
        'pages' => array(
            array(
                'type' => 'page',
                'id' => 'serialization-unserialize',
                'title' => 'Unserialize'
            ),
            array(
                'type' => 'page',
                'id' => 'serialization-php2json',
                'title' => 'PHP -> JSON'
            ),
        ),
    ),
);


// Navigation helpers
function findPageById($id)
{
    global $pages;

    return _findPageById($id, $pages);
}

function _findPageById($id, $pages)
{
    foreach ($pages as $element) {
        if ($element['type'] === 'page' && $element['id'] === $id) {
            return $element;
        }

        if ($element['type'] === 'dropdown') {
            $page = _findPageById($id, $element['pages']);
            if (!is_null($page)) {
                return $page;
            }
        }
    }

    return null;
}



// Script start
$page_id = isset($_GET['id']) ? $_GET['id'] : '';
$page = findPageById($page_id);
if (is_null($page)) {
    $page = array(
        'type' => 'page',
        'id' => 'index',
        'title' => 'Main',
    );
}

$vars = array();
$vars['pages'] = $pages;
$vars['current_page'] = $page;

$snippet_path = 'snippets/'.$page['id'].'.php';
if (file_exists($snippet_path)) {
    require $snippet_path;
}

$template_name = $page['type'].'-'.$page['id'];
$template_path = 'templates/'.$template_name.'.html';
if (file_exists($template_path)) {
    $tpl = new Rain\Tpl();
    $tpl->assign($vars);
    echo $tpl->draw($template_name);
}
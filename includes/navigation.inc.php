<?php

// Navigation
$pages = array(
    array(
        'type' => 'dropdown',
        'id' => 'encoding',
        'title' => 'Encoding',
        'pages' => array(
            array(
                'type' => 'page',
                'id' => 'encoding-html-encode',
                'title' => 'HTML Encode',
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-html-decode',
                'title' => 'HTML Decode',
            ),
            array(
                'type' => 'separator'
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-url-encode',
                'title' => 'URL Encode',
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-url-decode',
                'title' => 'URL Decode',
            ),
        )
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
    )
);

<?php

// Navigation helpers
function findPageById($id)
{
    global $pages;

    $page = _findPageById($id, $pages);

    return $page;
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

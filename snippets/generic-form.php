<?php

function form_snippet(&$template_vars, $form)
{
    $page = $template_vars['current_page'];

    if (empty($form['namespace'])) {
        $form['namespace'] = $page['id'];
    }

    if (empty($form['action'])) {
        $form['action'] = $page['id'].'.php';
    }

    foreach ($form['fields'] as &$field) {
        if (empty($field['id'])) {
            $field['id'] = 'text';
        }

        if (empty($field['label'])) {
            $field['label'] = 'Text';
        }

        if (!isset($field['placeholder'])) {
            $field['placeholder'] = '';
        }
    }

    $template_vars['form'] = $form;
}

function page_snippet_callback(&$template_vars)
{
    $forms = array(
        'encoding-base64-encode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to encode',
                ),
            ),
        ),
        'encoding-base64-decode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to decode',
                ),
            ),
        ),
        'encoding-html-encode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to encode',
                ),
            ),
        ),
        'encoding-html-decode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to decode',
                ),
            ),
        ),
        'encoding-url-encode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to encode',
                ),
            ),
        ),
        'encoding-url-decode' => array(
            'fields' => array(
                array(
                    'placeholder' => 'Text to decode',
                ),
            ),
        ),
    );


    $page = $template_vars['current_page'];
    $form = $forms[$page['id']];

    form_snippet($template_vars, $form);
}
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

        if (empty($field['name'])) {
            $field['name'] = $field['id'];
        }

        if (empty($field['label'])) {
            $field['label'] = 'Text';
        }

        if (!isset($field['placeholder'])) {
            $field['placeholder'] = '';
        }

        if (empty($field['tag'])) {
            $field['tag'] = 'input';
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
        'serialization-unserialize' => array(
            'fields' => array(
                array(
                    'id' => 'serialized-data',
                    'label' => 'Serialized data',
                    'placeholder' => 'Serialized data',
                ),
            ),
        ),
        'serialization-php2json' => array(
            'fields' => array(
                array(
                    'id' => 'serialized-data',
                    'label' => 'Serialized data',
                    'placeholder' => 'Serialized data',
                ),
            ),
        ),
        'serialization-json2php' => array(
            'fields' => array(
                array(
                    'id' => 'json-data',
                    'label' => 'JSON data',
                    'placeholder' => 'JSON data',
                ),
            ),
        ),
        'regex-preg-match' => array(
            'header' => 'form-regex-header',
            'fields' => array(
                array(
                    'id' => 'pattern',
                    'label' => 'Pattern',
                    'placeholder' => '/^$/',
                ),
                array(
                    'id' => 'subject',
                    'label' => 'Subject',
                    'placeholder' => 'Subject',
                    'tag' => 'textarea',
                ),
                array(
                    'id' => 'flags',
                    'label' => 'Flags',
                    'tag' => 'checkboxes',
                    'checkboxes' => array(
                        array(
                            'id' => 'flag-offset-capture',
                            'name' => 'flags[]',
                            'label' => 'PREG_OFFSET_CAPTURE',
                            'value' => PREG_OFFSET_CAPTURE,
                        ),
                    ),
                ),
            ),
        ),
        'regex-preg-match-all' => array(
            'header' => 'form-regex-header',
            'fields' => array(
                array(
                    'id' => 'pattern',
                    'label' => 'Pattern',
                    'placeholder' => '/^$/',
                ),
                array(
                    'id' => 'subject',
                    'label' => 'Subject',
                    'placeholder' => 'Subject',
                    'tag' => 'textarea',
                ),
                array(
                    'id' => 'flags',
                    'label' => 'Flags',
                    'tag' => 'checkboxes',
                    'checkboxes' => array(
                        array(
                            'id' => 'flag-pattern-order',
                            'name' => 'flags[]',
                            'label' => 'PREG_PATTERN_ORDER',
                            'value' => PREG_PATTERN_ORDER,
                        ),
                        array(
                            'id' => 'flag-set-order',
                            'name' => 'flags[]',
                            'label' => 'PREG_SET_ORDER',
                            'value' => PREG_SET_ORDER,
                        ),
                        array(
                            'id' => 'flag-offset-capture',
                            'name' => 'flags[]',
                            'label' => 'PREG_OFFSET_CAPTURE',
                            'value' => PREG_OFFSET_CAPTURE,
                        ),
                    ),
                ),
            ),
        ),
        'regex-preg-replace' => array(
            'fields' => array(
                array(
                    'id' => 'pattern',
                    'label' => 'Pattern',
                    'placeholder' => '/^$/',
                ),
                array(
                    'id' => 'replacement',
                    'label' => 'Replacement',
                    'placeholder' => 'A replacement text',
                ),
                array(
                    'id' => 'subject',
                    'label' => 'Subject',
                    'placeholder' => 'Some text',
                    'tag' => 'textarea',
                ),
            ),
        ),
    );

    $page = $template_vars['current_page'];
    $form = $forms[$page['id']];

    form_snippet($template_vars, $form);
}
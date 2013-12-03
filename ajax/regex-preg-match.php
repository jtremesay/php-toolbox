<?php

$pattern = isset($_POST['pattern']) ? $_POST['pattern'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$flags = isset($_POST['flags']) && is_array($_POST['flags']) ? array_reduce($_POST['flags'], function(&$result, $item) { return $result |= (int) $item; }, 0) : 0;

$matches = array();
$result = @preg_match($pattern, $subject, $matches, $flags);

if ($result === false) {
    echo json_encode(array('success' => false,
                           'error' => "Error"));
    exit();
}

echo json_encode(array('success' => true,
                       'result' => sprintf("result: %s\nmatches:%s", ($result === 1) ? "true" : "false", print_r($matches, true))));
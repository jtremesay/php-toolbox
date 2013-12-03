<?php

$pattern = isset($_POST['pattern']) ? $_POST['pattern'] : '';
$replacement = isset($_POST['replacement']) ? $_POST['replacement'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$count = 0;
$result = @preg_replace($pattern, $replacement, $subject, -1, $count);
if (is_null($result)) {
    echo json_encode(array('success' => false,
                           'error' => "Invalid regex"));
    exit();
}

echo json_encode(array(
    'success' => true,
    'result' => sprintf(
        "result: %s\ncount:%d",
        htmlentities(print_r($result, true), ENT_COMPAT | ENT_HTML5, "UTF-8"),
        $count
    )
));
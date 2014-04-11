<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = urldecode($text);

echo json_encode(array('success' => true,
                       'result' => $text));
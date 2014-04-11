<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = urlencode($text);

echo json_encode(array('success' => true,
                       'result' => $text));
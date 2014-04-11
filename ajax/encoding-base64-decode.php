<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = base64_decode($text);

echo json_encode(array('success' => true,
                       'result' => $text));
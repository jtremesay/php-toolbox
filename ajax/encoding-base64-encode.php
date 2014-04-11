<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = base64_encode($text);

echo json_encode(array('success' => true,
                       'result' => $text));
<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

$text = htmlentities($text, ENT_COMPAT | ENT_HTML5, "UTF-8");
$text = htmlentities($text);

echo json_encode(array('success' => true,
                       'result' => $text));
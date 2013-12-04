<?php

$serialized_data = isset($_POST['serialized-data']) ? $_POST['serialized-data'] : '';

$unserialized_data = @unserialize($serialized_data);

if ($unserialized_data === false) {
    echo json_encode(array('success' => false,
                           'error' => "Error"));
    exit();
}

echo json_encode(array('success' => true,
                       'result' => json_encode($unserialized_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)));
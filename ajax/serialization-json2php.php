<?php

$json_data = isset($_POST['json-data']) ? $_POST['json-data'] : '';

$data = json_decode($json_data, false);
$serialized_data = serialize($data);

echo json_encode(array('success' => true,
                       'result' => $serialized_data));
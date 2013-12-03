<?php

echo json_encode(array('success' => true,
                       'result' => htmlentities(print_r($_POST, true), ENT_COMPAT | ENT_HTML5, "UTF-8")));
<?php
require_once 'MyApi.php';
// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
	echo "Hej";
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try {
    $API = new MyAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
    	echo "Hej";

    echo $API->processAPI();
} catch (Exception $e) {
		echo "Hej";

    echo json_encode(Array('error' => $e->getMessage()));
}
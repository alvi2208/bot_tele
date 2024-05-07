<?php
$apiToken = "6800551374:AAFDEoVS7FBXsGurHXEyLH0oeXKHBn-tV4M";

$data = [
    'chat_id' => '6226696532',
    'text' => 'Welcome to my world'
];

$response = file_get_contents("http://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
?>

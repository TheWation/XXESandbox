<?php
//  __     __     ______     ______   __     ______     __   __    
// /\ \  _ \ \   /\  __ \   /\__  _\ /\ \   /\  __ \   /\ "-.\ \   
// \ \ \/ ".\ \  \ \  __ \  \/_/\ \/ \ \ \  \ \ \/\ \  \ \ \-.  \  
//  \ \__/".~\_\  \ \_\ \_\    \ \_\  \ \_\  \ \_____\  \ \_\\"\_\ 
//   \/_/   \/_/   \/_/\/_/     \/_/   \/_/   \/_____/   \/_/ \/_/ 
//
//                         www.Wation.net

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $xml = file_get_contents('php://input');
}
else{
    $xml = @$_GET['input'];
}

if($xml){
    $data = simplexml_load_string($xml, null, LIBXML_NOENT);
    $title = $data->title;
    echo "Thank You !";
}
else{
    die('Please specify xml by raw post data or input query string.');
}
?>
<?php

if(isset($_REQUEST['file'])){
 $file = $_REQUEST['file'].'.json';;
} else {
  $file = 'manifest.json';
}

$data = file_get_contents ($file);

if($data === FALSE) { 
 header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
 exit;
} 

header('Content-Type: application/json');

echo $data; 

?>
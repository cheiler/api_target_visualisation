<?php


if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $process['method'] = 'GET';
} elseif($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $process['method'] = 'PUT';
} elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
    $process['method'] = 'POST';
} elseif($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $process['method'] = 'DELETE';
} else {
    $process['method'] = $_SERVER['REQUEST_METHOD'];
}
 
if (strpos($_SERVER[REQUEST_URI], '?')) { // returns false if '?' isn't there
    $process['get'] = ($_GET);

}

if(!empty($_POST) ) {
    $process['post']['formEncoded'] = ($_POST);
}



$process['post']['JsonEncoded'] = json_decode(file_get_contents('php://input'));

   
$process['received']['timestamp'] = time();
$process['received']['time'] = date(DATE_ATOM, time());

$write = json_encode($process);
        
file_put_contents("lastUsed.json", $write);

?>

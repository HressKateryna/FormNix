<?php 
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'review';
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
    printf("Connect failed: %s", mysqli_connect_error());
    exit;
}

$session = [];
$querySel = "SELECT * FROM user";
$queryCot = "SELECT COUNT(*) FROM user";


if($result = $mysqli -> query($queryCot)){
    while ($obj = $result -> fetch_assoc()){
        $sessionCot[] = $obj;
    }
    $result -> close();
}
if($result = $mysqli -> query($querySel)){
    while ($obj = $result -> fetch_assoc()){
        $session[] = $obj;
    }
    $result -> close();
}
$session = $session;
$col = $sessionCot[0]['COUNT(*)'];


$mysqli -> close();
 ?>

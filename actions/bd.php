<?php 
echo 'Практика'.'<br>'.'<br>';
echo '#1'.'<br>';
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
$queryInt = "INSERT INTO user(id, name, email, message) VALUE (1, $name, $mail, $text)";


if($result = $mysqli -> query($queryInt)){
	echo "New record created successfully";
    $result -> close();
}else{
	echo "Error: " . $queryInt . "<br>" . mysqli_error($conn);
}

if($result = $mysqli -> query($querySel)){
    while ($obj = $result -> fetch_assoc()){
        $session[] = $obj;
    }
    $result -> close();
}
$session = $session;

$mysqli -> close();
 ?>
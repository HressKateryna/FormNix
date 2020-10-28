<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$a = 0;
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$text = $_POST['message'];

	if(!$name){
		echo "Sorry, what is your name? <br>";
		$a++;
	}
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		echo "Sorry, your email incorrectly. Try once more :( <br>";
		$a++;
	}
	if(!$text){
		echo "Sorry, what did you mean? <br>";
		$a++;
	}

	if($a <= 3){
		echo "Data is filled in correctly! Congratulations! <br>";
	}else{
		echo "Try once more :( <br>";

	} 
}
?>
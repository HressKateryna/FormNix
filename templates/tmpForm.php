<!DOCTYPE html>
<html>
<head>
	<title>Opinion Poll</title>
	<style type="text/css">
		label{
			color: #8B4513;
		}
		h2{
			color: #8B4513;
			font-family: Comic Sans MS, sans-serif;
		}
		form {
			  font-family: Comic Sans MS, sans-serif;
			  margin: 0 auto;
			  width: 400px;
			  padding: 1em;
			  border: 1px solid #CCC;
			  border-radius: 1em;
			  background-color: #F5DEB3;
			}

			ul {
			  list-style: none;
			  padding: 0;
			  margin: 0;
			}

			form li + li {
			  margin-top: 1em;
			}

			label {
			  display: inline-block;
			  width: 90px;
			  text-align: right;
			}

			input, 
			textarea {
			  font: 1em sans-serif;
			  width: 300px;
			  box-sizing: border-box;
			  border: 1px solid #999;
			}


			textarea {
			  vertical-align: top;
			  height: 5em;
			}

			.button {
			  padding-left: 90px; 
			}

			button {
			  margin-left: .5em;
			}

			input{
				border: 1.5px solid #8B4513;
				border-radius: 7px;
			}
			textarea{
				border: 1.5px solid #8B4513;
				border-radius: 10px;
			}
			#sub{
				border-radius: 7px;
				font-family: Comic Sans MS, sans-serif;
				margin-top: 20px;
				background-color: #DEB887;
				width: 150px;
				height: 25px;
				
			}
			#leb{
				margin-left: 125px;
				border-radius: 7px;
				font-family: Comic Sans MS, sans-serif;
				margin-top: 20px;
				background-color: #DEB887;
				width: 150px;
				height: 25px;
				border: 1.5px solid #8B4513;
			}
			a{
				color: black;
				text-decoration: none;
				margin-top: -15px;
			}
	</style>
</head>
<body>
	<center>
		<h2>Регестрация</h2>
	</center>
	<form method="post">
		<ul>
		    <li>
		      <label for="name">Имя:</label>
		      <input type="text" id="name" name="name" value="<?php echo (isset($_COOKIE['name'])) ? htmlentities($_COOKIE['name']) : '' ?>">
		    </li>
		    <li>
		      <label for="mail">E-mail:</label>
		      <input type="text" id="mail" name="mail" value="<?php echo (isset($_COOKIE['mail'])) ? htmlentities($_COOKIE['mail']) : '' ?>">
		    </li>
		    <li>
		      <label for="msg">Телефон:</label>
		      <textarea id="msg" name="message">
		      	<?php echo (isset($_COOKIE['message'])) ? htmlentities($_COOKIE['message']) : '' ?>
		      </textarea>
		    </li>
		  </ul>
		  <center>
		  	<input id="sub" type="submit" name="submit" value="Зарегестрировать" />
		  </center>
		  <center id="leb">
		  	<a href="review.php">Список отзывов</a>
		  </center>

		  
	</form>
</body>
</html>
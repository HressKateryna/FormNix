<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Список отзывов</title>
 </head>
 <body>

  <table border="1">
   <caption>Список отзывов</caption>
   <tr>
	   	<td>Имя</td>
	   	<td>Мейл</td>
	   	<td>Сообщение</td>
   </tr>
   <?php 
   	for ($i = 0; $i < $col; $i++) {  ?>
   		<tr>
   		<td><?php echo $session[$i]['name']?></td>
   		<td><?php echo $session[$i]['email']?></td>
   		<td><?php echo $session[$i]['message']?></td> 
   </tr>
  <?php } ?>
   
</table>

</body>
</html>
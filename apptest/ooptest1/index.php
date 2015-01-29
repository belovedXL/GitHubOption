<?php 

include'class/SqlOption.class.php';

$option=new SqlOption($config,'user');
$rows=$option->sqlselect($option->table);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>oop</title>
</head>
<style>
	td{
		/*text-align: center;*/

	}
</style>
<body style="margin:0px;padding:0px;">

<h2>All Person</h2>	
	<table border='1'>
		
		<tr>
		<th>id</th>
		<th>name</th>
		<th>class</th>
		<th>tname</th>
		<th>score</th>
		<th>option</th>
		</tr>
		<?php for ($i=0; $i < count($rows); $i++) { 
			$row=$rows[$i];
		 ?>
		<tr style='text-align:center'>
			<td><?=$row['id'] ?></td>
			<td><?=$row['username'] ?></td>
			<td><?=$row['class'] ?></td>
			<td><?=$row['tname'] ?></td>
			<td><?=$row['score'] ?></td>
			<td><a href="edit.php?id=<?=$row['id'] ?>">edit</a> | <a href="del.php?id=<?=$row['id'] ?>">del</a></td>
		</tr>
		<?php } ?>
		<tr><td colspan="6"><a href="add.php">add</a></td></tr>
	</table>

</body>
</html>
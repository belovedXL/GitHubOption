<?php 
include'class/SqlOption.class.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>add</title>
</head>
<body>
	
	<!-- 表单 -->
	<form action="add.php" method="post">

		<label for="">名字:</label><input type="text" name='name'placeholder='名字'><br/>	
		<label for="">老师:</label><input type="text" name='tname'placeholder='老师'><br/>
		<label for="">班级:</label><input type="text" name='class'placeholder='班级'><br/>
		<label for="">成绩:</label><input type="text" name='score'placeholder='成绩'><br/>	
		<input type="submit" value='添加'>
		<input type="hidden" name='ck' value='1'>
	</form>
</body>
</html>
<?php
//判断是否是通过表单提交过来的值
if(isset($_POST['ck']) && $_POST['ck']=='1'){
	$name=$_POST['name'];
	$tname=$_POST['tname'];
	$class=$_POST['class'];
	$score=$_POST['score'];
	$option->sqladd($name,$tname,$class,$score);

}
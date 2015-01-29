<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
<?php

include'Abc.class.php';
class factory{
	//Instance表示“实例”，“对象”
	static function getInstance($className){
		if(file_exists("Abc.class.php")){
			$obj1 = new $className();
			return $obj1;
		}
		else{
			return null;//也可以die();
		}
	}
}
$obj1 = factory::getInstance("A");//获取类A的一个对象
$obj2 = factory::getInstance("B");//获取类B的一个对象
// $obj3 = factory::getInstance("C");//再获取类A的一个对象

var_dump($obj1);
echo "<br>";
$obj1->getc();
var_dump($obj2);
$obj2->getA();
?>
</body>
</html>

<?php 

include'Conn.class.php';

//数据操作类
class SqlOption{

	public $link;//链接数据
	public $table;//表名
	public $id;//依照id查询时使用
	public $selectres=array();//存放查询到数据的数组


	//重新定义构造函数  每一次生成实例对象都会自动连接数据库
	public function __construct($config,$table='user'){
		$this->link=new Conn($config);
		$this->table=$table;

	}

	//select function 全查询函数  需要提供表名
	public  function sqlselect($table){

		$selectresult=mysql_query("select * from $table") or die('sqlselect error!!'); 

		while($selectrow=mysql_fetch_assoc($selectresult)){
			//逐行放入数据  为后续依次显示提供方便
			$this->selectres=array_merge($this->selectres,array($selectrow));
		}
		return $this->selectres;
	}

	//select function 单查询函数  需要提供表名 和ID
	public  function sqlselectid($table,$id){

		$selectresult=mysql_query("select * from $table where id=$id") or die('sqlselect error!!'); 

		$selectrow=mysql_fetch_assoc($selectresult);
		return $selectrow;
	}

	//edit function 数据修改函数 需要确定要修改数据的id  还有要修改的各项数据值
	public  function sqledit($id,$name,$tname,$class,$score){
		$editresult=mysql_query("UPDATE user SET username='$name',tname='$tname',class='$class',score='$score'  WHERE id='$id'") or die('sqledit error!!');
		if($editresult){
			echo"<script>alert('update success!!')</script>";
		}
	}

	//add function		数据添加函数 需要提供要插入的数据 通过参数传递
	public  function sqladd($name,$tname,$class,$score){
		$addresult=mysql_query("insert into user(username,tname,class,score) value('$name','$tname','$class','$score')") or die('sqladd error!!');
		if($addresult){
			echo"<script>alert('insert success!!')</script>";
			echo"<script>location.href='index.php'</script>";
		}
	}

	//del function 数据删除函数 此操作需要确定要删除的数据的id
	public static function sqldel($id){
		$delresult=mysql_query("delete from user where id=$id") or die('删除失败！！');
		if($delresult){
			echo"<script>alert('删除成功!!')</script>";
			echo"<script>location.href='index.php'</script>";
		}
	}
}

//生成实例
$option=new SqlOption($config);

// $selres=mysql_query('select * from user');
// var_dump($selres);


 ?>
<?php 

// $mylink=mysql_connect('localhost','root','');
// mysql_select_db('test');
// $myresult=mysql_query('select *from user');

// var_dump($mylink);
// var_dump($myresult);


//数据库连接类
class Conn {
	public $host;
	public $username;
	public $password;
	// public $part;
	public $charset;
	public $dbname;
	static $link;

	//构造函数
	public  function __construct($config){

		$this->host=isset($config['host'])?$config['host']:'localhost';
		$this->username=isset($config['username'])?$config['username']:'root';
		$this->password=isset($config['password'])?$config['password']:'';
		// $this->$part=isset($config['part'])?$config['part']:'3306';
		$this->charset=isset($config['charset'])?$config['charset']:'utf8';
		$this->dbname=isset($config['dbname'])?$config['dbname']:'test';

		//实例化时自动进行各项设置操作
		self::$link=$this->connect();
		$this->setCharset($this->charset);
		$this->selectDb($this->dbname);

	}

	//连接操作
	public function connect(){
		$link=mysql_connect("$this->host","$this->username","$this->password") or die("connection error");
		// $link=mysql_connect("$this->host:$this->part","$this->username","$this->password") or die("connection error");
		return $link;
	}
	//编码设置函数
	public function setCharset($charset){

		mysql_set_charset($charset,self::$link);
	}
	//设置所要操作的数据库
	public function  selectDb($dbname){
		mysql_select_db($dbname,self::$link);
	}


}	



$config=array(

	'host'=>'localhost',
	'username'=>'root',
	'part'=>'3306',
	'password'=>'',
	'charset'=>'utf8',
	'dbname'=>'test'

	);

// $link=new Conn($config);

// $result=mysql_query('insert into user(username,class,tname,score) value("cui","123456","gao","100")') or die('error');


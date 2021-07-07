<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
echo date('Y-m-d H:i:s'); //输出php时间Y 大写，小写输出不全，H大写小写输出的不是24小时
	 ?>
<?php 	
echo "<br/>";
	// 声明变量
	// 
	$num1=1;
	$num1=2; //变量赋值修改
	$num2=2;
	$reslut=$num1+$num2;
	echo $reslut;
	//删除变量
	unset($reslut);  //删除一个变量，从内存中销毁
	//echo $reslut;
	// 关于结束符，php纯文档的php 建议不写结束符
	// 有结束符的最后的一个分号可以不写
	// 可变的变量
	 //系统提供预定义的
		 //$_GET
		 //$_POST
		 //$_REQUEST 接受post和get
		 //$_SERVER
		 //$_COOKIE
		 //$_SESSON
		 //$_FILES
		 //$_GLOBAL
	 echo "<pre>";
var_dump($_SERVER);

echo "<br/>";

echo 'REMOTE_ADDR';

	 ?>
</body>
</html>
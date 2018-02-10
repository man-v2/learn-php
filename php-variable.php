<html>
<head>
<meta charset="utf-8">
<title>PHP Starter!</title>
<style type="text/css">
	.div {font-weight: bold;font-family: "微软雅黑";font-style:italic;}
</style>
</head>

<body>
<div>
	<div class="div">PHP变量：</div>
	&nbsp;&nbsp;<span>$x=5,echo: </span>
	<?php 
		$x=5; echo $x;
	?>
	<br><br>
	<div class="div">PHP常量：</div>
	&nbsp;&nbsp;<span>bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
	<p>该函数有三个参数：name：必选参数，常量名称，即标志符。value：必选参数，常量的值。case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
	<p>
 </span>
	<?php 
		// 不区分大小写的常量名
		define("GREETING", "learning php ", true);
		echo "\n";
		echo "\n".greeting;  // 输出 "欢迎访问 Runoob.com"
	?>

	<br><br>
	<div class="div">PHP字符串变量：</div>&nbsp;&nbsp;
	<ul>
		<li>定义字符串：$str="abc"</li>
		<li>并置运算符："a"."b"=<?php echo "a"."b"; ?></li>
		<li>strlen() 函数,查找一个字符<b>（exit?index:false）</b>：strlen($str)=<?php $str="abc"; echo strlen($str); ?></li>
		<li>strpos() 函数：</li>
		<li><a href="http://www.runoob.com/php/php-ref-string.html">参考</a></li>
	</ul>

</div>
</body>
</html>
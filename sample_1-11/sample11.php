<html>
<head>
	<meta charset="utf-8">
	<title>Sample</title>
</head>
<body>
	<h1>サンプル１１です。</h1>

<?php


$box4 = array("test","test2"); //配列型

echo $box4; //エラー

echo "<br>"; 

print $box4; //エラー

echo "<br>";

print_r($box4); //配列内のデータを表示

echo "<br>";

var_dump($box4);//詳細情報も表示してくれる


?>

</body>
</html>
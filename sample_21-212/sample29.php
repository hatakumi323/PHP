<html>
<head>
	<meta charset="utf-8">
	<title>Sample</title>
</head>
<body>
	<h1>サンプル２９です。</h1>

<?php

$box = 1;
$box2 = "1円";
 
if ($box == $box2) { //イコールの数が２つ
    echo "一致";
} else {
    echo "一致しません";
}

echo "<br>";

if ($box === $box2) { //イコールの数が３つ
    echo "一致";
} else {
    echo "一致しません";
}

?>

</body>
</html>
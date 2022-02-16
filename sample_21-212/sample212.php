<html>
<head>
	<meta charset="utf-8">
	<title>Sample</title>
</head>
<body>
	<h1>サンプル２１２です。</h1>

<?php

$box = 3;

switch ($box) {
	case 1:
		# code...
		echo "number is 1.";
		break;
	case 2:
		# code...
		echo "number is 2.";
		break;
	case 3:
		# code...
		echo "number is 3.";
		break;
	default: //else文と同じ（その他という）意味
		# code...
		echo "number is not 1,2,3.";
		break;
}

?>

</body>
</html>
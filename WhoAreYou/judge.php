<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>判定</title>
<link rel="stylesheet" href="judge.css">
</head>

<body>

<h1>
<?php
$vol=$_POST['vol'];
$take=$_POST['take'];
$num=$_POST['number'];
if((1<=$num)&&($num<=5)){

	if($take=="竹川"){
	echo "{$take}は正解です！！";
	}else {
	echo "{$vol}は不正解です！！";
	}
}else if($num<=9){
	if($vol=="ヴォルデモート"){
	echo "{$vol}は正解です！！";
	}else{
	echo "{$take}は不正解です！！";
	}
}else{
	echo "？？？<br>深海魚ですよ？？？？";
}
?>
<p>
<form method="POST" action="question.php">
<input type="submit" value="続ける">
</form>
<form method="POST" action="finish.php">
<input type="submit" value="終わる">
</form>
</p>
</h1>
</body>
</html>
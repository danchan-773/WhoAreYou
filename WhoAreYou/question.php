<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>どっちだ！？</title>
<link rel="stylesheet" href="question.css">
</head>

<body>
	<div class="main">
	<h1>これは誰？？？</h1>
	<?php
		$number=mt_rand(1,10);
		if($number==10){
			$number=mt_rand(1,10);
		}
		echo "<img src='gazo/gazo{$number}.jpg'>";
	?>
	
	<p>
		<form method="POST" action="judge.php"> 
			<input type="submit" value="竹川" name="take">
			<input type="submit" value="ヴォルデモート" name="vol">
			<input type="hidden" name="number" value="<?php echo $number;?>" >
		</form>
	</p>
	
	</div>
</body>

</html>
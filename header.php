<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<title>七日町の思い出</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" media="all" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="js/script.js"></script>
<script>
//スライド用のliタグを全て取得
var slides = document.getElementsByClassName('slides')[0].getElementsByTagName('li');

//スライド表示用の関数を呼び出す（引数はスライドの切り替え時間）
viewSlide(2000);

function viewSlide(msec, slide_no = -1)
{
	//現在のスライドを消す
	if (slides[slide_no]) {
		slides[slide_no].style.display = 'none';
	}
	//スライド番号をカウントアップ
	slide_no++;
	if (slides[slide_no]) {
		//次のスライドを表示
		slides[slide_no].style.display = 'block';
	} else {
		//次のスライドがなければ最初のスライドを表示
		slides[0].style.display = 'block';
		slide_no = 0;
	}
	setTimeout(function(){viewSlide(msec, slide_no);}, msec);
}
</script>

</head>

<body id="top">

<div class="container my-1">
	<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="index.php">ホーム</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="edit.php">ブログ作成</a>
	</li>
	</ul>
</div>

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<a href="index.php"><img src="images/mylogo.jpg" class="img-fluid" alt="logo"></a>
		</div>
	</div>
</div>

<?php
	include("template.php");
?>
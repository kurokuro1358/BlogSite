<?php
    include("template.php");

//DB接続
connectMySQL();

if ($_GET['what'] == 'img1') {
    // 画像データ取得
    $sql = "select img1 from article where number = '".$_GET['number']."'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);

    // 画像ヘッダとしてjpegを指定（取得データがjpegの場合）
    header("Content-Type: image/jpeg");

    // バイナリデータを直接表示
    echo $row[0];
} elseif ($_GET['what'] == 'img2') {
    // 画像データ取得
    $sql = "select img2 from article where number = '".$_GET['number']."'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);

    // 画像ヘッダとしてjpegを指定（取得データがjpegの場合）
    header("Content-Type: image/jpeg");

    // バイナリデータを直接表示
    echo $row[0];
} else {
    // 画像データ取得
    $sql = "select img3 from article where number = '".$_GET['number']."'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_row($result);

    // 画像ヘッダとしてjpegを指定（取得データがjpegの場合）
    header("Content-Type: image/jpeg");

    // バイナリデータを直接表示
    echo $row[0];
}

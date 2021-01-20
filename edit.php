<?php include("header.php"); ?>

<?php
//DB接続
connectMySQL();

//テーブルの作成
$query = "create table if not exists article(number int auto_increment, img1 mediumblob not null, img2 mediumblob not null, img3 mediumblob not null, content text not null, primary key(number))";
mysqlQuery($query);
?>

<!-- EDIT -->
<?php if ($_SERVER['REQUEST_METHOD'] != "POST" && !isset($_POST['submit'])) { ?>
<br><br>
<section id="sec01">
    <header>
        <h2><span>管理</span></h2>
    </header>
    <div class="innerS">
        <form method="post" enctype="multipart/form-data" action="edit.php">
            <div class="center">
                <p><input type="file" name="upimage1" size="2000" class="btn btn-dark my-2" required></p>
                <p><input type="file" name="upimage2" size="2000" class="btn btn-dark my-2" required></p>
                <p><input type="file" name="upimage3" size="2000" class="btn btn-dark my-2" required></p>
                <p><textarea name="content" style="width:70%; height:300px;" class="my-2" required></textarea></p>
                <p><button type="submit" name="submit">追加</button></p>
            </div>
        </form>
    </div>
</section>
<?php } ?>
<!-- // EDIT -->

<!-- ADD -->
<?php if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $upimage1 = $_FILES['upimage1']['tmp_name'];
    $upimage2 = $_FILES['upimage2']['tmp_name'];
    $upimage3 = $_FILES['upimage3']['tmp_name'];
    $content = $_POST['content'];
    if ($upimage1 == "" || $upimage2 == "" || $upimage3 == "") {
        echo "Cannot upload images";
        exit;
    }

    //ファイル取得
    exec('/usr/bin/exiftool -all= '. $upimage1);
    $imgdat1 = file_get_contents($upimage1);
    $imgdat1 = mysqli_real_escape_string($db, $imgdat1);

    exec('/usr/bin/exiftool -all= '. $upimage2);
    $imgdat2 = file_get_contents($upimage2);
    $imgdat2 = mysqli_real_escape_string($db, $imgdat2);

    exec('/usr/bin/exiftool -all= '. $upimage3);
    $imgdat3 = file_get_contents($upimage3);
    $imgdat3 = mysqli_real_escape_string($db, $imgdat3);

    $query = "insert into article (img1, img2, img3, content) values ('".$imgdat1."','".$imgdat2."','".$imgdat3."','".$content."')";
    mysqlQuery($query);
    ?>

    <!-- MESSAGE -->
    <br><br>
    <section id="sec01">
        <header>
            <h2><span>追加完了</span></h2>
        </header>
        <div class="innerS">
            <div class="center">
                <a href="index.php">ホームに戻る</a>
            </div>
        </div>
    </section>
    <!-- // MESSAGE -->
    <?php
}?>
<!-- ADD -->

<footer id="footer">
</footer>

</body>

</html>
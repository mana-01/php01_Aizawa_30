<?php
// ファイルを開く

$name = $_POST['name'];
$sex =$_POST['sex'];
$age =$_POST['age'];
$nayami =$_POST['nayami'];


$name = htmlspecialchars($name, ENT_QUOTES);
$sex = htmlspecialchars($sex, ENT_QUOTES);
$age = htmlspecialchars($age, ENT_QUOTES);
$nayami = htmlspecialchars($nayami, ENT_QUOTES);

$file = fopen('./data/data.csv', 'r');


// ファイル内容を1行ずつ読み込んで出力

while ($str =fgets($file)){
    echo nl2br($str);
}

// ファイルを閉じる
fclose($file);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <ul>
        <li><a href="/php01_Aizawa_30/post.php">戻る</a></li>
    </ul>
</body>

</html>
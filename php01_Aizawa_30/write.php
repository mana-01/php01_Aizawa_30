
<?php
$name = $_POST['name'];
$sex =$_POST['sex'];
$age =$_POST['age'];
$nayami =$_POST['nayami'];


// ファイルに書き込むデータ
$date = date('Y/m/d H:i:s');
// $str = $date . $name . $sex . $age . $nayami;

// ファイルの用意
// $file = fopen('./data/data.csv', 'a');

// // Putting information as csv file
// fputcsv($file_handler, $array);

// // open csv file and add file handler which is column names
// $file_handler = fopen('./data/data.csv', 'a');


// making column names and defining how to collect data.

$array = array(
    array("名前", "性別", "年齢", "洋服にまつわる悩み"),
    array($date, $name, $sex, $age, $nayami)
);

// // 書き込み
// // fwrite($file, $date . "\n");
// fwrite($file, $str . "\n");

$f = fopen("./data/data.csv", "w");
if ($f) {
    foreach ($array as $line){
        fputcsv($f, $line);
    }
}

// ファイルをクローズ
fclose($f);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <ul>
        <li><a href="/php01_Aizawa_30/read.php">確認する</a></li>
        <li><a href="/php01_Aizawa_30/post.php">戻る</a></li>
    </ul>
</body>

</html>
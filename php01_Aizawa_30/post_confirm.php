<?php
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
$name = $_POST['name'];
$sex =$_POST['sex'];
$age =$_POST['age'];
$nayami =$_POST['nayami'];

$name = htmlspecialchars($name, ENT_QUOTES);
$sex  = htmlspecialchars($sex , ENT_QUOTES);
$age = htmlspecialchars($age, ENT_QUOTES);
$nayami = htmlspecialchars($nayami, ENT_QUOTES);


?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= $name ?>
    性別：<?= $sex ?>
    年齢：<?= $age ?>
    お悩み：<?= $nayami ?>
</body>

</html>
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "Www13826568574co";
$dbname = "TonyZhang";
$articleID = 5;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("INSERT INTO Comments VALUES (:a, :b, :c, :d, :e)");
    $sql->bindParam(':a', $articleID);
	$sql->bindParam(':b', $_POST["inputName"]);
	$sql->bindParam(':c', $_POST["inputEmail"]);
    $sql->bindParam(':d', $_POST["content"]);
    $sql->bindParam(':e', rand(1,4));
    $sql->execute();
    echo "Adding comment success!";
    header("refresh:3;url=https://zhangqinyuan.xyz/sober_stuffs/article_5/article_5.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
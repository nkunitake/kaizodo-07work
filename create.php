<?php

// POSTデータ確認
// var_dump($_POST);
// exit();

if (
    !isset($_POST["username"]) || $_POST["username"] == "" ||
    !isset($_POST["content"]) || $_POST["content"] == "" ||
    !isset($_POST["comment"]) || $_POST["comment"] == "" ||
    !isset($_POST["tag"]) || $_POST["tag"] == ""
) {
    exit("ParamError");
}

$username = $_POST["username"];
$content = $_POST["content"];
$comment = $_POST["comment"];
$tag = $_POST["tag"];


$dbn = 'mysql:dbname=gsacf_d10_02_work;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = 'root';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// SQL作成&実行
$sql = 'INSERT INTO contents_box (id, username, content, comment, tag, created_at) VALUES (NULL, :username, :content, :comment, :tag, now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':tag', $tag, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

header('Location:input.php');
exit();

<?php

// DB接続
$dbn = 'mysql:dbname=gsacf_d10_02_work;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = 'root';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


// SQL作成&実行
$sql = "SELECT * FROM contents_box WHERE tag='central'";
$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
    $output .= "
    <div class='contents-wrapper'>
    <p class='username-text'>投稿者名：{$record["username"]}</p>
    <div class='content-area'><p>{$record["content"]}</p></div>
    <p class='comment-text'>コメント：{$record["comment"]}</p>
    <a href='index-{$record["tag"]}.php' class='tag-text'>タグ：{$record["tag"]}</a>
    <p class='date-text'>投稿日：{$record["created_at"]}</p>
    </div>
    ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAIZO-DO プロ野球編 | central</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
</head>

<body>
    <div class="main-wrapper">
        <div>
            <a href="index.php">
                <div class="title-wrapper">
                    <div class="title-logo">
                        <img src="img/npbKV2.png" alt="ヘッダーロゴ">
                    </div>
                    <h1 class="title-text">KAIZO-DO -プロ野球編-</h1>
                </div>
            </a>
        </div>
        <nav class="navigation">
            <ul class="navi-list">
                <l1 class="other-page"><a href="index.php">ホーム</a></l1>
                <l1 class="this-page">central</l1>
                <l1 class="other-page"><a href="index-pacific.php">pacific</a></l1>
                <l1 class="other-page"><a href="input.php">投稿する</a></l1>
            </ul>
        </nav>
        <div class="contents-area">
            <!-- ここに投稿内容が入る -->
            <?= $output ?>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAIZO-DO プロ野球編 | 投稿画面</title>
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
    <form action="create.php" method="POST">
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
                    <l1 class="other-page"><a href="index-central.php">central</a></l1>
                    <l1 class="other-page"><a href="index-pacific.php">pacific</a></l1>
                    <l1 class="this-page">投稿する</l1>
                </ul>
            </nav>
            <dl class="form-inner">
                <dt class="inner-title">投稿者名:</dt>
                <dd class="inner-detail"><input type="text" name="username" class="form-parts"></dd>
                <dt class="inner-title">投稿:</dt>
                <dd class="inner-detail"><textarea name="content" class="textarea-parts" wrap="hard"></textarea>
                </dd>
                <dt class="inner-title">コメント:</dt>
                <dd class="inner-detail"><input type="text" name="comment" class="form-parts"></dd>
                <dt class="inner-title">ジャンル:</dt>
                <dd class="inner-detail"><select name="tag" class="select-parts">
                        <option>選択してください</option>
                        <option>central</option>
                        <option>pacific</option>
                    </select>
                </dd>
                <div class="btn">
                    <button class="btn-post">投稿する</button>
                </div>
        </div>
    </form>

</body>

</html>
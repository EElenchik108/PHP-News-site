<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/css/reset.css" type="text/css">
    <link rel="stylesheet" href="/template/css/style.css" type="text/css">
    <title>News</title>
</head>

<body>
    <div class="container">
        <div class="containerNews">
            <h1><?= $newsItem['h1']; ?></h1>
            <div class="info">
                <div class="left"><?= $newsItem['date']; ?></div>
                <div class="right"><?= $newsItem['author_id']; ?></div>
            </div>
            <div class="mainСontent">
                <img src="/template/images<?= $newsItem['prewiew']; ?>" alt="">
                <p><?= $newsItem['content']; ?></p>
            </div>
            <a href="/news">Вернуться назад</a>
            <hr>
        </div>
    </div>
</body>

</html>
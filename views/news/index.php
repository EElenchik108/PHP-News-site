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
        <h1>Red Hot Chili News</h1>
        <?php foreach ($newList as $newItem) : ?>
            <div class="containerNews">
                <h3><a href="/news/<?= $newItem['id']; ?>"><?= $newItem['h1']; ?></a></h3>
                <p><?= $newItem['short_content']; ?></p>
                <div class="info">
                    <div class="left"><?= $newItem['date']; ?></div>
                    <div class="right"><a href="/news/<?= $newItem['id']; ?>">Читать далее</a></div>
                </div>
                <hr>
            </div>

        <?php endforeach; ?>

    </div>
</body>

</html>
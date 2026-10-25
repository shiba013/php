<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php require_once 'header.php' ?>

    <main class="main">
        <div class="main-content">
            <h2 class="main-content__logo">世界の時間を比較</h2>
            <div class="main-content__inner">
                <select name="country1" id="country1" class="country-select">
                    <option value="" selected hidden>選択してください</option>
                    <option value="jp">東京</option>
                    <option value="syd">シドニー</option>
                    <option value="sha">上海</option>
                    <option value="msk">モスクワ</option>
                    <option value="ldn">ロンドン</option>
                    <option value="jpb">ヨハネスブルク</option>
                    <option value="ny">ニューヨーク</option>
                </select>
                <select name="country2" id="country2" class="country-select">
                    <option value="" selected hidden>選択してください</option>
                    <option value="jp">東京</option>
                    <option value="syd">シドニー</option>
                    <option value="sha">上海</option>
                    <option value="msk">モスクワ</option>
                    <option value="ldn">ロンドン</option>
                    <option value="jpb">ヨハネスブルク</option>
                    <option value="ny">ニューヨーク</option>
                </select>
            </div>
            <button type="button" class="submit-btn">表示する</button>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="./js/Select.js"></script>
</body>

</html>
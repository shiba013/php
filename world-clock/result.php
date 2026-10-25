<?php
require_once __DIR__ . '/functions/search_city_time.php';

$country1 = htmlspecialchars($_GET['country1'], ENT_QUOTES);
$country2 = htmlspecialchars($_GET['country2'], ENT_QUOTES);

$city1 = searchCityData($country1);
$city2 = searchCityData($country2);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/result.css">
</head>

<body>
    <?php require_once 'header.php' ?>
    <main class="main">
        <div class="main-content">
            <h2 class="main-content__logo">世界の時間を比較</h2>
            <div class="main-content__inner">
                <div class="country-card">
                    <img src="./assets/flags/<?php echo $city1['img'] ?>" alt="国旗" class="country-card__img">
                    <div class="country-card__text">
                        <p class="country-card__p"><?php echo $city1['name'] ?></p>
                        <p class="country-card__p"><?php echo $city1['time'] ?></p>
                    </div>
                </div>
                <div class="country-card">
                    <img src="./assets/flags/<?php echo $city2['img'] ?>" alt="国旗" class="country-card__img">
                    <div class="country-card__text">
                        <p class="country-card__p"><?php echo $city2['name'] ?></p>
                        <p class="country-card__p"><?php echo $city2['time'] ?></p>
                    </div>
                </div>
            </div>
            <button type="button" class="back-btn">戻る</button>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    <script>
        document.querySelector('.back-btn').addEventListener('click', () => {
            const url = document.referrer;
            window.location.href = url;
        })
    </script>
</body>

</html>
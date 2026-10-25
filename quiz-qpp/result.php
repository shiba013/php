<?php
session_start();
require_once './config/status_codes.php';
unset($_SESSION['options']);

$options = [];    // 出題された問題の選択肢
if (is_array($_POST['option'])) {
    foreach ($_POST['option'] as $option) {
        $options[] = json_decode($option, true);
    }
}
$answer = json_decode($_POST['answer'], true);     // 自身が選択した回答
$correct = json_decode($_POST['correct'], true);   // 正解

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz | result</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/result.css">
</head>

<body>
    <?php require_once 'header.php' ?>
    <main class="main">
        <div class="checking-answer">
            <?php if ($answer['code'] === $correct['code']): ?>
                <h2 class="checking-answer__logo-true">正解！</h2>
            <?php else: ?>
                <h2 class="checking-answer__logo-false">不正解！</h2>
            <?php endif; ?>
        </div>
        <div class="result">
            <table class="question-table">
                <tr class="question-table__row">
                    <th class="question-table__th">問題文</th>
                    <td class="question-table__td">
                        <?php echo htmlspecialchars($correct['description'], ENT_QUOTES); ?>
                    </td>
                </tr>
            </table>
            <h2 class="title__logo">答え</h2>
            <table class="result-table">
                <tr class="result-table__row">
                    <th class="result-table__th">正解</th>
                    <td class="result-table__td">
                        <?php echo htmlspecialchars($correct['code'], ENT_QUOTES); ?>
                    </td>
                </tr>
                <tr class="result-table__row">
                    <th class="result-table__th">意味</th>
                    <td class="result-table__td">
                        <?php echo htmlspecialchars($correct['meaning'], ENT_QUOTES); ?>
                    </td>
                </tr>
            </table>
            <h2 class="false-answer__title">その他の回答</h2>
            <table class="other-table">
                <?php foreach ($options as $index => $option): ?>
                    <?php if ($option['code'] === $correct['code']) continue; ?>
                    <tr class="other-table__row">
                        <th class="other-table__th">コード</th>
                        <td class="other-table__td">
                            <?php echo htmlspecialchars($option['code'], ENT_QUOTES); ?>
                        </td>
                    </tr>
                    <tr class="other-table__row">
                        <th class="other-table__th">意味</th>
                        <td class="other-table__td">
                            <?php echo htmlspecialchars($option['meaning'], ENT_QUOTES); ?>
                        </td>
                    </tr>
                    <tr class="other-table__row">
                        <th class="other-table__th">内容</th>
                        <td class="other-table__td">
                            <?php echo htmlspecialchars($option['description'], ENT_QUOTES); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <button type="button" class="result-page__btn">次の問題へ進む</button>
    </main>
    <?php require_once 'footer.php' ?>
    <script>
        document.querySelector('.result-page__btn').addEventListener('click', () => {
            window.location.href = '/';
        });
    </script>
</body>

</html>
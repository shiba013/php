<?php
session_start();
require_once './config/status_codes.php';

if (!isset($_SESSION['options'])) {
    $questions = array_rand($status_codes, 4);

    foreach ($questions as $question) {
        $options[] = $status_codes[$question];
    }
    $_SESSION['options'] = $options;
} else {
    $options = $_SESSION['options'];
}
$set_question = $options[array_rand($options, 1)];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php require_once 'header.php' ?>
    <main class="main">
        <div class="content">
            <div class="question">
                <p class="question-content">以下の内容に当てはまるコードを選んでください</p>
                <p class="question-content"><?php echo $set_question['description']; ?></p>
            </div>
            <form action="result.php" method="post" class="answer-form">
                <div class="answer-form__inner">
                    <?php foreach ($options as $index => $option): ?>
                        <div class="answer-items">
                            <input type="radio" name="option" id="<?php echo $index; ?>" class="answer-items__input"
                                value="<?php echo htmlspecialchars(json_encode($option), ENT_QUOTES); ?>">
                            <label for="<?php echo $index; ?>" class="answer-items__label"><?php echo $option['code']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- ユーザーが選択した値 -->
                <input type="hidden" name="answer" id="hiddenAnswer" value="">
                <!-- 出題された問題の正解 -->
                <input type="hidden" name="correct"
                    value="<?php echo htmlspecialchars(json_encode($set_question), ENT_QUOTES) ?>">
                <button type="button" class="answer-btn">回答する</button>
            </form>
        </div>
    </main>
    <?php require_once 'footer.php' ?>
    <script src="/js/answerForm.js"></script>
</body>

</html>
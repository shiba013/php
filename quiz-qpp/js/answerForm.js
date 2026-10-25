document.querySelector('.answer-btn').addEventListener('click', () => {
    const selectAnswer = document.querySelector('input[type="radio"]:checked');

    if (!selectAnswer) {
        alert('回答を選択してください');
        window.location.href = '/';
        return;
    }
    // 自分が選択した回答
    document.getElementById('hiddenAnswer').value = selectAnswer.value;

    // 全ての選択肢
    const options = document.querySelectorAll('input[type="radio"]');
    const form = document.querySelector('.answer-form');

    options.forEach(opt => {
        const hidden = document.createElement('input');
        hidden.type = 'hidden';
        hidden.name = 'option[]';
        hidden.value = opt.value;
        form.appendChild(hidden);
    });
    // フォーム送信
    form.submit();
});
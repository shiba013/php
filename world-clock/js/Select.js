document.addEventListener('DOMContentLoaded', () => {
    const select1 = document.querySelector('#country1');
    const select2 = document.querySelector('#country2');
    const button = document.querySelector('.submit-btn');

    button.addEventListener('click', () => {
        const country1 = select1.value;
        const country2 = select2.value;

        const query = `?country1=${encodeURIComponent(country1)}&country2=${encodeURIComponent(country2)}`;

        window.location.href = `result.php${query}`;
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            button.click();
        }
    });
});
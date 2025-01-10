

document.addEventListener('DOMContentLoaded', function() {
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const stockInput = document.getElementById('stock-input');

    decreaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(stockInput.value);
        if (currentValue > 0) {
            stockInput.value = currentValue - 1;
        }
    });

    increaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(stockInput.value);
        stockInput.value = currentValue + 1;
    });
});

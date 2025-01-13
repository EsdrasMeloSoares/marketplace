document.addEventListener('DOMContentLoaded', function() {
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const stockInput = document.getElementById('stock-input');

    decreaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(stockInput.value, 10);
        if (currentValue > 0) {
            stockInput.value = currentValue - 1;
        }
    });

    increaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(stockInput.value, 10);
        stockInput.value = currentValue + 1;
    });

    const priceInput = document.getElementById('price');
    priceInput.addEventListener('input', function() {
        formatCurrency(priceInput);
    });
});

// Input Value , Decimal 10, 2
function formatCurrency(input) {
    let value = input.value.replace(/\D/g, '');

    if (value.length > 2) {
        value = value.replace(/(\d{1,})(\d{2})$/, '$1.$2');
    }

    if (value.length > 6) {
        value = value.replace(/(\d)(\d{3})(\d{3})$/, '$1.$2.$3');
    }

    if (value.length > 9) {
        value = value.replace(/(\d)(\d{3})(\d{3})(\d{3})$/, '$1.$2.$3.$4');
    }

    input.value = value;
}




function calculateTotalPrice() {
    
    const totalPriceInput = document.getElementById('total_price');
 
    const itemPrices = {
        'row1': 59.000,
        'row2': 69.000,
        'row3': 79.000,
        'row4': 89.000,
    };
    
    const topupItems = document.getElementsByName('topup_items[]');
    let totalPrice = 0;
    
    for (let i = 0; i <= topupItems.length; i++) {
        if (topupItems[i].checked) {
            const itemName = topupItems[i].value;
            totalPrice += itemPrices[itemName];
        }
    }

        document.getElementById('total_price').value = totalPrice.toFixed(2);
     
        const formattedTotalPrice = totalPrice.toLocaleString();

    
        totalPriceInput.value = formattedTotalPrice;
}
// function calculateTotalPrice() {
//     // Mengambil semua checkbox yang dicentang
//     var checkboxes = document.querySelectorAll('input[name="topup_items[]"]:checked');

//     var totalPrice = 0;

//     // Menghitung total harga berdasarkan item yang dicentang
//     checkboxes.forEach(function(checkbox) {
//         var rowId = checkbox.value;
//         var priceElement = document.querySelector('input[name="' + rowId + '"]');
//         var price = parseFloat(priceElement.value);
//         totalPrice += price;
//     });

//     // Redirect ke halaman pesanan.html dengan membawa total harga
//     window.location.href = "pesanan.html?totalPrice=" + totalPrice;
// }

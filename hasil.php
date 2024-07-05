<?php 
session_start();

if (isset($_SESSION["ID"]) && isset($_SESSION["server"])) {
    $id = $_SESSION["ID"];
    $server = $_SESSION["server"];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_order'])) {
        $productName = $_POST['product_name'];
        $price = $_POST['price'];

        // Simpan data struk pembelian
        $struk = "ID Anda: " . $id . "\n";
        $struk .= "Server: " . $server . "\n";
        $struk .= "Produk: " . $productName . "\n";
        $struk .= "Harga: Rp." . number_format($price, 0, ',', '.') . "\n\n";

        // Tulis ke dalam file struk.txt
        $file = fopen("struk.txt", "a");
        fwrite($file, $struk);
        fclose($file);

        // Tampilkan struk pembelian
        echo "<h2>Struk Pembelian</h2>";
        echo "ID Anda: " . $id . "<br>";
        echo "Server: " . $server . "<br>";
        echo "Produk: " . $productName . "<br>";
        echo "Harga: Rp." . number_format($price, 0, ',', '.') . "<br>";
        echo "Terima kasih telah berbelanja!";
    } else {
        echo "Permintaan tidak valid atau data tidak tersedia.";
    }
} else {
    echo "Data tidak tersedia.";
}
?>
// <?php
// session_start();

// // Memeriksa apakah total harga ada dalam query parameter
// if (isset($_GET['totalPrice'])) {
//     $totalPrice = $_GET['totalPrice'];

//     // Simpan data struk pembelian ke dalam file
//     $struk = "Total Harga: Rp." . number_format($totalPrice, 0, ',', '.') . "\n";
//     $struk .= "Tanggal Pembelian: " . date('Y-m-d H:i:s') . "\n\n";

//     $file = fopen("struk.txt", "a");
//     fwrite($file, $struk);
//     fclose($file);

//     // Tampilkan struk pembelian
//     echo "<h2>Struk Pembelian</h2>";
//     echo "<p>Total Harga: Rp." . number_format($totalPrice, 0, ',', '.') . "</p>";
//     echo "<p>Tanggal Pembelian: " . date('Y-m-d H:i:s') . "</p>";
//     echo "<p>Terima kasih telah berbelanja!</p>";
// } else {
//     echo "<p>Permintaan tidak valid atau data tidak tersedia.</p>";
// }
// ?>

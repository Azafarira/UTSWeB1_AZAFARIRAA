<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Penjualan</title>
</head>
<body>
    <h1>-- POLGAN MART --</h1>
    <h3>Selamat Datang, <?php echo $_SESSION['username']; ?> (<?php echo $_SESSION['role']; ?>)</h3>
    <a href="logout.php">Logout</a>
    <hr>

    <?php
    // Array data produk
    $kode_barang = ["BRG001", "BRG002", "BRG003", "BRG004", "BRG005"];
    $nama_barang = ["Kopi Golda", "Cocacola", "Indomie", "Susu Coklat", "Lays"];
    $harga_barang = [5000, 4000, 3500, 8000, 10000];

    // Tampilkan produk dalam tabel
    echo "<h2>Daftar Produk</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga (Rp)</th></tr>";

    for ($i = 0; $i < count($kode_barang); $i++) {
        echo "<tr>";
        echo "<td>" . $kode_barang[$i] . "</td>";
        echo "<td>" . $nama_barang[$i] . "</td>";
        echo "<td>" . number_format($harga_barang[$i], 0, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>

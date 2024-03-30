<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk | Nurhaliza</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <a href="../login.php">
        <button class="custom-button">
            Back</button></a>
        <h1>Data Produk</h1>      
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data produk dari variabel PHP
                $products = array(
                  array("Baju", 100, 100000, "Baju adalah pakaian yang dikenakan di bagian atas tubuh. Cocok untuk berbagai kesempatan."),
                  array("Celana", 200, 150000, "Celana adalah pakaian yang dikenakan di bagian bawah tubuh. Nyaman digunakan sehari-hari."),
                  array("Dress", 150, 200000, "Dress adalah pakaian lengkap untuk wanita, cocok untuk berbagai acara formal dan informal."),
                  array("Kemeja", 300, 150000, "Kemeja adalah pakaian berlengan panjang atau pendek, cocok untuk kegiatan sehari-hari."),
                  array("Hijab", 100, 75000, "Hijab adalah penutup kepala untuk wanita muslim, dikenakan untuk menutup aurat."),
                  array("Topi", 50, 100000, "Topi adalah penutup kepala yang sering digunakan untuk melindungi dari sinar matahari."),
                  array("Dasi", 100, 30000, "Dasi adalah aksesori yang dikenakan di leher, sering digunakan dalam busana formal."),
                  array("Kaos Kaki", 200, 20000, "Kaos kaki adalah pakaian kaki yang menutupi kaki hingga betis."),
                  array("Batik", 10, 250000, "Batik adalah kain bergambar yang dihasilkan dengan teknik pewarnaan tertentu, merupakan warisan budaya Indonesia."),
                  array("Jas", 20, 300000, "Jas adalah pakaian formal lengkap untuk pria, sering digunakan dalam acara-acara resmi."),
              );
              

                // Loop untuk menampilkan setiap produk dalam tabel
                foreach ($products as $key => $product) {
                    echo "<tr>";
                    echo "<td>" . ($key + 1) . "</td>";
                    echo "<td>" . $product[0] . "</td>";
                    echo "<td>" . $product[1] . "</td>";
                    echo "<td>" . $product[2] . "</td>";
                    echo "<td>" . $product[3] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

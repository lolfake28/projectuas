<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Makanan</title>
</head>
<body>
    <div class="main">
        <form method="POST" action="index_proses.php">
            <div>Kode Makanan:
            <input type="text" id="kode" name="kode" placeholder="isi kode makanan"><br>
            </div>   
            <div>Nama Makanan:
            <input type="text" id="nama" name="nama" placeholder="isi nama makanan"><br>
            </div>
            <div>Harga Makanan:
            <input type="text" id="harga" name="harga" placeholder="isi harga makanan"><br>
            </div>   
            <div>URL Foto Makanan:
            <input type="text" id="foto" name="foto" placeholder="isi URL foto makanan"><br>
            </div>
            <input type="submit" name="submit" value="Kirim">	
        </form>
        <button><a href="card.php">Order</button>
    </div>
</body>
</html>
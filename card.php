<?php
    session_start();

    if (!isset($_SESSION['makanan'])) {
        header("location: index.php");
    }
    $cetak_session = $_SESSION['makanan'];
    // session_destroy() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .side{
            display: flex;
            justify-content: space-between;
        }
        .cardside{
            padding: 10px;
            left:10px;
            top:10px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px;
            
            width: 200px;
		    height: 280px;
            display: inline-block;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .container {
            padding: 2px 16px;
        }
        img {
            border-radius: 5px 5px 0 0;
            width: 100px;
		    height: 130px;
        }
        .cartside{
            width: 250px;
            left:10px;
            top:10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
<div class="side">
    <div class="cardside">
        <?php
        // print_r($_SESSION['makanan']);
        for ($i = 0; $i < count($cetak_session); $i++) {
            for ($j = 0; $j < count($cetak_session[$i]); $j++) {
                echo "<div class='card'>";
                echo "<img src='" . $cetak_session[$i][$j]. "' style='width:100%'>";
                $j++;
                echo "<div class='container'>";
                echo "<h4><b>" . $cetak_session[$i][$j]. "</b></h4>";
                $j++;
                echo "<p>" . $cetak_session[$i][$j]. "</p>";
                // echo "<p>" . $cetak_session[$i][1]. "</p>";
                // echo "<p>" . $cetak_session[$i][2]. "</p>";
                echo "<button onclick='addToCart('" . $cetak_session[$i][1]. "'," . $cetak_session[$i][2]. ")'>Add to Cart</button>";
                echo "</div>";
                echo "</div>";
    
            }
        }
        ?>
        
    </div>
    <div class="cartside">
        <h2>Pilihanku:</h2>
        <ul id="cart-items"></ul>
        <p id="cart-total">Total: Rp. 0</p>
    </div>
</div>
</body>
</html>
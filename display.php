<?php
    session_start();

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            .main {
                margin: auto;
                width: 50%;
                text-align: left;
                border: 1px solid black;
                padding: 10px;
            }
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
    </head>
    <body>';

        $cetak_session=[];
        echo '<div class="main"';
        if ($_COOKIE["setting_size_font"]) { 
            echo 'style="font-size: '. $_COOKIE['setting_size_font'] . 'px;'; 
        } 
        if ($_COOKIE['setting_type_font']=='bold') { 
            echo 'font-weight: '. $_COOKIE['setting_type_font'] . ';"'; 
        }
        else if ($_COOKIE['setting_type_font']=='italic') { 
            echo 'font-style: '. $_COOKIE['setting_type_font'] . ';"'; 
        }
        else if ($_COOKIE['setting_type_font']=='underline') { 
            echo 'text-decoration: '. $_COOKIE['setting_type_font'] . ';"'; 
        }
        echo '>';
        if (isset($_SESSION['user'])){
            $arr_user = $_SESSION['user'];
            $cetak_session = $_SESSION['user'];
        }

        if (isset($_POST['submit']))
        {
            $alamat='';
            $nrp = $_POST['nrp'];
            $name = $_POST['name'];
            if ($_COOKIE['setting_address']== 'yes') { 
                $alamat = $_POST['alamat'];
            }
            $ipk = $_POST['ipk'];

            $arr_merge = [$nrp,$name,$alamat,$ipk];
            $arr_user[] = $arr_merge;

            $_SESSION['user'] = $arr_user;
            $cetak_session = $_SESSION['user'];

        }

        for ($i = 0; $i < count($cetak_session); $i++) {
            for ($j = 0; $j < count($cetak_session[$i]); $j++) {
                echo "Nrp: " . $cetak_session[$i][$j]. "<br>";
                $j++;
                echo "Nama: " . $cetak_session[$i][$j]. "<br>";
                $j++;
                if ($_COOKIE['setting_show_address'] == 'yes') { 
                    echo "Alamat: " . $cetak_session[$i][$j]. "<br>";
                }else if ($_COOKIE['setting_show_address'] == 'no') { 
                    echo "<div style='display: none;'></div>";
                }
                $j++;
                if ($_COOKIE['setting_show_ipk'] == 'yes') { 
                    echo "IPK: " . $cetak_session[$i][$j]. "<br>";
                }else if ($_COOKIE['setting_show_ipk'] == 'no') { 
                    echo "<div style='display: none;'></div>";
                }
    
            }
            echo "<br>";
        }

        echo '<br>';
        echo '<a href="input.php">';
        echo '<input type="button" value="Input again"></a>';
        echo '<br>';
        echo '<a href="index.php">';
        echo '<input type="button" value="Main Page"></a>';
        echo '</div>';
        

    echo '</body>
    </html>';
    
?>

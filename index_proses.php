<?php
    session_start();

    if (!isset($_SESSION['makanan'])) {
        $_SESSION['makanan'] = array();
    }
    $arr_makanan = $_SESSION['makanan'];
    if (isset($_POST['submit']))
        {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];
            $foto = $_POST['foto'];

            // $arr_merge = array( 
			// 	"foto" => array($foto),
            //     "nama"=> array($nama),
            //     "harga"  => array($harga),
            //     "kode"  => array($kode)
            // );
            $arr_merge = [$foto,$nama,$harga];
            $arr_makanan[] = $arr_merge;
            $_SESSION['makanan'] = $arr_makanan;
            // print_r($_SESSION['makanan']);
            
            // array_push($_SESSION['makanan'],$kode,$nama,$harga,$foto);

            // $cetak_session = $_SESSION['user'];
            header("location: index.php");
        }
    // session_destroy();
    
?>
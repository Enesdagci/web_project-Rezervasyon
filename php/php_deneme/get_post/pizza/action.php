<?php
    $urun = $_GET["ürün"];
    $miktar = $_GET["miktar"];
    $result = 0;

    if ($urun == 1){
        $result = 25 * $miktar;
        echo "Toplam fiyat: " . $result;
    }
    elseif ($urun == 2){
        $result = 15 * $miktar;
        echo "Toplam fiyat: " . $result;
    }
    elseif ($urun == 3){
        $result = 10 * $miktar;
        echo "Toplam fiyat: " . $result;
    }
    else{
        echo "Geçerli değer giriniz...";
    }


?>
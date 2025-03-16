<?php
    // Get yazarsan adres çubuğunda herşey gözükür
    # veri listeleme ve sıralama için yapılır
    // Post yazarsan adres çubuğunda gizlenir. 
    # veri güncelleme,silme ve oluşturmak için yapılır 

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (strtolower($username)=="admin" && $password==1)
        echo "Hello $username your password: $password";
    

    else{
        echo "User denied ....";
    }

?>

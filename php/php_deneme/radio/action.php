<?php 

if (isset($_POST["confirm"])){

    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
        switch($credit_card){
            case "visa":
                echo "You selected " . $credit_card;
                break;
            case "master":
                echo "You selected " . $credit_card;
                break;
            case "troy":
                echo "You selected " . $credit_card;
                break;
            case "paypal":
                echo "You selected " . $credit_card;
                break;
            case "papara":
                echo "You selected " . $credit_card;
                break;
            defaut:
                echo "Please make a selection ...";
                break;
            
        }
    }
    else{
        echo "Please make a selection...";
    }
}


?>
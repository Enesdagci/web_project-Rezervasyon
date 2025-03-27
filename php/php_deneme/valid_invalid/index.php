<?php
if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST,"age",FILTER_SANITIZE_EMAIL);
    echo "your name: $username,<br> your age: $age,<br> your email: $email";
}

?>
<?php 
// var_dump($_POST)
// echo $_POST['name'];
// echo $_POST['email'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

    // if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    //     echo 'Email valido';
    // }else{
    //     echo 'Email não valiado';
    // }

    var_dump($name,$email);
}
   
?>
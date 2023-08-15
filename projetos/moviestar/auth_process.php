<?php 

    require_once("models/User.php");
    require_once("dao/UserDAO.php");
    require_once("globals.php");
    require_once("models/Message.php");
    require_once("db.php");

    $message = new Message($BASE_URL);
    $UserDAO = new UserDAO($conn, $BASE_URL);

    //resgata o tipo de formulario

    $type = filter_input(INPUT_POST, "type");

    //Verifica o tipo de formulario
    
    if($type === 'register'){

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassowrd = filter_input(INPUT_POST, "confirmpassword");

        // verificao de dados minimos 

        if($name && $lastname && $email && $password){

            // verificar se as senhas batem 
            if($password === $confirmpassowrd){
                
                // verificar o email ja esta cadastrado 
                if($UserDAO->findByEmail($email) == false){

                    $user = new User();

                    // Criação de token e senha 
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generationPassword($password);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    $auth = true;

                    $UserDAO->create($user, $auth);

                }else{

                    $message->setMessage("Email já está em uso","error","back");

                }

            }else{

                $message->setMessage("As senhas não são iguais","error","back");

            }

        } else{

            // enviar msg de erro, de dados faltantes 
            $message->setMessage("Por favor, preecha todos os campos.","error","back");

        }

    }else if ($type === 'login'){

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        if($UserDAO->authenticateUser($email, $password)){

            

        }else{

            $message->setMessage("Usuario ou senha incorreta","error","back");

        }

    }else{

        $message->setMessage("Informações invalidas!","error","index.php");

    }

?>
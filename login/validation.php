<?php

session_start();

// creation de la connexion
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'sama_ecole');

$_SESSION['uname'];
$email = $_POST['uname'];
$password = $_POST['password'];

$s ="SELECT * from admin where email ='$email' && password = '$password' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) 
    {
        $_SESSION['email'] = $email;
        header("location:welcome.php");
    }
else
    {
        header("location:welcome.php");
    }


















// if (!empty($_POST)) 
// {
//     extract($_POST);
//     $valid = true;

//     $email = htmlspecialchars(trim($email));
//     $password = trim($password);

//     if (empty($email)) 
//       {
//         $valid = false;
//         $error_pseudo = "Veuillez renseigner votre pseudo";
//       }

//     if (empty($password)) 
//       {
//         $valid = false;
//         $error_password = "Veuillez renseigner votre mot de passe";
//       }

//       $req = $con ->query('Select * from admin where pseudo =: email and password = : password', 
      
//       array('uname'=>$email, 'password'=>crypt($password, '010101010101010101010')));
//       $req = $req ->fetch();

//     if (!$req['uname']) 
//       {
//         $valid = false;
//         $error_compt = "Votre pseudo ou mot de passe de correspondent pas";

//       } 
    
//     if ($valid) 
//       {
//          $_SESSION['id'] = $req['id'];
//          $_SESSION['uname'] = $req['uname'];
//          $_SESSION['password'] = $req['password'];

//          header('location: welcome.php');
//          exit;
//       }  

// }
?>
<?php
session_start();
header("location: login.php");

// creation de la connexion
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'sama_ecole');

$pseudo = $_POST['pseudo'];
$email = $_POST['uname'];
$password = $_POST['password'];

// verification si le pseudo existe deja

$s ="SELECT * from admin where pseudo ='$pseudo'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) 
    {
        echo "Ce pseudo est déjà utilisé";
    }
else
    {
        $reg = "INSERT into admin (pseudo, email, password) values ('$pseudo', '$email', '$password')";
        mysqli_query($con, $reg);
        echo "Inscription réussie";
    }
?>





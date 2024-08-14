<?php

require "../connect.php";


$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$number=$_POST["number"];



$pas_hash=password_hash($password , PASSWORD_DEFAULT);

$num_email=$connect->query("SELECT email FROM user WHERE email='$email' ")->num_rows;

    if($num_email==0){
        $insert=$connect->query("INSERT INTO user 
        ( `name`, `email`, `password`, `number`)
        VALUES
        ('$name' , '$email' , '$pas_hash' , '$number')");

        if($insert){
            header("location:../../user.php");
        }
    }
    else{
            header("location:../../user.php?user=add&error=the email has token");
        }
    
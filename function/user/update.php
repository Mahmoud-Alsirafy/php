<?php

require "../connect.php";

echo "<br>". $id=$_POST["id"];


if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    echo "<br>". $name=$_POST["name"];
    
    echo "<br>". $email=$_POST["email"];
    
    echo "<br>". $number=$_POST["number"];


     $update=$connect->query("UPDATE user SET

        name='$name',

        email='$email',

        number='$number'

        WHERE id='$id'
    ");

    if($update){
        header("location:../../user.php");
    }
    
    
}

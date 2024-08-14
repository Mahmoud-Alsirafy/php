<?php


require "../connect.php";

$id=$_GET["id"];


$delete=$connect->query("DELETE FROM user WHERE id='$id'");


if($delete){
    header("location:../../user.php?ms=Success Delete User");
}else{
    echo "no";
}

<?php
require "../connect.php";


$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$catigory=$_POST["catigory"];
$img=$_FILES["img"];
$url=$_SERVER["HTTP_REFERER"];
$old_image=$_POST["oldimage"];
$last_image=explode("/",$old_image);
$upload_img=[];

if($img["size"][0]==0){
    $update=$connect->query("UPDATE products SET 
    
    name='$name',
    price='$price',
    sale='$name',
    count='$name',
    catigory='$catigory'
    WHERE id='$id'
    ");
    if($update){
        header("location:../../product.php");
    }else{
        header("location:$url");
    }
}else{
    $uploaded_images= [];

    foreach($img["name"] as $key=>$val){
        $path= pathinfo($img["name"][$key], PATHINFO_EXTENSION);

        $ex=["jpg" , "png" , "gif" , "jpeg"];

        if(in_array($path , $ex)){
            $new_name = md5(uniqid()). "." . $path;

            if(move_uploaded_file($img ["tmp_name"][$key], "../../images/$new_name")){
                $uploaded_images[]= $new_name;
            }
        }
    }

    if(!empty($upload_img)) {
        $img = implode('/' , $uploaded_images);


        $update=$connect->query("UPDATE products SET
        name='$name',
        price='$price',
        sale='$sale',
        count='$count',
        catigory='$catigory',
        img='$img'
        WHERE id='$id'
        ");
    }
}
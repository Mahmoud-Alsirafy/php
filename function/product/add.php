<?php

require "../connect.php";
$name=$_POST["name"];
$price=$_POST["price"];
$sale=$_POST["sale"];
$count=$_POST["count"];
$catigory=$_POST["catigory"];
$img=$_FILES["img"];
$url=$_SERVER["HTTP_REFERER"];
$upload_img=[];



foreach($img ["name"] as $key=>$val){
    if($_FILES["img"]["error"][$key]==0){
    
    
        $ex=pathinfo($img["name"][$key],PATHINFO_EXTENSION);
    
        $name_ex=["jpg" , "jfif" , "png" , "gif" ];
    
    
        if(in_array($ex,$name_ex)){
    
            if($_FILES["img"]["size"][$key]<="5000000"){

                $new_name=md5(uniqid()).".".$ex;
    
               if(move_uploaded_file($img["tmp_name"][$key],"../../images/$new_name")){
                $upload_img[]=$new_name;
               }
            }
        }
        
    }
}

if(!empty($upload_img)){
            $image=implode('/',$upload_img);
        

         $insert=$connect->query("INSERT INTO products
         
         ( `name`, `Price`, `Sale`, `Count`, `catigory`, `img`)

         VALUES

         ('$name','$price' , '$sale' , '$count' , '$catigory','$image')

         
         ");

         if($insert){
    header("location:../../product.php");
            }
}
           
            




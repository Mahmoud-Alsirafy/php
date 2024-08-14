<?php
include "style/navbar.php";
include "style/sidbar.php";
?>

<?php
if(!isset($_GET["product"])){
    include "incloud/product/view.php";
}
elseif($_GET["product"]=="add"){
    include "incloud/product/form.php";   
}
elseif($_GET["product"]=="edit"){
    include "incloud/product/edit.php";   
}

elseif($_GET["product"]=="delete"){
    include "incloud/product/edit.php";   
}





?>














<?php
include "style/footer.php";
?>
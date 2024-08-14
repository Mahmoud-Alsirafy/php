

<?php


$id=$_GET["id"];


$edit=$connect->query("SELECT * FROM products WHERE id='$id' ")->fetch_assoc();


?>

<form method="POST" action="function/product/update.php" style="width: 90%;margin:auto;"  enctype="multipart/form-data" >
  <div class="form-group">
    <input type="hidden" name="oldimage" value="<?=$edit["img"]?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" value="<?=$edit["name"]?>" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
<?php if(isset($_GET["error"])) :?>
<div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php endif?>
  <div class="form-group">
  <label for="exampleInputEmail1">price</label>
  <input type="price" value="<?=$edit["Price"]?>" name="price" placeholder="price" class="form-control" id="exampleInputEmail1" >
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" value="<?=$edit["Sale"]?>" name="sale"  class="form-control" id="exampleInputEmail1" placeholder="sale">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">count</label>
        <input type="text" value="<?=$edit["Count"]?>" name="count"  class="form-control" id="exampleInputEmail1" placeholder="count">

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">catigory</label>
    <select name="catigory" class="form-control" id="exampleFormControlSelect1">
         <?php
        $cat=$connect->query("SELECT * FROM cat ");
        foreach($cat as $cat):
        ?>
      <option value="<?= $cat["number"]?>"> <?= $cat["name"]?></option>
     <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="img[]" multiple class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>


     

<br>



  <input type="submit" name="submit" class="btn btn-primary" value="Add">
</form>
<br>

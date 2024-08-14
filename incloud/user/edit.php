

<?php
 $id=$_GET["id"];


$edit=$connect->query("SELECT * FROM user WHERE id='$id' ")->fetch_assoc();

?>


<form method="POST" action="function/user/update.php" style="width: 90%;margin:auto;">
  <div class="form-group">
<input type="hidden" name="id" value="<?= $id?>">
    <label for="exampleInputEmail1">name</label>
    <input type="text" value="<?= $edit["name"]?>" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" value="<?= $edit["email"]?>" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" >
</div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">number</label>
    <select name="number" class="form-control" id="exampleFormControlSelect1">
         <?php
        $cat=$connect->query("SELECT * FROM acsses ");
        foreach($cat as $cat):
        ?>
      <option  <?= $cat["number"]==$edit["number"]?"Selected":""?> value="<?= $cat["number"]?>"> <?= $cat["name"]?></option>
     <?php endforeach ?>
    </select>
  </div>
     

<br>



  <input type="submit" name="submit" class="btn btn-primary" value="Update">
</form>
<br>

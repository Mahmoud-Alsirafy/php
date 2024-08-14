<form method="POST" action="function/user/add.php" style="width: 90%;margin:auto;">
  <div class="form-group">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>
<?php if(isset($_GET["error"])) :?>
<div class="alert alert-danger" role="alert">
  <?= $_GET["error"]?>
</div>
<?php endif?>
  <div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" >
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">number</label>
    <select name="number" class="form-control" id="exampleFormControlSelect1">
         <?php
        $cat=$connect->query("SELECT * FROM acsses ");
        foreach($cat as $cat):
        ?>
      <option value="<?= $cat["number"]?>"> <?= $cat["name"]?></option>
     <?php endforeach ?>
    </select>
  </div>
     

<br>



  <input type="submit" name="submit" class="btn btn-primary" value="Add">
</form>
<br>

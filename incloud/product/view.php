

<a href="?product=add" class="btn btn-primary" >Add product</a>


<?php if(isset($_GET["ms"])): ?>
<div class="alert alert-succes" role="alert">
  <?= $_GET["ms"]?>
</div>
<?php endif?>


<table class="table table-dark">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Sale</th>
            <th scope="col">Count</th>
            <th scope="col">catigory</th>
            <th scope="col">img</th>
            <th scope="col">Edite/Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $users=$connect->query("SELECT * FROM products");

            foreach($users as $index=>$user):
        ?>

        <tr>
            <th scope="row"><?= ++$index?></th>
            <td>  <?= $user["name"]?>  </td>
            <td>  <?= $user["Price"]?>  </td>
            <td>  <?= $user["Sale"]?>  </td>
            <td>  <?= $user["Count"]?>  </td>
            <td>  <?= $user["catigory"]?>  </td>


            <?php
        $user=$connect->query("SELECT * FROM products ");
        foreach($user as $user):
        ?>
      <td> <img height="100px" class="w-75" src="images/<?=$user["img"]?>" alt="">  </td>
     <?php endforeach ?>


            

            <td>
                
                <a href="?product=edit&id=<?= $user["id"]?>" class="btn btn-primary">edit</a>
                <?php include "style/model.php";?>
                
               
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>


<a href="?user=add" class="btn btn-primary" >Add User</a>


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
            <th scope="col">Email</th>
            <th scope="col">numper</th>
            <th scope="col">Edite/Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $users=$connect->query("SELECT * FROM user");

            foreach($users as $index=>$user):
        ?>

        <tr>
            <th scope="row"><?= ++$index?></th>
            <td>  <?= $user["name"]?>  </td>
            <td>  <?= $user["email"]?>  </td>
            <td>  <?= $user["number"]?>  </td>

            <td>
                
                <a href="?user=edit&id=<?= $user["id"]?>" class="btn btn-primary">edit</a>
                <?php include "style/model.php";?>
                
               
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
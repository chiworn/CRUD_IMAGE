<?php include "./includes/header.html";
      include "./db.php";
?>
<div class="container col-9  mt-5">
    <div class="w-100 d-flex  justify-content-between align-items-center">
        <h3 class="text-primary">Product Dashbaord</h3>
        <a href="./from_insert.php" class="btn btn-success">Add product + </a>
    </div>
    <div class="w-100 ">
        <table class="table align-middle">
            <thead>
                <th>ID</th>
                <th>NAME_PRODUCT</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>DISCRIPTION</th>
                <th>IMAGE</th>
                <th>ACTION</th>
            </thead>
            <tbody>

            <?php 

             $result =  $con->query("SELECT `id`, `namepro`, `price`, `qty`, `dis`, `image`, `created_at` FROM `tbl_products` WHERE 1");
             while($row = mysqli_fetch_assoc($result)){
            
            ?>
                <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['namepro']  ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['qty'] ?></td>
                <td><?= $row['dis'] ?></td>
                <td> <img class="imagepro" src="./uploads/<?= $row['image'] ?>" alt=""> </td>
                <td>
                    <button class="btn btn-warning">EDIT </button>
                    <button class="btn btn-danger">DELETE</button>
                     </td>

                </tr>
                <?php }?>
              
            </tbody>
        </table>

    </div>
</div>


<?php include "./includes/footer.html"; ?>
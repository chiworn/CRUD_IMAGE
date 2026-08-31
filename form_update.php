<?php include "./includes/header.html" ;
      include "./db.php";

    $id = $_GET['id'];
    echo "ID PRODUCT :", $id;

    $sql = "SELECT * FROM `tbl_products` WHERE `id` = $id;";
    $result =  $con->query($sql)->fetch_assoc();
    echo $result;
    echo  $result['id'];
    echo $result['namepro'];
    echo $result['price'];
    echo $result['qty'];
    echo $result['dis'];
    echo $result['image'];



?>

    

<!-- form Insert UI  -->

<div class=" col-7 m-auto ">
    <h2 class="text-center text-primary mt-3 ">UPATE PRODUCT</h2>
    <form action="./update.php" class="p-4 shadow rounded rounded-3" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">ID :</label>
            <input type="text" class="form-control" name="id" value="<?= $result['id']; ?>" >
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Old image:</label>
            <input type="text" class="form-control" name="oldimage" value="<?= $result['image']; ?>" >
        </div>
    <div class="mb-3">
            <label for="" class="form-label">Enter nameproduct :</label>
            <input type="text" class="form-control" name="namepro" value="<?= $result['namepro'] ?>">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">ENTER PRICE :</label>
            <input type="text" class="form-control" name="price" value="<?= $result['price'] ?>">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Enter QTY</label>
            <input type="text" class="form-control" name="qty" value="<?= $result['qty'] ?>">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Enter DIS</label>
            <input type="text" class="form-control" name="dis" value="<?= $result['dis'] ?>">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Enter Image</label>
            <input type="file" class="form-control" name="image">
        </div>

     
     
        <button type="submit" class="btn btn-warning">Update Product </button>
    </form>
</div>
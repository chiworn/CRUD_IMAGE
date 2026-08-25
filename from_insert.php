<?php include "./includes/header.html" ?>

    
<!-- form Insert UI  -->

<div class=" col-7 m-auto ">
    <h2 class="text-center text-primary mt-3 ">INSERT PRODUCT</h2>
    <form action="./insert.php" class="p-4 shadow rounded rounded-3" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Enter nameproduct :</label>
            <input type="text" class="form-control" name="namepro">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">ENTER PRICE :</label>
            <input type="text" class="form-control" name="price">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Enter QTY</label>
            <input type="text" class="form-control" name="qty">
        </div>
          <div class="mb-3">
            <label for="" class="form-label">Enter DIS</label>
            <input type="text" class="form-control" name="dis">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Enter Image</label>
            <input type="file" class="form-control" name="image">
        </div>

     
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
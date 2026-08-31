<?php 
include "./db.php";
echo $_SERVER['REQUEST_METHOD'];


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $id = $_POST['id'];
    $name = $_POST['namepro'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $dis = $_POST['dis'];

    $oldimage = $_POST['oldimage'];
    echo $oldimage;
    

    if( !empty($_FILES['image']['name']) ){

    if(file_exists("./uploads/$oldimage")){
        unlink("./uploads/$oldimage");
    }

    $newimage = $_FILES['image']['name'];
    $path     = $_FILES['image']['tmp_name'];

    $newname = time().$newimage;
    move_uploaded_file($path,"./uploads/$newname");

    $con->query("UPDATE `tbl_products` SET `namepro`='$name',`price`='$price',`qty`='$qty',`dis`='$dis',`image`='$newname' WHERE `id` =  $id");

 
    }
   
    $con->query("UPDATE `tbl_products` SET `namepro`='$name',`price`='$price',`qty`='$qty',`dis`='$dis',`image`='$oldimage' WHERE `id` =  $id");

    header("location: index.php");
    exit;
    
     
   
}
?>
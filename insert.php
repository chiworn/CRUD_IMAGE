<?php 
    include "./db.php";
   
    // logic insert data to table 

    $name = "";
    $pice = "";
    $qty = "";
    $dis = "";
    $imagename = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
    $name = $_POST['namepro'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $dis = $_POST['dis'];
 
    $imagename = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    echo $name , $price ,  $qty , $dis , $imagename , $tmp;

    $newname = time().$imagename;
    $uploade = "./uploads/".$newname;

    move_uploaded_file($tmp,$uploade);

    $con->query("INSERT INTO `tbl_products`( `namepro`, `price`, `qty`, `dis`, `image`) VALUES ('$name','$price','$qty','$dis','$newname')");

    
    header("location: index.php");
    exit;
    
    }


?>
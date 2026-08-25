<?php 
   
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

    }


?>
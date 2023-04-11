<?php
include "./config.php";
session_start();
if (isset($_POST['productSubmit'])) {
    $productName=$conn->real_escape_string($_POST['productName']);
    $productPrice =$conn->real_escape_string($_POST['productPrice']);
    $product_details=$conn->real_escape_string($_POST['product_details']);
    $id=$_POST['id'];
    if($id > 0){
    $add_update="UPDATE products set name='$productName', price='$productPrice', product_desc='$product_details' where id='$id'";
    $add_sql=mysqli_query($conn,$add_update) or die($conn->error);
    if($add_sql){
        echo '<script>alert("Edited successfully!")</script>';

    }
    }else{
        $add_product_sql = "INSERT INTO products(name,price,product_desc) VALUES('$productName','$productPrice','$product_details')";
        $add_product_query = mysqli_query($conn, $add_product_sql) or die($conn->error);
    
        // get the product inserted last
        $q = $conn->query("SELECT * from products order by id desc limit 1") or die($conn->error);
        $data = $q->fetch_assoc();
        $product_id = $data['id'];
        // echo "PRODUCT ID = $product_id";
    
        if ($_FILES['productImage']) {
            $product_file = $_FILES['productImage'];
            $product_tmp_name = $product_file['tmp_name'];
            $product_name = $product_file['name'];
            move_uploaded_file($product_tmp_name, "./images/$product_name");
            $img_sql = mysqli_query($conn, "UPDATE products SET image='$product_name' where id = '$product_id'") or die($conn->error);
            // header('location:../');
        }
    }
}

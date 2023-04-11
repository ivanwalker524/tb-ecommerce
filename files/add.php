<?php
    include "files/config.php";
    $productName = '';
    $productPrice = '';
    $product_details = '';
    $id = 0;
    if(isset($_GET['edit'])){
        $edit=$_GET['edit'];
        $ed=mysqli_query($conn,"SELECT * FROM products where id='$edit'") or die($conn->error);
        $mtext_row=mysqli_fetch_assoc($ed);
        // echo '<pre>';
        // print_r($mtext_row);
        // echo '</pre>';
        $ed_row=$mtext_row['id'];  
        $id = $mtext_row['id'];
        $product_details = $mtext_row['product_desc'];
        $productPrice = $mtext_row['price'];
        $productName = $mtext_row['name'];
    }else if(isset($_GET['del'])){
            $del=$_GET['del'];
            $del_sq1=$conn->query("DELETE FROM products where id='$del'") or die($conn->error);
            if($del_sq1){
                echo '<script>alert("product deleted successfully!")</script>';
            }
        }
    
    ?>
<div class="mx-wd auto">
    <div style="display:flex; flex-direction:column; align-items:center; margin:40px 0;">
        <form action="files/add_new.php" method="post" class="box" enctype="multipart/form-data">
            <h1>add new products</h1>
            <input type="text" name="productName" value="<?=$productName?>" placeholder="product name" class="inputBox">
            <input type="text" name="productPrice" value="<?=$productPrice?>" placeholder="product price" class="inputBox">
            <input type="file" name="productImage" class="inputBox">
            <textarea name="product_details" rows="6" placeholder="product description"><?=$product_details?></textarea>
            <input type="hidden" name="id" value="<?=$id?>"> 
            <input type="submit" name="productSubmit" value="Submit to add a product" class="btn">
        </form>
    </div>

    <?php
    $sel="SELECT * FROM products";
    $sel_query=mysqli_query($conn,$sel) or die($conn->error);
    ?>


    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                    <th style="width:100px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($sel_row=mysqli_fetch_assoc($sel_query)){  ?>
                    <tr>
                        <td><?=$sel_row['id']?></td>
                    <td> <img style="width:100px; height:100px;" src="files/images/<?=$sel_row['image']?>" alt=""></td>
                    <td><?=$sel_row['name']?></td>
                    <td><?=$sel_row['price']?>$</td>
                    <td><?=$sel_row['product_desc']?></td>
                    <td>
                        <a href="?ref=add&edit=<?=$sel_row['id']?>">edit</a>
                        <a href="?ref=add&del=<?=$sel_row['id']?>">delete</a>
                    </td>
                    </tr>

                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div> 
<?php
include "./files/config.php";
// print_r(glob('*'));
if(isset($_GET['details'])){
    $det=$_GET['details'].".php";
    if(file_exists($det)) require $det;
}
$id=$_GET['details'];
$select="SELECT * FROM products where id='$id'";
$sel_query=mysqli_query($conn,$select) or die($conn->error);
$row=mysqli_fetch_assoc($sel_query);
?>
<div class="details_container">
    <div class="wd_p">
        <div class="left_side">
            <div class="hg">
                <div class="detail_name">
                    <h1><?=$row['name']?></h1>
                </div>
                <div class="detail_product ">
                    <img src="files/images/<?=$row['image']?>" alt="">
                </div>
            </div>
        </div>
        <div class="right_side">
            <div class="">
                <div class="hg">
                    <h1 style="color:blue;">About this product</h1>
                    <div>
                        <h3><?=$row['product_desc']?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

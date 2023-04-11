<div class="mx-wd auto" style="margin-top:20px">
    <div class="container">
        <div class="container_bg">
            <h1>Some of products in the stock</h1>
            <div class="flex wrap">
                <?php
                include "config.php";
                $upade=mysqli_query($conn,"SELECT * FROM products order by id asc limit 0,8") or die($conn->error);
                if(mysqli_num_rows($upade) > 0){
                    while($fetch=$upade->fetch_assoc()){ ?>
                <a href="?ref=details&details=<?=$fetch['id']?>">
                    <div class="product">
                        <div class="block border">
                            <div class="center">
                                <div class="product_img">
                                    <img src="files/images/<?=$fetch['image']?>" alt="">
                                </div>
                            </div>
                            <div class="product_details block">
                                <div class="block">
                                    <span><?=$fetch['name']?></span>
                                    <span>$<?=$fetch['price']?>/-</span>
                                </div>
                                <div class="shop">
                                    <a href="?ref=details&details=<?=$fetch['id']?>">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
              <?php }
                }
              ?>
            </div>
        </div>
    </div>
</div>

<!-- future phones -->
<div class="future_bg">
    <div class="mx-wd auto" style="margin-top:20px">
        <div class="two_divs">
            <div class="container">
                <div class="container_bg">
                    <div class="flex">
                        <?php
                        $sql2=$conn->query("SELECT * FROM products order by id asc limit 8,10") or die($conn->error);
                        if(mysqli_num_rows($sql2) > 0){
                        while($row2=$sql2->fetch_assoc()){?>
                        <a href="?ref=details&details=<?=$row2['id']?>">
                            <div class="product future">
                                <div class="block border">
                                    <div class="center">
                                        <div class="product_img ">
                                            <img src="files/images/<?=$row2['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product_details block">
                                        <div class="block">
                                            <span><?=$row2['name']?></span>
                                            <span>$<?=$row2['price']?></span>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="?ref=details&details=<?=$row2['id']?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="covers_bg">
    <div class="mx-wd auto" style="margin-top:20px">
        <div class="two_divs">
            <div class="container">
                <h1 class="align-center">Accessories in all types</h1>
                <div class="container_bg">
                    <div class="flex">
                        <?php
                        $sql3=$conn->query("SELECT * FROM products order by id asc limit 18,9") or die($conn->error);
                        if(mysqli_num_rows($sql3) > 0){
                        while($row3=$sql3->fetch_assoc()){?>
                        <a href="?ref=details&details=<?=$row3['id']?>">
                            <div class="product future wd_20">
                                <div class="block border">
                                    <div class="center">
                                        <div class="product_img">
                                            <img src="files/images/<?=$row3['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product_details block">
                                        <div class="block">
                                            <span><?=substr($row3['name'],0,50)."......"?></span>
                                            <!-- <span>$<?//$row3['price']?></span> -->
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="?ref=details&details=<?=$row3['id']?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hot_cat">
    <div class="mx-wd auto" style="margin-top:20px">
        <div class="two_divs">
            <div class="container">
                <h1 class="align-center">Hot Categories</h1>
                <div class="container_bg">
                    <div class="flex">
                        <?php
                        $sql4=$conn->query("SELECT * FROM products order by id asc limit 27,4") or die($conn->error);
                        if(mysqli_num_rows($sql4) > 0){
                        while($row4=$sql4->fetch_assoc()){?>
                        <a href="?ref=details&details=<?=$row4['id']?>">
                            <div class="product">
                                <div class="block border">
                                    <div class="center">
                                        <div class="product_img">
                                            <img src="files/images/<?=$row4['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product_details block">
                                        <div class="block">
                                            <span><?=substr($row4['name'],0,50)."......"?></span>
                                            <!-- <span>$<?//$row4['price']?></span> -->
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="?ref=details&details=<?=$row4['id']?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="premium">
    <div class="mx-wd auto" style="margin-top:20px">
        <div class="two_divs">
            <div class="container">
                <h1 class="align-center"></h1>
                <div class="container_bg">
                    <div class="flex">
                        <?php
                        $sql5=$conn->query("SELECT * FROM products order by id asc limit 31,2") or die($conn->error);
                        if(mysqli_num_rows($sql4) > 0){
                        while($row5=$sql5->fetch_assoc()){?>
                        <a href="?ref=details&details=<?=$row5['id']?>">
                            <div class="product wd-50">
                                <div class="block border">
                                    <div class="center">
                                        <div class="product_img">
                                            <img src="files/images/<?=$row5['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product_details block">
                                        <div class="block">
                                            <span><?=substr($row5['name'],0,50)."......"?></span>
                                            <!-- <span>$<?//$row5['price']?></span> --> 
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="?ref=details&details=<?=$row5['id']?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="premium speakers">
    <div class="mx-wd auto" style="margin-top:20px">
        <div class="two_divs">
            <div class="container">
                <h1 class="align-center">Bluetooth wireless speakers</h1>
                <div class="container_bg">
                    <div class="flex">
                        <?php
                        $sql5=$conn->query("SELECT * FROM products order by id asc limit 33,10") or die($conn->error);
                        if(mysqli_num_rows($sql4) > 0){
                        while($row5=$sql5->fetch_assoc()){?>
                        <a href="?ref=details&details=<?=$row5['id']?>">
                            <div class="product wd-50">
                                <div class="block border">
                                    <div class="center">
                                        <div class="product_img">
                                            <img src="files/images/<?=$row5['image'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product_details block">
                                        <div class="block">
                                            <span><?=substr($row5['name'],0,50)."......"?></span>
                                            <!-- <span>$<?//$row5['price']?></span> --> 
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="?ref=details&details=<?=$row5['id']?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
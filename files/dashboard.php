<?php
if (isset($_GET['ref']))
    $ref = $_GET['ref'];
else $ref = "home";
//svgs                  
$svg = array();
foreach ($svg = glob("files/svgs/*.svg") as $vector) {
    $ph = pathinfo($vector);
    $svg[$ph['filename']] = file_get_contents($vector);
    // $file=pathinfo('./files/images/vectors/home.svg');
    // echo "<pre>";
    // print_r($file);
    // echo "</pre>";
}

?>
<div class="sticky">
    <div class="bg">
        <div class="mx-wd auto">
            <div class="navigation">
                <div>
                    <div class="logo flex-grow">
                        <div>
                            <div>
                                <h1>T.H</h1>
                            </div>
                            <span>phones&accessories</span>
                        </div>
                    </div>
                    <div class="nav">
                        <div>
                            <div class="flex">
                                <a href="" class="flex">
                                    <span class="icons"><?= $svg['facebook'] ?></span>
                                    <span>facebook</span>
                                </a>
                                <a href="" class="flex">
                                    <span class="icons"><?= $svg['instagram'] ?></span>
                                    <span>instagram</span>
                                </a>
                                <a href="" class="flex">
                                    <span class="icons"><?= $svg['whatsapp'] ?></span>
                                    <span>whatsapp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-search">
        <div class="mx-wd auto">
            <div class="flex">
                <div class="categories wd">
                    <div class="flex">
                        <a href="?cat=categories" class="flex">
                            <span class="icons"><?= $svg['bars'] ?></span>
                            <span>All categories</span>
                        </a>
                    </div>
                    <?php
                    if (isset($_GET['cat'])) {
                        $cat = $_GET['cat'];
                        if ($cat == 'categories') { ?>
                            <div class="absolute">
                                <div>
                                    <ul>
                                        <li><a href="?ref=home">Home</a></li>
                                        <li><a href="?ref=phones">mobile phones & tablets</a></li>
                                        <li><a href="?ref=cover">phone covers</a></li>
                                        <li><a href="?protectors=protectors">screen protectors</a></li>
                                        <li><a href="">chargers</a></li>
                                        <li><a href="">memory cards & flash disk</a></li>
                                        <p><a href="?ref=details&ref=add">Add a product</a></p>
                                    </ul>
                                </div>
                            </div>

                    <?php }
                    }
                    ?>
                </div>
                <div class="search wd">
                    <form action="./" method="post">
                        <div style="position:relative;">
                            <input type="text" name="text" placeholder="Search for the products you want....">
                            <button class="icons" type="submit" name="search"><?=$svg['search']?></button>
                        </div>
                        <div class="search_abso">
                            <?php
                            include_once "./files/config.php";
                            $text = ''; // initially, there's no text in this variable
                            if (isset($_POST['search'])) {
                                $text = $_POST['text']; // get the user input and store it here
                            }

                            // the code below will execute taking into account the variable $text whether the user submits a form or not
                            $sql = "SELECT * FROM products WHERE name like '%$text%' order by id desc limit 1";
                            $result = $conn->query($sql) or die($conn->error);
                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row2 = $result->fetch_assoc()) { ?>
                                        <div style="padding:10px; display:flex;flex-direction:column;">
                                        <a href="?ref=details&details=<?=$row2['id']?>">
                                            <span><?=$row2['name'] ?></span>
                                        </a>
                                        </div>
                            <?php }
                                } else {
                                    echo "<p>There is no data for this search.</p>";
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="div">
        <div class="relative">
            <!-- <h1><marquee behavior="Alternate" direction="left">Welcome to Tbag Gadgets</marquee></h1> -->
            <!-- <div class="abs"> -->
                <!-- <div> -->
                    <?php
                    // if(isset($_GET['details'])){
                    //     $details=$_GET['details'];
                    //     $id=$_GET['details'];
                    //     $select=(mysqli_query($conn,"SELECT * FROM products WHERE id='$id'")) or die($conn->error);
                    // $det=mysqli_fetch_assoc($select);
                    // }
                    ?>
                    <!-- <div class="detail_name">
                        <h1><?//$det['name']?></h1>
                    </div>
                    <div class="detail_product">
                        <img src="files/images/<?//$det['image']?>" alt="">
                    </div> -->
                <!-- </div> -->
            <!-- </div> -->

            </div>
            <?php
            $page = "files/" . $ref . ".php";
            if (file_exists($page)) require $page;
            ?>
        </div>
    </div>
</div>

<div class="footer">
    <div class="mx-wd auto">
        <div>
            <p></p>
        </div>
    </div>
</div>
<?php
session_start();
require_once "./../layouts/header.php";

$uid=$_GET['uid'];
echo $uid;
if (isset($_POST['update'])) {
    $product_name=$_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_stock = $_POST['product_stock'];
    $product_detail = $_POST['product_detail'];
    $product_updated_date=date("Y-m-d");

echo  $product_name, $product_price,$product_stock , $product_detail ,   $product_updated_date;
$updatesql="UPDATE productss SET
product_name='$product_name',
product_price=$product_price,
product_stock=$product_stock,
product_detail='$product_detail',
product_updated_date='$product_updated_date' WHERE product_uid='$uid'";
if($conn->query($updatesql)){
    header("Location: ./products.php");
}else{
    echo $err='not updated';
}
}




$sql= "SELECT * FROM productss WHERE product_uid = '$uid'";

$result = $conn->query($sql);




?>


<section>
    <fieldset>
<legend>New Product</legend>
    <?php echo $err ?? "" ?>
    <?php

while($row =mysqli_fetch_assoc($result)){ ?>

    <form action="" method="post" id="product-form" enctype="multipart/form-data"> 
        <div class="input-wrapper">
            <label for="product_name">Product name</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']?>">
        </div>
        <div class="input-wrapper">
            <label for="product_price">Product price</label>
            <input type="number" id="product_price" name="product_price" step="0.01" value="<?php echo $row['product_price']?>">
        </div>
        <div class="input-wrapper">
            <label for="product_stock">Product stock</label>
            <input type="number" id="product_stock" name="product_stock" step="0.01" value="<?php echo $row['product_stock']?>">
        </div>
        <div class="input-wrapper">
            <label for="product_image">Product Image</label>
            <input type="file" id="product_image" name="product_image"  />
        </div>
        <div class="input-wrapper">
            <label for="product_detail">Product Detail</label>
            <textarea id="product_detail" name="product_detail" rows="10" cols="25"><?php echo $row['product_detail']?></textarea>
        </div>
        <div class="input-button-wrapper">
            <button type="submit" name="update">Submit</button>
        </div>
    </form>
    <?php }?>
    </fieldset>
</section>


</body>

</html>
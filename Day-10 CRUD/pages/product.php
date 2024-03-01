<?php
require_once "./../layouts/header.php";


if (isset($_POST['submit'])) {
    $product_name=$_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_stock = $_POST['product_stock'];
    $product_detail = $_POST['product_detail'];
    $product_created_date = $product_updated_date=date("Y-m-d");
    $product_uid=time().rand(11111111,99999999);
    $err="";
$file=$_FILES['product_image'];
print_r($file);
    if($product_name && $product_price &&  $product_stock &&  $product_detail){

        $sql = "INSERT INTO productss (product_name, product_price, product_stock, product_uid, product_detail, product_image, product_image_path, product_created_date, product_updated_date)
        VALUES
            ('$product_name', $product_price, $product_stock, $product_uid,  '$product_detail', 'image (1).png', '/assets/images/uploads/', '$product_created_date','$product_updated_date')";
        
    //   if($conn->query($sql)){
    //     echo "data has been uploaded";
    // }else{
    //       echo "data has not been uploaded";

    //   }


    }else{
        $err="please fill form";
    }
    
}

?>


<section>
    <fieldset>
<legend>New Product</legend>
    <?php echo $err ?? "" ?>
    <form action="" method="post" id="product-form" enctype="multipart/form-data"> 
        <div class="input-wrapper">
            <label for="product_name">Product name</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $product_name??''?>">
        </div>
        <div class="input-wrapper">
            <label for="product_price">Product price</label>
            <input type="number" id="product_price" name="product_price" step="0.01" value="<?php echo $product_price??''?>">
        </div>
        <div class="input-wrapper">
            <label for="product_stock">Product stock</label>
            <input type="number" id="product_stock" name="product_stock" step="0.01" value="<?php echo $product_stock??''?>">
        </div>
        <div class="input-wrapper">
            <label for="product_image">Product Image</label>
            <input type="file" id="product_image" name="product_image" accept=".jpg,.png" />
        </div>
        <div class="input-wrapper">
            <label for="product_detail">Product Detail</label>
            <textarea id="product_detail" name="product_detail" rows="10" cols="25"><?php echo $product_detail??''?></textarea>
        </div>
        <div class="input-button-wrapper">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    </fieldset>
</section>


</body>

</html>
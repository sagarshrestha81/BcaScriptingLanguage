<?php
require_once "./../layouts/header.php";

?>


<section>
    <form action="" method="post" id="product-form">
        <div class="input-wrapper">
            <label for="product_name">Product name</label>
            <input type="text" id="product_name" name="product_name">
        </div>
        <div class="input-wrapper">
            <label for="product_price">Product price</label>
            <input type="number" id="product_price" name="product_price" step="0.01">
        </div>
        <div class="input-wrapper">
            <label for="product_stock">Product stock</label>
            <input type="number" id="product_stock" name="product_stock" step="0.01">
        </div>
        <div class="input-wrapper">
            <label for="product_image">Product Image</label>
            <input type="file" id="product_image" name="product_image" accept=".jpg,.png" />
        </div>
        <div class="input-wrapper">
            <label for="product_detail">Product Detail</label>
            <textarea id="product_detail" name="product_detail" rows="10" cols="25"></textarea>
        </div>
    </form>
</section>

    
</body>
</html>
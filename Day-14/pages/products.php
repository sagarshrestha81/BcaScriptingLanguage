<?php
// session_start();

// $_SESSION['username']="sagarstha";
// $_SESSION['email']="sagarstha@gmail.com";
// $_SESSION['otp']=1234567;
// echo "session before unset";
// print_r($_SESSION);

// session_destroy();



// $_SESSION['ppr']=1234567;
// echo "session after unset";
// print_r($_SESSION);


require_once "./../layouts/header.php";


$sql = "SELECT * FROM productss";
$data = $conn->query($sql);

if (isset($_POST['delete'])) {
    $uid = $_POST['delete'];
    $deletesql = "DELETE FROM productss WHERE product_uid='$uid'";

    if ($conn->query($deletesql)) {
        echo "delete success";
        $sql = "SELECT * FROM productss";
        $data = $conn->query($sql);

    } else {

        echo "delete failed";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>

<body>
    <style>
        table img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
    <section>
        <h3>Products</h3>
        <table border="1" class="product-table">
            <tr>
                <th>SN</th>
                <th>UID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            <?php if ($data->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($data)) {


                    $image_location = ".." . $row['product_image_path'] . $row['product_image'];

                    ?>
                    <tr>
                        <td>
                            <?php echo $row['product_id'] ?>
                        </td>
                        <td>
                            <?php echo $row['product_uid'] ?>
                        </td>
                        <td>
                            <?php echo $row['product_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['product_price'] ?>
                        </td>
                        <td>
                            <?php echo $row['product_stock'] ?>
                        </td>
                        <td><img src="../assets/images/uploads/<?php echo $row['product_image'] ?>" /></td>
                        <td>
                            <?php echo $row['product_updated_date'] ?>
                        </td>
                        <td>
                            <a href="./editProduct.php?uid=<?php echo $row['product_uid'] ?>">Edit</a>
                            <form method="POST">

                                <button name="delete" value="<?php echo $row['product_uid'] ?>">Delete</button>
                            </form>
                        </td>

                    </tr>
                    <?php
                }
            } ?>

            <tr>
                <td>SN</td>
                <td>UID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Image</td>
                <td>Updated</td>
            </tr>
            <tr>
                <td>SN</td>
                <td>UID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Image</td>
                <td>Updated</td>
            </tr>
        </table>
    </section>
</body>

</html>
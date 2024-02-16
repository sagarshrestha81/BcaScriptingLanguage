<?php
$header="form";
if(isset($_POST['submit'])){
    $fullname=$_POST['fullName'];
    $password=$_POST['password'];
    echo $fullname."<br/>".$password;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <div class="container">
        <?php echo "<h1>$header</h1>";?>
        <form action="" method="post">
            <label for="fullname">Fullname</label>
            <input type="text" name="fullName" id="fullname"><br>
            <label for="password">Password</label>
            <input type="text" name="password" id="password"><br>
            
            <button type="submit" name="submit">Submit</button>
            <button type="reset">Reset</button>

        </form>
    </div>

</body>

</html>
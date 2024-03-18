<?php
print_r($_COOKIE['users']);
// $file = fopen("log.txt", "r");
// echo $file;
// if ($file) {
//     while (($lines = fgets($file)) !== false) {
//         echo $lines;
//     }
// }

// $file_path = "image (1).png";
// if ($file_path) {
//     unlink($file_path);
// }

if (isset ($_POST["submit"])) {
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    // $file = fopen("log.txt", "w");
    // $file = fopen("log.txt", "a");



    // fwrite($file, "\n$title\n$detail\n\n");

    fclose($file);



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
    <form method="POST">
        <input type="text" name="title" id=""><br>
        <textarea name="detail" id="" cols="30" rows="10"></textarea><br>
        <button name="submit">submit</button>
    </form>
</body>

</html>
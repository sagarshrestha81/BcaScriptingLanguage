<?php

$localhost="localhost";
$username="root";
$password="";
$database="hello123";

$conn=new mysqli($localhost,$username,$password);
if($conn){
    echo "Database Server Connect <br>";
    $sql="CREATE DATABASE $database";
    $result=$conn->query($sql);
    if($result){
       echo "Database Created <br>";
       $conn=new mysqli($localhost,$username,$password,$database);
       if($conn){
           echo "Database Connected success<br>";
           $sql ="CREATE TABLE productss
           (
           product_id INT AUTO_INCREMENT PRIMARY KEY,
           product_name VARCHAR(255) NOT NULL,
           product_price DECIMAL(10,0) NOT NULL,
           product_stock INT NOT NULL,
           product_uid VARCHAR(255) NOT NULL,
           product_detail TINYTEXT,
           product_image BLOB NOT NULL,
           product_image_path VARCHAR(255) NOT NULL,
           product_created_date DATE NOT NULL,
           product_updated_date DATE NOT NULL
           
           );";
            $result=$conn->query($sql);
            if($result){ 
                echo "Table Created <br>";
            }else{
                echo "Table Not Connected <br>";
            }
        }else{
            
            echo "Database Not Connected <br>";
       }
    }else{
        
        echo "Database Not Created <br>";
   }


}else{

    echo "Not Connected";

}




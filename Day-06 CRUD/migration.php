<?php

$localhost="localhost";
$username="root";
$password="";
$database="test1234";

$conn=new mysqli($localhost,$username,$password);
if($conn){
    echo "Database Server Connect <br>";
    $sql="CREATE DATABASE $database";
    $result=$conn->query($sql);
    if($result){
       echo "Database Created <br>";
       
    }else{
        
        echo "Database Not Created <br>";
   }


}else{

    echo "Not Connected";

}




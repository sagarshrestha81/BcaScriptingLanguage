<?php

// $arr=array("ram",'shyam','hari');
// print_r($arr);
// echo $arr[2];
// $arr=["ram",'shyam','hari'];
// print_r($arr);
// $arr=['roll'=>1,'class'=>12,'name'=>'ram'];
// print_r($arr);
// echo $arr['roll'];
// echo $arr['class'];
// echo $arr['name'];


// $arr = array(
//     array("roll"=>1,'name'=>array(
//         "first"=>"ram",
//         "last"=>"shrestha"
//     ),'address'=>"ktm"),
//     array("roll"=>2,'name'=>'shyam','address'=>"bkt"),
//     array("roll"=>3,'name'=>'hari','address'=>"skt"),
// );
// $arr = [
//     [
//         "roll" => 1,
//         'name' => [
//             "first" => "ram",
//             "last" => "shrestha"
//         ],
//         'address' => "ktm"
//     ],
//     ["roll" => 2, 'name' => 'shyam', 'address' => "bkt"],
//     ["roll" => 3, 'name' => 'hari', 'address' => "skt"],
// ];
// print_r($arr);


$arr=array("roll"=>2,'name'=>'shyam','address'=>"bkt");

foreach($arr as $key=> $value){
    
    echo $key.'='.$value."  ";
}



<?php
$user_id = $_GET['user_id'];

$status = [];
$conn = new mysqli("localhost", "root", "", "abc123");

if ($conn) {
    $sql = "DELETE from users WHERE user_id='$user_id' ";


    try {
        if ($conn->query($sql)) {
            $status['type'] = "success";
            $status['message'] = "Data has been Deleted";
        }
    } catch (Exception $e) {
        $status['type'] = "error";
        $status['message'] = "Data has not Deleted";
    }


} else {
    $status['type'] = "error";
    $status['message'] = "Database Not Connected";
}

echo json_encode($status);


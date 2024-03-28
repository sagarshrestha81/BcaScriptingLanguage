<?php
$fullname = $_POST['Fullname'];
$email = $_POST['Email'];
$password = md5($_POST['Password']);

$status = [];
$conn = new mysqli("localhost", "root", "", "abc123");

if ($conn) {
    $sql = "SELECT user_email from users WHERE user_email='$email' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $status['type'] = "error";
        $status['message'] = "Your email already in System";
    } else {
        $sql = "INSERT INTO users (user_fullname,user_email,user_password) VALUES ('$fullname','$email','$password')";
        try {
            if ($conn->query($sql)) {
                $status['type'] = "success";
                $status['message'] = "Data has been Inserted";
            }
        } catch (Exception $e) {
            $status['type'] = "error";
            $status['message'] = "Data has not inserted";
        }
    }

} else {
    $status['type'] = "error";
    $status['message'] = "Database Not Connected";
}

echo json_encode($status);


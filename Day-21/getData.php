<?php
$status = [];
$conn = new mysqli("localhost", "root", "", "abc123");
$data = [];
if ($conn) {
    $sql = "SELECT * from users";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $data[$i]['user_id'] = $row['user_id'];
        $data[$i]['user_fullname'] = $row['user_fullname'];
        $data[$i++]['user_email'] = $row['user_email'];
    }

    if ($result->num_rows > 0) {
        $status['type'] = "success";
        $status['data'] = $data;
    }

} else {
    $status['type'] = "error";
    $status['message'] = "Database Not Connected";
}

echo json_encode($status);
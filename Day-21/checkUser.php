<?php
$email = $_POST['Email'];
$conn = new mysqli("localhost", "root", "", "abc123");
$sql = "SELECT user_email from users WHERE user_email='$email' ";
$result = $conn->query($sql);
$statusEmail = "Not exists";
if ($result->num_rows > 0) {
    $statusEmail = "Exists";
}
echo $statusEmail;


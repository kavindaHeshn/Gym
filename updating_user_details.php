

<?php
include '../configuration/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate password if provided
    if (!empty($password)) {
        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
            exit;
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $password_sql = ", password='$hashed_password'";
    } else {
        $password_sql = "";
    }

    // Update query
    $sql = "UPDATE users SET 
                first_name='$first_name', 
                last_name='$last_name', 
                address='$address', 
                email='$email'
                $password_sql 
            WHERE id=$user_id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('User updated successfully!'); window.location.href='manage_users.php';</script>";
    } else {
        echo "<script>alert('Error updating user: " . mysqli_error($conn) . "'); window.history.back();</script>";
    }
}
?>

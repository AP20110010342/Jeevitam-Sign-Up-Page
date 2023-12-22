<?php
include('./connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" name="user_username" placeholder="Enter your username" class="form-control" required="required" />
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" name="user_password" placeholder="Enter your password" class="form-control" required="required" />
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p>Don't have an account? <a href="user_registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-bVY5ayJcGpVzQTE5a2Ou1bI8DucZHP5Y2C5Kb7mPtkQp4fL+P6G5g9TG22YY9u6M" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $select_query = "SELECT * FROM `register` WHERE user_name = '$user_username'";
    $result = mysqli_query($con, $select_query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $stored_password = $row['user_password'];
            if (password_verify($user_password, $stored_password)) {
                // Passwords match, login successful
                echo "<script>alert('Logged in successfully');</script>";
            } else {
                // Passwords do not match
                echo "<script>alert('Incorrect password');</script>";
            }
        } else {
            // Username not found
            echo "<script>alert('Username not found');</script>";
        }
    } else {
        // Error in the query
        echo "<script>alert('Error in login');</script>";
    }
}
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash the password

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo '<div class="error-box"><p>Email already exists. Please use a different email.</p></div>';
    } else {
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            setcookie("user_id", $conn->insert_id, time() + (86400 * 30), "/"); // 86400 = 1 day
            header("Location: index.php");
            exit();
        } else {
            echo '<div class="error-box"><p>Error: ' . $sql . '<br>' . $conn->error . '</p></div>';
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kindergarten</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">    
</head>
<style>
    .container {
    max-width: 600px;
    margin: 100px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
}

.error-box {
    max-width: 700px;
    margin: 100px auto 0px ;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
}
h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
}

.form-group input {
    width: 100%;
    padding: 15px;
    font-size: 14px; 
    border: 1px solid #ddd;
    border-radius: 5px;
}

.btn {
    display: block;
    width: 100%;
    padding: 15px;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background: #555;
}

.auth-link {
    display: block;
    text-align: center;
    margin-top: 20px;
    font-size: 16px;
    color: #333;
    text-decoration: none;
}

.auth-link:hover {
    color: var(--orange);
}
</style>

<body>

    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-school"></i> Kindergarten</a>

    </header>
    <!-- header section ends -->

    <!-- register section starts -->
    <section class="register" id="register">
        <div class="container">
            <h2>Register</h2>
            <form method="post" action="register.php">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <a href="login.php" class="auth-link">Already have an account? Login here</a>
        </div>
    </section>
    <!-- register section ends -->

    <?php include 'footer.php'; ?>
</body>
</html>
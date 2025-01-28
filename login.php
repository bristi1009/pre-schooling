<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash the password

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        setcookie("user_id", $row['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: index.php");
        exit();
    } else {
        echo '<div class="error-box"><p>Invalid email or password.</p></div>';
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
    <title>Login - Kindergarten</title>
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

.register-link {
    display: block;
    text-align: center;
    margin-top: 20px;
    font-size: 16px;
    color: #333;
    text-decoration: none;
}

.register-link:hover {
    color: var(--orange);
}
</style>

<body>

    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-school"></i> Kindergarten</a>
        <!-- <div class="icons">
            <?php
            if (isset($_COOKIE['user_id'])) {
                echo '<a href="logout.php" class="auth-link"> Logout</a>';
            } else {
                echo '<a href="login.php" class="auth-link"> Login</a>';
            }
            ?>
        </div> -->
    </header>
    <!-- header section ends -->

    <!-- login section starts -->
    <section class="login" id="login">
        <div class="container">
            <h2>LogIn</h2>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
            </form>
            <a href="register.php" class="register-link">Don't have an account? Register here</a>
        </div>
    </section>
    <!-- login section ends -->

    <?php include 'footer.php'; ?>
</body>
</html>
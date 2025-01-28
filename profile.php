<?php
include 'config.php';

if (!isset($_COOKIE['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_COOKIE['user_id'];
$sql = "SELECT email FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Kindergarten</title>
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
    .profile {
    padding: 100px 0;
    margin: 100px auto;
    }

    body {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    }
</style>
<body>

    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-school"></i> Kindergarten</a>
        <nav class="navbar">
            <a href="index.php#home">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#education">education</a>
            <a href="index.php#teacher">teacher</a>
            <a href="index.php#activities">activities</a>
            <a href="index.php#contact">contact</a>
        </nav>
        <div class="icons">
            <?php
            if (isset($_COOKIE['user_id'])) {
                echo '<a href="logout.php" class="auth-link"> Logout</a>';
            } else {
                echo '<a href="login.php" class="auth-link"> Login</a>';
            }
            ?>
        </div>
    </header>
    <!-- header section ends -->

    <!-- profile section starts -->
    <section class="profile" id="profile">
        <div class="container">
            <h2>Profile</h2>
            <p>Email: <?php echo $user['email']; ?></p>
            <!-- logout button -->
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </section>
    <!-- profile section ends -->

    <?php include 'footer.php'; ?>
</body>
</html>
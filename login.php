<?PHP

SESSION_START();


// My Info
$username = 'admin';
$password = 'password';



// Checking if the credentials are correct
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Username is not correct
    if ($_POST['username'] != $username) {
        header('Location: login.php?notusername');
    }

    // Password is not correct
    elseif ($_POST['username'] == $username && $_POST['password'] != $password) {
        header('Location: login.php?notpassword');
    }

    // Username and password match
    elseif ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;

        header('Location: login.php?success');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">


</head>

<body>
    <div class="login-wrapper">
        <div class="login-form">
            <div class="logo">
            </div>
            <form method="post">
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                    <div class="icon">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <div class="icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <div class="form-group">
                    <?php

                    // Incorrect username
                    if (isset($_GET['notusername'])) {
                        echo "<div class='usernameNotExist'> Username does not exist.</div>";
                    }

                    // Incorrect password
                    elseif (isset($_GET['notpassword'])) {
                        echo "<div class='incorrectPass'> Incorrect password.</div>";
                    }

                    // Unauthorized to see the welcome page
                    elseif (isset($_GET['unauthorized'])) {
                        echo "<div>Unauthorized. Please login first.</div>";
                    }

                    // Redirect to welcome page
                    elseif (isset($_GET['success'])) {
                        echo "<div class='success'> Redirecting...</div>";
                        header("Refresh: 5; home.php ");
                    }

                    // Check if still logged in
                    elseif (isset($_SESSION['username'])) {
                        echo "<div>You are still logged in. Please <a href='home.php' class='clickhere'>click here </a> to proceed.</div>";
                    }

                    // Logged out
                    elseif (isset($_GET['logout'])) {
                        echo "<div class='thanks'> Thank You</div>";
                    }

                    ?>
                </div>
                <a class="forgot-pass" href="/register">Forgot Password</a>
                <div class="form-group">
                    <button type="submit">Log In</button>
                </div>
            </form>
            <p class="register-link">Not registered? <a href="/register">Create an account</a></p>
        </div>
    </div>
</body>

</html>
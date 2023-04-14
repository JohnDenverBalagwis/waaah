<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-form">
            <div class="logo"></div>
            <form action="/login" method="post">
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
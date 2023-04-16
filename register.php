<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <div class="registration-wrapper">
        <div class="background">
        </div>
        <div class="registration-form">
            <h2>Register</h2>
            <form action="/register" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="business-name">Business Name</label>
                    <input type="text" id="business-name" name="business-name" placeholder="Enter your business name" required>
                </div>
                <div class="form-group">
                    <label for="owner-name">Owner's Name</label>
                    <input type="text" id="owner-name" name="owner-name" placeholder="Enter owner's name" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter your address" required>
                </div>
                <div class="form-group">
                    <label for="contact-no">Contact No.</label>
                    <input type="text" id="contact-no" name="contact-no" placeholder="Enter your contact number" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group terms-and-conditions">
                    <a href="#">Terms and Conditions</a>
                </div>
                <div class="form-group button-container">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
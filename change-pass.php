<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/change-pass.css">
</head>

<body>
    <div class="wrapper">
        <div class="left-profile">
            <a href="home.php" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
            <div class="profile-pic">
                <img src="./img/profile.png" alt="Profile Picture">
            </div>
            <ul>
                <li><a href="edit-profile.php">Edit Profile</a><i class="fas fa-angle-right"></i></li>
                <li><a href="change-pass.php">Change Password</a><i class="fas fa-angle-right"></i></li>
            </ul>
        </div>
        <div class="right-content">
            <div class="header">
                <div class=" logo">
                    <img src="/img/logo2.png" alt="Logo">
                    <h3>Republic of the Philippines<br>Department of Environmental Resources<br><span>PENRO Manrinduque</span></h3>
                </div>
            </div>
            <div class="box-container">
                <div class=" middle-home">
                    <div class="upload-photo">
                        <div class="upload-profile">
                            <img src="/img/profile-removebg-preview.png" alt="">
                        </div>
                        <button id="edit-photo-btn" type="button">Edit Photo</button>
                    </div>
                </div>
                <div class="right-form">
                    <h1>Password</h1>
                    <form>
                        <div class="form-group-top">
                            <label for="password">Password:</label>
                            <div class="password-wrapper">
                                <div class="password-text">**********</div>
                            </div>
                        </div>
                        <h4 class="label">Change Password</h4>
                        <div class="form-group">
                            <label for="owners-name">Current Password</label>
                            <input type="password" id="current-password" name="current-password" placeholder="Current Password" required>
                        </div>
                        <div class="form-group">
                            <label for="address">New Password</label>
                            <input type="password" id="new-password" name="new-password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Confirm New Password</label>
                            <input type="password" id="new-password" name="new-password" placeholder="Confirm New Password" required>
                        </div>
                        <div class="form-group">
                            <button type="button">Cancel</button>
                            <button type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
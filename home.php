<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css">
    <script>
        function toggleDropdown() {
            document.getElementById("dropdown-menu").classList.toggle("show");
        }

        document.addEventListener("click", function(event) {
            var dropdownMenu = document.getElementById("dropdown-menu");
            if (!event.target.closest(".profile-dropdown") && dropdownMenu.classList.contains("show")) {
                dropdownMenu.classList.remove("show");
            }
        });
    </script>
</head>

<body>
    <header>
        <nav>
            <!-- <a href="#" class="back-arrow"><i class="fas fa-arrow-left"></i></a> -->
            <div class="profile-dropdown">
                <a href="#" onclick="toggleDropdown()">
                    <img src="./img/profile.png" alt="Profile Picture" />
                    <i class="fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li><a href="edit-profile.php">edit profile</a></li>
                    <li><a href="#">username</a></li>
                    <li><a href="#">business name</a></li>
                    <li><a href="#">owner's name</a></li>
                    <li><a href="#">address</a></li>
                    <li><a href="#">contact no.</a></li>
                    <li><a href="#">email</a></li>
                    <li><a href="#">change password</a></li>
                    <li><a href="#">logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="logo-container">
        <img src="./img/logo-.png" alt="Logo">
    </div>
    <div class="button-container">
        <a href="chainsaw.php" class="button">
            <img src="./img/chainsaw.png" alt="Picture 1">
            <p>Chainsaw</p>
        </a>
        <a href="certificate.php" class="button">
            <img src="./img/COV.png" alt="Picture 2">
            <p>Certificate of Verification</p>
        </a>
        <a href="registration.php" class="button">
            <img src="./img/PTPR.png" alt="Picture 3">
            <p>Private Tree Plantation Registration</p>
        </a>
    </div>
</body>

</html>
<?php
// Retrieve and display existing user data from the database or file

// Example code to display user data
$userData = [
    ["id" => 1, "businessName" => "ABC Company", "ownersName" => "John Doe", "address" => "123 Main St", "contactNumber" => "123-456-7890", "email" => "john@example.com"],
    ["id" => 2, "businessName" => "XYZ Corporation", "ownersName" => "Jane Smith", "address" => "456 Elm St", "contactNumber" => "987-654-3210", "email" => "jane@example.com"],
    // ... Add more user data as needed
];
?>


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
    <link rel="stylesheet" href="./css/manage.css">
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
            <a href="login.php" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
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
                    <li><a id="bold-logout" href="?logout">log out</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>User Management</title>
        <!-- Add your CSS stylesheets here -->
    </head>

    <body>
        <h1>User Management</h1>

        <!-- Display existing user data -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Business Name</th>
                    <th>Owner's Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userData as $user) : ?>
                    <tr>
                        <td><?= $user["id"]; ?></td>
                        <td><?= $user["businessName"]; ?></td>
                        <td><?= $user["ownersName"]; ?></td>
                        <td><?= $user["address"]; ?></td>
                        <td><?= $user["contactNumber"]; ?></td>
                        <td><?= $user["email"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user["id"]; ?>">Edit</a>
                            <a href="delete.php?id=<?= $user["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </body>

    </html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Header -->
    <header class="flex justify-between items-center p-5 bg-white shadow-md">
        <a href="./index.php">
            <h1 class="text-3xl font-bold text-blue-900 flex items-center ml-10">
                <span class="text-black">O</span><span class="text-blue-500">L</span>
                <span class="ml-2 text-gray-600">OncoLogix</span>
            </h1>
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">☰</button>

        <!-- Navigation Menu -->
        <nav id="menu" class="hidden md:flex md:items-center space-x-6 mr-[50px] font-bold">
            <a href="./index.php" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="./form.php" class="text-gray-700 hover:text-blue-700">Cases Details</a>
            <a href="./tumor_coll.php" class="text-gray-700 hover:text-blue-700">Tumor Collections</a>
            <a href="./aboutus.php" class="text-gray-700 hover:text-blue-700">About Us</a>
            <a href="./contactus.php" class="text-gray-700 hover:text-blue-700">Contact Us</a>

            <!-- Profile Section -->
            <div class="relative flex items-center space-x-2">
                <?php if (isset($_SESSION['admin'])) { ?>
                    <span class="text-gray-700 font-bold"><?php echo $_SESSION['admin']; ?></span>
                <?php } ?>
                <button id="profile-button" class="focus:outline-none">
                    <img src="./assets/img/unkonw.jpg" alt="Profile" class="w-10 h-10 rounded-full border-2 border-gray-500">
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown-menu" class="hidden absolute right-0 mt-[80px] w-40 bg-white shadow-md rounded-md border">
                    <?php if (isset($_SESSION['admin'])) { ?>
                        <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                    <?php } else { ?>
                        <a href="Admin_login.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden flex flex-col items-center bg-white shadow-md md:hidden font-bold">
        <a href="./index.php" class="py-2 text-gray-700 hover:text-blue-700">Home</a>
        <a href="./patient-details.php" class="py-2 text-gray-700 hover:text-blue-700">Tumor Collections</a>
        <a href="./aboutus.php" class="py-2 text-gray-700 hover:text-blue-700">About Us</a>
        <a href="./contactus.php" class="py-2 text-gray-700 hover:text-blue-700">Contact Us</a>
    </div>

    <!-- JavaScript for Dropdown -->
    <script>
        document.getElementById("profile-button").addEventListener("click", function() {
            document.getElementById("dropdown-menu").classList.toggle("hidden");
        });

        window.addEventListener("click", function(event) {
            if (!document.getElementById("profile-button").contains(event.target)) {
                document.getElementById("dropdown-menu").classList.add("hidden");
            }
        });
    </script>
</body>

</html>
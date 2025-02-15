<?php 
include("./header.php"); 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("Location:Admin_login.php");
    exit();
}else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoLogix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-[#E3ECF8] to-[#FFFFFF] text-gray-800 flex flex-col min-h-screen">

    <!-- Content -->
    <div class="text-center mt-16 px-6">
        <h1 class="text-3xl font-bold text-blue-800">Contact Us</h1>
        <p class="mt-5 text-lg max-w-2xl mx-auto leading-relaxed">
            Have questions or need assistance? Feel free to reach out to us using the form below.
        </p>

        <!-- Contact Form -->
        <div class="mt-10 max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            <form action="#" method="POST">
                <label class="block font-semibold text-gray-700">Full Name:</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded-md mt-1 mb-4" required>

                <label class="block font-semibold text-gray-700">Email Address:</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded-md mt-1 mb-4" required>

                <label class="block font-semibold text-gray-700">Your Message:</label>
                <textarea name="message" rows="4" class="w-full p-2 border border-gray-300 rounded-md mt-1 mb-4" required></textarea>

                <button type="submit" class="w-full bg-blue-700 text-white font-semibold py-2 rounded-md hover:bg-blue-800">
                    Send Message
                </button>
            </form>
        </div>
    </div>
    <script>
        // Function to toggle mobile menu
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>

    <?php
     include("./footer.php"); 
     }?>
</body>

</html>
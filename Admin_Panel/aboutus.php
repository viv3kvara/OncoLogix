<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include("./header.php");
    
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
        <h1 class="text-3xl font-bold text-blue-800">About OncoLogix</h1>
        <p class="mt-5 text-lg max-w-2xl mx-auto leading-relaxed">
            Tumor Registry is dedicated to improving outcomes for cancer patients by providing a global platform for pathology diagnosis.
            Our mission is to compile and analyze microscopic tumor images to help researchers, doctors, and students advance in medical sciences.
        </p>
        <p class="mt-4 text-lg max-w-2xl mx-auto leading-relaxed">
            With a growing collection of expertly annotated tumor cases, we aim to create a collaborative community for knowledge sharing and innovative research.
        </p>
    </div>
    <!-- <div class="text-center mt-16 px-6">
        <h1 class="text-3xl font-bold text-blue-800">Key Feature</h1>

    </div> -->
    <section class="py-12 ">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-blue-800 mb-6">Key Features</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-blue-800">Open Access</h4>
                    <p class="text-gray-600">Open access; no registration required.</p>
                </div>
                <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-blue-800">Submit cases</h4>
                    <p class="text-gray-600">Open for submission of cases by any medical professional.</p>
                </div>
                <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-blue-800">Searchable</h4>
                    <p class="text-gray-600">Searchable by (i) pathology diagnosis, (ii) key morphologic features, and (iii) specific cohorts.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Function to toggle mobile menu
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>

    <?php 
    include("./footer.php");
     } ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoLogix - Patient Cards</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 100%;
            max-width: 1100px;
            padding: 24px;
            border-radius: 12px;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        .divider {
            height: 60px;
            width: 2px;
            background-color: #ccc;
            margin: 0 20px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white flex flex-col items-center min-h-screen pt-20">

    <header class="fixed top-0 left-0 w-full bg-white shadow-md z-50 flex justify-between items-center p-5">
        <a href="./index.php" class="text-3xl font-bold text-blue-900 flex items-center">
            <span class="text-black">O</span><span class="text-blue-500">L</span>
            <span class="ml-2 text-gray-600">OncoLogix</span>
        </a>
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none text-2xl">☰</button>
        <nav id="menu" class="hidden md:flex md:items-center space-x-6 font-bold">
            <a href="./index.php" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="./drop-down.php" class="text-gray-700 hover:text-blue-700">Tumor Collections</a>
            <a href="./aboutus.php" class="text-gray-700 hover:text-blue-700">About Us</a>
            <a href="./contactus.php" class="text-gray-700 hover:text-blue-700">Contact Us</a>
        </nav>
    </header>

    <div id="mobile-menu" class="hidden flex flex-col items-center bg-white shadow-md md:hidden font-bold w-full py-4">
        <a href="./index.php" class="py-2 text-gray-700 hover:text-blue-700">Home</a>
        <a href="./drop-down.php" class="py-2 text-gray-700 hover:text-blue-700">Tumor Collections</a>
        <a href="./aboutus.php" class="py-2 text-gray-700 hover:text-blue-700">About Us</a>
        <a href="./contactus.php" class="py-2 text-gray-700 hover:text-blue-700">Contact Us</a>
    </div>

    <div class="flex-grow flex flex-col justify-center items-center w-full px-4 md:px-0">
        <h1 class="text-3xl font-bold text-blue-900 text-center mb-8">Patient Records</h1>
        <div class="flex flex-col space-y-6 w-full max-w-4xl">
            <div class="bg-white shadow-md rounded-lg p-6 card flex flex-col md:flex-row items-center md:justify-between w-full md:w-auto">
                <img src="./assets/img/Kartik Photo.png" alt="Patient Image" class="w-40 h-40 rounded-lg object-cover mr-6 mb-4 md:mb-0">
                <div class="flex-1 flex flex-col md:flex-row justify-between items-center w-full">
                    <div class="text-center md:text-left">
                        <h2 class="text-xl font-semibold text-blue-900">John Doe</h2>
                        <p class="text-gray-700 text-lg"><strong>Age:</strong> 45</p>
                    </div>
                    <div class="hidden md:block divider"></div>
                    <div class="text-center md:text-left">
                        <p class="text-gray-700 text-lg"><strong>Cancer:</strong> Stage II Lung Cancer</p>
                        <p class="text-gray-700 text-lg"><strong>Hospital:</strong> City Cancer Institute</p>
                    </div>
                    <div class="hidden md:block divider"></div>
                    <div class="text-center md:text-left">
                        <p class="text-gray-700 text-lg"><strong>Country:</strong> USA</p>
                    </div>
                </div>
                <a href="./patient-details.php" class="bg-blue-700 text-white px-3 py-[8px] rounded-lg text-lg hover:bg-blue-500 transition mt-4 md:mt-0 md:ml-[11px]">View More</a>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 card flex flex-col md:flex-row items-center md:justify-between w-full md:w-auto">
                <img src="./assets/img/Kartik Photo.png" alt="Patient Image" class="w-40 h-40 rounded-lg object-cover mr-6 mb-4 md:mb-0">
                <div class="flex-1 flex flex-col md:flex-row justify-between items-center w-full">
                    <div class="text-center md:text-left">
                        <h2 class="text-xl font-semibold text-blue-900">John Doe</h2>
                        <p class="text-gray-700 text-lg"><strong>Age:</strong> 45</p>
                    </div>
                    <div class="hidden md:block divider"></div>
                    <div class="text-center md:text-left">
                        <p class="text-gray-700 text-lg"><strong>Cancer:</strong> Stage II Lung Cancer</p>
                        <p class="text-gray-700 text-lg"><strong>Hospital:</strong> City Cancer Institute</p>
                    </div>
                    <div class="hidden md:block divider"></div>
                    <div class="text-center md:text-left">
                        <p class="text-gray-700 text-lg"><strong>Country:</strong> USA</p>
                    </div>
                </div>
                <a href="./patient-details.php" class="bg-blue-700 text-white px-3 py-[8px] rounded-lg text-lg hover:bg-blue-500 transition mt-4 md:mt-0 md:ml-[11px]">View More</a>
            </div>
        </div>
    </div>

    <footer class="w-full text-center py-6 bg-gray-100 text-gray-700 text-sm md:text-base">
        © 2025 OncoLogix | Uniting Against Cancers
    </footer>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            var menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
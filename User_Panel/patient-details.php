<?php include("./header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoLogix - Case Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white">
    <!-- <header class="flex justify-between items-center p-6 bg-white shadow-lg">
        <h1 class="text-2xl font-bold text-blue-900 flex items-center ml-[70px]">
            <span class="text-black">O</span><span class="text-blue-500">L</span>
            <span class="ml-2 text-gray-600">OncoLogix</span>
        </h1>
        <nav>
            <ul class="flex gap-6 text-blue-900 text-sm md:text-base">
                <li><a href="#" class="hover:text-blue-500">Home</a></li>
                <li><a href="#" class="hover:text-blue-500">Tumor Collections</a></li>
                <li><a href="#" class="hover:text-blue-500">About Us</a></li>
                <li><a href="#" class="hover:text-blue-500">Contact Us</a></li>
            </ul>
        </nav>
    </header> -->

    <div class="container mx-auto p-6 shadow-md rounded-lg mt-[70px] bg-gradient-to-b from-white to-blue-50">
        <div class="flex flex-wrap md:flex-nowrap gap-6">
            <!-- Patient Details Card -->
            <div class="flex-1 bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Patient Details</h3>
                <div class="flex items-center">
                    <img src="./assets/img/Kartik Photo.png" alt="Patient Image" class="w-24 h-24 rounded-lg mr-6">
                    <p class="text-lg font-semibold text-gray-800">John Doe</p>
                </div>
                <p class="text-gray-700 mt-[8px]"><strong>Age:</strong> 45</p>
                <p class="text-gray-700"><strong>Diagnosis:</strong> Stage II Lung Cancer</p>
            </div>

            <!-- Doctor Details Card -->
            <div class="flex-1 bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Doctor Details</h3>
                <div class="flex items-center">
                    <img src="./assets/img/Kartik Photo.png" alt="Doctor Image" class="w-24 h-24 rounded-lg mr-6">
                    <p class="text-lg font-semibold text-gray-800">Dr. Sarah Williams</p>
                </div>
                <p class="text-gray-700 mt-[8px]"><strong>Specialization:</strong> Oncology</p>
                <p class="text-gray-700"><strong>Experience:</strong> 15 Years</p>
                <p class="text-gray-700"><strong>Email:</strong> dr.sarah@hospital.com</p>
                <!-- <p class="text-gray-700"><strong>Special Study Topic:</strong> Advanced Immunotherapy for Lung Cancer</p> -->
            </div>
        </div>

        <!-- Hospital Information Card -->
        <div class="mt-6 bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
            <h3 class="text-xl font-semibold text-blue-900">Hospital Information</h3>
            <p class="text-gray-700"><strong>Name:</strong> City Cancer Institute</p>
            <p class="text-gray-700"><strong>Address:</strong> 123 Health St, New York, NY</p>
            <p class="text-gray-700"><strong>Contact:</strong> +1 800 555 1234</p>
            <p class="text-gray-700"><strong>Country:</strong> U.S</p>
            <p class="text-gray-700"><strong>State:</strong> NY</p>
            <p class="text-gray-700"><strong>City:</strong> New York</p>
            <p class="text-gray-700"><strong>Email:</strong> nyhealth@gmail.com</p>
            <p class="text-gray-700"><strong>Website:</strong> <a href="#" class="text-blue-500 hover:underline">www.citycancer.org</a></p>
        </div>

        <!-- Treatment Details -->
        <div class="mt-6 bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200">
            <h3 class="text-xl font-semibold text-blue-900">Given Treatment</h3>
            <p class="font-semibold">Here is the procedure of the given treatment</p>
            <!-- <p class="text-gray-700"><strong>Type:</strong> Chemotherapy</p>
            <p class="text-gray-700"><strong>Start Date:</strong> March 1, 2025</p>
            <p class="text-gray-700"><strong>Sessions:</strong> 6 (One every 3 weeks)</p>
            <p class="text-gray-700"><strong>Next Appointment:</strong> April 15, 2025</p>
            <p class="text-gray-700"><strong>Medication:</strong> Paclitaxel, Carboplatin</p>
            <p class="text-gray-700"><strong>Side Effects:</strong> Fatigue, Nausea, Hair Loss</p>
            <p class="text-gray-700"><strong>Alternative Therapies:</strong> Immunotherapy, Targeted Therapy</p>
            <p class="text-gray-700"><strong>Doctor’s Notes:</strong> Monitor blood counts regularly, maintain a healthy diet, and stay hydrated.</p> -->
        </div>
    </div>

    <!-- <div class="text-center py-4 bg-gray-100 text-gray-700 rounded-b-lg mt-[12px]">&copy; 2025 OncoLogix - All Rights Reserved</div> -->

    <?php include("./footer.php") ?>
</body>

</html>
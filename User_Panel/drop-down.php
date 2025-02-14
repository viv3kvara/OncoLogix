<?php include("./header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoLogix - Cancer Types</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto p-6 shadow-md rounded-lg mt-[70px] bg-gradient-to-b from-white to-blue-50">
        <h2 class="text-xl font-semibold text-blue-900 mb-4">Select Cancer Type</h2>

        <!-- Dropdown -->
        <div class="mb-6">
            <select id="cancerType" class="w-full p-3 border rounded-lg shadow-md text-gray-700 focus:ring focus:ring-blue-300">
                <option value="sel">Select</option>
                <option value="lung">Lung Cancer</option>
                <option value="kidney">Kidney Cancer</option>
                <option value="stomach">Stomach Cancer</option>
                <option value="brain">Brain Cancer</option>
                <option value="blood">Blood Cancer</option>
            </select>
        </div>

        <!-- Cancer Details Card -->
        <div class="cardd bg-white/70 shadow-lg p-6 rounded-lg border border-gray-200 hidden" id="card-details">
            <h3 id="cancerName" class="text-2xl font-semibold text-gray-800 text-center mb-4"></h3>
            <div class="flex items-center">
                <img id="cancerImage" src="./unknown.jpg" alt="Cancer Image" class="w-40 h-40 rounded-lg mr-6 mb-[10px]">
                <div class="flex-1">
                    <p id="cancerDescription" class="text-gray-700 text-sm mb-3 font-semibold"></p>
                    <hr class="border-gray-300 my-3">
                    <p id="cancerSymptoms" class="text-gray-700 text-sm font-semibold"></p>
                    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">
                        <a href="./patient_card.php">Cases Details</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center py-6 bg-gray-100 mt-[300px] text-gray-700 text-sm md:text-base" id="main-footer">
        © 2025 OncoLogix | Uniting Against Cancers
    </footer>
    <script>
        const cancerData = {
            lung: {
                image: "./assets/img/lu.jpg",
                name: "Lung Cancer",
                description: "Lung cancer is the uncontrolled growth of abnormal cells in one or both lungs.",
                symptoms: "Persistent cough, chest pain, shortness of breath, weight loss."
            },
            kidney: {
                image: "./assets/img/k.jpg",
                name: "Kidney Cancer",
                description: "Kidney cancer starts in the kidneys, which filter blood and remove waste from the body.",
                symptoms: "Blood in urine, lower back pain, loss of appetite, fever."
            },
            stomach: {
                image: "./assets/img/s.jpg",
                name: "Stomach Cancer",
                description: "Stomach cancer develops in the lining of the stomach and can spread to other organs.",
                symptoms: "Abdominal pain, bloating, nausea, loss of appetite."
            },
            brain: {
                image: "./assets/img/b.jpg",
                name: "Brain Cancer",
                description: "Brain tumors are abnormal growths of cells in the brain that can be benign or malignant.",
                symptoms: "Headaches, vision problems, memory loss, difficulty balancing."
            },
            blood: {
                image: "./assets/img/bl.jpg",
                name: "Blood Cancer",
                description: "Blood cancer affects blood-forming tissues, including bone marrow and lymphatic system.",
                symptoms: "Frequent infections, bruising, night sweats, fatigue."
            }
        };

        document.getElementById('cancerType').addEventListener('change', function() {
            const selected = this.value;
            const card = document.getElementById('card-details');
            // const footer = document.querySelector("footer");

            if (selected === 'sel') {
                card.classList.add("hidden"); // Hide when "Select" is chosen
            } else {
                card.classList.remove("hidden"); // Show the card
                document.getElementById('cancerImage').src = cancerData[selected].image;
                document.getElementById('cancerName').textContent = cancerData[selected].name;
                document.getElementById('cancerDescription').textContent = "Description: " + cancerData[selected].description;
                document.getElementById('cancerSymptoms').textContent = "Symptoms: " + cancerData[selected].symptoms;
                // footer.style.marginTop="50px";
                // footer.style.padding="20px";
            }
        });
    </script>


</body>

</html>
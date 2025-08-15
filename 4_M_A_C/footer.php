<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-100 mt-10 text-gray-700 text-sm md:text-base" id="main-footer">
        © 2025 OncoLogix | Uniting Against Cancers
    </footer>
    <button id="scrollTopBtn" 
    class="hidden fixed bottom-6 right-6 bg-blue-700 hover:bg-blue-800 text-white p-3 rounded-full shadow-lg transition duration-300">
    ↑
</button>
<script>
    // Show button when scrolling
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollTopBtn.classList.remove("hidden");
        } else {
            scrollTopBtn.classList.add("hidden");
        }
    });

    // Scroll to top smoothly
    scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
</body>

</html>
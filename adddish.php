<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish - Chef Cousin Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .slide-right {
            animation: slideInRight 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-black text-white font-sans">

    <!-- Header Section -->
    <header class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-yellow-500 slide-left">Add a New Dish</h1>
        </div>
    </header>
    <div class="text-center mb-3 mt-[1rem]">
            <a href="menu.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
                Back to Main Page
            </a>
    <!-- Form Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6 text-center text-yellow-500 slide-left">Enter Dish Details</h2>
            <div class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg shadow-lg slide-right">
                <form action="addDishProcess.php" method="POST" class="space-y-6">
                    <div>
                        <label for="dish-name" class="block text-lg font-medium text-white">Dish Name</label>
                        <input type="text" id="dish-name" name="dish_name" class="w-full mt-2 p-3 rounded-lg bg-gray-700 text-white border border-gray-600" required>
                    </div>

                    <div>
                        <label for="dish-description" class="block text-lg font-medium text-white">Dish Description</label>
                        <textarea id="dish-description" name="dish_description" rows="4" class="w-full mt-2 p-3 rounded-lg bg-gray-700 text-white border border-gray-600" required></textarea>
                    </div>

                    <div>
                        <label for="dish-image" class="block text-lg font-medium text-white">Dish Image (URL)</label>
                        <input type="url" id="dish-image" name="dish_image" class="w-full mt-2 p-3 rounded-lg bg-gray-700 text-white border border-gray-600" required>
                    </div>

                    <div class="flex justify-center mt-6">
                        <button type="submit" name="submit" class="bg-yellow-500 text-black px-8 py-3 rounded-lg hover:bg-yellow-400 transition slide-left">Add Dish</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Chef Cousin Restaurant. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

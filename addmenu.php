<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animation for the form sliding in from the right */
        @keyframes slideInFromRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .form-container {
            animation: slideInFromRight 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-black font-sans text-gray-900">

    <!-- Header Section -->
    <header class="bg-black text-white py-6 shadow-lg">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-yellow-500">Add a New Menu Item</h1>
            <p class="mt-2 text-lg text-yellow-500">Add delicious new dishes to your restaurant menu</p>
        </div>
    </header>
    <div class="text-center mb-3 mt-[1rem]">
        <a href="menu.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
            Back to Main Page
        </a>
    </div>

    <!-- Form Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <!-- Smaller form width (max-w-md for a narrower form) -->
            <form action="add_menu_action.php" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto form-container">
                <h2 class="text-2xl font-semibold mb-6 text-center text-yellow-500">Menu Items</h2>

                <!-- Menu Title -->
                <div class="mb-4">
                    <label for="titre_menu" class="block text-lg font-medium text-black">Menu Title</label>
                    <input type="text" id="titre_menu" name="titre_menu" required class="mt-2 p-3 w-full rounded-lg border-2 border-gray-300 focus:outline-none ">
                </div>

                <!-- Menu Description -->
                <div class="mb-4">
                    <label for="menu_description" class="block text-lg font-medium text-black">Menu Description</label>
                    <textarea id="menu_description" name="menu_description" required rows="3" class="mt-2 p-3 w-full rounded-lg border-2 border-gray-300 focus:outline-none "></textarea>
                </div>

                <!-- Dish 1 -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-teal-600 mb-4 text-yellow-500">Dish 1</h3>
                    <div class="mb-4">
                        <label for="dish_name_1" class="block text-lg font-medium text-black">Dish Name</label>
                        <input type="text" id="dish_name_1" name="dish_name" required class="mt-2 p-3 w-full rounded-lg border-2 border-gray-300 focus:outline-none ">
                    </div>
                    <div class="mb-4">
                        <label for="dish_description_1" class="block text-lg font-medium text-black">Dish Description</label>
                        <textarea id="dish_description_1" name="dish_description" required rows="3" class="mt-2 p-3 w-full rounded-lg border-2 border-gray-300 focus:outline-none "></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="dish1-image" class="block text-lg font-medium text-black">Dish Image (text)</label>
                        <input type="text" id="dish1-image" name="dish_image" class="mt-2 p-3 w-full rounded-lg border-2 border-gray-300 focus:outline-none ">
                    </div>
                </div>


                <!-- Submit Button -->
                <div class="mt-4 text-center">
        <button type="submit" name="submit" class="bg-yellow-500 text-white py-3 px-8 rounded-lg hover:bg-teal-700 transition duration-300 text-xl">
            Submit Menu
        </button>
    </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-black text-white py-4 text-center">
        <p>&copy; 2024 Chef Cousin. All rights reserved.</p>
    </footer>

</body>
</html>

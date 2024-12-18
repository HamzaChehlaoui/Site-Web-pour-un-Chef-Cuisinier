<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black font-sans text-gray-900">

    <!-- Header Section -->
    <header class="bg-balck text-white py-6 shadow-lg">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-yellow-500">Add a New Menu Item</h1>
            <p class="mt-2 text-lg text-yellow-500">Add delicious new dishes to your restaurant menu</p>
        </div>
    </header>

    <!-- Form Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <form action="add_menu_action.php" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-xl max-w-3xl mx-auto">
                <h2 class="text-3xl font-semibold mb-8 text-center">Menu Items</h2>

                <!-- Dish 1 -->
                <div class="mb-8">
                    <h3 class="text-xl font-medium text-teal-600 mb-4 text-yellow-500">Dish 1</h3>

                    <!-- Dish Name -->
                    <div class="mb-4">
                        <label for="dish_name_1" class="block text-lg font-medium ">Dish Name</label>
                        <input type="text" id="dish_name_1" name="dish_name_1" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <!-- Dish Description -->
                    <div class="mb-4">
                        <label for="dish_description_1" class="block text-lg font-medium">Dish Description</label>
                        <textarea id="dish_description_1" name="dish_description_1" required rows="5" class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                    </div>

                    <!-- Dish Price -->
                    <div class="mb-4">
                        <label for="dish_price_1" class="block text-lg font-medium">Dish Price (USD)</label>
                        <input type="number" id="dish_price_1" name="dish_price_1" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500" step="0.01">
                    </div>

                    <!-- Dish Image -->
                    <div class="mb-4">
                        <label for="dish_image_1" class="block text-lg font-medium">Dish Image</label>
                        <input type="file" id="dish_image_1" name="dish_image_1" accept="image/*" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>
                </div>

                <!-- Dish 2 (you can duplicate this block for additional dishes) -->
                <div class="mb-8">
                    <h3 class="text-xl font-medium text-teal-600 mb-4 text-yellow-500">Dish 2</h3>

                    <!-- Dish Name -->
                    <div class="mb-4">
                        <label for="dish_name_2" class="block text-lg font-medium">Dish Name</label>
                        <input type="text" id="dish_name_2" name="dish_name_2" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <!-- Dish Description -->
                    <div class="mb-4">
                        <label for="dish_description_2" class="block text-lg font-medium">Dish Description</label>
                        <textarea id="dish_description_2" name="dish_description_2" required rows="5" class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                    </div>

                    <!-- Dish Price -->
                    <div class="mb-4">
                        <label for="dish_price_2" class="block text-lg font-medium">Dish Price (USD)</label>
                        <input type="number" id="dish_price_2" name="dish_price_2" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500" step="0.01">
                    </div>

                    <!-- Dish Image -->
                    <div class="mb-4">
                        <label for="dish_image_2" class="block text-lg font-medium">Dish Image</label>
                        <input type="file" id="dish_image_2" name="dish_image_2" accept="image/*" required class="mt-2 p-4 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-yellow-500 text-white py-3 px-10 rounded-lg hover:bg-teal-700 transition duration-300 text-xl ">Submit Menu</button>
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

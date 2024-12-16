<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Culinary Creations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        a:active {
            color: #f97316; 
            transform: scale(0.98);
            transition: all 0.1s ease-out;
        }

        /* Active Button Style */
        button:active {
            background-color: #f97316;
            transform: translateY(2px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header-background {
            background-image: url('your-image-url.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-black text-white">

<header class="bg-black text-white py-20 text-center fade-in header-background">
    <div class="bg-black bg-opacity-50 py-20">
        <h1 class="text-4xl font-bold text-yellow-500">Chef's Culinary Creations</h1>
        <p class="mt-4 text-lg text-gray-400">A Journey Through Exceptional Cooking</p>
        
        <div class="mt-8">
            <a href="login.php"><button class="bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold mr-4 transition-transform transform hover:scale-105 hover:shadow-lg">Login</button></a>
            <a href="create.php"><button class="bg-gray-800 text-white px-6 py-2 rounded-lg font-semibold transition-transform transform hover:scale-105 hover:shadow-lg">Create Account</button></a>
        </div>
    </div>
</header>

<main class="container mx-auto py-16 px-4">
    <!-- Chef's Philosophy Section -->
    <section class="text-center mb-16 fade-in">
        <h2 class="text-3xl font-semibold text-yellow-500">A Chef's Philosophy</h2>
        <p class="mt-4 text-lg text-gray-300 max-w-3xl mx-auto">
            Cooking is an art, and each dish tells a unique story. My approach combines creativity with classic techniques to craft unforgettable dining experiences.
        </p>
        <!-- Add image for Chef's Philosophy -->
        <img src="Haydn-Shaak-2.jpg" alt="Chef's Philosophy" class="mt-8 mx-auto rounded-lg shadow-md max-w-full h-auto">
    </section>

    <!-- Signature Dishes Section -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-16">
        <div class="bg-gray-800 p-6 rounded-lg shadow-md fade-in">
            <h3 class="text-xl font-semibold text-yellow-500">Signature Dishes</h3>
            <ul class="list-disc list-inside mt-4 text-lg text-gray-300">
                <li>Gourmet Risotto</li>
                <li>Seared Ahi Tuna</li>
                <li>Herb-Crusted Lamb</li>
                <li>Truffle Mac and Cheese</li>
                <li>Seasonal Tasting Menu</li>
            </ul>
        </div>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md fade-in">
            <h3 class="text-xl font-semibold text-yellow-500">Premium Ingredients</h3>
            <p class="mt-4 text-lg text-gray-300">
                Only the finest ingredients make it into my kitchen. From locally-sourced produce to imported delicacies, I ensure every dish meets the highest standards.
            </p>
            <!-- Add image for Premium Ingredients -->
            <img src="set-food-ingredients-cooking_1029473-617100.avif" alt="Premium Ingredients" class="mt-8 rounded-lg shadow-md max-w-full h-auto">
        </div>
    </section>

    <!-- Culinary Techniques Section -->
    <section class="fade-in mt-16">
        <h2 class="text-3xl font-semibold text-yellow-500 text-center">Culinary Techniques</h2>
        <div class="flex justify-center mt-8 space-x-8">
            <div class="bg-gray-700 p-6 rounded-lg text-center w-1/3">
                <h3 class="text-lg font-semibold text-yellow-500">Sous-Vide Cooking</h3>
                <p class="mt-4 text-lg text-gray-300">
                    Precision cooking using sous-vide methods creates perfectly tender and flavorful meats, every time.
                </p>
                <!-- Add image for Sous-Vide Cooking -->
                <img src="istockphoto-1423530431-612x612.jpg" alt="Sous-Vide Cooking" class="mt-8 mx-auto rounded-lg shadow-md max-w-full h-auto">
            </div>
            <div class="bg-gray-700 p-6 rounded-lg text-center w-1/3">
                <h3 class="text-lg font-semibold text-yellow-500">Flame Grilling</h3>
                <p class="mt-4 text-lg text-gray-300">
                    Bringing out the best flavors in meats and vegetables, flame grilling adds depth and smoky notes to every dish.
                </p>
                <!-- Add image for Flame Grilling -->
                <img src="istockphoto-531464366-612x612.jpg" alt="Flame Grilling" class="mt-8 mx-auto rounded-lg shadow-md max-w-full h-auto">
            </div>
            <div class="bg-gray-700 p-6 rounded-lg text-center w-1/3">
                <h3 class="text-lg font-semibold text-yellow-500">Fine Plating</h3>
                <p class="mt-4 text-lg text-gray-300">
                    Presentation is as important as taste. I focus on creating visually stunning plates that enhance the dining experience.
                </p>
                <!-- Add image for Fine Plating -->
                <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Fine Plating" class="mt-8 mx-auto rounded-lg shadow-md max-w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Chef's Meal Experience Section -->
    <section class="fade-in mt-16">
        <h2 class="text-3xl font-semibold text-yellow-500 text-center">The Chef's Meal Experience</h2>
        <p class="mt-4 text-lg text-center text-gray-300">
            Every meal should feel like an event. Whether it's an intimate dinner or a grand banquet, I curate experiences that exceed expectations.
        </p>
        <!-- Add image for Chef's Meal Experience -->
        <img src="chef-restaurant-kitchen-cooks-food-stove_14117-894608.avif" alt="Chef's Meal Experience" class="mt-8 mx-auto rounded-lg shadow-md max-w-full h-auto">
    </section>
</main>

<footer class="bg-black text-white text-center py-6">
    <p class="text-sm">© 2024 Chef's Culinary Creations. All rights reserved.</p>
</footer>

</body>
</html>

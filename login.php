<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chef's Culinary Creations</title>
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

        /* Background Image for the header */
        .header-background {
            background-image: url('your-image-url.jpg'); /* Replace with your own image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-black text-white">

<header class="bg-black text-white py-20 text-center fade-in header-background">
    <div class="bg-black bg-opacity-50 py-20"> <!-- Optional overlay to darken the background -->
        <h1 class="text-4xl font-bold text-yellow-500">Chef's Culinary Creations</h1>
        <p class="mt-4 text-lg text-gray-400">Login to your account</p>
    </div>
</header>
        
<main class="container mx-auto py-16 px-4">
<div class="text-center mb-8">
        <a href="index.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
            Back to Main Page
        </a>
    </div>
    <!-- Login Form Section -->
    <section class="max-w-md mx-auto bg-gray-800 p-8 rounded-lg shadow-md fade-in">
        <h2 class="text-2xl font-semibold text-yellow-500 text-center mb-6">Login</h2>

        <!-- Login Form -->
        <form action="#" method="POST">
            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-lg text-gray-300">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email" class="w-full bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-lg text-gray-300">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" class="w-full bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold transition-transform transform hover:scale-105 hover:shadow-lg">
                Login
            </button>
        </form>

        <!-- Link to Create Account -->
        <p class="mt-6 text-center text-gray-400">
            Don't have an account? 
            <a href="create.php" class="text-yellow-500 hover:underline">Create one here</a>
        </p>
    </section>
</main>

<footer class="bg-black text-white text-center py-6">
    <p class="text-sm">© 2024 Chef's Culinary Creations. All rights reserved.</p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Chef's Culinary Creations</title>
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
        <p class="mt-4 text-lg text-gray-400">Create your account to join our culinary journey</p>
    </div>
</header>

<main class="container mx-auto py-16 px-4">
<div class="text-center mb-8">
        <a href="index.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
            Back to Main Page
        </a>
    </div>
    <!-- Account Creation Form Section -->
    <section class="max-w-md mx-auto bg-gray-800 p-8 rounded-lg shadow-md fade-in">
        <h2 class="text-2xl font-semibold text-yellow-500 text-center mb-6">Create Account</h2>

        <!-- Account Creation Form -->
        <form action="creat_co.php" method="POST">
            <!-- Full Name Field -->
            <div class="mb-6">
                <label for="full-name" class="block text-lg text-gray-300">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Your full name" class="w-full bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

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

            <!-- Confirm Password Field -->
            <div class="mb-6">
                <label for="confirm-password" class="block text-lg text-gray-300">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" class="w-full bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Submit Button -->
            <button type="submit" name="submit" class="w-full bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold transition-transform transform hover:scale-105 hover:shadow-lg">
                Create Account
            </button>
        </form>

        <!-- Link to Login Page -->
        <p class="mt-6 text-center text-gray-400">
            Already have an account? 
            <a href="login.php" class="text-yellow-500 hover:underline">Login here</a>
        </p>
    </section>
</main>

<footer class="bg-black text-white text-center py-6">
    <p class="text-sm">© 2024 Chef's Culinary Creations. All rights reserved.</p>
</footer>

</body>
</html>

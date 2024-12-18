<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

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

        .slide-in-left {
            animation: slideInFromLeft 0.6s ease-out;
        }

        .slide-in-right {
            animation: slideInFromRight 0.6s ease-out;
        }
    </style>
</head>

<body class="bg-black text-white font-sans">

    <!-- Header -->
    <header class="text-black py-4 text-center">
        <h1 class="text-2xl font-bold text-yellow-500">Reservation Management</h1>
    </header>
    <div class="text-center mb-8">
        <a href="menu.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
            Back to Main Page
        </a>
    </div>
    <!-- Main Content -->
    <main class="container mx-auto my-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-black mb-4">Reservation Requests</h2>

            <!-- Reservation Request List -->
            <div class="space-y-4">
                <!-- Reservation 1 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg slide-in-left">
                    <div>
                        <h3 class="font-semibold text-black">Client: Pierre Dupont</h3>
                        <p class="text-sm text-gray-700">Reservation Date: December 20, 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accept
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Reject
                        </button>
                    </div>
                </div>

                <!-- Reservation 2 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg slide-in-right">
                    <div>
                        <h3 class="font-semibold text-black">Client: Marie Leclerc</h3>
                        <p class="text-sm text-gray-700">Reservation Date: December 21, 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accept
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Reject
                        </button>
                    </div>
                </div>

                <!-- Reservation 3 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg slide-in-left">
                    <div>
                        <h3 class="font-semibold text-black">Client: Thomas Renault</h3>
                        <p class="text-sm text-gray-700">Reservation Date: December 22, 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accept
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Reject
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Chef Cousin Restaurant. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management - Statistics</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animation for side slide-in */
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

        .slide-in {
            animation: slideInFromLeft 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="py-4 text-center bg-black text-white">
        <h1 class="text-3xl font-bold text-yellow-500">Detailed Statistics For The Chef</h1>
        <div class="text-center mb-3 mt-[1rem]">
            <a href="menu.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
                Back to Main Page
            </a>
        </div>
    </header>
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto my-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-6 slide-in">

            <!-- Card Header -->
            <div class="text-2xl font-semibold mb-6 text-gray-900">
                Chef's Statistics
            </div>

            <!-- Stats List -->
            <div class="space-y-4">

                <!-- Pending Requests -->
                <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg border border-gray-200">
                    <span class="text-gray-900">Pending Requests</span>
                    <span class="text-gray-600 font-semibold text-lg">5</span>
                </div>

                <!-- Approved Today -->
                <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg border border-gray-200">
                    <span class="text-gray-900">Requests Approved Today</span>
                    <span class="text-gray-600 font-semibold text-lg">3</span>
                </div>

                <!-- Approved Tomorrow -->
                <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg border border-gray-200">
                    <span class="text-gray-900">Requests Approved for Tomorrow</span>
                    <span class="text-gray-600 font-semibold text-lg">2</span>
                </div>

                <!-- Next Client Details -->
                <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg border border-gray-200">
                    <span class="text-gray-900">Next Client</span>
                    <span class="text-gray-600 font-semibold">Pierre Dupont (December 20, 2024)</span>
                </div>

                <!-- Registered Clients -->
                <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg border border-gray-200">
                    <span class="text-gray-900">Number of Registered Clients</span>
                    <span class="text-gray-600 font-semibold text-lg">150</span>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="text-center">
            <p>&copy; 2024 Chef Cousin Restaurant. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>

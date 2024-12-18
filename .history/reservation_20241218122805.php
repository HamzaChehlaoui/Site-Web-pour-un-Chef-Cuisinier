<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réservations</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white font-sans">

    <!-- Header -->
    <header class="bg-yellow-500 text-black py-4 text-center">
        <h1 class="text-2xl font-bold text-[ ">Gestion des Réservations</h1>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-8 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold text-black mb-4">Demandes de Réservation</h2>

            <!-- Reservation Request List -->
            <div class="space-y-4">
                <!-- Reservation 1 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                    <div>
                        <h3 class="font-semibold text-black">Client : Pierre Dupont</h3>
                        <p class="text-sm text-gray-700">Date de réservation : 20 Décembre 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accepter
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Refuser
                        </button>
                    </div>
                </div>

                <!-- Reservation 2 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                    <div>
                        <h3 class="font-semibold text-black">Client : Marie Leclerc</h3>
                        <p class="text-sm text-gray-700">Date de réservation : 21 Décembre 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accepter
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Refuser
                        </button>
                    </div>
                </div>

                <!-- Reservation 3 -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg">
                    <div>
                        <h3 class="font-semibold text-black">Client : Thomas Renault</h3>
                        <p class="text-sm text-gray-700">Date de réservation : 22 Décembre 2024</p>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none">
                            Accepter
                        </button>
                        <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none">
                            Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

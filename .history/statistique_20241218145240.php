<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réservations - Statistiques</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="py-4 text-center bg-yellow-500 text-white">
        <h1 class="text-3xl font-bold">Statistiques Détaillées Pour Le Chef</h1>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto my-8 px-4">
        <div class="bg-white shadow-lg rounded-lg p-6">

            <!-- Card Header -->
            <div class="text-2xl font-semibold mb-6 text-gray-900">
                Statistiques du Chef
            </div>

            <!-- Stats List -->
            <div class="space-y-6">

                <!-- Pending Requests -->
                <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border border-gray-200 hover:bg-yellow-100 transition">
                    <span class="text-gray-900">Demandes en attente</span>
                    <span class="text-yellow-600 font-semibold text-lg">5</span>
                </div>

                <!-- Approved Today -->
                <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border border-gray-200 hover:bg-yellow-100 transition">
                    <span class="text-gray-900">Demandes approuvées aujourd'hui</span>
                    <span class="text-yellow-600 font-semibold text-lg">3</span>
                </div>

                <!-- Approved Tomorrow -->
                <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border border-gray-200 hover:bg-yellow-100 transition">
                    <span class="text-gray-900">Demandes approuvées pour demain</span>
                    <span class="text-yellow-600 font-semibold text-lg">2</span>
                </div>

                <!-- Next Client Details -->
                <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border border-gray-200 hover:bg-yellow-100 transition">
                    <span class="text-gray-900">Prochain client</span>
                    <span class="text-yellow-600 font-semibold">Pierre Dupont (20 Décembre 2024)</span>
                </div>

                <!-- Registered Clients -->
                <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border border-gray-200 hover:bg-yellow-100 transition">
                    <span class="text-gray-900">Nombre de clients inscrits</span>
                    <span class="text-yellow-600 font-semibold text-lg">150</span>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-yellow-500 text-white py-4">
        <div class="text-center">
            <p>&copy; 2024 Chef Cousin Restaurant. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
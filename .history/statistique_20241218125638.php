<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Réservations - Statistiques</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Slide-in animation */
        @keyframes slideIn {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Apply the animation to the cards */
        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-black text-white font-sans">

    <!-- Header -->
    <header class=" text-black py-4 text-center shadow-md">
        <h1 class="text-3xl font-extrabold tracking-wide text-yellow-500">Statisti</h1>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-8">

            <!-- Statistics Box -->
            <div class="bg-white shadow-lg rounded-lg p-6 slide-in">
                <h2 class="text-2xl font-semibold text-black mb-6">Statistiques du Chef</h2>
                <div class="space-y-6">

                    <!-- Pending Requests -->
                    <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border-2 border-gray-200 hover:bg-yellow-50 transition">
                        <span class="text-black font-medium">Demandes en attente</span>
                        <span class="text-yellow-600 font-semibold text-lg">5</span>
                    </div>

                    <!-- Approved Today -->
                    <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border-2 border-gray-200 hover:bg-yellow-50 transition">
                        <span class="text-black font-medium">Demandes approuvées aujourd'hui</span>
                        <span class="text-yellow-600 font-semibold text-lg">3</span>
                    </div>

                    <!-- Approved Tomorrow -->
                    <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border-2 border-gray-200 hover:bg-yellow-50 transition">
                        <span class="text-black font-medium">Demandes approuvées pour demain</span>
                        <span class="text-yellow-600 font-semibold text-lg">2</span>
                    </div>

                    <!-- Next Client Details -->
                    <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border-2 border-gray-200 hover:bg-yellow-50 transition">
                        <span class="text-black font-medium">Prochain client</span>
                        <span class="text-yellow-600 font-semibold">Pierre Dupont (20 Décembre 2024)</span>
                    </div>

                    <!-- Registered Clients -->
                    <div class="flex justify-between items-center bg-gray-50 p-5 rounded-lg border-2 border-gray-200 hover:bg-yellow-50 transition">
                        <span class="text-black font-medium">Nombre de clients inscrits</span>
                        <span class="text-yellow-600 font-semibold text-lg">150</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>

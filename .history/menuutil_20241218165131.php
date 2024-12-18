<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation d'Expérience Culinaire</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-semibold">Réservation Culinaire</h1>
            <nav class="space-x-6">
                <a href="#menus" class="hover:text-gray-300">Menus</a>
                <a href="#reservations" class="hover:text-gray-300">Réservations</a>
            </nav>
        </div>
    </header>

    <!-- Menu Section -->
    <section id="menus" class="py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-yellow-500">Choisissez votre Menu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Menu 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Menu Dégustation</h3>
                    <p class="text-gray-600 mb-4">Un menu 5 plats qui éveille vos sens.</p>
                    <p class="text-gray-800 font-semibold">Prix: 50€ par personne</p>
                    <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Réserver</button>
                </div>
                <!-- Menu 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Menu Vegan</h3>
                    <p class="text-gray-600 mb-4">Savourez des plats végétariens délicieux.</p>
                    <p class="text-gray-800 font-semibold">Prix: 40€ par personne</p>
                    <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Réserver</button>
                </div>
                <!-- Menu 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Menu Italien</h3>
                    <p class="text-gray-600 mb-4">Pasta, pizza, et autres délices italiens.</p>
                    <p class="text-gray-800 font-semibold">Prix: 45€ par personne</p>
                    <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Réserver</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservations" class="py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Gérer vos Réservations</h2>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Réservation à venir</h3>
                <p class="text-gray-600 mb-4">Date: 25 Décembre 2024</p>
                <p class="text-gray-600 mb-4">Menu: Menu Dégustation</p>
                <p class="text-gray-600 mb-4">Nombre de personnes: 2</p>
                <button class="mt-4 px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Modifier</button>
                <button class="mt-4 px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Annuler</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4">
        <p>&copy; 2024 Réservation Culinaire. Tous droits réservés.</p>
    </footer>

</body>
</html>

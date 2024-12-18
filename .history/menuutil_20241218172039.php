<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation d'Expérience Culinaire</title>
    <script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-black font-sans">

    <!-- Navbar -->
    <header class="bg-black text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-[1.5rem] font-semibold">Réservation Culinaire</h1>
            <nav class="space-x-6">
                <a href="#menus" class="hover:text-gray-300 text-[1.5rem]">Menus</a>
                <a href="#reservations" class="hover:text-gray-300">Réservations</a>
            </nav>
        </div>
    </header>
    <div class="text-center mb-8">
        <a href="index.php" class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-lg font-semibold hover:scale-105 hover:shadow-lg transition-transform">
            Sign Out
        </a>
    </div>
    <!-- Menu Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6 text-center text-yellow-500">Menu 1</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dish 1 -->
                <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                </svg>
                  
                    </div>
                </div>
                <!-- Dish 2 -->
                <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 2" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Lentil Soup</h3>
                    <p class="text-gray-800 mt-2">A nutritious soup rich in protein.</p>
                    <p class="mt-2 font-bold text-black">Price: 15 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                     
                    </div>
                </div>
                <!-- Dish 3 -->
                <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 3" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Falafel Sandwich</h3>
                    <p class="text-gray-800 mt-2">Fresh falafel with various sauces.</p>
                    <p class="mt-2 font-bold text-black">Price: 10 USD</p>
                       <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                        <!-- edit  -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        </svg>
                    </div>
                </div>
                </div>
            </div>
        </div>
         <!-- /* From Uiverse.io by OnCloud125252 */  -->
            
    </section>
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6 text-center text-yellow-500">Menu 2</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Repeat the dishes here with Edit and Delete buttons -->
                <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                        <!-- edit  -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                        </svg>
                   
                    </div>
                </div>
                <!-- Dish 1 -->
                <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                   </div>
                </div>
            <!-- Dish 1 -->
            <div class="bg-[#E0E0E0] p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="zalmbloem-met-roomkaas_hr-4.webp" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 19.5C10 20.3284 9.32843 21 8.5 21C7.67157 21 7 20.3284 7 19.5C7 18.6716 7.67157 18 8.5 18C9.32843 18 10 18.6716 10 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18 19.5C18 20.3284 17.3284 21 16.5 21C15.6716 21 15 20.3284 15 19.5C15 18.6716 15.6716 18 16.5 18C17.3284 18 18 18.6716 18 19.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 15H11C8.17157 15 6.75736 15 5.87868 14.1213C5 13.2426 5 11.8284 5 9V5C5 3.89543 4.10457 3 3 3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M9 7.5C9 6.09554 9 5.39331 9.33706 4.88886C9.48298 4.67048 9.67048 4.48298 9.88886 4.33706C10.3933 4 11.0955 4 12.5 4H16.5C17.9045 4 18.6067 4 19.1111 4.33706C19.3295 4.48298 19.517 4.67048 19.6629 4.88886C20 5.39331 20 6.09554 20 7.5C20 8.90446 20 9.60669 19.6629 10.1111C19.517 10.3295 19.3295 10.517 19.1111 10.6629C18.6067 11 17.9045 11 16.5 11H12.5C11.0955 11 10.3933 11 9.88886 10.6629C9.67048 10.517 9.48298 10.3295 9.33706 10.1111C9 9.60669 9 8.90446 9 7.5Z" stroke="black" stroke-width="null" class="my-path"></path>
                    </svg>
                   </div>
                </div>
            </div>
    <!-- Reservation Section -->
    <section id="reservations" class="py-12 bg-black">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-yellow-500">Gérer vos Réservations</h2>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Réservation à venir</h3>
                <p class="text-gray-600 mb-4">Date: 25 Décembre 2024</p>
                <p class="text-gray-600 mb-4">Menu: Menu Dégustation</p>
                <p class="text-gray-600 mb-4">Nombre de personnes: 2</p>
                 <!-- Edit and Delete buttons -->
                 <div class="mt-4 flex justify-center gap-[3rem]">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7734 4.42255L8.01924 12.2706C7.79291 12.4996 7.67974 12.6142 7.60917 12.7552C7.53859 12.8961 7.51521 13.0544 7.46845 13.3709L7.30803 14.4566C7.12534 15.693 7.034 16.3112 7.40145 16.6645C7.7689 17.0178 8.39306 16.9118 9.64137 16.6999L10.7375 16.5139C11.0571 16.4596 11.2168 16.4325 11.3579 16.3593C11.499 16.2861 11.6121 16.1715 11.8385 15.9425L19.5927 8.09446C20.2553 7.42379 20.5866 7.08846 20.5814 6.67712C20.5761 6.26578 20.2363 5.93906 19.5566 5.28563L18.6209 4.38599C17.9412 3.73256 17.6014 3.40584 17.1844 3.4112C16.7674 3.41655 16.4361 3.75188 15.7734 4.42255Z" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M18.3329 9.22206L14.7773 5.6665" stroke="black" stroke-width="null" class="my-path"></path>
                    <path d="M21 21H3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    </svg>
                    <!-- delete  -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 7L5.29949 14.7868C5.41251 17.7252 5.46902 19.1944 6.40719 20.0972C7.34537 21 8.81543 21 11.7555 21H12.2433C15.1842 21 16.6547 21 17.5928 20.0972C18.531 19.1944 18.5875 17.7252 18.7006 14.7868L19 7" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M10 13V16" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M14 13V16" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M20.4706 4.43329C18.6468 4.27371 17.735 4.19392 16.8229 4.13611C13.6109 3.93249 10.3891 3.93249 7.17707 4.13611C6.26506 4.19392 5.35318 4.27371 3.52942 4.43329" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    <path d="M13.7647 3.95212C13.7647 3.95212 13.3993 2.98339 11.6471 2.9834C9.8949 2.9834 9.52942 3.95211 9.52942 3.95211" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                    </svg>  </div>
                </div> </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Chef Cousin Restaurant. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

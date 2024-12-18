<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Cousin Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-right font-sans">
    <!-- Header Section -->
    <header class="bg-black text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Cooking is the language of Chef, blending flavors and creativity</h1>
            <p class="text-xl mt-2"></p>
            <!-- Buttons in the header -->
            <div class="mt-4">
                <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-gray-800 mr-4">Ajoute Menu</button>
                <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-gray-800">Delete Menu</button></a>
               <a href="reservation.php"> <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-gray-800 mr-4">Reservation</button>
                <a href="statistique.php"><button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-gray-800">Statistique</button></a>
            </div>
        </div>
    </header>
    <!-- Menu Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6 text-center text-black">Menu 1</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dish 1 -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
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
                    </svg>
                    </div>
                </div>
                <!-- Dish 2 -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 2" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Lentil Soup</h3>
                    <p class="text-gray-800 mt-2">A nutritious soup rich in protein.</p>
                    <p class="mt-2 font-bold text-black">Price: 15 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
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
                    </svg>       
                    </div>
                </div>
                <!-- Dish 3 -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 3" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Falafel Sandwich</h3>
                    <p class="text-gray-800 mt-2">Fresh falafel with various sauces.</p>
                    <p class="mt-2 font-bold text-black">Price: 10 USD</p>
                       <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
                        <!-- edit  -->
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
                    </svg>
                    </div>
                </div>
                </div>
            </div>
        </div>
         <!-- /* From Uiverse.io by OnCloud125252 */  -->
            
         <div tabindex="0" class="plusButton m-[auto] mt-[10px]">
        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <g mask="url(#mask0_21_345)">
            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
            </g>
        </svg>
</div>
    </section>

    <!-- Menu Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6 text-center text-black">Menu 2</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Repeat the dishes here with Edit and Delete buttons -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
                        <!-- edit  -->
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
                    </svg>
                    </div>
                </div>
                <!-- Dish 1 -->
                <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
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
                </div>
            <!-- Dish 1 -->
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-[#E0E0E0] transition duration-300">
                    <img src="https://via.placeholder.com/150" alt="Dish 1" class="w-full h-40 object-cover rounded-t-lg">
                    <h3 class="text-xl font-semibold mt-4 text-black">Chicken Biryani</h3>
                    <p class="text-gray-800 mt-2">Traditional Indian food with rice and special spices.</p>
                    <p class="mt-2 font-bold text-black">Price: 30 USD</p>
                      <!-- Edit and Delete buttons -->
                    <div class="mt-4 flex justify-between">
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
                </div>
            </div>
            <!-- /* From Uiverse.io by OnCloud125252 */  -->
            
        <div tabindex="0" class="plusButton m-[auto] mt-[10px]">
        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
            <g mask="url(#mask0_21_345)">
            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
            </g>
        </svg>
</div>
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

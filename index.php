<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricardo Industry's - Página Inicial</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/Images/favicon.ico" type="image/x-icon">
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="bg-[url('assets/Images/Background.svg')] bg-repeat">
    <?php include_once "assets/Includes/Sidebar.php" ?>
    <!-- Conteudo -->
    <div class="bg-gray-100 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-2xl mx-auto">
            <!-- NavBar -->
            <?php include_once "assets/Includes/Navbar.php" ?>
        </div>
    </div>

    <div class="px-5 max-w-screen-2xl mx-auto bg-gray-50 dark:bg-gray-800">

        <!-- Image Slider -->


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/_BLXptXYl9sBoUPDx6QovtO1HHryHOCJJmxcuQei5oE=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/-H86GPqh_Koh-_oSvu_8ORSIMZPcEQ53E0EF6VM_Jwk=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/Jc2cbQzJP-c8y6nxPkN3AyRz73HiSDzTcFz8geWDoD0=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/R7qGNi2s_Wodlwv6uS2ipTi81M1MSkc4wfOxxV1j8EI=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/bHCu8vYqBI_OtKW77dOiJiCM6IXtSFM1zoSRqehc8dk=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-700/30 group-hover:bg-white/50 dark:group-hover:bg-gray-700/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-700/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-700 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


        <!-- Destaques -->
        <div class="p-5">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white p-2">Destaques</h1>
            <div class="media-scroller snaps-inline">
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?><?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
            </div>
        </div>

        <!-- Promocoes -->
        <div class="p-5">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white p-2">Promoções</h1>
            <div class="media-scroller snaps-inline">
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
            </div>
        </div>

        <!-- Top Vendas -->
        <div class="p-5">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white p-2">Top Vendas</h1>
            <div class="media-scroller snaps-inline">
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?><?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
                <?php include "assets/Includes/cardProduct.php" ?>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="bg-gray-100 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-2xl mx-auto">
            <?php include_once "assets/includes/footer.php" ?>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</body>
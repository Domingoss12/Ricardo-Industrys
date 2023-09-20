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

</head>

<body class="bg-[url('assets/Images/Background.svg')]">
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
                    <img src="https://eu2.flavedo.io/citrus/Mx9yeMJk79KKbste-RZETU3825e9dcjrgM-furUAhkE=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/rxX7V_xWSf4q7tZ19RsHfWgh95Iz07XCRAnthyWfhpU=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://eu2.flavedo.io/citrus/E3UnOK4qfMIXQkrtD7WplULC1A2-cXMVV7QN37xC2Mo=" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-700/30 group-hover:bg-white/50 dark:group-hover:bg-gray-700/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-700/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Anterior</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-700/30 group-hover:bg-white/50 dark:group-hover:bg-gray-700/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-700/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Seguinte</span>
                </span>
            </button>
        </div>

        <div class="bg-gray-50 dark:bg-gray-700">
            <h1 class="text-4xl font-medium text-gray-900 dark:text-white">Destaques</h1>


            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-full overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="grid grid-cols-4 space-x-1 p-2">

                            <?php include "assets/Includes/card.php" ?>
                            <?php include "assets/Includes/card.php" ?>
                            <?php include "assets/Includes/card.php" ?>
                            <?php include "assets/Includes/card.php" ?>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>


        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html><?php include "assets/Includes/card.php" ?>
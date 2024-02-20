<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricardo Industry's - Produtos</title>
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
        <!-- Breadcrumb -->
        <div class="flex px-5 py-4 p-3 text-gray-700 border  border-gray-200 rounded-lg bg-gray-100 dark:bg-gray-900 dark:border-gray-800" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Página Inicial
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Placas Gráficas</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Gráficas NVIDIA</span>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-4 md:grid md:grid-cols-7 md:space-x-12">
            <div class="bg-gray-100 dark:bg-gray-900 rounded-lg col-span-2 hidden md:block">
                <!-- Filters -->
                <h1 class="text-2xl font-semibold px-5 py-1 text-gray-900 dark:text-white">Filtros</h1>
                <div class="space-y-2.5">
                    <!-- Stock -->
                    <div>
                        <h2 class="text-xl font-normal px-5 py-1 text-gray-900 dark:text-white ">Stock</h2>
                        <hr class="h-px my-1 mx-5 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex items-center my-2 mx-5">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Em Stock</label>
                        </div>
                        <div class="flex items-center my-2 mx-5">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sem Stock</label>
                        </div>
                    </div>
                    <!-- Price -->
                    <div>
                        <h2 class="text-xl font-normal px-5 py-1 text-gray-900 dark:text-white ">Preço</h2>
                        <hr class="h-px my-1 mx-5 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="grid grid-cols-2 space-x-2 p-1 my-2 mx-5">
                            <form class="max-w-sm mx-auto">
                                <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimo</label>
                                <input type="number" min="0" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="00,00€" required>
                            </form>
                            <form class="max-w-sm mx-auto">
                                <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Máximo</label>
                                <input type="number" min="0" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1000,00€" required>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-gray-100 dark:bg-gray-900 rounded-lg md:col-span-5 p-2">
                <!-- Content -->
                <div md:hidden>

                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 space-x-2">
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                    <?php include "assets/Includes/cardProduct.php" ?>
                </div>
                <!-- Pagination -->
                <div class="flex flex-col items-center">
                    <!-- Help text -->
                    <span class="text-sm text-gray-700 dark:text-gray-400">
                        A mostrar <span class="font-semibold text-gray-900 dark:text-white">1</span> até <span class="font-semibold text-gray-900 dark:text-white">10</span> de <span class="font-semibold text-gray-900 dark:text-white">100</span> Produtos
                    </span>
                    <div class="inline-flex mt-2 xs:mt-0">
                        <!-- Buttons -->
                        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Prev
                        </button>
                        <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Next
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>

</html>
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

    <div class="p-5 max-w-screen-2xl mx-auto h-screen bg-gray-50 dark:bg-gray-800">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Carrinho de compras</h1>

        <!-- Table Start -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-16 py-3">
                            <span class="sr-only">Imagem</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nome do produto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Qtd
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preço
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Remover
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="p-4">
                            <img src="https://static.pcdiga.com/media/catalog/product/cache/4a9972e1440204cef7cf19ceb7c4fc35/s/2/s23_black_composta.jpg" class="w-16 md:w-24 max-w-full max-h-24" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            Smartphone Samsung Galaxy S23 5G 6.1" 8GB/128GB Dual SIM Preto
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <button class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <div>
                                    <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                                </div>
                                <button class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            899€
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remover</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- Table End -->
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

</html>
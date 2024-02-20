<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessão | Ricardo Industry's</title>
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
    <div class="hidden md:flex items-center justify-center h-screen">
        <div class="w-2/6 h-3/5 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-2xl">
            <div class="flex items-center">
                <a href="index.php" class="flex items-center mx-auto m-4">
                    <img src="assets/Images/Icon.png" class="mr-3 h-6 sm:h-9" />
                    <span class="self-center md:text-2xl font-bold whitespace-nowrap dark:text-white">Ricardo Industry's</span>
                </a>
            </div>
            <div class="h-3/4 flex items-center justify-center">
                <form class="w-4/5">
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="email@exemplo.pt" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Palavra-passe</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-cyan-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-cyan-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recordar</label>
                    </div>
                    <div class="w-full">
                        <p class="text-gray-500 dark:text-gray-400 text-center">Não tens uma conta? Clica <a href="criarConta.php" class="font-medium text-cyan-600 underline dark:text-cyan-500 hover:no-underline">aqui</a> para criares uma conta!</p>
                    </div>
                    <div class="w-full flex items-center justify-center my-4">
                        <button type="submit" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm w-15 sm:w-auto px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Iniciar Sessão</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include "assets/class/reCaptchaVerification.class.php";
include "assets/class/variablesPublic.class.php";


if ($_POST) {

    echo reCAPTCHA_Validation($_POST['g-recaptcha-response']);

    return;
}
?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta | Ricardo Industry's</title>
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
        <div class="w-2/6 pb-10 pt-2 bg-gray-100 dark:bg-gray-800 rounded-xl shadow-2xl">
            <div class="flex items-center">
                <a href="index.php" class="flex items-center mx-auto m-4">
                    <img src="assets/Images/Icon.png" class="mr-3 h-6 sm:h-9" />
                    <span class="self-center md:text-3xl font-black whitespace-nowrap dark:text-white">Ricardo Industry's</span>
                </a>
            </div>
            <div class="h-3/4 flex items-center justify-center">
                <form class="w-4/5">
                    <div class="my-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="email@exemplo.pt" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Palavra-passe</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="••••••••" required>
                    </div>
                    <div class="mb-3">
                        <label for="reapeatPassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar palavra-passe</label>
                        <input type="password" id="reapeatPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="••••••••" required>
                    </div>
                    <div class="flex justify-center	itens-center mb-5">
                        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                    </div>
                    <div class="w-full">
                        <p class="text-gray-500 dark:text-gray-400 text-center">Já tens uma conta? Clica <a href="login.php" class="font-medium text-cyan-600 underline dark:text-cyan-500 hover:no-underline">aqui</a> para iniciares sessão na tua conta!</p>
                    </div>
                    <div class="w-full flex items-center justify-center my-4">
                        <button type="submit" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm w-15 sm:w-auto px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Criar conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
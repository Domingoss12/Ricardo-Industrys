<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricardo Industry's - Produto</title>
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

    <div class="p-5 max-w-screen-2xl mx-auto bg-gray-50 dark:bg-gray-800">

        <!-- Breadcrumb -->
        <div class="flex px-5 py-3 p-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-100 dark:bg-gray-900 dark:border-gray-800" aria-label="Breadcrumb">
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

        <div class="grid grid-cols-5 my-2 space-x-3">

            <div class="grid gap-4 col-span-3 p-3 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-lg">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-span-2 p-5 space-y-3 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-lg">
                <h1 class="text-3xl font-medium text-gray-900 dark:text-white">Nome do produto</h1>
                <h2 class="text-2xl font-bold text-blue-400">199.99€</h2>
                <div class="flex flex-wrap items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-truck w-7 h-7 fill-green-400" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    <h3 class="font-bold text-green-400">Produto se classifica para envio grátis</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="#"><button type="button" class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar ao carrinho</button></a>
                    <a href="#"><button type="button" class="py-2.5 w-full px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Comprar agora</button></a>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-900 rounded-lg shadow-lg">
            <!-- Detalhes do produto -->
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="productDetails-tab" data-tabs-target="#productDetails" type="button" role="tab" aria-controls="productDetails" aria-selected="false">Detalhes do produto</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="InfoTec-tab" data-tabs-target="#InfoTec" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Informações Técnicas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Avaliações</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent" class="pb-2">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 m-2" id="productDetails" role="tabpanel" aria-labelledby="productDetails-tab">
                    Jogue, transmita, crie. A GeForce RTX™ 4060 Ti e a RTX 4060 permitem que enfrente os jogos e aplicativos mais recentes com a arquitetura ultraeficiente NVIDIA Ada Lovelace. Usufrua de jogos imersivos acelerados por IA com ray tracing e DLSS 3 e potencialize o seu processo criativo e produtividade com o NVIDIA Studio. <br>
                    <br>
                    RAY TRACING <br>
                    A arquitetura Ada liberta toda a glória do Ray Tracing, que simula como a luz se comporta no mundo real. Com o poder da série RTX 40 e RT Cores de terceira geração, pode usufruir de mundos virtuais incrivelmente detalhados como nunca antes. <br>
                    <br>
                    NVIDIA DLSS 3 - O MULTIPLICADOR DE DESEMPENHO ALIMENTADO POR IA <br>
                    O DLSS é um avanço revolucionário em gráficos alimentados por IA que aumenta enormemente o desempenho. Alimentado pelos novos Tensor Cores de quarta geração e Optical Flow Accelerator nas GPUs GeForce RTX 40 Series, o DLSS 3 usa IA para criar frames adicionais de alta qualidade. <br>
                    <br>
                    NVIDIA REFLEX - VITÓRIA MEDIDA EM MILISSEGUNDOS <br>
                    As GPUs NVIDIA Reflex e GeForce RTX 40 Series oferecem a menor latência e melhor capacidade de resposta para a máxima vantagem competitiva. Construído para otimizar e medir a latência do sistema, o Reflex fornece aquisição de alvo mais rápida, tempos de reação mais rápidos e a melhor precisão de mira para jogos competitivos. <br>
                    <br>
                    NVIDIA STUDIO - A SUA CRIATIVIDADE ALIMENTADA PELA IA <br>
                    Leve os seus projetos criativos para o próximo nível com o NVIDIA Studio. Alimentado por um novo hardware dedicado, as placas RTX 40 Series oferecem desempenho incomparável em renderização 3D, edição de vídeo e design gráfico. Usufrua de acelerações RTX ricas em recursos nos principais aplicativos criativos, drivers NVIDIA Studio de classe mundial projetados para fornecer estabilidade máxima e um conjunto de ferramentas exclusivas que aproveitam o poder do RTX para fluxos de trabalho criativos assistidos por IA. <br>
                </div>
                <!-- Informações Técnicas -->
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 m-2" id="InfoTec" role="tabpanel" aria-labelledby="InfoTec-tab">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                            <tbody>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Silver
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Avaliações -->
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 m-2" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <p class="text-center">Não existem avaliações</p>
                </div>
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

</html>
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=pit", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha na CONEXAO" . $e->getMessage();
    die();
}

if (isset($_POST['enviar'])) {
    $cpf = $_SESSION['cpf_session'];
    $sql = "SELECT * FROM loginusuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        header("Location: ../php/agendar.php");
    } else {
        header("Location: ../php/loginUsuario.php");
    }
}

if (isset($_POST['conta'])) {
    $cpf = $_SESSION['cpf_session'];
    $sql = "SELECT * FROM loginusuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        header("Location: ../php/contausuario.php");
    } else {
        header("Location: ../php/loginUsuario.php");
    }
}

if (isset($_POST['motorista'])) {
    $rg = $_SESSION['rg_session'];
    $sql = "SELECT * FROM cadastromotorista WHERE rg = '$rg'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        header("Location: ../php/contamotorista.php");
    } else {
        header("Location: ../php/loginmotorisa.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>BoxUP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main2.css'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <header class="bg-black h-16 flex items-center justify-between pr-10 pl-10 p-2 sticky top-0">
        <div>
            <h1 class="text-white font-medium text-2xl border-r border-white pr-2">BoxUP</h1>
        </div>
        <div>
            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-white bg-black rounded-lg"
                type="button">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 4 15">
                    <path
                        d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                </svg>
            </button>


            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                    <li>
                        <a href="../php/home.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                    </li>
                    <li>
                        <a href="../php/logout.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LOGOUT</a>
                    </li>
                    <li>
                        <a href="../php/Exibir_lista.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">CAMINHÕES</a>
                    </li>
                </ul>
                <div class="py-2">
                    <form method="POST" action="#">
                        <button type="submit" name="conta"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <?php
                            if (isset($_SESSION['login_session'])) {
                                echo $_SESSION['login_session'];
                            } else {
                                echo ("FAÇA LOGIN");
                            }
                            ?>
                        </button>
                        <button type="submit" name="motorista"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <?php
                            if (isset($_SESSION['login2_session'])) {
                                echo $_SESSION['login2_session'];
                            } else {
                                echo ("LOGIN DE MOTORISTA");
                            }
                            ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main class="w-screen">
        <div class="flex justify-center flex-col w-full h-96 bg-[url('../img/bannersup.webp')] bg-cover bg-no-repeat">
            <div class="flex justify-center items-left flex-col w-3/4 h-1/2 self-center text-4xl font-medium">
                <h1>Olá, Somos a BoxUP.</h1>
                <form action="#" method="POST">
                    <button type="submit" name="enviar" class="text-3xl/10 font-normal text-left">Planeje conosco sua
                        mudança</p>
                </form>
            </div>
        </div>
        <section class="flex items-left justify-center content-center ">
            <div class="w-3/4 text-left flex justify-center items-left flex-col border-b border-gray-700 p-5">
                <h1 class="font-bold text-3xl/9 w-full 2xl:w-2/4 pb-5">O que Somos? Mudanças Residenciais Simples e
                    Confiáveis</h1>
                <p class="text-base/7 w-full 2xl:w-2/4">Mude para uma nova vida com BoxUP! Você está planejando uma
                    mudança
                    residencial? Deixe que a
                    BoxUP
                    facilite todo o processo para você. Com nossa equipe de profissionais experientes e serviço de
                    qualidade, garantimos uma mudança tranquila e sem preocupações. Deixe-nos cuidar de todos os
                    detalhes
                    para que você possa desfrutar do seu novo lar.</p>
            </div>
        </section>
        <section class="flex flex-col items-center">
            <div class="flex items-center flex-col mt-10">
                <p class="font-bold text-3xl/9 w-3/4 pb-7 text-center">Por que escolher a BoxUP?</p>

                <div class="flex flex-wrap justify-center gap-20">
                    <div class="w-80 text-justify border grid grid-rows-2 items-center rounded-md overflow-hidden">
                        <img class="object-cover h-full" src="../img/Postura-profissional-4.jpg">
                        <div class="flex content-center h-full flex-col p-5">
                            <h1 class="p-1 font-bold">Profissionalismo</h1>
                            <p>
                                Nossa equipe é formada por especialistas em mudanças
                                residenciais, treinados para
                                lidar com todos os tipos de situações e cuidar dos seus pertences com o maior cuidado.
                            </p>
                        </div>
                    </div>
                    <div class="w-80 text-justify border grid grid-rows-2 items-center rounded-md overflow-hidden">
                        <img class="object-cover h-full "
                            src="../img/post_thumbnail-72c155d011dd16da41b23a9072c516d8.jpeg">
                        <div class="flex content-center h-full flex-col p-5">
                            <h1 class="p-1 font-bold">Serviço Personalizado</h1>
                            <p>
                                Entendemos que cada cliente é único, por isso
                                oferecemos um serviço
                                personalizado de acordo com suas necessidades e preferências. Adaptamos nossos planos e
                                horários
                                para se adequar ao seu cronograma.
                            </p>
                        </div>
                    </div>
                    <div class="w-80 text-justify border grid grid-rows-2 items-center rounded-md overflow-hidden">
                        <img class="object-cover h-full"
                            src="../img/homem-trabalhando-com-equipamento-de-seguranca.jpg">
                        <div class="flex content-center h-full flex-col p-5">
                            <h1 class="p-1 font-bold">Segurança e Proteção</h1>
                            <p>
                                Sabemos o quanto seus pertences são valiosos para você.
                                Utilizamos materiais
                                de embalagem de alta qualidade e técnicas de transporte seguras para garantir que seus
                                itens
                                sejam
                                protegidos durante todo o processo de mudança.
                            </p>
                        </div>
                    </div>
                    <div class="w-80 text-justify border grid grid-rows-2 items-center rounded-md overflow-hidden">
                        <img class="object-cover h-full"
                            src="../img/trabalhador-de-entrega-bem-sucedido-que-mostra-o-polegar-para-cima.jpg">
                        <div class="flex content-center h-full flex-col p-5">
                            <h1 class="p-1 font-bold">Pontualidade</h1>
                            <p>
                                Valorizamos seu tempo e nos esforçamos para cumprir todos
                                os prazos acordados. Nosso
                                objetivo é entregar seus pertences no local de destino no horário planejado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-screen flex flex-col flex-wrap mb-10 mt-10 border-t border-gray-700">
                <p class="p-5 text-2xl">Nossos Serviços</p>

                <div class="flex flex-wrap flex-row justify-center gap-12 ">
                    <div class="grid grid-rows-2 gap-y-4 w-80">
                        <h1 class="flex items-center text-2xl font-semibold">Embalagem e Desembalagem Profissional</h1>
                        <p class="text-justify">
                            Nossa equipe cuidará da embalagem dos seus pertences,utilizando materiais
                            adequados para garantir a segurança durante o transporte. Além disso,também
                            oferecemos o serviço de desembalagem no local de destino, para que você possa se
                            instalarrapidamente.
                        </p>
                    </div>
                    <div class="grid grid-rows-2 gap-y-4 w-80">
                        <h1 class="flex items-center text-2xl font-semibold">Transporte Seguro</h1>
                        <p class="text-justify">
                            Contamos com uma frota de veículos modernos e equipados para realizar o
                            transporte dos seus pertences com segurança. Nossa equipe cuidará de todos os detalhes
                            logísticos para garantir uma entrega tranquila.
                        </p>
                    </div>
                    <div class="grid grid-rows-2 gap-y-4 w-80">
                        <h1 class="flex items-center text-2xl font-semibold">Montagem e Desmontagem de Móveis</h1>
                        <p class="text-justify">
                            Caso seja necessário desmontar e montar seus móveis durante a
                            mudança, nossa equipe cuidará desse processo para você, garantindo que tudo fique no lugar
                            correto.
                        </p>
                    </div>
                </div>
        </section>
    </main>
    <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">BoxUP</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Recursos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="../php/termo.php" class="hover:underline">Termo de Uso</a>
                            </li>
                            <li class="mb-4">
                                <a href="../php/limitesdepeso.php" class="hover:underline">Política de Peso</a>
                            </li>
                            <li class="mb-4">
                                <a href="../php/politica.php" class="hover:underline">Política de Reembolso</a>
                            </li>
                            <li class="mb-4">
                                <a href="../php/suporte.php" class="hover:underline">Suporte</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Empresa</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Sobre nós</a>
                            </li>
                            <li class="mb-4">
                                <a href="../php/RecrutamentoMotorista.php" class="hover:underline">Carreiras</a>
                            </li>
                            <li class="mb-4">
                                <a href="../php/suporte.php" class="hover:underline">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase">Serviços</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Consultoria</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Design</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Desenvolvimento</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                        class="hover:underline">BoxUP™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-300 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
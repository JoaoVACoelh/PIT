<?php
header('Content-Type: text/html; charset=utf-8');
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Suporte</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main2.css'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
</head>

<body>
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
                        <a href="../php/loginmotorisa.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Motorista</a>
                    </li>
                    <li>
                        <a href="../php/logout.php"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LOGOUT</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="../php/loginUsuario.php"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><label>
                            <?php session_start();
                            if(isset($_SESSION['login_session']))
                            {
                                echo $_SESSION['login_session'];
                            }
                            else
                            {
                                echo ("FAÇA LOGIN");
                            } 
                            ?>
                        </label>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main
        class="flex content-center items-center flex-col w-full h-fit bg-[url('../img/bannersup.webp')] bg-cover bg-no-repeat">
        <div id="term" class="text-2xl w-3/4 text-justify bg-black/75 p-5 text-white rounded-lg mt-5 mb-5">
            <h1 class="font-bold">Termos de Uso do Site de Transporte de Objetos</h1>
            <p class="p-5">Bem-vindo ao nosso site de transporte de objetos. Antes de utilizar nossos serviços, pedimos
                que você
                leia atentamente e concorde com estes Termos de Uso. Ao utilizar nosso site, você está concordando com
                todos os termos e condições aqui estabelecidos.</p>
            <p class="p-5">
                <b>1- Aceitação dos Termos</b><br>
                Ao utilizar nosso site, você concorda integralmente com estes Termos de Uso. Se você não concorda com
                algum destes termos, por favor, não utilize nossos serviços.
            </p>
            <p class="p-5">
                <b>2- Descrição dos Serviços</b><br>
                Nosso site de transporte de objetos oferece uma plataforma online para conectar remetentes e
                transportadoras. Os usuários podem enviar solicitações de transporte de objetos e receber cotações de
                transportadoras parceiras. No entanto, não somos uma transportadora e não nos responsabilizamos pelos
                serviços de transporte em si.
            </p>
            <p class="p-5">
                <b>3- Registro e Conta de Usuário</b><br>
                Para utilizar nossos serviços, você precisa se registrar e criar uma conta de usuário. Você é
                responsável por fornecer informações precisas e atualizadas durante o processo de registro. Você também
                é responsável por manter a segurança de sua conta e senha, e por todas as atividades que ocorrerem sob
                sua conta.
            </p>
            <p class="p-5">
                <b>4- Responsabilidades do Usuário</b><br>
                Ao utilizar nosso site, você concorda em:
            </p>
            <ul class="list-none pt-5 pb-5">
                <li class="p-5 pl-10 pt-0">
                    4.1- Fornecer informações precisas e atualizadas sobre os objetos a serem transportados;
                </li>
                <li class="p-5 pl-10 pt-0">
                    4.2- Respeitar as leis aplicáveis ao transporte de objetos;
                </li>
                <li class="p-5 pl-10 pt-0">
                    4.3- Não utilizar nosso site para atividades ilegais, fraudulentas ou que violem os direitos de
                    terceiros;
                </li>
                <li class="p-5 pl-10 pt-0">
                    4.4- Não enviar conteúdo ofensivo, difamatório, obsceno ou prejudicial;
                </li>
                <li class="p-5 pl-10 pt-0 pb-0">
                    4.5- Respeitar os direitos de propriedade intelectual relacionados ao nosso site.
                </li>
            </ul>
            <p class="p-5">
                <b>5- Cotações e Contratação</b><br>
                Nosso site oferece um sistema de cotações para ajudar os usuários a obterem preços e prazos de
                transporte. No entanto, as cotações fornecidas são apenas estimativas e podem variar com base em fatores
                como distância, peso, tamanho e outros detalhes relacionados ao transporte. A contratação do serviço de
                transporte é realizada diretamente entre o remetente e a transportadora selecionada.
            </p>
            <p class="p-5">
                <b> 6- Responsabilidade Limitada</b><br>
                Embora nos esforcemos para fornecer um serviço confiável, não podemos garantir a precisão, pontualidade
                ou qualidade dos serviços prestados pelas transportadoras parceiras. Não nos responsabilizamos por
                quaisquer danos diretos, indiretos, incidentais, consequenciais ou especiais resultantes do uso ou
                incapacidade de uso do nosso site ou dos serviços de transporte contratados.
            </p>
            <p class="p-5">
                <b> 7- Modificações dos Termos de Uso</b><br>
                Podemos atualizar ou modificar estes Termos de Uso periodicamente. Recomendamos que você verifique esta
                página regularmente para estar ciente de quaisquer alterações. O uso continuado do nosso site após a
                publicação de quaisquer modificações significa sua aceitação dos novos termos.
            </p>
            <p class="p-5">
                <b> 8- Encerramento de Conta</b><br>
                Reservamo-nos o direito de encerrar ou suspender sua conta de usuário a qualquer momento, sem aviso
                prévio, se violar estes Termos de Uso ou se houver suspeita de atividade fraudulenta ou prejudicial.
                <br>
                Lei Aplicável e Jurisdição
            </p>
        </div>

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
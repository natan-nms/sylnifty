<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sylnifty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ url('storage/css') }}/app.css">
    <script src="https://kit.fontawesome.com/6ed674a615.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-1000">
    <div class="bg-black-opacity">
        <div class="px-4 py-5 mx-auto sm:max-w-screen md:w-full lg:w-screen md:px-24 lg:px-8">

            <div class="relative flex w-full justify-between items-center">
                <img src="{{ url('storage/logo') }}/Syl-Nifty-Logo.png" width="70" alt=""
                class="ml-10 mr-10">

                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="#about" aria-label="Our product" title="Our product"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sobre</a>
                    </li>
                    <li><a href="#gallery" aria-label="Our product" title="Our product"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Galeria</a>
                    </li>
                    <li>
                        <a href="https://privacy.com.br/Checkout/SylNifty/" aria-label="Product pricing"
                            title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Assinatura</a>
                    </li>
                    <li>
                        <a href="https://www.clips4sale.com/studio/205859/sylnifty" aria-label="Product pricing"
                            title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Loja</a>
                    </li>
                    {{-- <li>
                        <a href="https://sylnifty.com/?page_id=1394&lang=pt" aria-label="Product pricing"
                            title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Loja</a>
                    </li> --}}
                    <li>
                        <a href="/wiki" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Aprenda</a>
                    </li>
                    <li>
                        <a href="/agenda" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Agenda</a>
                    </li>
                    <li>
                        <a href="/blog" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a>
                    </li>
                    <li></li>
                </ul>

                <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                    <li>
                        <a href="#my-modal-3" aria-label="Sign in" title="Sign in"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Login
                        </a>
                        <div class="modal" id="my-modal-3">
                            <div class="modal-box">
                                <h3 class="font-bold text-lg">Login</h3>
                                <div class="py-4">
                                    <form action="/user/login" method="POST">
                                        @csrf
                                        <div class="mb-1 sm:mb-2">
                                            <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                            <input placeholder="john.doe@example.org" required="" type="text"
                                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                                id="email" name="email" />
                                        </div>
                                        <div class="mb-1 sm:mb-2">
                                            <label for="password" class="inline-block mb-1 font-medium">Senha</label>
                                            <input placeholder="" required="" type="password"
                                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                                id="password" name="password" />
                                        </div>
                                        <div class="mt-4 mb-2 sm:mb-4">
                                            <button type="submit"
                                                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-green-400 hover:bg-green-700 focus:shadow-outline focus:outline-none">
                                                Entrar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-action">
                                    <a href="#" class="btn bg-red-500">Fechar</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#cad"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            aria-label="Sign up" title="Sign up">
                            Cadastre-se
                        </a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="ml-auto lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" onclick="OpenMenuMobile()"
                        class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor"
                                d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor"
                                d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
        <div id="menuMobile" class="hidden  w-full bg-gray-900 flex z-50 h-screen fixed top-0 left-0 flex-col">
            <div onclick="OpenMenuMobile()"
                class=" cursor-pointer bg-gray-900 h-3/12 close w-full flex mt-5 mb-5 justify-center items-center">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <ul class=" w-full flex-row justify-between items-center">
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a onclick="OpenMenuMobile()" href="#about" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sobre</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="/wiki" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Aprenda</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="/agenda" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Agenda</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="/blog" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="https://sylnifty.com/?page_id=1394&lang=pt" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Loja</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="https://privacy.com.br/Checkout/SylNifty/" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Assinatura</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="#gallery" onclick="OpenMenuMobile()" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Galeria</a>
                </li>
                <li
                    class="bg-gray-900 flex items-center justify-center py-4 border-solid border-2 border-sky-500 mt-1">
                    <a href="/blog" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        function OpenMenuMobile() {
            const menuMobile = document.getElementById('menuMobile');
            menuMobile.classList.toggle('hidden');
        }
    </script>
    {{-- if success in session exists --}}
    @if (session('success'))
        <div class="alert alert-success shadow-lg mb-10">
            <div class="flex flex-row justify-between w-full">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}. Confirme em seu email seu cadastro!</span>
                </div>
                <button onclick="closeModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>
        </div>
    @elseif (session('error'))
        <div class="alert alert-error shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif
    <script>
        function closeModal() {
            document.querySelector('.alert').remove();
        }
    </script>
    <div class="relative pt-40">
        @if ( $data['backgrounds'])
            <img src="{{ url('storage/backgrounds') }}/{{ $data['backgrounds']->image }}" class="absolute inset-0 object-cover w-full h-full"
                alt="" />
        @endif

        <div class="relative bg-opacity-75 bg-deep-purple-accent-700">
            <svg class="absolute inset-x-0 bottom-0 text-white" viewBox="0 0 1160 163">
                <path fill="#1B2028"
                    d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                </path>
            </svg>
            <div
                class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                    <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                        <img src="{{ url('storage/logo') }}/Syl-Nifty-Logo.png" width="300" alt=""
                        class="ml-10 mb-20">
                        <h2
                            class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                            CONHEÇA O MUNDO <br class="hidden md:block" />
                            SYLNIFTY
                        </h2>
                        <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                            Explore um mundo diferente!
                        </p>
                        <a href="#about"
                            class="bg-indigo-900 inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                            Explorar
                        </a>
                        <!-- <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
                            Learn more
                            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                <path
                                    d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                </path>
                            </svg>
                        </a> -->
                    </div>
                    <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                        <div class="bg-gray-900-opacity rounded shadow-2xl p-7 sm:p-10 text-white">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Agende sua sessão
                            </h3>
                            <form action="/order" method="POST">
                                @csrf
                                <div class="mb-1 sm:mb-2">
                                    <label for="name" class="inline-block mb-1 font-medium">Nome ou
                                        Apelido:</label>
                                    <input placeholder="John" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="name" name="name" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="phone" class="inline-block mb-1 font-medium">Telefone:</label>
                                    <input placeholder="Doe" required="" type="tel"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="phone" name="phone" />


                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="whatsapp" class="inline-block mb-5 font-medium">Whatsapp:</label>
                                    <br><input value="true" type="radio" name="whatsapp" class="radio"
                                        checked /> Sim
                                    <input value="false" type="radio" name="whatsapp" class="radio" /> Não
                                </div>
                                <div class="mb-1 sm:mb-2 mt-5">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail:</label>
                                    <input placeholder="john.doe@example.org" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email" name="email" />
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button type="submit"
                                        class="bg-black inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                                        Continuar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p id="about"
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        Sylnifty
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-200 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0"
                                    width=".135" height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24">
                            </rect>
                        </svg>
                        <span class="relative">O</span>
                    </span>
                    Mundo de Syl Nifty
                </h2>
                <p class="text-base text-gray-300 md:text-lg">
                    Conheça um pouco mais sobre o mundo de Syl Nifty
                </p>
            </div>
        </div>
        <div class="max-w-screen-xl sm:mx-auto ">
            <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2 ">
                <div class="space-y-8">
                    <div>
                        {{-- <p class="mb-4 text-xl font-medium text-gray-300">
                            Title form my paragraph.
                        </p> --}}
                        <p class="text-gray-300">
                            Lady Syl foi o primeiro nome criado, no começo de tudo apenas Syl mesmo. Era inicio de 2016
                            e num vídeo com o acrônimo BDSM no título, despertou a curiosidade, então, fui atrás.
                            Descobrindo entre conhecidos, fui parar num grupo de adeptos e curiosos sobre o tema, no
                            grupo tinham 2 mentores, Mestres Dominadores com muitos anos de experiência. Durante cerca
                            de 4 meses li muito, pesquisei, perguntei e assisti vídeos, eu definitivamente me encaixava
                            nesse mundo, não tinha dúvidas, mas como? Qual posição? ...
                            <br>
                            <!-- read more -->
                            <!-- <a class="" onclick="readMore(true)">
                                <span class="text-blue-500 cursor-pointer" id="link-read-more">
                                    Leia mais
                                </span>
                            </a> -->
                        </p>
                    </div>
                    <div id="second-article">
                        <p class="text-gray-300">
                            Eu me via em ambas as posições, porque gostava de uma pegada mais bruta no sexo e por esse
                            motivo isso confundia meu posicionamento. E ressalto aqui o “gostava” no passado, pois hoje
                            tenho que ter o controle até mesmo no sexo, qualquer coisa fora disso é brochante, acaba o
                            clima mesmo.
                        </p>
                    </div>
                    <div id="second-article">
                        <p class="text-gray-300">
                            Voltando ao inicio, como o estudo, leitura, debates e analisando meu passado entendi ser
                            dominante. Mas como sou teimosa, queria ter certeza, procurei e marquei com um Dom para
                            sairmos, cheia de dúvidas, mas precisando experimentar para realmente acreditar, saí com ele
                            e realmente me reconheci uma dominadora… a dominação durou menos de 3 minutos de uso de
                            clamps literalmente. Insuportável para mim alguém fazer algo comigo que eu não tenha pedido,
                            me entregar ao prazer, diversão de outro era impossível definitivamente. Após essa
                            constatação, reconhecendo minha posição como Top, ganhei um presente do meu mentor e amigo
                            que vou chamar de G, ele me deu um sub para eu começar. E eu só disse: Como assim? Meus
                            problemas começariam, o que vou fazer com ele? Vinda de 2 casamentos tradicionais, não sabia
                            nem mandar de forma direta.
                        </p>
                    </div>
                </div>
                <div class="space-y-8">
                    <div id="second-article">
                        <p class="text-gray-300">
                            Começamos a conversar, ele havia tido experiência com uma ex-namorada de humilhação e como
                            corno. Combinamos nosso primeiro encontro, numa cidade perto da dele, interior de SP, num
                            hotel, ele providenciou tudo, me buscou entramos no quarto. Claro que foi tudo misturado,
                            com ele experiências de servidão, pet play, assplay mas a relação foi misturada e ele acabou
                            confundindo tudo, ou apressando. Cada experiência que ia tendo com ele, vinham dúvidas que
                            eu compartilhava com o G e ele ia me orientando e esclarecendo. Nesse tempo me cadastrei no
                            site Senhor Verdugo e comecei a conversar com outros submissos.
                        </p>
                    </div>
                    <div id="second-article">
                        <p class="text-gray-300">
                            A relação, já confusa com meu presente, acabou terminando e eu comecei uma nova negociação
                            com um contato do site, meio que paralela.
                        </p>
                    </div>
                    <div id="second-article">
                        <p class="text-gray-300">
                            Ele, chamarei de A, novato de tudo, mas muito interessado na humilhação e spanking, práticas
                            que não havia vivenciado com o sub presente. Marcamos nossa primeira sessão, e até hoje digo
                            que foi a melhor e mais planejada sessão que fiz, perfeita em todos os aspectos, intensa,
                            sem confundir nada, eu 100% dominando, ele completamente entregue mas… ele não conseguiu
                            lidar com esse prazer, com essa entrega e se desligou do meio se sentindo culpado. Tentei
                            ajudar, mas eu era também uma novata, indiquei outras pessoas, mesmo assim ele preferiu se
                            afastar, e eu, com essa segunda experiência, resolvi vivenciar o BDSM e todas as práticas
                            que surgissem. Fiz um anúncio e comecei a explorar o que eu ia ou não gostar, fazendo cada
                            uma das práticas, tudo que aparecia eu tinha curiosidade, aceitava, marcava e praticava. Foi
                            assim que comecei a entender e moldar a Lady Syl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery"
        class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p id="about"
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        sylnifty
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-200 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0"
                                    width=".135" height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24">
                            </rect>
                        </svg>
                        <span class="relative">Galeria</span>
                    </span>

                </h2>
                <p class="text-base text-gray-300 md:text-lg">
                    Veja nossas imagens produzidas em nossos eventos.
                </p>
            </div>
        </div>
        <div class="modal w-screen p-40" id="my-modal-2" onclick="closeModal()">
            <div id="box-modal" class="w-8/12 h-8/12 p-80 bg-black">

            </div>
        </div>
    </div>
    <section class="overflow-hidden text-gray-700">
        <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
            <div id="box-Image" class="flex flex-wrap -m-1 md:-m-2">

            </div>
        </div>
    </section>
    <script>
        const fields = 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp';
        const token =
            'IGQVJWV0FTRUdYRWhIZAWw3d2l5YjJ5ZAHA3T1Jtd09HREx3d2tIdzZARTDNlc3hYVXc2WDg4Ujlobm1oWXh3VVpLbU5xcXQyQjJPenAzSU0yTEdybXlBWURFOEotcUoybHZAUblNBNDV6MG9OZA1o5R2g1VgZDZD';
        const medias = fetch(`https://graph.instagram.com/me/media?fields=${fields}&access_token=${token}`)
            .then((res) => {
                const data = res.json()
                data.then((r) => {
                    const received = r.data;
                    //filter out images
                    const images = received.filter((item) => {
                        return item.media_type === 'IMAGE';
                    });

                    let column = []

                    images.forEach(element => {

                        const image = document.createElement('img');
                        image.setAttribute('alt', 'gallery');
                        image.setAttribute('class', 'block object-cover object-center w-full h-full rounded-lg small_img');
                        image.setAttribute('src', element.media_url);

                        const a = document.createElement('a');
                        a.setAttribute('onclick', 'imagemInModal()');
                        a.setAttribute('href', '#my-modal-2');
                        a.appendChild(image);

                        const cardImage = document.createElement('div');
                        cardImage.setAttribute('class', 'w-3/12 p-1 md:p-2');

                        cardImage.appendChild(image);

                        let BoxImage = document.getElementById('box-Image');
                        BoxImage.appendChild(cardImage);


                    });

                    // imageList.forEach(element => {
                    //     console.log(element)
                    // });
                    //    r.forEach(element => {
                    //         if(element.media_type == 'IMAGE'){
                    //             const img = document.createElement('img');
                    //             img.src = element.media_url;
                    //             document.getElementById('instafeed-images').appendChild(img);
                    //         }
                    //    });
                })
            });
    </script>
    </div>
    {{-- cadastre-se --}}
    <div id="cad" class="overflow-hidden bg-gray-800">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        Cadastre-se <br class="hidden md:block" />
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                        Receba atualizações sobre nossos eventos e promoções.
                    </p>
                </div>
                <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="relative">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-teal-accent-400 lg:w-32 lg:-mr-16 sm:block">
                            <defs>
                                <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0"
                                    width=".135" height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24">
                            </rect>
                        </svg>
                        <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Cadastre-se aqui
                            </h3>
                            <form action="/user/register" method="POST">
                                @csrf
                                <div class="mb-1 sm:mb-2">
                                    <label for="name" class="inline-block mb-1 font-medium">Nome:</label>
                                    <input placeholder="John Doe" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="name" name="name" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail:</label>
                                    <input placeholder="john.doe@example.org" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email" name="email" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="password" class="inline-block mb-1 font-medium">Senha:</label>
                                    <input placeholder="" required="" type="password"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="password" name="password" />
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-400 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                                        Enviar
                                    </button>
                                </div>
                                <p class="text-xs text-gray-600 sm:text-sm">
                                    Nós respeitamos sua privacidade. Cancele a inscrição a qualquer momento.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-gray-900 p-10 text-base-content">
        <div>
            <img class="" src="{{ url('storage/icons/') }}/desenvolvedora.png" alt="" srcset="">
        </div>
        <div>
            <span class="footer-title">Services</span>
            @foreach ($data['socials'] as $key => $item)
                <a href="{{ $item->url }}" class="link link-hover"><i class="{{ $item->icon }}"></i>
                    {{ $item->name }}</a>
            @endforeach
        </div>
        <div>
            <span class="footer-title">Veja</span>
            <a href="#about" class="link link-hover">Sobre</a>
            <a href="#gallery" class="link link-hover">Galeria</a>
            <a href="https://privacy.com.br/Checkout/SylNifty/" class="link link-hover">Assinatura</a>
            <a href="https://sylnifty.com/?page_id=1394&lang=pt" class="link link-hover">Loja</a>
        </div>
        <div>
            <span class="footer-title">Mais</span>
            <a href="/wiki" class="link link-hover">Aprenda</a>
            <a href="/agenda" class="link link-hover">Agenda</a>
            <a href="/blog" class="link link-hover">Blog</a>
        </div>
    </footer>
    {{-- <div class="bg-gray-900">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="flex flex-col md:flex-row lg:flex-col items-center">
                <div>
                    <img class="" src="{{ url('storage/icons/') }}/desenvolvedora.png" alt="" srcset="">
                </div>
                <div class="flex flex-row md:flex-row w-full items-center">
                    <div class="mt-10 sm:flex w-full justify-center items-center">
                        <p class="font-medium tracking-wide text-gray-300">Redes Sociais</p>
                        <ul class="mt-2 space-y-2 flex flex-col">
                            @foreach ($data['socials'] as $key => $item)
                                    <li>
                                        <a href="{{ $item->url }}"
                                            class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">
                                            <i class="{{ $item->icon }}"></i>
                                            {{ $item->name }}
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="md:max-w-md lg:col-span-2 mt-10">
                    <span class="text-base font-medium tracking-wide text-gray-300">Se inscreva para mais
                        informações.</span>

                     <p class="mt-4 text-sm text-gray-500">
                        Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
                    </p> -
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                <p class="text-sm text-gray-500">
                    © Copyright 2022 sylnifty. Todos os direitos reservados.
                </p>

            </div>
        </div>
    </div> --}}
    <script>
        var modal = false;

        function closeModal() {
            window.location.href = "/#gallery";
        }

        function imagemInModal() {
            var modal = true;
            console.log(event.target.src);
            var boxModal = document.getElementById('box-modal');
            //set the image background to modal
            boxModal.style.backgroundImage = "url(" + event.target.src + ")";
            boxModal.style.backgroundSize = "cover";
            boxModal.style.backgroundPosition = "center";
        }

        function readMore(bool) {
            if (bool) {
                //seect all divs withs id second-article
                var divs = document.querySelectorAll('#second-article');
                var linkReaMore = document.getElementById('link-read-more');

                linkReaMore.style.display = 'none';
                //set display true for all divs
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.display = 'block';
                }

            } else {
                //seect all divs withs id second-article
                var divs = document.querySelectorAll('#second-article');
                //set display true for all divs
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.display = 'none';
                }

                linkReaMore.style.display = 'block';
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</body>

</html>

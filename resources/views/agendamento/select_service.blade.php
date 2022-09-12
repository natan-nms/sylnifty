<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sylnifty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://kit.fontawesome.com/6ed674a615.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ url('storage/css') }}/app.css">
</head>

<body class="bg-gray-1000">
    <div class="bg-black-opacity">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
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
                        <a href="https://sylnifty.com/?page_id=1394&lang=pt" aria-label="Product pricing"
                            title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Loja</a>
                    </li>
                    <li>
                        <a href="/wiki" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Aprenda</a>
                    </li>
                    <li>
                        <a href="/blog" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a>
                    </li>
                </ul>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center lg:mx-auto">
                    <!-- <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                <rect x="3" y="1" width="7" height="12"></rect>
                <rect x="3" y="17" width="7" height="6"></rect>
                <rect x="14" y="1" width="7" height="6"></rect>
                <rect x="14" y="11" width="7" height="12"></rect>
              </svg> -->
                    <img src="{{ url('storage/logo') }}/Syl-Nifty-Logo.png" width="100" alt="">
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase"></span>
                </a>
                <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                    <li><a href="/" aria-label="Sign in" title="Sign in"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sign
                            in</a></li>
                    <li>
                        <a href="/"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            aria-label="Sign up" title="Sign up">
                            Sign up
                        </a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="ml-auto lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu"
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
                    <!-- Mobile menu dropdown
              <div class="absolute top-0 left-0 w-full">
                <div class="p-5 bg-white border rounded shadow-sm">
                  <div class="flex items-center justify-between mb-4">
                    <div>
                      <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                          <rect x="3" y="1" width="7" height="12"></rect>
                          <rect x="3" y="17" width="7" height="6"></rect>
                          <rect x="14" y="1" width="7" height="6"></rect>
                          <rect x="14" y="11" width="7" height="12"></rect>
                        </svg>
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                      </a>
                    </div>
                    <div>
                      <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                          <path
                            fill="currentColor"
                            d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <nav>
                    <ul class="space-y-4">
                      <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                      <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                      <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                      <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                      <li>
                        <a
                          href="/"
                          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                          aria-label="Sign up"
                          title="Sign up"
                        >
                          Sign up
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              -->
                </div>
            </div>
        </div>
    </div>
    <div class=" px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        {{-- if success in session exists --}}
        @if (session('success'))

        <div class="alert alert-success shadow-lg mb-10">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>{{ session('success') }}. Por favor aguarde, e faremos contato com você em breve !</span>

            </div>
          </div>
          @elseif (session('error'))
          <div class="alert alert-error shadow-lg">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>{{ session('error') }}</span>
            </div>
          </div>
        @endif

        <div class=" grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
            @foreach ($services as $item)
                <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
                    <a href="/" aria-label="Article"><img src="{{ $item->image }}"
                            class="object-cover w-full h-64 rounded" alt="" /></a>
                    <div class="py-5 px-5">
                        <a href="/" aria-label="Article"
                            class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
                            <p class="text-2xl font-bold leading-5">{{ $item->name }}</p>
                        </a>
                        <p class="mb-4 text-purple-700">
                            {{ $item->short_description }}
                        </p>
                        <p class="mb-4 text-gray-700">
                            <span class="font-bold">Description</span>: <br>
                            {{ $item->long_description }}
                        </p>
                        <div class="flex space-x-4">
                            <a href="/" aria-label="Likes"
                                class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">

                                <div class="flex flex-row justify-around w-80 items-center">
                                    {{-- price formated in monetary BRL --}}
                                  <div class="font-semibold price text-2xl text-green-900">
                                    R$ {{ $item->price }}
                                 </div>
                                     <form action="/order/selected_service" method="post">
                                        @csrf
                                        <input type="hidden" name="serivce_id" id="service_id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-outline btn-primary">Selecionar</button>
                                    </form>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

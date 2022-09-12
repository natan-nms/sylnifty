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
    <script src="https://kit.fontawesome.com/6ed674a615.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ url('storage/css') }}/app.css">
</head>

<body class="bg-gray-1000">
    <div class="bg-black-opacity">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                        <a href="https://sylnifty.com/?page_id=1394&lang=pt" aria-label="Product pricing" title="Blog"
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
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Sylnifty</span>
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
    {{-- <img src="{{ url('storage/backgrounds') }}/bg2.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" /> --}}

    <div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
        <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
            <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
                <h2
                    class=" mb-5 font-sans text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl sm:leading-none md:text-center">
                    {{ $data['posts']->title }}
                </h2>
                <p class="mb-5 text-base text-gray-400 md:text-lg md:text-center">
                    {{ $data['posts']->body }}
                </p>
                <div class="mb-10 text-center md:mb-16 lg:mb-20">
                    <a href="/blog/<?php
                    echo $data['posts']->id + 1;
                    ?>"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-red-700 hover:bg-red-700 focus:shadow-outline focus:outline-none">
                        Proximo Post
                    </a>

                </div>

                <div class="flex flex-col items-center">
                    <div class="mb-2 text-sm text-gray-600 md:mb-2">Follow us</div>
                    <div class="flex items-center space-x-4">
                        @foreach ($data['socials'] as $key => $item)
                            @if ($item->stamp === 1)
                                <div class="flex items-center">
                                    <a href="https://www.instagram.com/sylniftyfeet/"
                                    class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                    <i class="{{ $item->icon }} text-white text-3xl"></i>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div
            class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
            <img class="object-cover  w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-96"
                src="{{ url('storage/Posts') }}/{{ $data['posts']->image }}" alt="" />
        </div>
    </div>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
            <h1 class="text-white">Comentários:</h1>
        </div>
        <div class="grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($data['comments'] as $key => $item)
                <div
                    class="duration-300 transform bg-white border-l-4 border-deep-purple-accent-400 hover:-translate-y-2">
                    <div class="h-full p-5 border border-l-0 rounded-r shadow-sm">
                        <h6 class="mb-2 font-semibold leading-5">{{ $item->name }}</h6>
                        <p class="text-sm text-gray-900">
                            {{ $item->comment }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="overflow-hidden bg-gray-900">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        Deixe <br class="hidden md:block" />
                        o seu comentário <span class="text-teal-accent-400">aqui</span>
                    </h2>
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
                                Comentário
                            </h3>
                            <form>
                                <div class="mb-1 sm:mb-2">
                                    <label for="name" class="inline-block mb-1 font-medium">Name</label>
                                    <input placeholder="John Doe" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="name" name="name" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                    <input placeholder="john.doe@example.org" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email" name="email" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">Comment</label>
                                    <textarea placeholder="seu comentário..." required=""
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="comment" name="comment"></textarea>
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-black hover:bg-white hover:text-black focus:shadow-outline focus:outline-none">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-900">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Category</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">News</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">World</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Games</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">References</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Apples</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Web</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">eCommerce</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Business</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Entertainment</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Cherry</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Media</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Brochure</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Nonprofit</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Educational</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-300">Business</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Infopreneur</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Personal</a>
                            </li>
                            <li>
                                <a href="/wiki"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Wiki</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-200">Forum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:max-w-md lg:col-span-2">
                    <span class="text-base font-medium tracking-wide text-gray-300">Subscribe for updates</span>
                    <form class="flex flex-col mt-4 md:flex-row">
                        <input placeholder="Email" required="" type="text"
                            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" />
                        <button type="submit"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                            Subscribe
                        </button>
                    </form>
                    <p class="mt-4 text-sm text-gray-500">
                        Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
                <p class="text-sm text-gray-500">
                    © Copyright 2022 sylnifty. Todos os direitos reservados.
                </p>
                <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-teal-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

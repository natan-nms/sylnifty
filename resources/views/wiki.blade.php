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
</head>

<body class="bg-gray-1000">
    <div class="bg-black-opacity">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                        <a href="/wiki" aria-label="Product pricing" title="Wiki" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Wiki</a>
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
                    <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sign
                            in</a></li>
                    <li>
                        <a href="/" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" aria-label="Sign up" title="Sign up">
                            Sign up
                        </a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="ml-auto lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
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

    <div class="bg-gray-900">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex items-center justify-between">
                <div class="flex items-center">
                    <ul class="flex items-center hidden space-x-8 lg:flex">
                        <li>
                            <a href="/wiki" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                TODOS
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/A" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                A
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/B" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                B
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/C" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                C
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/D" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                D
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/E" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                E
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/F" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                F
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/G" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                G
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/H" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                H
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/I" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                I
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/J" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                J
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/K" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                K
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/L" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                L
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/M" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                M
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/N" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                N
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/O" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                O
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/P" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                P
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/Q" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                Q
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/R" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                R
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/S" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                S
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/T" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                T
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/U" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                U
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/V" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                V
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/W" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                W
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/X" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                X
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/Y" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                Y
                            </a>
                        </li>
                        <li>
                            <a href="/wiki/keyword/Z" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                                Z
                            </a>
                        </li>

                    </ul>
                </div>
                </ul>
                <!-- Mobile menu -->
                <div class="lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        @foreach ( $wikiList as $item )
        <div class="p-8 rounded shadow-xl sm:p-16 bg-red-900 mt-4">
            <div class="flex flex-col lg:flex-row">
                <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                    <h2 class="font-sans text-3xl font-bold tracking-tight text-white-200 sm:text-4xl sm:leading-none">
                        {{ $item->title }}
                </div>
                <div class="lg:w-1/2">
                    <p class="mb-4 text-base text-gray-400">
                        {{ $item->content }}
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>

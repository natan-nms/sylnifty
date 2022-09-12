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
                        <a href="/agenda" aria-label="Product pricing" title="Agenda" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Agenda</a>
                    </li>
                </ul>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center lg:mx-auto">
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
                </div>
            </div>
        </div>
    </div>
    {{-- <img src="{{ url('storage/backgrounds') }}/bg2.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" /> --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="{{ url('storage/backgrounds') }}/bg1.jpg">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            @foreach ($data['Schedule'] as $item)

            <div class="flex flex-col mb-10 lg:items-start items-center  border-solid border-2 border-purple-500 p-4 rounded-lg">
              <div class="flex-grow flex items-center justify-between w-full">
                <h2 class="text-gray-400 text-lg title-font font-medium mb-3 flex flex-col items-center">
                    <span class="text-7xl text-yellow-600">{{ $item->day }}</span>
                    {{ $item->month }}
                </h2>
                <p class="leading-relaxed text-white"> {{ $item->local }}</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            @endforeach
        </div>
        </div>
      </section>
</body>

</html>

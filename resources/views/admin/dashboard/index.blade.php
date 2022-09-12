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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ url('storage/css') }}/app.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-1000">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div class="w-full navbar bg-base-300">
                <div class="flex-none lg:hidden">
                    <label for="my-drawer-3" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1 px-2 mx-2">
                    <span class="text-indigo-400 font-bold">{{ $data['user']->name }}  </span>
                    <div class="dropdown dropdown-hover">
                        <label tabindex="0" class="btn m-1">
                            <i class="material-icons" style="font-size:18px;color:#fff">settings</i>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="/agenda/create">Minha Conta</a></li>
                            <li><a href="{{ route('admin.bagkckroundsSettings') }}">Background</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        {{-- <li><a href="#profile">Perfil</a></li> --}}


                        <div class="dropdown dropdown-hover">
                            <label tabindex="0" class="btn m-1">Agenda</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/agenda/create">Novo evento</a></li>
                                <li><a href="/agenda"> Ver agenda</a></li>
                            </ul>
                        </div>
                        <li><a href="#wiki">Nova wiki</a></li>
                        <div class="dropdown dropdown-hover">
                            <label tabindex="0" class="btn m-1">Posts</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a href="/posts/create">Novo post</a></li>
                                <li><a id="#posts"> Ver posts</a></li>
                            </ul>
                        </div>
                        <li><a href="#social">Redes Sociais</a></li>
                        <li><a href="#services">Serviços</a></li>

                    </ul>
                </div>
            </div>

            {{-- Galeria --}}
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <span class="relative text-white">Instagram Token</span>
                        </span>
                    </h2>
                    <p>"Insira o token de seu instagram para que sua galeria seja alimentada"</p>
                    <a href="{{ route('admin.instaSettingsCreate') }}" class="btn btn-primary">Novo Token</a>
                </div>
                <div class="relative grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
                    <div class="absolute inset-0 flex items-center justify-center sm:hidden lg:flex">
                        <div class="w-px h-full bg-gray-300 lg:w-full lg:h-px"></div>
                    </div>
                    @foreach ($data['social'] as $item)
                        <div
                            class="p-5 duration-300 transform
                        @if ($item->stamp === 1) bg-gray-200
                        @else
                            bg-gray-900 text-white @endif
                       border rounded shadow-sm hover:-translate-y-2">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-lg font-bold leading-5 ">{{ $item->name }}</p>
                                <p
                                    class="flex items-center justify-center w-6 h-6 font-bold rounded text-white bg-indigo-500">
                                    {{ $item->id }}
                                </p>
                            </div>

                            <a class="text-sm  btn btn-sm  bg-indigo-700  text-gray-200"
                                href="{{ $item->url }}">Acessar</a>

                            @if ($item->stamp === 1)
                                <a class="text-sm  btn btn-sm  bg-red-700  text-gray-200"
                                    href="/social/visible/{{ $item->id }}">
                                    desativar
                                </a>
                            @else
                                <a class="text-sm  btn btn-sm  bg-green-700  text-gray-200"
                                    href="/social/visible/{{ $item->id }}">
                                    Ativar
                                </a>
                            @endif

                            {{-- <form action="/social/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"
                                        class="text-sm  btn btn-sm text-gray-200 bg-red-700">
                                        Excluir
                                    </button>
                                </form> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- redes sociais --}}
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <span class="relative text-white">Social</span>
                        </span>
                    </h2>
                    <p>"Redes sociais ativadas aparecem em seu website para o visitante"</p>
                    <a href="/social/create" class="btn btn-primary">Nova Rede Social</a>
                </div>
                <div class="relative grid gap-8 row-gap-5 mb-8 md:row-gap-8 lg:grid-cols-4 sm:grid-cols-2">
                    <div class="absolute inset-0 flex items-center justify-center sm:hidden lg:flex">
                        <div class="w-px h-full bg-gray-300 lg:w-full lg:h-px"></div>
                    </div>
                    @foreach ($data['social'] as $item)
                        <div
                            class="p-5 duration-300 transform
                        @if ($item->stamp === 1) bg-gray-200
                        @else
                            bg-gray-900 text-white @endif
                       border rounded shadow-sm hover:-translate-y-2">
                            <div class="flex items-center justify-between mb-2">
                                <p class="text-lg font-bold leading-5 ">{{ $item->name }}</p>
                                <p
                                    class="flex items-center justify-center w-6 h-6 font-bold rounded text-white bg-indigo-500">
                                    {{ $item->id }}
                                </p>
                            </div>

                            <a class="text-sm  btn btn-sm  bg-indigo-700  text-gray-200"
                                href="{{ $item->url }}">Acessar</a>

                            @if ($item->stamp === 1)
                                <a class="text-sm  btn btn-sm  bg-red-700  text-gray-200"
                                    href="/social/visible/{{ $item->id }}">
                                    desativar
                                </a>
                            @else
                                <a class="text-sm  btn btn-sm  bg-green-700  text-gray-200"
                                    href="/social/visible/{{ $item->id }}">
                                    Ativar
                                </a>
                            @endif

                            {{-- <form action="/social/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"
                                        class="text-sm  btn btn-sm text-gray-200 bg-red-700">
                                        Excluir
                                    </button>
                                </form> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- pedidos --}}
            <div id="pedidos" class="overflow-x-auto">
                <h1 class="text-2xl font-bold">Agendamentos</h1> <br>
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>service_id</th>
                            <th>whatsapp</th>
                            <th>price</th>
                            <th>short_description</th>
                            <th>long_description</th>
                            <th>image</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['orders'] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->service_id }}</td>
                                <td>{{ $item->whatsapp }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->short_description }}</td>
                                <td>{{ $item->long_description }}</td>
                                <td>{{ $item->image }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{-- posts --}}
            <div class="bg-gray-900">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2 id="posts"
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <span class="relative text-white">Posts</span>
                        </span>
                    </h2>
                    <a href="/posts/create" class="btn btn-primary">Novo Post</a>
                </div>
                <div
                    class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                    <div
                        class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
                        <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-gray-800">
                            <circle fill="currentColor" fill-opacity="0.4" cx="44" cy="44"
                                r="15.5">
                            </circle>
                            <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44"
                                r="44">
                            </circle>
                            <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44"
                                r="37.5"></circle>
                            <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44"
                                r="29.5"></circle>
                            <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44"
                                r="22.5"></circle>
                        </svg>
                    </div>
                    <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($data['posts'] as $item)
                            <div
                                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">
                                <p class="font-semibold text-gray-200">
                                    {{ $item->title }}
                                </p>
                                <a class="text-sm  btn btn-sm text-gray-200 bg-indigo-700"
                                    href="/blog/{{ $item->id }}">Ver mais</a>
                                <a class="text-sm  btn btn-sm text-gray-200 bg-red-700"
                                    href="/posts/delete/{{ $item->id }}">Excluir</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- serviços --}}
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <span id="services" class="relative text-white">Serviços</span>
                        </span>
                    </h2>
                    <a href="/services/create" class="btn btn-primary">Novo Serviço</a>
                </div>
                <div
                    class="grid max-w-md gap-10 row-gap-8 lg:max-w-screen-lg sm:row-gap-10 lg:grid-cols-3 xl:max-w-screen-lg sm:mx-auto">
                    @foreach ($data['services'] as $item)
                        <div class="flex flex-col transition duration-300 bg-white rounded shadow-sm hover:shadow">
                            <div class="relative w-full h-48">
                                <img src="{{ url('storage/services') }}/{{ $item->image }}"
                                    class="object-cover w-full h-full rounded-t" alt="Plan" />
                            </div>
                            <div class="flex flex-col justify-between flex-grow p-8 border border-t-0 rounded-b">
                                <div>
                                    <div class="text-lg font-semibold">{{ $item->name }}</div> <br>
                                    <p class="text-sm text-indigo-900">
                                        {{ $item->short_description }}
                                    </p> <br>
                                    <p class="text-sm text-gray-900">
                                        {{ $item->long_description }} </p>
                                    <div class="mt-1 mb-4 mr-1 text-2xl font-bold sm:text-3xl text-indigo-900">
                                        R$ {{ $item->price }}
                                    </div>
                                </div>
                                <form action="/services/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-gray-400 hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- wiki --}}
            <div class="">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <span id="wiki" class="relative text-white">Nova Wiki</span>
                        </span>
                    </h2>
                    <a href="/wiki/create" class="btn btn-primary">Nova Wiki</a>
                </div>
                <div class="works px-10  py-2">
                    @foreach ($data['wiki'] as $item)
                        <div class="badge badge-info gap-2">

                            <form action="/wiki/delete" method="post">
                                <input type="hidden" name="name" value="{{ $item->name }}">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="inline-block w-4 h-4 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>

                                </button>
                            </form>
                            {{ $item->title }}
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- final content page --}}
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu p-4 overflow-y-auto w-80 bg-base-100">
                <!-- Sidebar content here -->
                <li><a>Perfil</a></li>
                <li><a>Pedidos</a></li>
                <li><a>Posts</a></li>
                <li><a>Serviços</a></li>
                <li><a>Redes Sociais</a></li>
                <li><a>wiki</a></li>

            </ul>

        </div>
    </div>
</body>

</html>

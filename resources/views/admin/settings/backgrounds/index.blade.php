<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="antialiased">
    {{-- if exists session sucsses --}}
    @if (session('success'))
        <div class="alert alert-success shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @elseif (session('error'))
        <div class="alert alert-error shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif
    <div class="create flex p-2 items-center">
        <form enctype="multipart/form-data" action="{{ route('admin.bagkckroundsSettings.store') }}" method="post"
            class="py-10 px-10 w-4/12">
            @csrf
            <h1 class="text-2xl font-black">Selecione photo de capa de seu website</h1>
            <hr>

            <div class="label mt-10">Titulo:</div>
            <input type="text" name="title" placeholder="Titulo"
                class="input input-bordered input-primary w-full max-w-xs" /><br>
            <small>defina um nome ou titulo de marcação para sua imagem</small>
            <div class="label">Imagem:</div>
            <input type="file" name="image" placeholder="image"
                class="input input-bordered input-primary w-full max-w-xs" />
            <div class="flex mt-4">
                <button type="submit" class="btn btn-success text-white">Criar</button>
                {{-- <button type="submit" class="btn btn-error text-white ml-5">Cancelar</button> --}}
            </div>
        </form>
        <div class="bakgrounds-list flex flex-wrap">
            @foreach ($backgrounds as $key => $item)
                <div class="card card-compact w-96 bg-base-100 shadow-xl m-2">
                    <figure><img src="{{ url('storage/backgrounds') }}/{{ $item->image }}"
                            alt="Image: {{ $item->image }}" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $item->title }}</h2>
                        @if ($item->isActive)
                            <div class="card-actions justify-end">
                                <form action="{{ route('admin.backgroundsSettings.active') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="isActive" value="0">
                                    <input type="hidden" name="background_id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-primary">Desativar</button>
                                </form>
                            </div>
                        @else
                            <div class="card-actions justify-end">
                                <form action="{{ route('admin.backgroundsSettings.active') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="isActive" value="1">
                                    <input type="hidden" name="background_id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-primary">Ativar</button>
                                </form>
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

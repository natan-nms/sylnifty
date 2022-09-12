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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="">

    {{-- if exists session sucsses --}}
    @if (session('success'))
    <div class="alert alert-success shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{ session('success') }}</span>
        </div>
      </div>
    @elseif (session('error'))
    <div class="alert alert-error shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{ session('error') }}</span>
        </div>
      </div>
    @endif
    <div class="create">
        <form enctype="multipart/form-data" action="/services" method="post" class="py-10 px-10 w-4/12">
            @csrf
            <h1 class="text-2xl font-black">Cadastre um novo Serviço</h1>
            <hr>
            <div class="label mt-10">Nome:</div>
            <input type="text" name="name" placeholder="Nome" class="input input-bordered input-primary w-full max-w-xs" />

            <div class="label mt-10">Preço:</div>
            <input type="text" name="price" placeholder="ex: 1.000,00" class="input input-bordered input-primary w-full max-w-xs" />

            <div class="label mt-10">Breve descrição:</div>
            <input type="text" name="short_description" placeholder=". . ." class="input input-bordered input-primary w-full max-w-xs" />

            <div class="label">Imagem:</div>
            <input type="file" name="image" placeholder="image" class="input input-bordered input-primary w-full max-w-xs" />

            <div class="label">Conteúdo</div>
            <textarea name="long_description" class="textarea textarea-primary" cols="72" placeholder="digite seu texto"></textarea>

            <div class="flex ">
                <button type="submit" class="btn btn-success text-white">Criar</button>
  {{-- <button type="submit" class="btn btn-error text-white ml-5">Cancelar</button> --}}            </div>
        </form>
    </div>
</body>

</html>

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
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 ">
        <div class="p-8 rounded shadow-xl sm:p-16 bg-gray-700">
            @if ($error)
                <div class="flex flex-col lg:flex-row ">
                    <div class="mb-6 lg:mb-0 lg:w-1/2 lg:pr-5">
                        <h2
                            class="font-sans text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl sm:leading-none">
                            {{ $error['title'] }}<br class="hidden md:block" />
                        </h2>
                    </div>
                    <div class="lg:w-1/2">
                        <p class="mb-4 text-base text-gray-400">
                            {{ $error['message'] }}
                        </p>
                        <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold transition-colors duration-200 text-purple-400 hover:text-purple-800">
                            Voltar</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>

</html>

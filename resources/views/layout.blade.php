<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        theme: {
                            blue: '#55778F',
                            black: '#1C1C1F',
                            red: '#9d174d',
                            cian: '#155e75',
                            black1: '#1C1C1F',
                        }

                    }
                }
            }
        }
    </script>

    <title>MundoLibro</title>
</head>


<body class="bg-white h-screen">

<header class="bg-theme-black p-5 flex gap-5">
    <h1 class="text-white text-5xl">Mundo Libro</h1>
    <input class="w-2/5 p-3" placeholder="Buscar..." type="text">
    <button class="bg-theme-cian p-3 "> Iniciar sesion</button>
    <button class="bg-theme-red p-3">Registrarse</button>
</header>
<div class="flex h-full">
    <div class="bg-theme-blue h-full w-1/4 p-5">
        <h2 class="text-theme-red text-3xl "><b>Categorías </b></h2>
    </div>

    <div class="flex flex-col w-full">
        <main class="grow p-5 w-full">
            @yield('content')
        </main>
        <footer class="bg-theme-black1 p-5 text-center w-full">
            <p class="text-white text-3xl ">mundo libro tu libreria favorita desde el 2022</p>
        </footer>
    </div>


</div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Home / Development Site / Touru Works 2024</title>
        <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <style>
            body{
                background-color: #171618;
            }
        </style> 
 <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased"> 
        <div class="h-screen flex items-center justify-center mx-4">
            <div class="bg-card px-8 py-4 rounded-xl hover:cursor-pointer shadow-lg hover:shadow-yellow-500/20 animation-all duration-1000 border border-gray hover:border-yellow-400/50">
                <div class="relative h-[160px] w-full overflow-hidden rounded-md mb-4">
                    <img src="https://media1.tenor.com/m/uNb4xaRRK9UAAAAd/bangboo-snif.gif" alt="Deskripsi gambar" class="absolute inset-0 object-cover w-full h-full">
                  </div>
                 <h1 class="text-xl font-bold text-white">This site under construction!</h1>
                <p class="text-subtext font-light text-sm ">Please visit again when site already ready to use,<br> you can visit our official site here <a href="https://touruworks.id" class="underline">touruworks.id</a>
                    
                </p>
                <div class="flex justify-end mt-2">
                    <p class="text-subtext font-medium text-xs text-end">
                        Regard, Touru Works 2024</p>
                </div>
            </div>
        </div>
        
    </body>
</html>

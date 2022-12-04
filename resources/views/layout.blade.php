<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#003366",
                            header: "#336699",
                            bok: "#6699FF",
                        },
                    },
                },
            };
        </script>
        <title>LaraGigs | Find Laravel Jobs & Projects</title>
    </head>
    <body class="mb-24">
        <nav href="/" class=" justify-between items-center  bg-header">
           {{-- zdjecie --}}
           <img
            class="hidden w-20 h-20 mr-6 ml-4 md:block rounded"
            
            src="{{
                asset('no_image.jpg')
            }}"
            alt=""
            />
           <a href="/"
           >asd</a>
        </nav>
        
           <article class="flex flex-row">
            <div class="text-center basis-5/6 mt-4">
            @yield('content')
            </div>
            <div class="bg-bok basis-1/6 min-h-screen">
                <ul class="ml-4 mt-5 text-white">
                    <li ><a href="/?tag=Outerwear">Outerwear</a></li>
                    <li><a href="/?tag=Puffer_jackets">Puffer jackets</a></li>
                    <li><a href="/?tag=Overshirts">Overshirts</a></li>
                    <li><a href="/?tag=Hoodies">Hoodies</a></li>
                    <li><a href="/?tag=Sweaters">Sweaters</a></li>
                    <li><a href="/?tag=Vests">Vests</a></li>
                    <li><a href="/?tag=Shirts">Shirts</a></li>
                    <li><a href="/?tag=T-shirts">T-shirts</a></li>
                    <li><a href="/?tag=Jeans">Jeans</a></li>
                    <li><a href="/?tag=Pants">Pants</a></li>
                    <li><a href="/?tag=Cargo">Cargo</a></li>
                    <li><a href="/?tag=Tracksuit">Tracksuit</a></li>
                    <li><a href="/?tag=Shorts">Shorts</a></li>
                </ul>
            </div>
            </article>
            
       
        <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        
    </footer>
    
</body>
</html>
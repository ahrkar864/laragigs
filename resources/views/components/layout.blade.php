<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.jpg" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Ahrkar | Find or Post developers</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"><img class="w-24" src="{{asset('images/logo.jpg')}}" alt="" class="logo"/></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-solid fa-home"></i>HOME</a>
                </li>
                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-solid fa-tablet"></i>Web</a>
                </li>
                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-solid fa-mobile"></i>Android</a>
                </li>
                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-brands fa-apple"></i>IOS</a>
                </li>
                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-solid fa-globe"></i>Other</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-laravel"><i class="fa-solid fa-message"></i>Contact</a>
                </li>
                @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li>
                    <a href="/listings/view" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>Dashboard</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit"><i class="fa-solid fa-door-closed"></i>Logout</button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
                </li>

                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
                @endauth

            </ul>
        </nav>
    <main>
    {{$slot}}
    </main>
    
    <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved ,Design and developed by https://github.com/ahrkar864</p>

    <a href="listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</footer>
<x-flash-message />
</body>
</html>
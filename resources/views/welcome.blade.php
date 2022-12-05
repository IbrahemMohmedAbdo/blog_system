<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Site</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles-->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{URL::asset('assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body class="">
        <div class="container-fluid text-center align-center">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log in</a>
<br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



        </div>




        <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
    </body>
</html>

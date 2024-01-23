<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1920">

        <title>Purinusa Kembangan Admin</title>
        <link rel="icon" type="image/x-icon" href="{{url('/icon/main-icon.ico')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />

        <link rel="stylesheet" type="text/css" href="{{url('/css/cms-style.css')}}">

        @yield('style')

        @vite('resources/css/app.css')
        @vite(['resources/scss/style.scss'])
    </head>
    <body>
        <div id="root">
            <!-- App Layout-->
            <div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
                <main class="h-full">
                    <div class="page-container relative h-full flex flex-auto flex-col">
                        <div class="h-full">
                            <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                                <div class="card min-w-[320px] md:min-w-[450px] card-shadow" role="presentation">
                                    <div class="card-body md:p-10">
                                        <div class="text-center">
                                            <div class="logo">
                                                <!-- <img class="mx-auto" src="img/logo/logo-light-streamline.png" alt="Elstar logo"> -->
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <h3 class="mb-1">Welcome back!</h3>
                                                <p>Please enter your credentials to sign in!</p>
                                            </div>
                                            @if(session()->has('status'))
                                                @if (session()->get('status') == 'fail')
                                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 " role="alert">
                                                    {{ session()->get('message') }}
                                                </div>
                                                @elseif (session()->get('status') == 'success')
                                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                                    {{ session()->get('message') }}
                                                </div>
                                                @endif
                                            @endif
                                            <div>
                                                <form action="{{route('login-action')}}" method="POST">
                                                    @csrf
                                                    <div class="form-container vertical">
                                                        <div class="form-item vertical">
                                                            <label class="form-label mb-2">User Name</label>
                                                            <div>
                                                                <input
                                                                    id="email"
                                                                    class="input"
                                                                    type="email"
                                                                    name="email"
                                                                    autocomplete="off"
                                                                    placeholder="User Name"
                                                                    value=""
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="form-item vertical">
                                                            <label class="form-label mb-2">Password</label>
                                                            <div>
                                                                <span class="input-wrapper">
                                                                    <input
                                                                        class="input pr-8"
                                                                        type="password"
                                                                        name="password"
                                                                        autocomplete="off"
                                                                        placeholder="Password"
                                                                        value=""
                                                                    >
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-solid w-full" type="submit">Sign In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>                
            </div>
    
    
            <!-- Core Vendors JS -->
            <script src="{{url('/js/vendors.min.js')}}"></script>
            <!-- Core JS -->
            <script src="{{url('/js/app.min.js')}}"></script>
        </div>
    </body>
</html>

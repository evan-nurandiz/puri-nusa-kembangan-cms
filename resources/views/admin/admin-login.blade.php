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
            <div class="app-layout-blank flex flex-auto flex-col h-[100vh] bg-cover" style="background-image: url('{{ asset('assets/images/background-auth.svg')}}');">
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
                                            <img src="{{url('/assets/icon/main-logo.svg')}}" alt="" class="mx-auto w-[180.524px] h-[72px] mb-[16px]">
                                            <div class="mb-4">
                                                <h3 class="text-[#344643] text-[16px] font-bold leading-[24px]">Welcome back!</h3>
                                                <p class="text-[#8A898E] text-[14px] font-bold leading-[24px]">Please enter your credentials to sign in!</p>
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
                                                            <label class="form-label mb-2">Email</label>
                                                            <div class="relativ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="absolute z-10 bottom-[16px] left-[16px]">
                                                                    <path d="M14.5 5V12C14.5 12.8284 13.8284 13.5 13 13.5H3C2.17157 13.5 1.5 12.8284 1.5 12V5M14.5 5C14.5 4.17157 13.8284 3.5 13 3.5H3C2.17157 3.5 1.5 4.17157 1.5 5M14.5 5V5.16181C14.5 5.6827 14.2298 6.1663 13.7861 6.43929L8.78615 9.51622C8.30404 9.8129 7.69596 9.8129 7.21385 9.51622L2.21385 6.43929C1.77023 6.1663 1.5 5.6827 1.5 5.16181V5" stroke="#8A898E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                <input
                                                                    id="email"
                                                                    class="pl-[42px] pr-[16px] py-[13px] w-full rounded-[6px] border-[#8A898E] border-[0.5px] text-[16px] text-[#8A898E]"
                                                                    type="email"
                                                                    name="email"
                                                                    autocomplete="off"
                                                                    placeholder="Email"
                                                                    value=""
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="form-item vertical">
                                                            <label class="form-label mb-2">Password</label>
                                                            <div class="relativ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none" class="absolute z-10 bottom-[16px] left-[16px]">
                                                                    <path d="M14.5 5V12C14.5 12.8284 13.8284 13.5 13 13.5H3C2.17157 13.5 1.5 12.8284 1.5 12V5M14.5 5C14.5 4.17157 13.8284 3.5 13 3.5H3C2.17157 3.5 1.5 4.17157 1.5 5M14.5 5V5.16181C14.5 5.6827 14.2298 6.1663 13.7861 6.43929L8.78615 9.51622C8.30404 9.8129 7.69596 9.8129 7.21385 9.51622L2.21385 6.43929C1.77023 6.1663 1.5 5.6827 1.5 5.16181V5" stroke="#8A898E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                <input
                                                                    id="password"
                                                                    class="pl-[42px] pr-[16px] py-[13px] w-full rounded-[6px] border-[#8A898E] border-[0.5px] text-[16px] text-[#8A898E]"
                                                                    type="password"
                                                                    name="password"
                                                                    autocomplete="off"
                                                                    placeholder="Password"
                                                                    value=""
                                                                >
                                                            </div>
                                                        </div>
                                                        <button class="btn bg-[#344643] text-[16px] text-[#FFFFFF] font-bold w-full" type="submit">Login</button>
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

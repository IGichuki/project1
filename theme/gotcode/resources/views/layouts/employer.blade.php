<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Conect</title>
    </head>
    <body class="text-white">
       <header class="bg-headerGrey w-full h-[80px] border-b-2 pt-6 px-6">
        <div class="flex place-items-center justify-between">
            <p class="text-xl font-medium">Conect</p>
            <ul class="flex gap-x-5">
                <a href="#">
                    <div class="flex place-items-center">
                        <img src="{{ asset('assets/message.svg')}}" alt="" class="w-[18px] mr-2">
                        Messages
                    </div>
                </a>
                <a href="/">
                    <div class="flex place-items-center">
                        <img src="{{ asset('assets/power.svg')}}" alt="" class="h-[16px] mr-2">
                        Logout
                    </div>
                </a>
            </ul>
        </div>
       </header> 

       <div class="bg-bodyGrey w-full h-full flex">
            <div class="pt-5 px-6 w-[180px] border-r-2">
                <ul class="flex flex-col gap-y-4 h-screen">
                    <li>
                        <a href="/dashboard">
                            <div class="flex place-items-center">
                                <img src="{{ asset('assets/dashboard.svg')}}" alt="" class="w-[16px] mr-2">
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <div class="flex place-items-center">
                                <img src="{{ asset('assets/user.svg')}}" alt="" class="w-[18px] mr-2">
                                Profile
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/attachments">
                            <div class="flex place-items-center">
                                <img src="{{ asset('assets/file.svg')}}" alt="" class="h-[18px] mr-2">
                                Attachments
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/settings">
                            <div class="flex place-items-center">
                                <img src="{{ asset('assets/settings.svg')}}" alt="" class="w-[18px] mr-2">
                                Settings
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="py-8 px-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>

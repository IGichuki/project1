<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Conect - Login</title>
</head>
<body class="bg-bodyGrey text-white">
    <p class="absolute text-2xl top-5 left-5">C.O.N.E.C.T</p>
    <div class="flex flex-col justify-center place-items-center h-screen">
        <form action="{{route('register')}}" method="post" class="flex flex-col place-items-center border-[1px] py-10 px-12 rounded-lg shadow-custom">
            @csrf
            <p class=" text-3xl mb-7">Signup</p>
            <div class="mb-4">
                <p class="text-sm mb-2">Full Name</p>
                <input 
                    type="text" 
                    name="fullName" 
                    id="fullname" 
                    placeholder="fullName"
                    class="bg-transparent text-white py-1 px-3 outline-none w-[250px] border-[1px] border-white rounded-md"
                >
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Email</p>
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    placeholder="Email"
                    class="bg-transparent text-white py-1 px-3 outline-none w-[250px] border-[1px] border-white rounded-md"
                >
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Password</p>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="Password"
                    class="bg-transparent text-white py-1 px-3 outline-none w-[250px] border-[1px] border-white rounded-md"
                >
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Confirm Password</p>
                <input 
                    type="password" 
                    name="confirm-password" 
                    id="confirm-password" 
                    placeholder="Confirm Password"
                    class="bg-transparent text-white py-1 px-3 outline-none w-[250px] border-[1px] border-white rounded-md"
                >
            </div>
            <button type="submit" class="border-[1px] py-2 px-6 rounded-md w-fit mb-4">Signup</button>
            <a href="/login" class="text-sm">Already have an account? <span class="underline">Login</span></a>
            @if ($errors->any())
            <div role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="mt-3 text-red text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</body>
</html>
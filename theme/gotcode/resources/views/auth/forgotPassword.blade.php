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
        <form action="" method="post" class="flex flex-col place-items-center border-[1px] py-10 px-12 rounded-lg shadow-custom">
        <p class=" text-2xl mb-7">Forgot Password</p>
            <div class="mb-4">
                <p class="text-sm mb-2">Enter your email</p>
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    placeholder="Email"
                    class="bg-transparent text-white py-1 px-3 outline-none w-[250px] border-[1px] border-white rounded-md"
                >
            </div>
            <button type="submit" class="border-[1px] py-2 px-6 rounded-md w-fit mb-4">Reset</button>
                <a href="/login" class="text-sm underline">Back to Login</a>
        </form>
    </div>
</body>
</html>
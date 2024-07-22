@extends('layouts.layout')

@section('content')
        <p class="text-4xl">Profile</p>
        <div class="pt-5">
            <div class="w-[80px] h-[80px] border-[2px] rounded-full mb-8">
                <!-- User profile image will come here -->
            </div>
            <div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Username</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="John">
                </div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Full Name</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="John Doe">
                </div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Email</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="johndoe@gmail.com">
                </div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Gender</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="male/female">
                </div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Date of Birth</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="24/05/2000">
                </div>
                <div class="w-[280px] flex justify-between place-items-center mb-4">
                    <p>Nationality</p>
                    <input type="text"  class="ml-6 bg-transparent border-[1px] border-white rounded-md outline-none text-sm py-1 px-2" placeholder="Kenyan">
                </div>
            </div>   
        </div>    
@endsection

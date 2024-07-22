@extends('layouts.employer')

@section('content')
    <p class="text-2xl font-medium mb-5">Post a New Job</p>
    <div class="border-[1px] border-white py-4 px-8 rounded-xl">
        <form action="{{ route('admin-dashboard') }}" method="post">
            @csrf
            <div class="mb-4">
                <p class="text-sm mb-2">Job Title</p>
                <input type="text" name="jobTitle" id="jobTitle" class="outline-none bg-transparent border-[1px] border-white rounded-md py-1 px-4 w-[500px]">
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Job Description</p>
                <textarea 
                    rows="5"
                    type="text" 
                    name="jobDesc" 
                    id="jobDesc" 
                    class="outline-none bg-transparent border-[1px] border-white rounded-md py-1 px-4 w-[500px]"
                ></textarea>
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Salary</p>
                <input type="number" min="0" name="salary" id="salary" class="outline-none bg-transparent border-[1px] border-white rounded-md py-1 px-4 w-[500px]">
            </div>
            <div class="mb-4">
                <p class="text-sm mb-2">Work Location</p>
                <div class="border-[1px] border-white rounded-md py-1 pr-3 w-[500px]">
                    <select name="workLocation" id="workLocation" class="bg-transparent outline-none pl-4 w-full">
                        <option value="onsite" class="text-black">On-site</option>
                        <option value="hybrid" class="text-black">Hybrid</option>
                        <option value="remote" class="text-black">Remote</option>
                    </select>
                </div>
            </div>
            <div class="w-full flex justify-end mt-10">
                <button type="submit" class="border-[1px] py-2 px-6 rounded-md w-fit mb-4">Create</button>
            </div>
        </form>
    </div>
@endsection
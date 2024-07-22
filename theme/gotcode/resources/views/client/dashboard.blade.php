@extends('layouts.layout')

@section('content')
    <div class="flex w-[350px] border-[1px] rounded-full py-[3px] pl-4 pr-3 overflow-hidden">
        <input type="text" name="search" id="search" class="bg-transparent outline-none w-full text-sm">
        <img src="{{ asset('assets/search.svg')}}" alt="" class="w-[16px] ml-2">
    </div>
    <div class="mt-10 pb-20 flex gap-10 flex-wrap">
        @foreach($postedJobs as $job)
        <a href="/{{$job->company}}/ {{ $job->job_title }}">
            <div class="pt-5 pb-7 px-6 border-[1px] rounded-lg w-[400px]">
                <p class="font-medium text-xl mb-5">{{ $job->job_title }} - <span class="font-normal">{{ $job->work_location }}</span></p>
                <p class="mb-5">{{ $job->job_desc }}</p>
                <div class="flex justify-between">
                    <p>{{ $job->company }}</p>
                    <p> $ {{ number_format($job->salary) }}</p>
                    <p>{{ date('d M, Y', strtotime($job->created_at)) }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
   
@endsection


@extends('layout')
@section('content')
@include('aboutHeader')

<div class="w-full flex flex-wrap p-6">
    <img src="faq-img.png" alt="" class="p-10 w-full md:w-5/12">
    <div class="w-full md:w-7/12 px-5 md:px-20 py-10 flex items-center flex-col gap-5">
        <div class="bg-blue-400 text-white px-4 py-4 flex rounded-lg font-semibold border border-gray-700 w-full">
            <span>01.</span>
            <div class="flex gap-5 md:gap-20 items-center">
                <p class="flex">How is Wahter providing drinking water at Re 1 &amp; 2?</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 self-end">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </div>
        </div>

        <div class="bg-blue-400 text-white p-4 flex rounded-lg font-semibold border border-gray-700 w-full">
            <span>02.</span>
            <div class="flex gap-5 md:gap-20 items-center">
                <p class="flex">How is Wahter providing drinking water at Re 1 &amp; 2?</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 self-end">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
</div>
@endsection

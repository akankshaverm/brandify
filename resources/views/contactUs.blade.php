@extends('layout')
@section('content')
@include('aboutHeader')
<div class="p-10">
    <div class="  text-center">
        <h2 class="text-blue-700 text-3xl font-bold text-center">Do you have any
            <span class="  text-black">question?</span>
        </h2>
        <p class="text-gray-500">Get ready to witness a WAHTERFUL experience Share your details & we will get back to you.</p>


    </div>
    <div class=" w-full flex gap-5 px-[10%] py-5">
        <img src="contact-img.jpg" alt="">




        <form action="#" method="POST" class=" w-full">
            <!-- Name Input -->
            <div class="grid grid-cols-2 gap-3">
                <div class="mb-4 ">
                
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-blue-200 text-gray-600 " placeholder="Your name">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700"> Phone</label>
                    <input type="text" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="phone number">
                </div>
            </div>


            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your email">
            </div>



            <!-- Message Input -->
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your message"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Send Message
                </button>
            </div>


        </form>
    </div>
</div>


@endsection
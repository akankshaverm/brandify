@extends('layout')
@section('content')
@include('aboutHeader')

<div class="w-full p-10 flex gap-10">

    <div class="w-4/12">
        <div class="border border-sky-500 w-full h-[400px] rounded-lg bg-[#c1ebea]">

        </div>
    </div>
    <div class="w-8/12">
        <div class=" flex flex-col gap-5">
            <h2 class="text-3xl font-mediam text-[#66c5c3]">Manufacturer Callout</h2>
            <img src="partnerwith-1.webp" alt="" class="roundede-lg ">
            <p class="text-lg">We're looking for partners to transform packaging and champion clean water accessibility. Join the<br> #WahterRevolution2.0 to align your products with a purpose.</p>
            <p class="text-lg">Ready to shape the future with us?</p>
            <a href="" class="font-semibold text-xl  "> Let's collaborate!</a>
        </div>

    </div>
</div>
<div class="w-full h-[500px]" style="background-image: url('public/partner-form-shape.png')">
    <img src="hand.jpeg" alt="" class="w-full">

</div>



@endsection
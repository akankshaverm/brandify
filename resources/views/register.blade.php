@vite('resources/css/app.css')
<header class=" bg-slate-100 items-center flex-1 flex  justify-start py-2 px-[5%]">
    <div class=" flex gap-2 items-center">

        <a href="" class=" px-5 py-2 bg-teal-400 text-white  rounded-3xl hover:bg-teal-700 hover:underline">Registration</a>
        <a href="" class=" px-5 py-2 bg-teal-400 text-white rounded-3xl  hover:bg-teal-700 hover:underline">Login</a>
    </div>
    <div class=" flex justify-center items-center">
        <img src="brandifylogo-removebg-preview.png" height="150" width="150" alt="">


    </div>
</header>

<div class="   h-[500px]  w-1/2  bg-slate-500  m-16 rounded-2xl shadow-2xl">
    <span class=" text-center flex justify-center  text-5xl p-4 font-semibold text-white">Registration</span>
    <form action="">
        <div class=" p-5">
            <label for="" class=" text-slate-600 "></label>
            <input type="text" placeholder=" User Id" class=" px-3 py-2 bg-slate-200 rounded w-full mt-3 ">
            <div class=" flex justify-between">
                <label for="" class=" text-slate-600 mt-3"></label>
                <input type="email" placeholder="Email" class=" px-3 py-2 bg-slate-200 rounded w-full mt-3  ">


            </div>
        </div>
    </form>

</div>
@include("footer")
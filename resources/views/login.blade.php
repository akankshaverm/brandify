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
    <span class=" text-center flex justify-center  text-5xl p-4 font-semibold text-white">Log In</span>
    <form action="">
        <div class=" p-5">
            <label for="" class=" text-slate-600 "></label>
            <input type="text" placeholder=" Login Id" class=" px-3 py-2 bg-slate-200 rounded w-full mt-3 ">
            <div class=" flex justify-between">
                <label for="" class=" text-slate-600 mt-3"></label>
                <input type="text" placeholder="Password" class=" px-3 py-2 bg-slate-200 rounded w-full mt-3  ">


            </div>
        </div>
        <div class=" flex justify-between p-5">
            <img src="CaptchaImage.jpeg" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-teal-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>

            <input type="text" class=" px-3 py-4 border">

        </div>
    </form>

</div>
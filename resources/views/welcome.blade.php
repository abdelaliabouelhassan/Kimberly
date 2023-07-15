<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{asset('images/favicon.jpeg')}}" type="image/x-icon">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased pb-10 space-y-20 sm:space-y-40 ">
        {{-- style="background-image: url(/images/bg1624786138.png);    background-position: center;background-size: cover;background-repeat: no-repeat;" --}}
      <div class=" w-full p-5 md:p-10">
        <div class=" w-full pt-[100px] pb-[175px] overflow-hidden px-8 bg-gradient-to-r from-orange-600 to-orange-300 rounded-3xl md:rounded-[50px]" >
            <div class=" w-full max-w-[1140px] space-y-10 lg:space-y-0 mx-auto flex justify-center  lg:justify-between flex-wrap relative">
                <div class=" flex flex-col items-start space-y-5 lg:max-w-[665px] w-full ">
                    <div class=" w-24 h-24 rounded-full overflow-hidden ring ring-orange-100  ">
                      <img class=" w-full h-full object-cover" src="{{asset('images/logo.png')}}" class=" w-[100px]" alt="">
                    </div>
                    <h1 class=" text-white font-semibold text-xl  sm:text-6xl ">Kimberly Personal Ordering Services</h1>
                    <span class=" text-base sm:text-lg text-white text-opacity-75 font-medium">Welcome to Kimberly Personal Ordering Services! In a fast-paced world where convenience is key, we revolutionize your online ordering experience. Our dedicated team ensures that your needs and preferences are met . With our user-friendly calculator , you can effortlessly see how much it will cost to order your packages. Say goodbye to the hassle and wasted hours—and enjoy the stress-free, personalized, and reliable online ordering with Kimberly Personal Ordering Services.</span>
                    <div class=" flex items-center space-x-2 pt-10">
                     <span class="text-white text-base sm:text-2xl font-bold"> Find us on Instagram</span>
                      <a href="https://instagram.com/style_by_kimmy_boutique" target="_blank">
                        <img src="{{asset('images/instagram.png')}}" class=" w-[60px]" alt="">
                      </a>
                    </div>
                </div>
                <div class="  pt-10 lg:pt-0">
                    <img src="/images/header-right-image-home-031616246925.png" class=" max-w-md lg:max-w-2xl lg:absolute top-0 -right-[21rem]" alt="">
                </div>
            </div>
          </div>
      </div>

      <section class=" w-full max-w-[1140px] mx-auto  pt-56">
        <div class=" w-full relative">
            <div class="  w-full absolute flex -top-[17rem] ">
                <img src="/images/banco.png" class="max-w-[350px] mx-auto" alt="">
            </div>
            <div class="p-8 bg-[#f5fbff] rounded-xl max-w-[800px] mx-auto">
                <p class="text-xl  text-[#2EBF6D] font-bold mb-4">Your total cost includes customs taxes and my service fee.</p>
                <p class="mb-4  text-opacity-80 text-lg">If your order is over $1000, you will pay in full. If your total is under $1000, you will pay half of the total upfront. Once the items arrive and you receive them, you will pay the remaining half.</p>
                <p class="mb-4  text-opacity-80 text-lg">There are courier services available to deliver your packages. The rates range between $40 and $60. Alternatively, you can opt for TTPost delivery, which costs $30.</p>
                <p class="mb-4  text-opacity-80 text-lg">Meet-up points are also available for both collection and payments at the following locations:</p>
                <ul class="list-disc pl-8 mb-4">
                  <li class=" text-[#2EBF6D] ">Port of Spain</li>
                  <li class=" text-[#2EBF6D]">St. James</li>
                  <li class=" text-[#2EBF6D]">Morvant Junction</li>
                </ul>
                <p class="mb-4 text-lg">Online banking, bank deposits (fast deposit), or Western Union/MoneyGram are the other available payment options.</p>
              </div>
              
        </div>
      </section>

      <section class=" w-full relative px-4 sm:px-0"  id="app">
        {{-- <img src="/images/bg1624789713.png" class=" w-full absolute" alt=""> --}}
        <div class=" w-full max-w-[1440px]  mx-auto  relative space-y-28">
            <h1 class=" text-center text-6xl font-medium">Calculator</h1>
            <div class=" w-full flex flex-wrap justify-center items-center gap-y-20 gap-x-5">
                {{-- Temu calculator --}}
                <temu-calculator></temu-calculator>
                {{-- Shein calculator  --}}
                <shein-calculator></shein-calculator>
                {{-- Wig Calculator --}}
                <wig-calculator></wig-calculator>
                
            </div>
           
        </div>
      </section>

      <section class="w-full" >
        <div class=" px-2 sm:p-8 text-center  sm:mt-8 whitespace-nowrap">
            <p class=" text-lg sm:text-3xl font-bold mb-4">** <a href="https://wa.me/18682944117" class=" whitespace-nowrap text-orange-600 underline">Whatsapp me to get bank information</a> **</p>
          </div>
      </section>
    </body>
</html>


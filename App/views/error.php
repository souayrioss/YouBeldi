<?php require APPROOT .'/views/inc/header.php';?>

<section class="bg-black h-screen relative z-10 flex items-center">
    <div class="container">
        <div class="flex">
            <div class="w-full">
                <div class="mx-auto max-w-[500px] text-center my-auto">
                <h2 class=" font-extrabold text-white mb-3 text-[50px] sm:text-[90px] md:text-[150px] leading-none " >
                    404
                </h2>
                <h4 class="text-white font-semibold text-[24px] leading-tight mb-3 uppercase" >
                    Oops! Cette page est introuvable
                </h4>
                <p class="text-sm text-white mb-8 font-light uppercase ">
                    La page que vous recherchez peut-être supprimée
                </p>
                <a href="<?php echo URLROOT ;?>/clients" class=" text-base font-semibold text-white inline-block text-center border border-white  px-8 py-3 hover:bg-white hover:text-black hover:font-bold transition ">
                Go To Home
                </a>
                </div>
            </div>
        </div>
    </div>
    <div class=" absolute -z-10 w-full h-full top-0 left-0 flex justify-between items-center space-x-5 md:space-x-8 lg:space-x-14 " >
        <div class="w-1/3 h-full bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]" ></div>
        <div class="w-1/3 h-full flex">
            <div class=" w-1/2 h-full bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400] " ></div>
            <div class=" w-1/2 h-full bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400] "></div>
        </div>
        <div class="w-1/3 h-full bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
    </div>
</section>

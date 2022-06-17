<?php require APPROOT .'/views/inc/header.php';?>
<section class="w-screen grid grid-cols-6 content-start h-screen py-6 text-blue-300 bg-black">
    <article class="col-start-2 col-end-4 mt-20">
    <img class="w-52 mb-6" src="<?php echo URLROOT ;?>/img/logob.png" alt="logo"/>
        <h2 class="uppercase text-3xl font-semibold mb-10">Démarrer la session</h2>
        <form method="POST" action="<?php echo URLROOT; ?>/admins/index">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="userName" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-blue-300 appearance-none focus:outline-none focus:ring-0 focus:border-white peer" value="<?php  echo $data['userName']?>" placeholder=" " required="">
                <label for="userName" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">User name </label>
                <?php if(!empty($data['userName_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['userName_err']?></span>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-9 group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-blue-300 bg-transparent border-0 border-b-2 border-blue-300 appearance-none  focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " required="">
                <label for="password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-white  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                <?php if(!empty($data['password_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['password_err']?></span>
                <?php endif; ?>
            </div>
            <div class="flex gap-3">
                <button type="submit" class="uppercase w-4/5 text-base font-semibold text-white inline-block text-center bg-blue-300  py-3 hover:bg-blue-200 ">se connecter</button>
            </div>
        </form>
    </article>
</section>
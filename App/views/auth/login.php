<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<section class="w-screen grid grid-cols-12 content-center h-[550px]">
    <article class="col-start-2 col-end-5 ">
        <h2 class="uppercase text-3xl font-semibold mb-10">Démarrer la session</h2>
        <form method="POST" action="<?php echo URLROOT; ?>/clients/login">
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['email']?>" placeholder=" " required="">
                <label for="email" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300 peer-focus:dark:text-blue-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                <?php if(!empty($data['email_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['email_err']?></span>
                <?php endif; ?>
            </div>
            <div class="relative z-0 w-full mb-9 group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                <label for="password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300 peer-focus:dark:text-blue-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                <?php if(!empty($data['password_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['password_err']?></span>
                <?php endif; ?>
            </div>
            <div class="flex gap-3">
                <button type="submit" class="uppercase w-4/5 text-base font-semibold text-white inline-block text-center bg-black border border-white py-3 hover:bg-gray-900 ">se connecter</button>
                <button type="submit" class="uppercase w-1/5 text-xl font-semibold inline-block text-center bg-white border border-black  hover:bg-gray-900 hover:text-white"><i class="fa-brands fa-google"></i></button>
            </div>
        </form>
    </article>
    <article class="col-start-6 col-end-10">
        <h2 class="uppercase text-3xl font-semibold mb-10">Inscrivez-vous</h2>
        <p class="uppercase text-sm font-normal my-6 text-gray-700">Si vous n'avez pas encore de compte d'utilisateur de zara.com, utilisez cette option pour accéder au formulaire d'inscription. </p>
        <p class="uppercase text-sm  font-normal mb-10  text-gray-700">Nous vous demanderons les informations nous permettant d'accélérer le processus d'achat.</p>
        <a href="<?php echo URLROOT ;?>/clients/register" class=" uppercase text-base font-semibold text-white inline-block text-center bg-black border border-white  px-16 py-3 hover:bg-gray-900 ">créer un compte</a>
    </article>     
</section>
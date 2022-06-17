<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>


<section class="w-screen grid grid-cols-12 content-center h-[550px]">
    <article class="col-start-2 col-end-6 ">
        <h2 class="uppercase text-3xl font-semibold mb-8">Informations personnelles</h2>
        <form method="POST" action="<?php echo URLROOT; ?>/clients/register">
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email" class="block py-2.5 px-0 w-1/2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['email']?>" placeholder=" " required="">
                <label for="email" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail adresse</label>
                <?php if(!empty($data['email_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['email_err']?></span>
                <?php endif; ?>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['password']?>" placeholder=" " required="">
                    <label for="password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mot de passe</label>
                    <?php if(!empty($data['password_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['password_err']?></span>
                    <?php endif; ?>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="repeat_password" id="repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['repeat_password']?>" placeholder=" " required="">
                    <label for="repeat_password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirme Mot de passe</label>
                    <?php if(!empty($data['repeat_password_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['repeat_password_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="prenom" id="prenom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['prenom']?>" placeholder=" " required="">
                    <label for="prenom" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prénom</label>
                    <?php if(!empty($data['prenom_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['prenom_err']?></span>
                    <?php endif; ?>
                </div>
                <div class="relative z-0 w-full mb-10 group">
                    <input type="text" name="nom" id="nom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['nom']?>" placeholder=" " required="">
                    <label for="nom" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    <?php if(!empty($data['nom_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['nom_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex items-start mb-4">
                <input id="check1" name="check1" type="checkbox" value="" class="w-4 h-4 accent-black bg-gray-700 border-blue-500  focus:outline-none " checked>
                <label for="check1" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Je souhaite recevoir des communications commerciales personnalisées de la part de youBeldi via e-mail.</label>
            </div>

            <div class="flex items-start mb-4">
                <input id="check2" name="check2" type="checkbox"  value="" class="w-4 h-4 accent-black  bg-gray-100 border-blue-500  focus:outline-none " checked>
                <label for="check2" class="ml-2 text-xs font-medium text-gray-900  w-2/3">J'ai lu et compris la Politique de confidentialité et en matière de cookies.</label>
            </div>
            <button type="submit" name="register" class="uppercase text-base font-semibold text-white inline-block text-center bg-black border border-white  px-20 py-3 hover:bg-gray-900 ">créer un compte</button>
        </form>
    </article>
</section>
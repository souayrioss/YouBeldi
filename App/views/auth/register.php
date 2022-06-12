<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>


<section class="w-screen grid grid-cols-12 content-center h-[550px]">
    <article class="col-start-2 col-end-6 ">
        <h2 class="uppercase text-3xl font-semibold mb-8">Informations personnelles</h2>
        <form>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="floating_email" class="block py-2.5 px-0 w-1/2 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail adresse</label>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mot de passe</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                    <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirme Mot de passe</label>
                </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prénom</label>
                </div>
                <div class="relative z-0 w-full mb-10 group">
                    <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required="">
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                </div>
            </div>
            <div class="flex items-start mb-4">
                <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 accent-black bg-gray-700 border-blue-500  focus:outline-none ">
                <label for="checkbox-2" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Je souhaite recevoir des communications commerciales personnalisées de la part de youBeldi via e-mail.</label>
            </div>

            <div class="flex items-start mb-4">
                <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 accent-black  bg-gray-100 border-blue-500  focus:outline-none ">
                <label for="checkbox-3" class="ml-2 text-xs font-medium text-gray-900  w-2/3">J'ai lu et compris la Politique de confidentialité et en matière de cookies.</label>
            </div>
            <button type="submit" class="uppercase text-base font-semibold text-white inline-block text-center bg-black border border-white  px-20 py-3 hover:bg-gray-900 ">créer un compte</button>
        </form>
    </article>
</section>
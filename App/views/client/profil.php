<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<main class="grid grid-cols-10 gap-20 mt-20 mb-72">
    <section class="col-start-2 col-end-4 flex gap-10">
        <button id="achat" class="uppercase text-base font-bold ">Achats</button>
        <button id="profil" class="uppercase text-base font-light ">Profil</button>
        <button class="uppercase text-base font-light" id="parametre">Paramètres</button>
    </section>
    <section class="col-start-2 col-end-8 mb-44">
        <article id="achatDiv" >
            <img class="w-20" src="<?php echo URLROOT ;?>/img/notCmd.svg" alt="">
            <p class="uppercase text-sm tracking-tighter mx-6 my-3">AUCUNE <spa class="font-bold">COMMANDE</spa> N'A ÉTÉ TROUVÉE</p>
        </article>
        <article id="profilDiv" class="flex flex-col justify-start items-start gap-3 hidden" >
            <h1 class="uppercase text-xl font-bold mb-8">compte</h1>
            <span class="uppercase text-sm tracking-tighter"><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ;?>  </span>
            <span class="uppercase text-sm tracking-tighter"><?php echo $_SESSION['email']  ;?>  </span>
            <a class="uppercase text-base font-semibold  text-left mt-6 mb-3" >Modifier adresse e-amil <span class="ml-20"><i class="fa-solid fa-angle-right "></i></span></a>
            <a class="uppercase text-base font-semibold  text-left " >Modifier mot de passe  <span class="ml-24"><i class="fa-solid fa-angle-right mr-20"></i></span></a>
            <a href="<?php echo URLROOT; ?>/clients/logout" class="uppercase text-base font-semibold inline-block text-center border border-black  px-16 py-1 hover:border-gray-500 mt-6">Se déconnecter</a>
        </article>
    </section>
</main>
<?php require APPROOT .'/views/inc/footer.php';?>

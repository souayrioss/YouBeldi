<nav class="grid grid-cols-5 px-10 py-4">
    <div class=" ">
        <img src="<?php echo URLROOT ;?>/img/logo.png" alt="logo" style="width: 100px;"/>
    </div>
    <div class="grid grid-rows-2 col-span-4 gap-5">
        <div  class="flex  justify-between row-start-1 col-start-4 ">
            <form action="">
                <input class="border-b-2 border-black focus:outline-none px-2" type="text" name="searche" placeholder="RECHERCHER">
            </form>
            <div class="gap-5">
                <?php if(isset($_SESSION['id'])): ?>
                <a class="uppercase text-sm mr-3 font-semibold" href="<?php echo URLROOT ;?>/clients/profil"><?php echo $_SESSION['nom'] ;?></a>
                <?php else: ?>
                    <a class="uppercase text-sm mr-3" href="<?= URLROOT ;?>/clients/login">Se connecter</a>
                <?php endif ?>
                <a class="uppercase text-sm mr-3" href="<?php echo URLROOT ;?>/Clients/aide">Aide</a>
                <a class="" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            </div>
        </div>
        <div class="hidden w-full md:block md:w-auto row-start-2 col-start-1 col-end-5 " id="mobile-menu">
            <ul class="flex flex-col gap-10 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-normal">
                <li>
                <a href="<?php echo URLROOT ;?>/Clients" class="uppercase text-base text-slate-500" >NOUVELLES ARRIVÉES</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Produits/genre/femme" class="uppercase text-base text-slate-500">femme</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Produits/genre/homme" class="uppercase text-base text-slate-500">homme</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Produits/genre/enfants" class="uppercase text-base text-slate-500">Enfants</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Clients/about" class="uppercase text-base text-slate-500">About</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Clients/sousDemande" class="uppercase text-base text-slate-500">sous demande</a>
                </li>
            </ul>
        </div>
    
    </div>
</nav>
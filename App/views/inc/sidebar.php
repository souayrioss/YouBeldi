<nav class="flex flex-col justify-start items-center h-[710px] w-full  m-5 py-4 text-blue-300 bg-black">

    <div class="self-start my-6">
        <img class="w-40" src="<?php echo URLROOT ;?>/img/logob.png" alt="logo" />
    </div>
        <div class="self-end mr-3 mb-20">
            <?php if(isset($_SESSION['id'])): ?>
            <a class="uppercase text-base  font-medium" href="<?php echo URLROOT ;?>/clients/profil">Bonjour Mr.<span class="text-sm font-extrabold"><?php echo $_SESSION['userName'] ;?></span></a>
            <?php else: ?>
                <a class="uppercase text-sm " href="<?= URLROOT ;?>/Admins">Se connecter</a>
            <?php endif ?>
        </div>
        <div class=" w-full h-full  flex flex-col justify-start items-center  ">
            <ul class=" relative h-full w-2/3 flex flex-col justify-start gap-10 mt-4  md:font-normal ">
                <li>
                <a href="<?php echo URLROOT ;?>/contacts/getContacts" class="uppercase text-base text-blue-30 hover:text-blue-500">Accueil</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Produits/Produits" class="uppercase text-base text-blue-300 hover:text-blue-500">produits</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Commandes/getComandes" class="uppercase text-base text-blue-300 hover:text-blue-500">commandes</a>
                </li>
                <li>
                <a href="<?php echo URLROOT ;?>/Demandes/getDemandes" class="uppercase text-base text-blue-300 hover:text-blue-500">demandes</a>
                </li>
                <li class="absolute bottom-8">
                    <a href="<?php echo URLROOT ;?>/Admins/Logout" class="uppercase text-base text-blue-300 hover:text-blue-500">se déconnecter</a>
                </li>
            </ul>
        </div>
    
</nav>
<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
    <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
        <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
            <div class="flex flex-col justify-start items-start  bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                <p class="uppercase tracking-wider text-lg md:text-2xl  font-semibold leading-6 xl:leading-5 text-gray-800">Panier du client</p>
                <?php foreach($data['paniers'] as $panier) : ?>
                <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                    <div class="pb-4 md:pb-8 w-full md:w-40">
                    <a href="<?php echo URLROOT.'/Clients/produit/'.$panier->refPrd ?>">
                    <?php $images = json_decode($panier->image) ;?>
                    <img class="" class="rounded-t-lg" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[0] ?>" alt="<?php echo $produit->image ;?>" />
                    </a>
                    </div>
                    <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                        <div class="w-full flex flex-col justify-start items-start space-y-8">
                            <h3 class="text-xl  xl:text-2xl font-semibold leading-6 text-gray-800"><?php echo $panier->nomPrd ?></h3>
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="uppercase text-sm  leading-none text-gray-800"><span class=" text-gray-300">Style: </span><?php echo $panier->model ?></p>
                                <p class="uppercase text-sm  leading-none text-gray-800"><span class=" text-gray-300">Size: </span> <?php echo $panier->size ?></p>
                                <p class="uppercase text-sm  leading-none text-gray-800"><span class=" text-gray-300">Color: </span> <?php echo $panier->couleur ?></p>
                            </div>
                        </div>
                        <div class="flex justify-between space-x-8 items-start w-full">
                            <p class=" text-base  xl:text-lg leading-6" ><span class="prixUni"><?php echo $panier->prix ?></span> Dh</p>
                            <p class="qtePrd text-base  xl:text-lg leading-6 text-gray-800" ><?php echo $panier->qte ?></p>
                            <p class="text-base  xl:text-lg font-semibold leading-6 text-gray-800"><span class="totalPrixPrd"></span>dh</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <div class="flex justify-center flex-col md:flex-row  items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50  space-y-6">
                    <h3 class="text-xl  font-semibold leading-5 text-gray-800">Sommaire</h3>
                    <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                        <div class="flex justify-between w-full">
                            <p class="text-base  leading-4 text-gray-800">Total</p>
                            <p class="text-base  text-gray-600"><span class="totalPanier"></span>dh</p>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <p class="text-base  leading-4 text-gray-800">Remise <span class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">typeCoupon</span></p>
                            <p class="text-base  text-gray-600">---</p>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <p class="text-base  leading-4 text-gray-800">livraison</p>
                            <p class="uppercase text-base  text-gray-600">FREE</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <p class="text-base  font-semibold leading-4 text-gray-800">Total</p>
                        <p class="text-base  font-semibold leading-4 text-gray-600"><span class="totalPanier"></span></p>
                    </div>
                </div>
                <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50  space-y-6">
                    <h3 class="text-xl  font-semibold leading-5 text-gray-800">livraison</h3>
                    <div class="flex justify-between items-start w-full">
                        <div class="flex justify-center items-center space-x-4">
                            <div class="w-12 h-12">
                                <img class="w-full h-full" alt="logo" src="<?php echo URLROOT ;?>/img/amnd.png" />
                            </div>
                            <div class="flex flex-col justify-start items-center">
                                <p class="text-lg leading-6  font-semibold text-gray-800">AMANA LIVRAISEON<br /><span class="font-normal">Livraison en 48 Heures</span></p>
                            </div>
                        </div>
                        <p class="uppercase text-lg font-semibold leading-6  text-gray-800">Free</p>
                    </div>
                </div>
            </div>
        </div>
            <div class=" bg-gray-50  w-full h-[500px] xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                <h3 class="text-xl  font-semibold leading-5 text-gray-800">CLIENT</h3>
                <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex flex-col justify-start items-start flex-shrink-0">
                        <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-base  font-semibold leading-4 text-left text-gray-800"><?php echo $data['paniers'][0]->nom . ' ' . $data['paniers'][0]->prenom  ?></p>
                            </div>
                        </div>

                        <div class="flex justify-center text-gray-800  md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                            <p class="cursor-pointer text-sm leading-5 "><?php echo $data['paniers'][0]->email?></p>
                        </div>
                    </div>
                    <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                        <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                <p class="text-base  font-semibold leading-4 text-center md:text-left text-gray-800">Adresse de livraison</p>
                                <textarea type="text" class=" border border-black text-gray-900 text-sm  outline-none block w-full p-2  " placeholder="" required> </textarea>
                                
                            </div>
                            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4">
                                <p class="text-base  font-semibold leading-4 text-center md:text-left text-gray-800">Billing Address</p>
                                <p class="w-48 lg:w-full  xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">180 North King Street, Northhampton MA 1060</p>
                            </div>
                        </div>
                        <div class="flex w-full justify-center items-center md:justify-start md:items-start">
                            <button class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent  py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800  w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Edit Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URLROOT ?>/js/panier.js"></script>



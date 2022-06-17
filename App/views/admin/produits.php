<?php require APPROOT .'/views/inc/header.php';?>
<main class="w-screen grid grid-cols-12">
    <section class="col-start-1 col-end-2 fixed">
        <?php require APPROOT .'/views/inc/sidebar.php';?>
    </section>
    <section class="col-start-3 col-end-13 m-5 flex gap-4 flex-wrap">
    <section class="fixed top-5 right-5 animate-bounce">
            <a class=" uppercase text-lg font-semibold text-blue-300 inline-block text-center bg-black border border-white  px-4 py-3 hover:bg-gray-900 " href="<?php echo URLROOT ;?>/produits/add"><i class="fa-solid fa-plus"></i></i></a>
        </section>
        <?php foreach($data['produits'] as $produit) : ?>
        <div class="w-[24%] bg-gray-100  ">
            <a href="#">
            <?php $images = json_decode($produit->image) ;?>
                    <img class="w-full " class="rounded-t-lg" src="<?php echo URLROOT ;?>/img/<?php echo $images[0] ?>" alt="" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-300 "><?php echo $produit->nom ?></h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $produit->description ?></p>
                <div class="flex gap-4">
                    <form method="POST" action="<?php echo URLROOT ;?>/produits/edit"><input type="hidden" name="id" value="<?php echo $produit->refPrd ; ?>" ><button name="show"  class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-300  hover:bg-blue-200 f outline-none " type="submit">Modifier <i class="fa-solid fa-square-pen ml-3 text-lg"></i></button></form>
                    <a href="<?php echo URLROOT ;?>/produits/delete/<?php echo $produit->refPrd ; ?>" class="inline-flex items-center py-2 px-2 text-sm font-medium text-center text-white bg-blue-300  hover:bg-blue-200 f outline-none ">Supprimer <i class="fa-solid fa-square-minus ml-3 text-lg"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>

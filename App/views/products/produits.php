<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<main class="p-5">
    <section class="flex flex-wrap gap-4 ">
        <?php foreach($data['produits'] as $produit) :?>
            <div class="w-[19%] bg-white">
                <a href="<?php echo URLROOT.'/Clients/produit/'.$produit->refPrd ?>">
                    <?php $images = json_decode($produit->image) ;?>
                    <img class="w-[284px] h-[400px]" class="rounded-t-lg" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[0] ?>" alt="<?php echo $produit->image ;?>" />
                </a>
                <div class="flex justify-between">
                    <span><?php echo $produit->nom ;?></span>
                    <span><?php echo $produit->prix ;?> Dh</span>
                </div>
            </div>
        <?php endforeach ; ?>
    </section>
</main>

<!-- <?php require APPROOT .'/views/inc/footer.php';?> -->
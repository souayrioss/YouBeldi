<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<main >
<section class="mb-20">
    <div class="relative mb-10">
        <img   src="<?php echo URLROOT ;?>/img/woman_trend.webp" alt="">
        <h2 class="absolute bottom-60 left-[600px]  text-white text-4xl font-bold tracking-wider">NOUVELLES ARRIVÉES</h2>
        <a href="<?php echo URLROOT ;?>/Produits/genre/femme" class="absolute bottom-40 left-[740px] text-base font-bold text-white inline-block text-center border-2 border-white  px-10 py-3   hover:font-bold transition ">Femme</a>
    </div>
        <div class="w-full flex gap-5 justify-center items-center px-5 " i>
            <div class="mr-2"><i class="fa-solid fa-arrow-left-long text-2xl "></i></div>
            <?php foreach($data['prdFems'] as $prdFem) : ?>
                <?php $images = json_decode($prdFem->image) ;?>
                    <div ><a href="<?php echo URLROOT ;?>/Clients/produit/<?php echo $prdFem->refPrd ?>"><img class="" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[0] ?>" alt=""></a></div>
                <?php endforeach; ?>
            <div class="ml-2"><i class="fa-solid fa-arrow-right-long text-2xl"></i></div>
            
        </div>
</section>
<section class="mb-20">
    <div class="relative mb-10">
        <img  src="<?php echo URLROOT ;?>/img/man_trend.webp" alt="">
        <h2 class="absolute bottom-60 left-[600px]  text-white text-4xl font-bold tracking-wider">NOUVELLES ARRIVÉES</h2>
        <a href="<?php echo URLROOT ;?>/Produits/genre/homme" class="absolute bottom-40 left-[740px] text-base font-bold text-white inline-block text-center border-2 border-white  px-10 py-3   hover:font-bold transition ">Femme</a>
    </div>
    <div class="w-full flex gap-5 justify-center items-center px-5 " i>
            <div class="mr-2"><i class="fa-solid fa-arrow-left-long text-2xl "></i></div>
            <?php foreach($data['prdHoms'] as $prdHom) : ?>
                <?php $images = json_decode($prdHom->image) ;?>
                    <div ><a href="<?php echo URLROOT ;?>/Clients/produit/<?php echo $prdHom->refPrd ?>"><img class="w-[200px] h-[300px]" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[0] ?>" alt=""></a></div>
                <?php endforeach; ?>
            <div class="ml-2"><i class="fa-solid fa-arrow-right-long text-2xl"></i></div>
            
        </div>
</section>
<section class="mb-20">
    <div class="relative mb-10">
        <img  src="<?php echo URLROOT ;?>/img/kids_trend.webp" alt="">
        <h2 class="absolute bottom-60 left-[600px]  text-white text-4xl font-bold tracking-wider">NOUVELLES ARRIVÉES</h2>
        <a href="<?php echo URLROOT ;?>/Produits/genre/enfant" class="absolute bottom-40 left-[740px] text-base font-bold text-white inline-block text-center border-2 border-white  px-10 py-3   hover:font-bold transition ">Femme</a>
    </div>
    <div class="w-full flex gap-5 justify-center items-center px-5" id="trend-slider">
            <div class="mr-2"><i class="fa-solid fa-arrow-left-long text-2xl "></i></div>
            <div class="ml-2"><i class="fa-solid fa-arrow-right-long text-2xl"></i></div>
        </div>
</section>
<section class="snap-start w-screen h-screen ">

    <?php require APPROOT .'/views/inc/footer.php';?>
</section>
</main>
<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>

<main class="snap-y snap-mandatory h-screen overflow-scroll">
        <?php foreach($data['categories'] as $categorie) : ?>
            <section class="nth snap-start w-screen h-screen flex justify-around mt-14 mb-36">
                <div class="title">
                    <a href="<?php echo URLROOT ;?>/produits/categorie/">
                        <h2 class="uppercase text-6xl font-bold underline mt-20"><?php echo $categorie->nomCtg ?></h2>
                    </a>
                </div>
                <div class="transition">
                    <a href="<?php echo URLROOT ;?>/clients/register">
                        <img class="" src="data:image/*;charset=utf8;base64,<?php echo base64_encode($categorie->image); ?>" alt="">
                    </a>
                </div>
            </section>
        <?php endforeach; ?>
        <!-- <section class="snap-start w-screen h-screen flex justify-around mt-14 mb-36">
            <div class="order-last">
                <h2 class="uppercase text-6xl font-bold underline mt-20">djelaba</h2>
            </div>
            <div>
                <img class="h-[600px] w-[1100px]" src="<?php echo URLROOT ;?>/img/djelaba.png" alt="">
            </div>
        </section>
        <section class="snap-start w-screen h-screen flex justify-around mt-14 mb-36">
            <div>
                <h2 class="uppercase text-6xl font-bold underline mt-20">Costume</h2>
            </div>
            <div>
                <img class="h-[600px] w-[1100px]" src="<?php echo URLROOT ;?>/img/sandila.jpg" alt="">
            </div>
        </section>
        <section class="snap-start w-screen h-screen flex justify-around mt-14 mb-36">
        <div class="order-last">
            <h2 class="uppercase text-6xl font-bold underline mt-20">Costume</h2>
        </div>
        <div>
            <img class="h-[600px]" src="<?php echo URLROOT ;?>/img/femme1.jpg" alt="">
        </div>
    </section>
    <section class="snap-start w-screen h-screen flex justify-around mt-14 mb-36">
        <div class="">
            <h2 class="uppercase text-6xl font-bold underline mt-20">djelaba</h2>
        </div>
        <div>
            <img class="h-[600px]" src="<?php echo URLROOT ;?>/img/femme2.jpg" alt="">
        </div>
    </section>
    <section class="snap-start w-screen h-screen flex justify-around mt-14 mb-36">
        <div class="order-last">
            <h2 class="uppercase text-6xl font-bold underline mt-20">Salndila</h2>
        </div>
        <div>
            <img class="h-[600px]" src="<?php echo URLROOT ;?>/img/femme.jpg" alt="">
        </div>
    </section> -->
        <section class="snap-start w-screen h-screen flex items-center justify-center">
            <?php require APPROOT .'/views/inc/footer.php';?>
        </section>
</main>



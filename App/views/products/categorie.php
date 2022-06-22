<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>

<main class="snap-y snap-mandatory h-screen overflow-scroll">
        <?php foreach($data['categories'] as $categorie) : ?>
            <section class="nth snap-start w-screen h-screen flex justify-around mt-14 mb-36">
                <div class="title">
                    <a href="<?php echo URLROOT ;?>/Clients/<?php echo $categorie->genre .'/' . $categorie->nomCtg  ?>">
                        <h2 class="uppercase text-6xl font-bold underline mt-20"><?php echo $categorie->nomCtg?></h2>
                    </a>
                </div>
                <div class="transition">
                    <a href="<?php echo URLROOT ;?>/Clients/<?php echo $categorie->genre .'/' . $categorie->nomCtg  ?>">
                        <img class="" src="data:image/*;charset=utf8;base64,<?php echo base64_encode($categorie->image); ?>" alt="">
                    </a>
                </div>
            </section>
        <?php endforeach; ?>
        <section class="snap-start w-screen h-screen flex items-center justify-center">
            <?php require APPROOT .'/views/inc/footer.php';?>
        </section>
</main>




<?php require APPROOT .'/views/inc/header.php';?>
<main class="w-screen grid grid-cols-12">
    <section class="col-start-1 col-end-2 fixed">
        <?php require APPROOT .'/views/inc/sidebar.php';?>
    </section>
    <section class="col-start-3 col-end-13 m-5 flex gap-4 flex-wrap">
        <?php foreach($data['commandes'] as $commande) : ?>
        <div class="w-full bg-gray-200 ">
            <div class="">
                <div class="py-2 px-3 flex justify-between flex-wrap gap-3">
                    <span class="mb-2 text-sm font-bold tracking-tight text-black">NOM: <?php echo $commande->nom .' '. $commande->prenom ?></span>
                    <span class="mb-2 text-sm font-bold tracking-tight ">PRIX : <?php echo $commande->prixCmd ?></span>
                    <span class="mb-2 text-sm font-bold tracking-tight ">CIN  : <?php echo $commande->cin ?></span>
                    <span class="mb-2 text-sm font-bold tracking-tight ">TEL   : <?php echo $commande->tel?></span>
                    <span class="mb-2 text-sm font-bold tracking-tight ">ADRESSE   : <?php echo $commande->adresse?></span>
                    <span class="mb-2 text-sm font-bold tracking-tight ">DATE: <?php echo $commande->create_at ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>
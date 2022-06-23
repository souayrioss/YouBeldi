
<?php require APPROOT .'/views/inc/header.php';?>
<main class="w-screen grid grid-cols-12">
    <section class="col-start-1 col-end-2 fixed">
        <?php require APPROOT .'/views/inc/sidebar.php';?>
    </section>
    <section class="col-start-3 col-end-13 m-5 flex gap-4 flex-wrap">
    <section class="fixed top-5 right-5 animate-bounce">
            <a class=" uppercase text-lg font-semibold text-blue-300 inline-block text-center bg-black border  px-4 py-3 hover:bg-gray-900 " href="<?php echo URLROOT ;?>/contacts/add"><i class="fa-solid fa-plus"></i></i></a>
        </section>
        <?php foreach($data['contacts'] as $contact) : ?>
        <div class="w-full bg-gray-50 ">
            <div class="">
                <div class="py-2 px-3 flex justify-between flex-wrap gap-3">
                    <span class="mb-2 text-xl font-bold tracking-tight text-black">NOM: <?php echo $contact->nom .' '. $contact->prenom ?></span>
                    <span class="mb-2 text-xl font-bold tracking-tight ">Email: <?php echo $contact->email ?></span>
                    <span class="mb-2 text-xl font-bold tracking-tight ">OBJET: <?php echo $contact->objet ?></span>
                    <span class="mb-2 text-xl font-bold tracking-tight ">MESSAGE: <?php echo $contact->message ?></span>
                    <span class="mb-2 text-xl font-bold tracking-tight ">DATE: <?php echo $contact->create_at ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>
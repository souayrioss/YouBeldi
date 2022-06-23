<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
<div class="bg-white">
  <div class="pt-6">


    <!-- Image gallery -->
    <?php $images = json_decode($data['produit']->image) ;?>
    <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
      <div class="hidden aspect-w-3 aspect-h-4  overflow-hidden lg:block">
        <img class="w-full h-[510px]" class="" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[0] ?>" alt="" />
      </div>
      <div class="hidden aspect-w-3 aspect-h-4  overflow-hidden lg:block">
      <img class="w-full h-[510px]" class="" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[1] ?>" alt="" />
      </div>
      <div class="aspect-w-4 aspect-h-5  sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
      <img class="w-full h-[510px]" class="" src="<?php echo URLROOT ;?>/img/produit/<?php echo $images[2] ?>" alt="" />
      </div>
    </div>

    <!-- Product info -->
    <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl"><?php echo $data['produit']->nom ?></h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:mt-0 lg:row-span-3">
        <h2 class="text-2xl uppercase mb-2">Product information</h2>
        <h2 class="text-base uppercase my-2">Prix : <span class="text-xl "><?php echo $data['produit']->prix ?>Dh</span></h2>
        <h2 class="text-sm uppercase my-2">Quantité en Stock : <span class="text-xs "><?php echo $data['produit']->qteStock ?></span></h2>
        

        <form class="mt-10" method="POST" action="<?php echo URLROOT ?>/Paniers/addToPanier">
          <!-- Colors -->
          <input type="hidden" name="produit_id" value="<?php echo $data['produit']->refPrd ?>">
          <div>
            <h3 class="text-xl uppercase mb-2">Color</h3>
            <div class="flex flex-wrap">
            <?php $couleurs = json_decode($data['produit']->couleur) ;?>
              <?php foreach($couleurs as $couleur) : ?>
              <div class="flex items-center mr-4">
                <input id="red-radio" type="radio" value="<?php echo $couleur ?>" name="couleur" class="w-4 h-4 text-<?php echo $couleur ?> bg-gray-100 border-gray-300 focus:outline-none accent-<?php echo $couleur ?>">
                <label for="red-radio" class="ml-2 text-sm font-bold text-<?php echo $couleur ?>"><?php echo $couleur ?></label>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          
          <div class="mt-8">
            <h3 class="text-xl uppercase mb-2">Sze</h3>
            <div class="flex flex-wrap">
            <?php $sizes = json_decode($data['produit']->size) ;?>
              <?php foreach($sizes as $size) : ?>
              <div class="flex items-center mr-4">
                <input id="red-radio" type="radio" value="<?php echo $size ?>" name="size" class="w-4 h-4  ?> bg-gray-100 border-gray-300 focus:outline-none accent-<?php echo $size ?>">
                <label for="red-radio" class="uppercase ml-2 text-sm font-bold "><?php echo $size ?></label>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
            <div class="flex items-center gap-3 mt-6">
          <h2 class="text-sm uppercase my-2">Quantité : </h2><input id="qte" type="number"  min="1" max="<?php echo $data['produit']->qteStock ?>" name="qte" class=" h-6 w-16  bg-white border-2 border-black focus:outline-none ">
            </div>
          <button type="submit" class="uppercase text-base font-semibold text-white inline-block text-center bg-black border border-white  px-16 py-3 hover:bg-gray-900 mt-10">ajouter au panier</button>
        </form>
      </div>
        
      <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <!-- Description and details -->
        <div>
          <h3 class="text-xl uppercase mb-2">Description</h3>
          
          <div class="space-y-6">
            <p class="text-base text-gray-900">
            <?php echo $data['produit']->nom ?> à mousseline au vent imprimé fleuri.Fleur à l’Air | Imbattable charme pour la nouvelle Djellaba deux-pièces rose à mousseline au vent imprimé fleuri. Le look est frais et très charmant. Produits apparentés</p>
          </div>
        </div>

        <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

          <div class="mt-4">
            <ul role="list" class="pl-4 list-disc text-sm space-y-2">
              <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
              <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
            </ul>
          </div>
        </div>

        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Details</h2>

          <div class="mt-4 space-y-6">
            <p class="text-sm text-gray-600"><?php echo $data['produit']->description ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
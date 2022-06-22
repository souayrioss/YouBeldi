<?php require APPROOT .'/views/inc/header.php';?>
<main class="w-screen grid grid-cols-12 h-screen">
    <section class="col-start-1 col-end-2 fixed">
        <?php require APPROOT .'/views/inc/sidebar.php';?>
    </section>
    <section class="col-start-5 col-end-10 m-5  ">
    <h2 class="uppercase text-4xl font-semibold my-10">Modifier le produit</h2>
        <form class="w-full" method="POST" action="<?php echo URLROOT; ?>/produits/edit" enctype="multipart/form-data">
        <input type="hidden" name="refPrd" value="<?php echo $data['produit']->refPrd ; ?>" >
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="nom" id="nom" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['produit']->nom ?>" placeholder=" " required="">
                    <label for="nom" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom de produit</label>
                    <?php if(!empty($data['nom_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['nom_err']?></span>
                    <?php endif; ?>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <select name="categorie" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  foutline-none  focus:border-blue-300 peer">
                    <?php if(!empty($data['categorie']) || isset($data['produit']->categorie)): ?>
                        <option selected value="<?php  echo $data['produit']->categorie ?>"><?php  echo $data['produit']->categorie ?></option>
                    <?php else: ?>
                        <option selected valuerequired="">Categorie de produit</option>
                    <?php endif ?>
                        <option  value="1">Costume</option>
                        <option value="2">Djelaba</option>
                        <option value="3">Gandoura</option>
                    </select>
                    <?php if(!empty($data['categorie_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['categorie_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                <select name="genre" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  foutline-none  focus:border-blue-300 peer">
                    <?php if(!empty($data['genre']) || isset($data['produit']->genre)): ?>
                        <option selected value="<?php  echo $data['produit']->genre?>"><?php  echo $data['produit']->genre?></option>
                    <?php else: ?>
                        <option selected valuerequired="">Genre de produit</option>
                    <?php endif ?>
                        <option  value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="enfant">Enfant</option>
                </select>
                <?php if(!empty($data['genre_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['genre_err']?></span>
                <?php endif; ?>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="model" name="model" id="model" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['produit']->model?>" placeholder=" " required="">
                    <label for="model" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Model de produit</label>
                    <?php if(!empty($data['model_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['model_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="prix" id="prix" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['produit']->prix?>" placeholder=" " required="">
                    <lab&el for="prix" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</lab&el>
                    <?php if(!empty($data['prix_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['prix_err']?></span>
                    <?php endif; ?>
                </div>
                <div class="relative z-0 w-full mb-10 group">
                    <input type="text" name="qteStock" id="qteStock" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" value="<?php  echo $data['produit']->qteStock?>" placeholder=" " required="">
                    <label for="qteStock" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité en stock</label>
                    <?php if(!empty($data['qteStock_err'])):?>
                    <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['qteStock_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full">
                <div class="relative z-0 w-full mb-10 group">
                    <input type="file" name="image[]" id="image" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer" valuerequired="" placeholder=" " required="" multiple="multiple">
                    <label for="image" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Images</label>
                    <?php if(!empty($data['image_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['image_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full">
                <h2>Size</h2>
                <div class="flex justify-between w-full mb-10 group">
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="xs" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">XS</label>  
                </div>  
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="sm" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">SM</label>  
                </div> 
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="m" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">M</label>  
                </div>
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="l" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">L</label>  
                </div>  
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="xl" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">XL</label>  
                </div>  
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="2xl" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">2XL</label>  
                </div>  
                <div>
                    <input id="couleur" name="size[]" type="checkbox" value="4xl" class="w-4 h-4 accent-gray-500 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">4XL</label>  
                </div>                 
                    <?php if(!empty($data['image_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['image_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full">
                <h2>Couleurs</h2>
                <div class="flex justify-between w-full mb-10 group">
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="black" class="w-4 h-4 accent-black bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Noir</label>  
                </div>  
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="white" class="w-4 h-4 accent-white bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Blanc</label>  
                </div> 
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="blue-300" class="w-4 h-4 accent-blue-300 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Blue</label>  
                </div>
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="red-900" class="w-4 h-4 accent-red-900 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Rouge</label>  
                </div>  
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="green-800" class="w-4 h-4 accent-green-800 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">vers</label>  
                </div>  
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="rose-300" class="w-4 h-4 accent-rose-300 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Rose</label>  
                </div>  
                <div>
                    <input id="couleur" name="couleur[]" type="checkbox" value="blue-800" class="w-4 h-4 accent-blue-800 bg-gray-700 border-blue-500  focus:outline-none " checked>
                    <label for="couleur" class="ml-2 text-xs font-medium text-gray-900  w-2/3">Blue</label>  
                </div>                 
                    <?php if(!empty($data['image_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['image_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full">
                <div class="relative z-0 w-full mb-10 group">
                    <textarea type="text" name="description" id="description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-300 peer"placeholder=" " required=""> <?php echo $data['produit']->description ?> </textarea>
                    <label for="description" class="peer-focus:font-medium absolute text-sm   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    <?php if(!empty($data['description_err'])):?>
                        <span class="text-red-500 text-xs"><i class="fa-solid fa-square-xmark"> </i>  <?php  echo $data['description_err']?></span>
                    <?php endif; ?>
                </div>
            </div>
            <button type="submit" name="edit" class="uppercase text-base font-semibold text-blue-300 inline-block text-center bg-black border border-white  px-20 py-3 hover:bg-gray-900 ">Modifier une produit</button>
        </form>
    </section>
</main>
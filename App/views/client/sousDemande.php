<?php require APPROOT .'/views/inc/header.php';?>
<?php require APPROOT .'/views/inc/navbar.php';?>
    <main class="grid grid-cols-8 gap-5 mb-48 mt-4">
        <section class="col-start-2 col-end-8 flex justify-around">
            <div><i class="fa-solid fa-circle-dot text-3xl text-blue-300"></i></div>
            <div><i class="fa-solid fa-circle"></i></div>
            <div><i class="fa-solid fa-circle"></i></div>
        </section>
        <section class="col-start-2 col-end-8 bg-gray-100 p-3" id="start">
            <article class="relative  w-full h-[430px] flex flex-col justify-center  items-center mt-10">
                <div class="w-4/5 absolute top-4 text-4xl font-bold uppercase text-center" >
                Préambule
                </div>
                <div class="absolute top-44 w-4/5 ">
                    <p class="text-lg font-semibold">Ce test a pour but de nous aider à savoir le modele que vous voulez et  si vous avez besoins de spécifier les mesures veuillez découvrir notre page d'<a class="text-xl font-bold uppercase underline" href="<?php echo URLROOT ;?>/Clients/aide">aides</a></p>
                </div>
                <div class="w-11/12 absolute top-96 flex justify-center ">
                    <button class="uppercase text-base font-semibold text-white inline-block text-center bg-black border-0  px-20 py-3 hover:bg-gray-900 " id="demarer">Démarer</button>
                </div>
            </article>
        </section>
        <section class="col-start-2 col-end-8 bg-gray-100 p-3 hidden" id ="preTest">
            <article class="relative  w-full h-[430px] flex flex-col   items-center mt-10">
                <div class="w-4/5 absolute top-16 text-xl font-medium text-center" >
                Quelle est votre genre ???
                </div>
                <div class="absolute top-60" id="genreBtn">  
                    <input type="submit" class="uppercase text-base font-semibold text-white inline-block text-center bg-gray-800 border-0  px-10 py-3 mr-5 hover:bg-gray-900" value="homme" >
                    <input type="submit" class="uppercase text-base font-semibold text-white inline-block text-center bg-gray-800 border-0  px-10 py-3 hover:bg-gray-900 " value="femme">
                </div>
            </article>
        </section>
        <section class="col-start-2 col-end-8 bg-gray-100 p-3 hidden" id ="test">
            <article class="w-full">
                <div class="flex justify-between mb-1">
                    <span id="num-question" class="text-base font-medium text-blue-700 ">num°</span>
                </div>
                    <div class="w-full bg-gray-400 rounded-full h-2.5">
                    <div class="bg-blue-300 h-2.5 rounded-full" id="progress-bar"></div>
                </div>
            </article>
            <article class="relative  w-full h-[430px] flex flex-col   items-center mt-10">
                <div class="w-4/5 absolute top-16 text-xl font-medium text-center" id="question">
                </div>
                <div class="absolute top-60 w-1/3" id="reponse">  
                </div>
                <div class="w-11/12 absolute top-96 flex justify-between ">
                    <button class="uppercase text-base font-semibold text-white inline-block text-center bg-black border-0  px-20 py-3 hover:bg-gray-900 " id="precedent">Precedent</button>
                    <button class="uppercase text-base font-semibold text-white inline-block  text-center bg-black border-0  px-20 py-3 hover:bg-gray-900 " id="suivant">Suivant</button>
                </div>
            </article>
        </section>
        <section class="col-start-2 col-end-8 bg-gray-100 p-3 hidden" id ="resultat">
            <article class="relative  w-full h-[430px] flex flex-col   items-center mt-10">
                <div class="w-4/5 absolute top-16 text-xl font-medium ">
                    <p>Q0-Votre Genre : <spanc class="affResultat"></spanc></p>
                    <p>Q1-Nom de tissue : <spanc class="affResultat"></spanc></p>
                    <p>Q2-la categorie : <spanc class="affResultat"></spanc></p>
                    <p>Q3-Le model : <spanc class="affResultat"></spanc></p>
                    <p>Q4-la Couleur : <spanc class="affResultat"></spanc></p>
                    <p>Q5: <spanc class="affResultat"></spanc></p>
                    <p>Q6: <spanc class="affResultat"></spanc></p>
                    <p>Q7: <spanc class="affResultat"></spanc></p>
                    <p>Q8: <spanc class="affResultat"></spanc></p>
                    <p>Q9: <spanc class="affResultat"></spanc></p>
                    <p>Q10: <spanc class="affResultat"></spanc></p>
                </div>
                <div class="w-11/12 absolute top-96 flex justify-between ">
                    <form method="POST" action="<?php echo URLROOT ?>/Demandes/addDemande"> <input type="hidden" id="getResult" name="getResult"> <input type="submit" name="addDemade" class="uppercase text-base font-semibold text-white inline-block  text-center bg-black border-0  px-20 py-3 hover:bg-gray-900 " id="envoyer" value="Envoyer"></form>
                </div>
            </article>
        </section>

    </main>
<script src="<?php echo URLROOT ?>/js/sousDemande.js"></script>
<?php require APPROOT .'/views/inc/footer.php';?>






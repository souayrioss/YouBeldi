const achat = document.getElementById("achat");
const profil = document.getElementById("profil");
const achatDiv = document.getElementById("achatDiv");
const profilDiv = document.getElementById("profilDiv");
console.log('ff')
achat.addEventListener('click' , function(){
    achat.classList.add('font-bold');
    achat.classList.remove('font-light');
    profil.classList.remove('font-bold');
    profil.classList.add('font-light');
    profilDiv.classList.add('hidden');
    achatDiv.classList.remove('hidden');
    
})
profil.addEventListener('click' , function(){
    profil.classList.add('font-bold');
    profil.classList.remove('font-light');
    achat.classList.remove('font-bold');
    achat.classList.add('font-light');
    profilDiv.classList.remove('hidden');
    achatDiv.classList.add('hidden');

})
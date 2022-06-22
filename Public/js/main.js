const achat = document.getElementById("achat");
const profil = document.getElementById("profil");
const achatDiv = document.getElementById("achatDiv");
const profilDiv = document.getElementById("profilDiv");
let sliderCont= document.getElementById("sliderBX");
let sliderWrapper= document.getElementById("sliderBX-contenedor");
let slider= document.querySelectorAll(".sliderBXcell");
let btnNext = document.querySelector("#btnSliderNext");
var contador = 0,posicionIzq = 0,espacioDerecha = 0,anchoDinamico = 0,margenIzquierda = 0,espacioDerecha, ef= 0;
var numSliders = slider.length;
if(achat){
    achat.addEventListener('click' , function(){
        achat.classList.add('font-bold');
        achat.classList.remove('font-light');
        profil.classList.remove('font-bold');
        profil.classList.add('font-light');
        profilDiv.classList.add('hidden');
        achatDiv.classList.remove('hidden');
        
    })
}
if(profil){
    profil.addEventListener('click' , function(){
        profil.classList.add('font-bold');
        profil.classList.remove('font-light');
        achat.classList.remove('font-bold');
        achat.classList.add('font-light');
        profilDiv.classList.remove('hidden');
        achatDiv.classList.add('hidden');
    
    })
}
if(sliderCont){
  espacioDerecha= slider[0].offsetWidth * (slider.length);
  anchoDinamico =  slider[0].offsetWidth * (slider.length);
  sliderCont.style.width= anchoDinamico+"px"; 
  btnNext.addEventListener("click", sliderAvanza);
  btnPrev.addEventListener("click", sliderRetrocede);
}
function sliderAvanza(){
  espacioFinal = espacioDerecha - sliderWrapper.offsetWidth;
  if(espacioFinal>0){
    posicionIzq-=250; 
    margenIzquierda = posicionIzq;
    espacioDerecha = anchoDinamico + posicionIzq
    
    ef = espacioDerecha-sliderWrapper.offsetWidth; 
     contador++;
    if(ef<0){
      sliderCont.style.marginLeft=`${posicionIzq+Math.abs(ef)}px`;
       }else{
         sliderCont.style.marginLeft=`${posicionIzq}px`;
       }
     }
}
function sliderRetrocede(){
  if(contador >0){
   posicionIzq+=250;
   sliderCont.style.marginLeft=`${posicionIzq}px`;
    margenIzquierda = posicionIzq;
    espacioDerecha = anchoDinamico + posicionIzq
     contador--;
     } 
}
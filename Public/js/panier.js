const prixUni = document.querySelectorAll(".prixUni");
const qtePrd = document.querySelectorAll(".qtePrd");
const totalPrixPrd = document.querySelectorAll(".totalPrixPrd");
const totalPanier = document.querySelectorAll(".totalPanier");
let total = 0;
let totalP = 0;
let i;
for(i=0;i<prixUni.length;i++){
    total = parseFloat(prixUni[i].textContent) * parseInt(qtePrd[i].textContent);
    totalPrixPrd[i].textContent = total
}
for(i=0;i<totalPrixPrd.length;i++){
    totalP = totalP + parseFloat(totalPrixPrd[i].textContent);
}
for(i=0;i<totalPanier.length;i++){
    totalPanier[i].textContent = totalP;
}

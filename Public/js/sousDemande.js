const homme = [
    {
      question: 'Quelle est votre tissue qui tu veux tailler ?',
      type: 'text',
      reponse: "",
    },
    {
          // 1
          question: 'la categorie ?',
          type: 'text',
          reponse: "",
        },
    {
      // 1
      question: 'Le modell ?',
      type: 'text',
      reponse: "",
    },
    {
      //2
      question: 'la Couleur ?',
      type: 'text',
      reponse: "",
    },
    {
      // 4
      question: 'Quelle est votre longueur d’épaule du cou à la pointe externe de l’épaule ?',
      type: 'number',
      reponse: "",
    },
    {
      // 5
      question: 'Quelle est votre longueur de pointe externe de l’épaule au poignet mesuré le long du côté extérieur ?',
      type: 'number',
      reponse: "",
    },
    {
      // 7
      question: 'Quelle est votre circonférence du biceps mesurée à point le plus large?',
      type: 'number',
      reponse: "",
    },
    {
      // 8
      question: 'Quelle est votre distance du poignet au coude mesurée le long du côté externe ?',
      type: 'number',
      reponse: "",
    },
    {
      // 9
      question: 'Quelle est votre longueur de pantalon de point externe ? (longueur de bande à la cheville)',

      type: 'number',
      min: '34',
      max: '41',
      reponse: "",
    },
    {
      // 10
      question: 'Quelle est votre hauteur totale des pieds au sommet du crane ? (Hauteur totale) ',

      type: 'number',
      min: '34',
      max: '41',
      reponse: "",
    },
    
  ];
const femme = [
  
    {
      // 0
      question: 'Quelle est votre tissue qui tu veux tailler ?',
      type: 'text',
      reponse: "",
    },
    {
      // 1
      question: 'la categorie ?',
      type: 'text',
      reponse: "",
    },
    {
      // 2
      question: 'Le modell ?',
      type: 'text',
      reponse: "",
    },
    {
      //3
      question: 'la Couleur ?',
      type: 'text',
      reponse: "",
    },
    // 4
    {
    question:'Quelle est votre circonférence du cou?',
    type: 'number',
    reponse: "",
  },
  {
    // 5
    question: 'Quelle est votre longueur d’épaule du cou à la pointe externe de l’épaule ?',
    type: 'number',
    reponse: "",
  },
  {
    // 6
    question: 'Quelle est votre longueur de pointe externe de l’épaule au poignet mesuré le long du côté extérieur ?',
    type: 'number',
    reponse: "",
  },
  {
    // 7
    question: 'Quelle est votre tour de poitrine mesuré le long du buste au point le plus large à travers les mamelons ?',
    type: 'number',
    reponse: "",
  },
  {
    // 8
    question: 'Quelle est votre circonférence du biceps mesurée à point le plus large?',
    type: 'number',
    reponse: "",
  },
  {
    // 9
    question: 'Quelle est votre distance du poignet au coude mesurée le long du côté externe ?',
    type: 'number',
    reponse: "",
  },
  {
    // 10
    question: 'Quelle est votre longueur de pantalon de point externe ? (longueur de bande à la cheville)',
    type: 'number',
    reponse: "",
  },
  {
    // 11
    question: 'Quelle est votre hauteur totale des pieds au sommet du crane ? (Hauteur totale) ',
    type: 'number',
    reponse: "",
  }
]; 
const demarer = document.querySelector('#demarer');
const niv = document.querySelectorAll(".fa-solid");
const affResultat = document.querySelectorAll(".affResultat");
const start = document.querySelector('#start');
const genreBtn = document.querySelector('#genreBtn');
const getResult = document.querySelector('#getResult');
const preTest = document.querySelector('#preTest');
const test = document.querySelector('#test');
const numQuestion = document.querySelector('#num-question');
const progress = document.querySelector('#progress-bar');
const question = document.getElementById('question');
const reponse = document.getElementById('reponse');
const suivant = document.getElementById('suivant');
const precedent = document.getElementById('precedent');
const envoyer = document.getElementById('envoyer');
const resultat = document.getElementById('resultat');
const input = document.createElement('input');
let questions;
let data = [];
let i=0;
let resString ;
function getValue() {
  input.setAttribute('value', input.value);
  return input.value;
}
demarer.addEventListener("click",function(){
  niv[1].className= "fa-solid fa-circle";
  niv[2].className= "fa-solid fa-circle-dot text-3xl text-blue-300";
  start.classList.add('hidden');
  preTest.classList.remove('hidden');
})
genreBtn.addEventListener("click", (e) => {
  if (e.target.value == "femme") {
      questions = femme ;
      preTest.classList.add('hidden');
      test.classList.remove('hidden');
      data.push("femme");
  afficheAnswer();
  }else if (e.target.value == "homme") {
    questions = homme ;
    data.push("homme");
    preTest.classList.add('hidden');
    test.classList.remove('hidden');
  afficheAnswer();
  }
});
function afficheProgress() {
  let prg = (i+1) / (questions.length)*100;
  console.log(prg)
  if(prg <= 100){
    progress.style.width = prg + '%';
    numQuestion.textContent = i + 1 + '/'+(questions.length);
  }
}
function afficheAnswer() {
  afficheProgress();
  question.innerHTML = questions[i].question;
  if (i == 0) {
    precedent.style.visibility = 'hidden';
  } else {
    precedent.style.visibility = 'visible';
  }
    reponse.innerHTML = '';
    console.log(reponse)
    reponse.appendChild(input);
    input.value = '';
    input.className = 'bg-black appearance-none border-4 border-blue-300 w-full py-3 px-2 text-blue-300 leading-tight focus:outline-none focus:bg-white focus:border-500';
    input.type = questions[i].type;
  }
  
suivant.addEventListener('click', function () {
  if(i<questions.length){
    if (getValue() === '') return;
      questions[i].reponse = getValue();
      data.push(questions[i].reponse);
      // console.log(questions)
      i++;
      afficheAnswer();
  }
  if(i == questions.length){
    for( let j =0;j<data.length;j++){
      affResultat[j].innerHTML = data[j]
    }
    console.log(data)
    test.classList.add('hidden');
    resultat.classList.remove('hidden');
    niv[2].className= "fa-solid fa-circle";
    niv[3].className= "fa-solid fa-circle-dot text-3xl text-blue-300";
    resString = JSON.stringify(data);
    getResult.value = resString;
    console.log(resString)
  }
})
precedent.addEventListener('click', function () {
  if(i>0){
    i--;
    data.pop();
  }
  afficheAnswer();
})

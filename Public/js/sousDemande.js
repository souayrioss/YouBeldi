const homme = [
    {
      // 0
      question:'Quelle est votre circonférence du cou?',
      typeQuestion: 'text',
      type: 'text',
      reponse: null,
    },
    {
      // 1
      question: 'Quelle est votre longueur d’épaule du cou à la pointe externe de l’épaule ?',
      typeQuestion: 'text',
      type: 'text',
      reponse: null,
    },
    {
      // 2
      question: 'Quelle est votre longueur de pointe externe de l’épaule au poignet mesuré le long du côté extérieur ?',
      typeQuestion: 'text',
      type: 'text',
      reponse: null,
    },
    {
      // 3
      question: 'Quelle est votre tour de poitrine mesuré le long du buste au point le plus large à travers les mamelons ?',
      typeQuestion: 'text',
      type: 'text',
      reponse: null,
    },
    {
      // 4
      question: 'Quelle est votre circonférence du biceps mesurée à point le plus large?',
      typeQuestion: 'text',
      type: 'text',

      reponse: null,
    },
    {
      // 5
      question: 'Quelle est votre distance du poignet au coude mesurée le long du côté externe ?',
      typeQuestion: 'text',
      type: 'text',
      reponse: null,
    },
    {
      // 6
      question: 'Quelle est votre longueur de pantalon de point externe ? (longueur de bande à la cheville)',
      typeQuestion: 'text',
      type: 'number',
      min: '34',
      max: '41',
      reponse: null,
    },
    {
      // 7
      question: 'Quelle est votre hauteur totale des pieds au sommet du crane ? (Hauteur totale) ',
      typeQuestion: 'text',
      type: 'number',
      min: '34',
      max: '41',
      reponse: null,
    },
    {
      // 8
      question: 'Quelle est votre tissue qui tu veux tailler ?',
      typeQuestion: 'text',
      type: 'number',
      min: '34',
      max: '41',
      reponse: null,
    },
    {
      // 8
      question: 'Le modell ?',
      typeQuestion: 'text',
      type: 'number',
      min: '34',
      max: '41',
      reponse: null,
    },
    {
      //9
      question: 'la Couleur ?',
      typeQuestion: 'text',
      type: 'text',
      min: '34',
      max: '41',
      reponse: null,
    },
  ];
const femme = [
  {
    // 0
    question:'Quelle est votre circonférence du cou?',
    typeQuestion: 'text',
    type: 'text',
    reponse: null,
  },
  {
    // 1
    question: 'Quelle est votre longueur d’épaule du cou à la pointe externe de l’épaule ?',
    typeQuestion: 'text',
    type: 'text',
    reponse: null,
  },
  {
    // 2
    question: 'Quelle est votre longueur de pointe externe de l’épaule au poignet mesuré le long du côté extérieur ?',
    typeQuestion: 'text',
    type: 'text',
    reponse: null,
  },
  {
    // 3
    question: 'Quelle est votre tour de poitrine mesuré le long du buste au point le plus large à travers les mamelons ?',
    typeQuestion: 'text',
    type: 'text',
    reponse: null,
  },
  {
    // 4
    question: 'Quelle est votre circonférence du biceps mesurée à point le plus large?',
    typeQuestion: 'text',
    type: 'text',

    reponse: null,
  },
  {
    // 5
    question: 'Quelle est votre distance du poignet au coude mesurée le long du côté externe ?',
    typeQuestion: 'text',
    type: 'text',
    reponse: null,
  },
  {
    // 6
    question: 'Quelle est votre longueur de pantalon de point externe ? (longueur de bande à la cheville)',
    typeQuestion: 'text',
    type: 'number',
    min: '34',
    max: '41',
    reponse: null,
  },
  {
    // 7
    question: 'Quelle est votre hauteur totale des pieds au sommet du crane ? (Hauteur totale) ',
    typeQuestion: 'text',
    type: 'number',
    min: '34',
    max: '41',
    reponse: null,
  },
  {
    // 8
    question: 'Quelle est votre tissue qui tu veux tailler ?',
    typeQuestion: 'text',
    type: 'number',
    min: '34',
    max: '41',
    reponse: null,
  },
  {
    // 8
    question: 'Le modell ?',
    typeQuestion: 'text',
    type: 'number',
    min: '34',
    max: '41',
    reponse: null,
  },
  {
    //9
    question: 'la Couleur ?',
    typeQuestion: 'text',
    type: 'text',
    min: '34',
    max: '41',
    reponse: null,
  },

];
const demarer = document.querySelector('#demarer');
const niv = document.querySelectorAll(".fa-solid");
const start = document.querySelector('#start');
const test = document.querySelector('#test');
console.log(demarer)
console.log(niv)
demarer.addEventListener("click",function(){
  niv[1].className= "fa-solid fa-circle";
  niv[2].className= "fa-solid fa-circle-dot text-3xl text-blue-300";
  start.style.display="none";
  test.style.display="block";
})
// NAVBAR MENU BURGER

const sidebar = document.getElementById("side-bar");
// const content = document.querySelector(".content");

btn.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});

document.querySelector("main").addEventListener("click", () => {
    sidebar.classList.remove("active");
});
document.querySelector(".headBanner").addEventListener("click", () => {
    sidebar.classList.remove("active");
});


//   DROPDOWN MENU

let link = document.getElementById('dropLink');
let dropMenu = document.getElementById('dropMenu');
let chevron = document.querySelector('.bi-chevron-down');
// console.log(dropMenu);

link.addEventListener('click', () => {
    dropMenu.classList.toggle('showDrop');
    chevron.classList.toggle('bi-chevron-up');
});

// document.addEventListener('click', function (event) {

//     // Si l'élément cliqué n'est pas dans le menu déroulant, masquez le menu
//     if (!dropMenu.contains(event.target) && !link.contains(event.target)) {
//         dropMenu.classList.remove('showDrop');
//     }
// });


//  NAVBAR FIXED AU SCROLL

const navbar = document.querySelector('.nav-main');
// console.log(navbar);

window.addEventListener('scroll', () => {
    if (window.scrollY > 136) {
        navbar.classList.add('sticky');
        sidebar.style.position = "fixed";
        btn.style.top = "30px";
    } else {
        navbar.classList.remove('sticky');
        btn.style.top = "60px";
    }
});


// DRAG AND DROP


// ************************************************************

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById('data'));
}



// Faire apparaitre/disparaitre le mot de passe 

function showPass() {
    if (mdp.type === "password") {
        mdp.type = "text";
        confirmMdp.type = "text";
    } else {
        mdp.type = "password";
        confirmMdp.type = "password";
    }
}

//  Navigation BackOffice

// let links = document.querySelectorAll(".navBack ul a");
// // console.log(links);
// let pageActive = window.location.href; // Stockage localisation dans une variable
// for (let i = 0; i < links.length; i++) {
//     // On boucle sur le tableau "links" qui contient les "a"
//     if (pageActive.includes(links[i].href)) {
//         // On vérifie si la localisation de la page contient le lien sur lequel on clique // si true
//         links[i].classList.add("actuel"); // Ajout de la classe "actuel"
//     }
// }

//   QUIZ


let formQuiz = document.querySelector('.formQuiz');
let quiz = document.getElementById('quiz');
console.log(formQuiz);
// let results = document.querySelectorAll('results');
// let quiz = document.getElementById('quiz');
// let btnQuiz = document.getElementById('submitQuiz');


quiz.addEventListener('submit', (event) => {
    event.preventDefault();
    quiz.classList.add('hideQuiz');
    quiz.classList.remove('formQuiz');
    // result.style.display = 'block';
});








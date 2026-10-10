const board = document.getElementById('board');

// 1. Dejamos solo 6 imágenes base para que el total sea de 12 cartas (6 pares)
const baseImages = [
    'Milo1.jpg', 
    'Milo2.jpg',
    'Amigos1.jpg', 
    'Chirs1.jpg', 
    'Familia1.jpg',
    'Familia2.jpg'
];

// 2. Al duplicar 6 imágenes, el array 'images' pasa a tener exactamente 12 elementos
let images = [...baseImages, ...baseImages];

const reversoURL = 'Reverso.jpg';

let chosenCards = [];
let chosenIds = [];

images.sort(() => 0.5 - Math.random());

function createBoard() {
    images.forEach((imgSrc, index) => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.setAttribute('data-id', index);
        
        // Frente
        const face = document.createElement('img');
        face.setAttribute('src', imgSrc);
        face.classList.add('face');
        
        // Atrás
        const back = document.createElement('img');
        back.setAttribute('src', reversoURL);
        back.classList.add('back');
        
        card.appendChild(face);
        card.appendChild(back);
        card.addEventListener('click', flipCard);
        board.appendChild(card);
    });
}

function flipCard() {
    if (chosenCards.length < 2 && !this.classList.contains('flipped')) {
        this.classList.add('flipped');
        chosenCards.push(this.querySelector('.face').src);
        chosenIds.push(this.getAttribute('data-id'));

        if (chosenCards.length === 2) {
            setTimeout(checkForMatch, 500);
        }
    }
}

function checkForMatch() {
    const cards = document.querySelectorAll('.card');
    const [id1, id2] = chosenIds;

    if (chosenCards[0] === chosenCards[1]) {
        cards[id1].style.pointerEvents = 'none';
        cards[id2].style.pointerEvents = 'none';
    } else {
        cards[id1].classList.remove('flipped');
        cards[id2].classList.remove('flipped');
    }
    
    chosenCards = [];
    chosenIds = [];
}

createBoard();
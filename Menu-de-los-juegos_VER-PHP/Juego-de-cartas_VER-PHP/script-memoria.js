const board = document.getElementById('board');
const modalVictoria = document.getElementById('modal-victoria');
const tiempoFinalEl = document.getElementById('tiempo-final');
const rangoTituloEl = document.getElementById('rango-titulo');
const toastContainer = document.getElementById('toast-container');

const baseImages = [
    'Milo1.jpg', 'Milo2.jpg',
    'Amigos1.jpg', 'Amigos2.jpg',
    'Chirs1.jpg', 'Chirs2.jpg',
    'Familia1.jpg', 'Familia2.jpg'
];

let images = [...baseImages, ...baseImages];
const reversoURL = 'Reverso.jpg';

let chosenCards = [];
let chosenIds = [];
let lockBoard = false;
let matchesFound = 0;

let timerInterval = null;
let segundosTranscurridos = 0;
let juegoIniciado = false;

images.sort(() => 0.5 - Math.random());

function createBoard() {
    board.innerHTML = '';
    images.forEach((imgSrc, index) => {
        const card = document.createElement('div');
        card.classList.add('card');
        card.setAttribute('data-id', index);
        card.setAttribute('data-pair', imgSrc);
        
        const face = document.createElement('img');
        face.setAttribute('src', imgSrc);
        face.classList.add('face');
        
        const back = document.createElement('img');
        back.setAttribute('src', reversoURL);
        back.classList.add('back');
        
        card.appendChild(face);
        card.appendChild(back);
        card.addEventListener('click', flipCard);
        board.appendChild(card);
    });
}

function iniciarCronometro() {
    if (!juegoIniciado) {
        juegoIniciado = true;
        timerInterval = setInterval(() => {
            segundosTranscurridos++;
        }, 1000);
    }
}

function flipCard() {
    if (lockBoard) return;
    if (this.classList.contains('flipped') || this.classList.contains('matched')) return;

    iniciarCronometro();

    this.classList.add('flipped');
    chosenCards.push(this.getAttribute('data-pair'));
    chosenIds.push(this.getAttribute('data-id'));

    if (chosenCards.length === 2) {
        lockBoard = true;
        setTimeout(checkForMatch, 600);
    }
}

function checkForMatch() {
    const cards = document.querySelectorAll('.card');
    const [id1, id2] = chosenIds;

    if (chosenCards[0] === chosenCards[1] && id1 !== id2) {
        cards[id1].classList.add('matched');
        cards[id2].classList.add('matched');
        matchesFound++;

        if (matchesFound === baseImages.length) {
            finalizarJuego();
        }
    } else {
        cards[id1].classList.remove('flipped');
        cards[id2].classList.remove('flipped');
    }
    
    chosenCards = [];
    chosenIds = [];
    lockBoard = false;
}

function finalizarJuego() {
    clearInterval(timerInterval);

    const minutos = Math.floor(segundosTranscurridos / 60);
    const segundos = segundosTranscurridos % 60;
    const tiempoFormateado = `${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
    
    let titulo = '';
    let idTrofeo = '';
    let nombreTrofeo = '';
    let iconoTrofeo = '';

    if (segundosTranscurridos < 60) {
        titulo = '⚡ FLASH';
        idTrofeo = 'trofeo-flash';
        nombreTrofeo = 'Rayo Flash';
        iconoTrofeo = '⚡';
    } else if (segundosTranscurridos <= 150) {
        titulo = '⚙️ PROMEDIO';
        idTrofeo = 'trofeo-promedio';
        nombreTrofeo = 'Constante y Seguro';
        iconoTrofeo = '⚙️';
    } else {
        titulo = '🐢 TORTUGA';
        idTrofeo = 'trofeo-tortuga';
        nombreTrofeo = 'Sin Prisa pero Sin Pausa';
        iconoTrofeo = '🐢';
    }

    tiempoFinalEl.textContent = tiempoFormateado;
    rangoTituloEl.textContent = titulo;
    modalVictoria.classList.remove('oculto');

    // Procesar trofeo obtenido
    otorgarTrofeo(idTrofeo, nombreTrofeo, iconoTrofeo);
}

function otorgarTrofeo(idTrofeo, nombre, icono) {
    let trofeosObtenidos = JSON.parse(localStorage.getItem('trofeos_mailo')) || [];

    // Solo notifica y guarda si NO se había obtenido anteriormente
    if (!trofeosObtenidos.includes(idTrofeo)) {
        trofeosObtenidos.push(idTrofeo);
        localStorage.setItem('trofeos_mailo', JSON.stringify(trofeosObtenidos));
        mostrarNotificacionSteam(nombre, icono);
    }
}

function mostrarNotificacionSteam(nombre, icono) {
    const toast = document.createElement('div');
    toast.classList.add('toast-steam');
    toast.innerHTML = `
        <div class="icono-achievement">${icono}</div>
        <div class="detalles-toast">
            <small>¡Logro desbloqueado!</small>
            <h4>${nombre}</h4>
        </div>
    `;

    toastContainer.appendChild(toast);

    // Eliminar del DOM al finalizar la animación (5s)
    setTimeout(() => {
        toast.remove();
    }, 5000);
}

createBoard();
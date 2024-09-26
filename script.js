const span = document.getElementById('minhaSpan');
const cores = ['red', 'blue', 'green', 'orange', 'purple', 'pink'];
let indice = 0;

function mudarCor() {
    span.style.color = cores[indice];
    indice = (indice + 1) % cores.length; // Cicla entre as cores
}

setInterval(mudarCor, 2000); // Altera a cor a cada 1 segundo

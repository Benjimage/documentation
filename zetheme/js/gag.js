function gagDisplay(texte){
    const gagMessage = document.querySelector('.message');
    gagMessage.innerHTML = texte;
}

function display() {
const textes = [
    "C'est la page ERROR 404 ...",
    'Horreur !!!',
    'Heureusement ...'
];
let index = 0;
  const intervalId = setInterval(() => {
    gagDisplay(textes[index]);
    index = (index + 1) % textes.length;
  }, 1000);
  setTimeout(() => clearInterval(intervalId), 3500);
}
display();
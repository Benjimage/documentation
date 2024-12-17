/********************/
/*      SEARCH      */
/********************/  
const inputRequired = document.querySelector("#s");
inputRequired.setAttribute('required','true')

const signal = document.querySelector('.trans')
const modal = document.querySelector(".modal");
const trigger = document.querySelector(".seek");

trigger.onclick = () => {
  modal.style.display = "flex";
}

function searchDisplay() {
    setTimeout(() => {
      modal.style.display = "flex"
    },4000);
  }

if (signal.innerHTML=== 'Error 404') {
  window.onload = () => {
    searchDisplay()
  }
} 
window.onclick = (event) =>{
  if (event.target === modal) {
    modal.style.display = "none";
  }
} 
/********************/
/*    RESOURCES     */
/********************/  

const overlay = document.querySelector(".overlay");
const feature = document.querySelector(".feature");
const shut = document.getElementsByClassName("close")[0];

feature.addEventListener('click', () => {
  overlay.style.display = "flex";
})
shut.onclick = () => {
  overlay.style.display = "none";
}

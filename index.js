import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
const meshContainer = document.getElementById('meshGrid');

// Generate the grid dynamically
for (let i = 0; i < 36 * 26; i++) {
  const cell = document.createElement('div');
  meshContainer.appendChild(cell);
}


function buttonClicked() {
  console.log("clicekd")
  let a = document.querySelector("#example1")
  let b = document.querySelectorAll("#animate-image-wrapper")
  a.classList.toggle("rotation-button")
  console.log(b[1])
  b[0].classList.toggle("translation-button")
  b[1].classList.toggle("translation-button")
  
}

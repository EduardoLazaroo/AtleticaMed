/*abre e fecha*/
const nav = document.querySelector('#header nav.container')
const toggle = document.querySelectorAll('nav .toggle')

for (const element of toggle){
    element.addEventListener('click', function (){
        nav.classList.toggle('show')
    })
}

/*links que escondem o menu */
const links = document.querySelectorAll('nav ul li a')

for (const link of links){
    link.addEventListener('click', function(){
        nav.classList.remove('show')
    })
}

/* Testimonials carousel slider swiper */
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination'
    },
    keyboard: true
  })

/* Botão voltar para o topo */
const backToTopButton = document.querySelector('.back-to-top')
window.addEventListener('scroll',function (){
    if (window.scrollY >= 500) {
        backToTopButton.classList.add('show')
      } else {
        backToTopButton.classList.remove('show')
      }
})

// Slide troca de tela,
let time = 3000,
  currentImageIndex = 0,
  images = document.querySelectorAll("#slider img")

  max = images.length;

function nextImage(){

  images[currentImageIndex]
    .classList.remove("selected")

  currentImageIndex++

  if(currentImageIndex >= max)
  currentImageIndex = 0

  images[currentImageIndex]
    .classList.add("selected")
}

function start(){
  setInterval(() =>{
    nextImage()
  }, time)
}

window.addEventListener("load", start)

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
/* ScrollReveal: Mostrar elementos quando der scroll na página */
// const scrollReveal = ScrollReveal({
//     origin: 'top',
//     distance: '30px',
//     duration: 300,
//     reset: true
// })
  
// scrollReveal.reveal(
//     `
//     #about .text,
//     #principais .title, #principais .card,
//     #testimonials header, #testimonials .testimonials,
//     #contact .title, #parties .title,
//     #modalities .title,
//     #hinos .title, #hinos p
//     `,
//     { interval: 100 }
// )

/* Botão voltar para o topo */
const backToTopButton = document.querySelector('.back-to-top')
window.addEventListener('scroll',function (){
    if (window.scrollY >= 500) {
        backToTopButton.classList.add('show')
      } else {
        backToTopButton.classList.remove('show')
      }
})
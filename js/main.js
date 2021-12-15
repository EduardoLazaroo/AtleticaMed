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


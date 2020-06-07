var elemento = document.querySelector('img.rentame');
var barra = document.querySelector('nav.barra');
var pathname = window.location.pathname;
console.log(pathname);


if (pathname === '/iia/index.php' || pathname === '/iia/') {
    window.onscroll = function() {
        var vertical = window.scrollY;
        console.log(vertical);

        if (vertical > 1620) {
            // console.log('Listo!');
            elemento.classList.add('animate__fadeInRight');
        } else {
            elemento.classList.remove('animate__fadeInRight');
        }
        if (vertical > 620) {
            barra.classList.add('bg-dark');
        } else {
            barra.classList.remove('bg-dark');
        }
    };
}
if (pathname === '/iia/construccion.php') {
    window.onscroll = function() {
        var vertical = window.scrollY;
        console.log(vertical);

        if (vertical > 1) {
            // console.log('Listo!');
            elemento.classList.add('animate__fadeInRight');
        } else {
            elemento.classList.remove('animate__fadeInRight');
        }
        if (vertical > 113) {
            barra.classList.add('bg-dark');
        } else {
            barra.classList.remove('bg-dark');
        }
    };
}
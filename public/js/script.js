const btnComprar = document.querySelector('.loja-comprar');

btnComprar.addEventListener('click', e => {
    e.preventDefault();
    window.location.href = 'http://localhost:1234/comprar?' + window.location.search.replace("?", "");
})
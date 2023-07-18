const casasFiltro = document.querySelector('.casas-filtro');

casasFiltro.addEventListener('click', (event) => {
    const li = event.target.closest('li');
    
    if (li) {
        li.classList.toggle('ativado');
    }
});

function ajustarAlturaBoxTutorial() {
    var boxTutorialElems = document.querySelectorAll('.box-tutorial');
    var itemOpElems = document.querySelectorAll('.item-op');
  
    for (var i = 0; i < boxTutorialElems.length; i++) {
        var itemOpIndex = i;
        var height = itemOpElems[itemOpIndex].offsetHeight;
        boxTutorialElems[i].style.height = height + 'px';
    }
}

ajustarAlturaBoxTutorial();

window.addEventListener('resize', ajustarAlturaBoxTutorial);
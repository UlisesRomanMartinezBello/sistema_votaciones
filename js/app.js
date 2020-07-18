function validacion() {
    let candidato = document.getElementsByName('candidato');

    let selecionado = false;

    for (let i = 0; i < candidato.length; i++) {
        if (candidato[i].checked) {
            alert('Gracias por realizar tu voto');
            selecionado = true;
            break;
        }
    }

    if (!selecionado) {
        alert('No haz seleccionado ningún candidato');
        return false;
    }
}
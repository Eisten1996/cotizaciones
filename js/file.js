
function ValidaDatosR() {


    if ($F('nombre') === '') {
        alert('Ingrese su nombre');
        $('nombre').focus();
        return false;
    }

    if ($F('fecha') === '') {
        alert('Ingrese la fecha del evento');
        $('fecha').focus();
        return false;
    }

    if ($F('direccion') === '') {
        alert('Ingrese la direccion del evento');
        $('direccion').focus();
        return false;
    }

    if ($F('horario') === '') {
        alert('Ingrese el horario del evento');
        $('horario').focus();
        return false;
    }

}
function imprimirHorarios(especialidad) {
    if(especialidad == ""){
        document.getElementById(horario).innerHTML = "";
        return;
    }else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    document.getElementById(horario).innerHTML = this.responseText;
                } 
            }
        };
        var ruta = 'horarios_citas.php?especialidad='+especialidad;
        xhttp.open('GET', ruta, true);
        xhttp.send();
    }
}
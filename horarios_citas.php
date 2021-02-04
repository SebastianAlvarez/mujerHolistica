<?phpif(isset($_GET["especialidad"])){
        $especialidad = $_GET["especialidad"];
        require_once 'models/agendar_cita_model.php';
        $horarios = get_horarios_by_especialidad($especialidad);
        require_once 'views/horarios.php';
    }else{
    require_once 'views/AgendarCitaPaciente.php';
    }
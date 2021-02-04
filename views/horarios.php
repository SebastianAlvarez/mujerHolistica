<?php
        if (count($horarios) > 0) 
        {
            foreach ($horarios as  $horario) 
            {
    ?>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $horario['trabajadores_clinica.nombre']." ".$horario['trabajadores_clinica.apellidos']; ?></h5>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $horario['horario_citas.fecha']; ?>
                    </div>
                </div>
                <?php
            }
        }else
        {?>
            <h1> No hay estados</h1>
            <?php
        }
            ?>
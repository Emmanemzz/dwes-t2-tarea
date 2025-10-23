<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy</title>
</head>

<body>
    <?php
    require './clases/Miembro.php';
    require './clases/Alumno.php';
    require './clases/Profesor.php';
    require './clases/Asignatura.php';

    $alumnos = Alumno::crearAlumnoDeMuestra();
    $profesores = Profesor::crearProfesorDeMuestra();
    $asignaturas = Asignatura::crearAsignaturaDeMuestra();

    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);


    $alumnosMenores23 = array_filter($alumnos, function ($alumno) {
        return $alumno->getEdad() <= 23;
    });

    //print_r($alumnosMenores23);

    $alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
        return count($alumno->getAsignatura()) >= 2;
    });

    //var_dump($alumnosConDosAsignaturas);

    $asignaturasConAlumnos = array_filter($asignaturas, function ($asignatura) use ($alumnos) {
        foreach ($alumnos as $alumno) {
            foreach ($alumno->getAsignatura() as $asignaturaAlumno) {
                if ($asignaturaAlumno == $asignatura) {
                    return true;
                }
            }
        }
        return false;
    });
    ?>

    <h1>Alumnos</h1>
    <ul>
        <?php
        foreach ($alumnos as $alumno) {
        ?>
            <li><?php echo $alumno; ?></li>
        <?php
        }
        ?>
    </ul>

    <!--Lista profesores-->
    <h2>Profesores</h2>
    <ul>
        <?php
        foreach ($profesores as $profesor) {
        ?>
            <li><?php echo $profesor; ?></li>
        <?php
        }
        ?>
    </ul>
    <!--Lista asignaturas-->
    <h2>Asignaturas</h2>
    <ul>
        <?php
        foreach ($asignaturas as $asignatura) {
        ?>
            <li><?php echo $asignatura; ?></li>
        <?php
        }
        ?>
    </ul>
    <!--Lista alumnosMenores23-->
    <h2>Alumnos Menores de 23</h2>
    <ul>
        <?php
        foreach ($alumnosMenores23 as $alumno) {
        ?>
            <li><?php echo $alumno; ?></li>
        <?php
        }
        ?>
    </ul>
    <!--Lista asignaturaConAlumnos-->
    <h2>Asignatura con Alumnos</h2>
    <ul>
        <?php
        foreach ($asignaturasConAlumnos as $asignaturaAlumno) {
        ?>
            <li><?php echo $asignaturaAlumno; ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>
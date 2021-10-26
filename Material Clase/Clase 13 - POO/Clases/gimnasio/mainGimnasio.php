<?php
include_once("Entrenador.php");
include_once("Alumno.php");
include_once("Clase.php");
$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", 35, "Argentino",1139450882, "miguel@mail.com", "Boxeo");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", 37, "Argentina",1139450882, "andrea@mail.com", "Boxeo");

$alumno1 = new Alumno("40787657", "Dante Montera",20,"Argentino", "1145632457","dante@mail.com",  "1997-08-28");
$alumno1->setFichaMedica(90, 178, true);
$alumno1->setPresentismo(78);

$alumno2 = new Alumno("46766547", "Darío Turchi",20,"Venezolano", "1145632457","dante@mail.com",  "1986-11-21");
$alumno2->setFichaMedica(73, 168, false);
$alumno2->setPresentismo(68);

$alumno3 = new Alumno("39765454", "Facundo Fagnano",20,"Colombiano", "1145632457","facundo@mail.com",  "1993-02-06");
$alumno3->setFichaMedica(90, 187, true);
$alumno3->setPresentismo(88);

$alumno4 = new Alumno("41687536", "Gastón Aguilar",20,"Uruguayo", "1145632457", "gaston@mail.com", "1999-11-02");
$alumno4->setFichaMedica(70, 169, false);
$alumno4->setPresentismo(98);


$clase1 = new Clase("Funcional",NULL);

$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 = new Clase("Zumba",NULL);

$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase1->imprimirListado();

?>
<?php

//Equipo, a programar! 🚀🔥 Les tengo un desafío de PHP 🐘 que integra TODO lo que hemos visto hasta ahora. ¡Es hora de conectar los puntos y demostrar su lógica! 💻🧠

//🎯 EJERCICIO ÚNICO: SISTEMA DE CALIFICACIONES 🎯

//📝 Enunciado:
//Vamos a crear un script en PHP para gestionar las notas de varios estudiantes. El programa deberá procesar una lista de alumnos, calcular el promedio de cada uno, decidir si aprueban o reprueban y mostrar un reporte final en la consola. ¡Cero HTML, 100% lógica PHP!

//📋 Requerimientos Técnicos:
//1️⃣. La Base de Datos (Array): Crea un array principal. Dentro, cada estudiante será un array asociativo con su nombre (string) y sus notas (otro array de números). ¡Mete al menos 4 estudiantes!
//2️⃣. *Función calcularPromedio*: Debe recibir un array de notas, sumar todo con un bucle 🔁 y devolver el promedio. ¡Ojo con dividir por cero si no hay notas!
//4️⃣. El Cerebro del Script: Usa un bucle foreach para recorrer a todos los estudiantes. Llama a tus funciones para obtener el promedio y el estado de cada uno. ¡Guarda todo en variables!
//5️⃣. El Reporte Final: Imprime en la consola un resumen bonito para cada estudiante: su nombre, su promedio (con 2 decimales) y su estado. Debe funcionar solito con el comando php tu_script.php.

//¡Este ejercicio es clave para solidificar las bases! 💪 Quiero ver esas soluciones pulcras y eficientes. ¡Vamos a darle con todo! #PHP #DesarrolloWeb #Programacion #AprenderAPROGRAMARp

















function verNotas(array $estudiantes): void {
    echo "\n--- 1. Notas de los Estudiantes ---\n";
    foreach ($estudiantes as $estudiante) {
        $nombre = $estudiante['nombre'];
        $notas = $estudiante['notas'];
        echo "Estudiante: " . ucfirst($nombre) . "\n";
        foreach ($notas as $materia => $nota) {
            echo "  - " . ucfirst($materia) . ": " . $nota . "\n";
        }
    }
    echo "---------------------------------\n";
}


function calcularPromedios(array $estudiantes): array {
    $promedios = [];
    foreach ($estudiantes as $estudiante) {
        $nombre = $estudiante['nombre'];
        $notas = $estudiante['notas'];
        $suma_notas = array_sum($notas);
        $num_materias = count($notas);
        
        $promedio = $num_materias > 0 ? $suma_notas / $num_materias : 0;
        
        $promedios[$nombre] = $promedio;
    }
    return $promedios;
}


function verPromedios(array $estudiantes): void {
    echo "\n--- 2. Promedios de los Estudiantes ---\n";
    $promedios = calcularPromedios($estudiantes);
    $suma_promedios = 0;
    $count_promedios = 0;

    foreach ($promedios as $nombre => $promedio) {
        echo "Estudiante " . ucfirst($nombre) . ": " . number_format($promedio, 2) . "\n";
        $suma_promedios += $promedio;
        $count_promedios++;
    }

    
    if ($count_promedios > 0) {
        $promedio_general = $suma_promedios / $count_promedios;
        echo "\nPromedio General del Grupo: " . number_format($promedio_general, 2) . "\n";
    }

    echo "--------------------------------------\n";
}


function determinarEstado(float $promedio): string {
   
    if ($promedio >= 16) {
        return "Aprobado (Alto)";
    } elseif ($promedio >= 10) {
        return "Aprobado (Regular)";
    } else {
        return "Reprobado";
    }
}


function verEstadoGeneral(array $estudiantes): void {
    echo "\n--- 3. Estado General de los Estudiantes ---\n";
    $promedios = calcularPromedios($estudiantes);

    foreach ($promedios as $nombre => $promedio) {
        $estado = determinarEstado($promedio);
        echo "Estudiante " . ucfirst($nombre) . " (Promedio: " . number_format($promedio, 2) . "): " . $estado . "\n";
    }
    echo "------------------------------------------\n";
}



function main() {
    
    $notas_de_estudiantes = [
        ['nombre' => "josue", "notas" => ["matematicas" => 19, "lenguaje" => 9, "fisica" => 15]],
        ['nombre' => "reina", "notas" => ["matematicas" => 10, "lenguaje" => 20, "fisica" => 10]],
        ['nombre' => "samuel", "notas" => ["matematicas" => 7, "lenguaje" => 1, "fisica" => 14]],
        ['nombre' => "daniel", "notas" => ["matematicas" => 19, "lenguaje" => 20, "fisica" => 19]],
        ['nombre' => "andres", "notas" => ["matematicas" => 20, "lenguaje" => 4, "fisica" => 16]],
    ];
    
    
    while (true) {
        echo "\n=========================================\n";
        echo "       Reporte de Notas de los Estudiantes\n";
        echo "=========================================\n";
        echo "Que quiere hacer?\n";
        echo "1: Ver notas\n";
        echo "2: Ver promedios y promedio general\n";
        echo "3: Ver estado general\n";
        echo "4: Salir del programa\n";

        
        $opciones_menu = (int)readline("Ingrese una opción (1-4): ");

        
        switch ($opciones_menu) {
            case 1:
                verNotas($notas_de_estudiantes);
                break;
            case 2:
                verPromedios($notas_de_estudiantes);
                break;
            case 3:
                verEstadoGeneral($notas_de_estudiantes);
                break;
            case 4:
                echo "\n Saliendo... \n";
                exit(0);
                break;
            default:
                echo "\n❌ Opción no válida\n";
                break;
        }
    }
}


main();


//profe le voy se sincero esto fui un poco copiando y otro con ia no tengo tiempo por culpa de un trbajao de la uni, no me quiero excusar pero es para que lo sepa, el portafolio le pormeto que si quedara bien disvulpe el poco empeño que le pongo 
?>


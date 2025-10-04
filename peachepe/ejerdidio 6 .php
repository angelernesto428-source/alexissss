<?php
// EJERCICIO SEIS CALISIFICADOR DE EDADESSDSDD

$edadreal = (int)readline ("ponga su edad");

if ( $edadreal < 12) {
    echo "eres un niño";
}
elseif ( $edadreal < 18); {
    echo "eres un adolecente";
}
elseif ( $edadreal < 64 ) {
    echo "eres un adulto";
}
elseif ($edadreal >65) {
    echo "eres un adulto mayor"
}
else {
    echo "esto es pa rellenar"
}

?>
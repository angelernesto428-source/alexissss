//*Ejercicio 3: Manipulación de Strings* ✨
//- *Enunciado:* Pide nombre y apellido por separado, únelos en una variable de nombre completo y muéstralo en MAYÚSCULAS.
//- *Requerimientos:* Dos `prompt()`, concatenación (con `+` o `` `${}` ``) y el método `.toUpperCase()`.

let nombre = prompt("pponga su primer nombre:")
let apellido = prompt("ponga su apellido:")

let nombre_entero = nombre + " " + apellido
console.log("tu nombre completo es:", nombre_entero.toUpperCase());
//*Ejercicio 1: Declaración de Variables* 🔢
//- *Enunciado:* Crea un script que declare tu nombre, año de nacimiento y año actual. ¡Calcula tu edad y muéstrala en la consola!
//- *Requerimientos:* Usa `let`/`const`, tipos `string` y `number`, haz una resta y muestra el resultado con `console.log()`.

const minombre = "angel"
console.log("mi nombre es", minombre);

let cumpleaños = "2008" 
console.log("naci en el:", cumpleaños)

let año_actual = "2025"
console.log("estamos en el año:", año_actual)

let edad = año_actual - cumpleaños
console.log("tu edad es:", edad)
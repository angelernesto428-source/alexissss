
//*Ejercicio 6: Condicionales Anidados* 🎓
//- *Enunciado:* Pide una nota del 0 al 10 y conviértela a calificación: Suspenso, Aprobado, Notable o Sobresaliente.
//- *Requerimientos:* Usa `if-elif-else`, operadores lógicos `&&` y maneja entradas no válidas.

let nota = prompt("ponga su nota del 1 al 10: ")

if (nota  <=4) {

    console.log("suspendido")
} else if ( nota <=7) {
    console.log("aprobado por poco")
}else if (nota <=9) {
    console.log("puntaje alto,aprobado")
}else if (nota == 10) {
    console.log("sobresaliente,felicidades")
}

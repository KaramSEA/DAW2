


let num1 = Number(prompt("Introduce el primer número:"));
let num2 = Number(prompt("Introduce el segundo número:"));


let opcion = prompt("Escribe el número de la operación que deseas realizar:1 - Suma, 2 - Resta, 3 - Multiplicación, 4 - División");

let resultado;

switch(opcion) {
    case '1': 
        resultado = num1 + num2;
        alert("El resultado de la suma es: " + resultado);
        break;
    case '2': 
        resultado = num1 - num2;
        alert("El resultado de la resta es: " + resultado);
        break;
    case '3': 
        resultado = num1 * num2;
        alert("El resultado de la multiplicacion es: " + resultado);
        break;
    case '4': 
        resultado = num1 / num2;
        alert("El resultado de la division es: " + resultado);
        break;
    default: 
        alert("No se reconoce.");
        break;
}

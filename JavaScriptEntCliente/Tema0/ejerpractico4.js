var num1 = Number(prompt("Introduce el primer número:"));
var num2 = Number(prompt("Introduce el segundo número:"));



do {
    if (isNaN(num1)) {
        var num1 = Number(prompt("El primer numero que has introcido es incorrecto"));
    }
    if (isNaN(num2)) {
        var num2 = Number(prompt("El segundo numero que has introcido es incorrecto"));
    }
}while (isNaN(num1)||isNaN(num2));

var opcion = prompt("Escribe el número de la operación que deseas realizar:1 - Suma, 2 - Resta, 3 - Multiplicación, 4 - División");

var resultado;

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
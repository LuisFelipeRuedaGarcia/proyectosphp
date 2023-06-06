
<?php
//! 1.2 Introdicción a PHP
//! 1.2.1 Estructura básica de un Script PHP
/* arteM01-047@rootar-9048-900-0044:~/Desktop/
proyectosphp$ php -S localhost:3000
 se ejecuta para poder abrir un localhost desde cualquier directorio sin que tenga que estar el archvio en /var/www/html/ArTM01-047 */

//! 1.3 Funciones de Salida en PHP

echo ": Es una construcción de lenguaje en PHP que actua como una función de salida (aquella que permite mostrar información al usuario) equivalente a un print o un console.log en Python o Js,
pero además de imprimir en consola cuando se ejecuta desde allí, tiene la particularidad de que al ser php un leguaje de interfaz igual que HTML puede ser visualizados los archivos .php como lo haríamos con uno .html (con la ayuda de apache2)
puede renderizar elementos en el documento web que podemos observar dirigiéndonos en nuestro navegador a la direccion localhost:3000 que es el puerto configurado con el comando comentado  <br> \n";

$texto = "mundo";
print("Hola ".$texto."<br>");
//print comple la misma función que echo, con la particular diferencia de que siempre retorna 1; echo no retorna nada;
$operacion = 1 + print("");
echo $operacion. "<br>"; // imprime un 2, al tomar print() como 1 en la operación;

printf("Hi %s !<br>", $texto);
//puede reemplazar en un string el marcador %s por algun(os) valor(es), pasádole como primer parámetro el texto en el que se va a incrustar el valor y luego, separados por comas, los valores que se desea insertar.


$sprintf= sprintf("Hello %s !<br>", $texto);
//funcina exactamente igual que el printf() a la hora de formatear una strig, pero con la diferencia de que no imprime, puede ser útli para guardar en una variable el resultaod y luego sí imprimirlo;
echo $sprintf;

$var_dump ="var_dump(): Es una función especial en PHP que se utiliza para mostrar información detallada sobre una o más variables, incluyendo su tipo y valor.";
var_dump($var_dump);

//! 1.4 Variables y constantes

//Declaración variable numérica
$edad = 19;
//Declaración variable cadena de texto
$nombre= "Lu";
//Declaración variable Booleana
$es_valido = true;

//Declaración constante numérica
define("PI", 3.1416);
//Declaración constante cadena de texto
define("SALUDO", "Hola Mundo");
//Declaración constante booleana
define("ES_VALIDO", true);

//! 1.5 Tipos de datos 
//• Enteros (int): se utilizan para almacenar números enteros sin decimales. 
$entero =455;
var_dump($entero);
echo "<br>";
//• Punto flotante (float): se utilizan para almacenar números con decimales.
$float=455.12;
var_dump($float);
echo "<br>";

//• Cadenas de texto (string): se utilizan para almacenar texto y caracteres.
$string="cadena de texto.";
var_dump($string);
echo "<br>";
//• Booleanos (bool): se utilizan para almacenar valores de verdad o falsedad, que se representan por true o false, 1 o 0.
$boolean=false;
var_dump($boolean);
echo "<br>";
//• Arreglos (array): es como una varible, sólo que puede almacenar varios dato, incluso si son de distinto tipo
$array = [14,"Jose", false, "0.68"];
var_dump($array);
echo "<br>";
//• Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de objetos. Como se puede observar en la imagen anterior que la línea número 10 se está imprimiendo el tipo de dato y el contenido de la variable haciendo uso de la función especial var_dump. 
//

//• Recursos (resource): se utilizan para almacenar referencias a recursos externos, como conexiones a bases de datos o archivos abiertos.
//• Nulos (null): se utilizan para representar una variable sin valor o sin definir.Además de estos tipos de datos básicos, PHP también admite otros tipos de datos, como las constantes, que se mencionaron anteriormente, y los tipos de datos compuestos, como las estructuras de datos y las clases.
?>



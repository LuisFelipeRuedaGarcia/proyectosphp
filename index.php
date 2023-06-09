
<?php
//! 1.2 Introdicción a PHP
//! 1.2.1 Estructura básica de un Script PHP
/* arteM01-047@rootar-9048-900-0044:~/Desktop/proyectosphp$
 php -S localhost:3000
 se ejecuta para poder abrir un localhost desde cualquier directorio sin que tenga que estar el archvio en /var/www/html/ArTM01-047 */

//! 1.3 Funciones de Salida en PHP

echo ": Es una construcción de lenguaje en PHP que actua como una función de salida (aquella que permite mostrar información al usuario) equivalente a un print o un console.log en Python o Js,
pero además de imprimir en consola cuando se ejecuta desde allí, tiene la particularidad de que al ser php un leguaje de interfaz igual que HTML puede ser visualizados los archivos .php como lo haríamos con uno .html (con la ayuda de apache2)
puede renderizar elementos en el documento web que podemos observar dirigiéndonos en nuestro navegador a la direccion localhost:3000 que es el puerto configurado con el comando comentado  <br> <br>";

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
//• Arreglos (array): es como una varible, sólo que puede almacenar varios dato, incluso si son de distinto tipo y se guardan como si fuese una lista, donde cada elemento ocupa un posición (key) el número en que fue agregado.
$array = [14,"Jose", false, "0.68"];
var_dump($array);
echo "<br>";
echo $array[3];
echo "<br>";

//• Arreglosv Anidados (array): es un array, pero en lugar de guardarse su lugar en el array (key) asociado a su número de posición, tiene un "nombre con el que poder identificarlo dentro del array;
$array = ["edad"=>14,"nombre"=>"Jose", "fue_aprovado"=>false, "promedio"=>"0.68"];
var_dump($array);
echo "<br>";
echo $array["promedio"];
echo "<br>";
//• Objetos (object): se utilizan para almacenar instancias de clases, que son definiciones de objetos. Como se puede observar en la imagen anterior que la línea número 10 se está imprimiendo el tipo de dato y el contenido de la variable haciendo uso de la función especial var_dump. 
class Clase {
    private $propiedad;
    public function __construct($propiedad){
        $this->propiedad = $propiedad;
    }
    public function getPropiedad(){
        return $this->propiedad;
    }
    public function setPropiedad($argumento){
        $this->propiedad = $argumento;
    }
}

$objeto = new Clase("valor");
echo $objeto->getPropiedad();
echo"<br>";

//• un "resource" (recurso) es un tipo de dato especial que representa un recurso externo manejado por PHP. Un recurso es una referencia interna a un recurso externo, como un archivo abierto, una conexión de base de datos, un flujo de datos, etc.
$file = fopen('archivo.txt', 'r');
echo $file;

/* $mysqli = new mysqli('localhost', 'usuario', 'contraseña', 'basededatos');
$socket = fsockopen('tcp://example.com', 80); */
//• Nulos (null): variables a las que no se les ha dado un valor.

$vacia;
echo $vacia;
echo"<br>";
var_dump($vacia);
echo"<br>";


//! 1.6 Numeros y Operadores

//1.61. Aritetic Operators
$suma = 1 + 1;
$resta = 2-2;
$multiplicacion = 3*2;
$division = 9/3;
$modulo = 10%3;
$exponentiation = 2**4;
echo "suma =".$suma."<br>" ."resta =".$resta."<br>" ."multiplicacion =".$multiplicacion."<br>"."division =".$division."<br>" ."modulo =".$modulo."<br>". "exponentiation =" .$exponentiation ."<br>";
//1.6.2Assignmet Operator
$equalTo = "=";
//1.6.3 Array operators
$union = "+";
$equalitiy = "==";
$Identify = "===";
$Inequality = "!=";
$Inequality = "<>";
$Non_identify = "!==";
//1.6.4 Btwise Operators
$and ="&";
$xor="^";
$not="|";
$shitLeft="<<";
$shiftRight=">>";
//1.6.5 Comarison Operators

$equal = "==";
$Identical = "===";
$NotEqual = "!=";
$NotEqual = "<>";
$Non_identical = "!==";




$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual

// var_dump( $a == $b );
// var_dump( $a == $b2 );

// === Idéntico

/* var_dump( $a === $b );
var_dump( $a === $b2 ); */

// != Diferente
// var_dump( $a != $b );
// var_dump( $a != $b2 );

// !== Diferente
/* var_dump( $a !== $b );
var_dump( $a !== $b2 ); */

// < Menor que
/* var_dump( $a < $b );
var_dump( $c < $b );
var_dump( $d < $b ); */

// > Mayor que
/* var_dump( $a > $b );
var_dump( $c > $b );
var_dump( $d > $b ); */

// >= Mayor o igual que

/* var_dump( $a >= $b );
var_dump( $c >= $b );
var_dump( $d >= $b ); */

// <= Menor o igual que

/* var_dump( $a <= $b );
var_dump( $c <= $b );
var_dump( $d <= $b ); */

// <=> Nave espacial

// echo 2 <=> 1; // 1
// echo 1 <=> 1; // 0
// echo -50 <=> 1; // -1

// ?? Fusión de null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

echo "<br>";

//1.6.6 Execution Operator
$Backticks = "´´";
//1.6.7 Execution Operator
$atSing ="@";
//1.6.8 Increment/Decrement Operator

$contador = 1;

// $contador = $contador + 1;
// $contador += 1;
// $contador++;

/* 

+=
-= 
*=
/=

*/

/* $nombre = "Carlos";
$nombre .=  " " . "Santana";

echo $nombre; */

$contador = 1;
$resultado = $contador++;
$final = ++$contador;
echo $contador . "<br>";
echo $resultado. "<br>";
echo $final;

echo "<br>";

// 1.6.9 Logical Operator
$And = "&&";
$Or = "||";
$Not = "!=";
$and = "AND";
$xor = "XOR";
$or = "OR";



$michis_felinos =  true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

// And

# var_dump($michis_felinos && $michis_4_patas);


// Or
# var_dump($michis_4_patas || $michis_vuelan);

// Not
# var_dump( !$michis_4_patas );


// Experimentos que te va a hacer decir waaaaaaaaaaaaat

$resultado = $michis_4_patas and $michis_programan_con_PHP;

var_dump( $resultado );

echo "<br>";

$nombreCliente = "Campers Campuslands";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br>";
//Convertirlo a Mayúsculas
echo strtoupper($nombreCliente);
echo "<br>";
//Convertirlo a Minusculas
echo strtolower($nombreCliente);
echo "<br>";
$mail1= "correo@correo.com";
$mail2= "Correo@correo.com";

var_dump(strtolower($mail1)===strtolower($mail2));
echo str_replace("Juan", "J", $nombreCliente);
echo "<br>";
//Revisar si un caracter existe o no en un string
echo strpos($nombreCliente, "Pedro");
echo "<br>";
$tipoCliente = "Premium - Empresarial";

echo "<br>";
echo "el cliente ". $nombreCliente . "es" . $tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente}";

//!1.7 arreglos, Arrreglos asociativos y Funciones para arreglos

$miArreglo = array("valor1", "valor2", "valor3");
$carrito = ["Tablet", "Television", "Computador"];

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";
//Acceder a un elemento del array
echo $carrito[1];

//Añadir un elemento en el indice 3 del arreglo
$carrito[3] = "Nuevo Producto ...";

//Añadir un elemento nuevo al final...
array_push($carrito, "Smartwatch");

//Añadir un elemento nuevo al inicio
array_unshift($carrito, "Audifonos");

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array("Cliente1", "Cliente2", "Cliente3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

//PHP cuenta con muchas funciones integradas para trabajar con arreglos, como count, sort, array_push, array_pop, array_merge, array_key_exists, entre otras. 


$edades = [18, 22, 40, 34];
echo count($edades);
echo "\n";
array_push($edades, 13);
/* var_dump($edades); */
$thisIsnotAnArray="Xd";
var_dump(is_array($edades));
var_dump(is_array($thisIsnotAnArray));

$listaDeFrutas = "fresa,cereza,manzana";
var_dump(explode(",",$listaDeFrutas));
var_dump(implode(",",$edades));
echo "\n";

$edades = array(

    "carlos" => 20,
    "Mr.Michi" => 18,
    "Juan" => 40,
    );
    echo "La edad del Gato es " . $edades["Mr.Michi"];
    echo "<br>";
    
    $cafes = [
        "capucchino" => 50,
        "Latte"=>49,
        "Americano"=>70,
    ];
    echo "El cafe cuesta {$cafes['Americano']}";
    echo "<br>";
    
    $personas = [
        "Carlos"=> ["edad" => 20, "Apellido" => "Santana"],
        "Mr.Michi"=> ["edad" => 18, "Apellido" => "N/A"],
    ];
    
    echo " La edad de Mr.Michi es " . $personas["Mr.Michi"]["edad"]." y su apellido ".$personas["Mr.Michi"]["Apellido"];
    echo "<br>";

    //Los arrays asociativos utilizando un bucle foreach de la siguiente manera:
        foreach($edades as $clave => $valor){
            echo " Clave:" . $clave . " valor:" . $valor;
        }

        echo "<br>";

        $cliente =[
            "nombre" => "Juan",
            "saldo" => 200,
            "informacion" =>[
                "tipo" => "Premium",
                "disponible" => 100
            ]
            ];

        echo "<pre>";
        var_dump($cliente["informacion"]);
        echo "</pre>";
        echo $cliente["nombre"];
        echo "<br>";
        echo $cliente["informacion"]["tipo"];
        $cliente["codigo"] = 1209192012;

        echo "<pre>";
        var_dump($cliente);
        echo "</pre>";

        $carrito = ["Tablet", "Television", "Computador"];
        var_dump(in_array("Table", $carrito));
        var_dump(in_array("Audifonos", $carrito));

        //Ordenar los elementos de un arreglo


?>



<?php
require '../includes/header.php';
echo '<a href="index.php"><button>Voltar</button></a>';

$contador = 0;
$i = 1; //Inicializa o contador

//Loop que continua enquanto $i for menor ou igual a 100
while($i <= 100){
    $contador += $i;
    $i++;
}

echo "A soma dos números de 1 até 100 é: {$contador}";

require '../includes/footer.php';
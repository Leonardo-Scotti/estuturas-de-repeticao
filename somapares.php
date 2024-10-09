<?php
require '../includes/header.php';
echo '<a href="index.php"><button>Voltar</button></a>';

$limit = $_POST['limit'];
$inicio = 0;
$soma = 0;

while($inicio <= $limit){
    if($inicio % 2 == 0){
        $soma += $inicio;
    }
    $inicio++;
}

echo "O resultado da contagem dos números pares de 0 até {$limit} é: {$soma}";

require '../includes/footer.php';
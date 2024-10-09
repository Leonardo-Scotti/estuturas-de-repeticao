<?php
require '../includes/header.php';

echo '<h2>Exemplo de Utilização do FOR - Tabuada</h2>';
echo '<a href="index.php"><button>Voltar</button></a>';

$number = $_POST['number'];
/*
Estrutura do FOR
for(inicialização ; condição ; incremento){
    trecho de código para executar;
}
*/
echo "Tabuada do {$number}";

for($i = 0; $i <= 10; $i++){
    $multi = $number * $i;
    echo '$number x $i = $multi <br>';
}

require '../includes/footer.php';
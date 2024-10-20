<?php
function pertence_fibonacci($n) {
    $a = 0;
    $b = 1;
    while ($a <= $n) {
        if ($a == $n) {
            return true;
        }
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    return false;
}

// Entrada
$numero = (int)readline("Digite um número: ");

// Verificação
if (pertence_fibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $numero NÃO pertence à sequência de Fibonacci.\n";
}
?>

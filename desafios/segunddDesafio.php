<?php
function contar_a($texto) {
    return substr_count(strtolower($texto), 'a');
}

// Entrada
$texto = readline("Digite uma string: ");

// Contagem
$quantidade = contar_a($texto);
echo "A letra 'a' aparece $quantidade vezes na string.\n";
?>

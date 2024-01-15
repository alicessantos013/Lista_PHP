<?php
// Verificar se os parâmetros foram passados via URL
if (isset($_GET['raio']) && isset($_GET['Pi'])) {
    // Obtendo os valores do raio e de Pi da URL
    $r = $_GET['raio'];
    $p = $_GET['Pi'];

    // Calculando o volume da esfera
    $v = (4 / 3) * $p * pow($r, 3);

    // Exibindo o resultado
    echo "O volume da esfera com raio $r é: " . round($v, 2) . "\n";
} else {
    // Exibindo mensagem de erro se os parâmetros não foram passados
    echo "Os parâmetros raio e Pi não foram fornecidos.";
}
?>
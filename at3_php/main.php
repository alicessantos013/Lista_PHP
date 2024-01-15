<?php
if (isset($_GET['ano_atual']) && isset($_GET['ano_nascimento'])) {
    $aa = $_GET['ano_atual'];
    $an = $_GET['ano_nascimento'];

  
    if (is_numeric($aa) && is_numeric($an)) {
        $i = $aa - $an;

        // Exibir a idade 
        echo "A idade é: " . htmlspecialchars($i) . " anos";
    } else {
        echo "Os valores fornecidos não são numéricos.";
    }
} else {
    echo "Os parâmetros ano_atual e ano_nascimento não foram fornecidos.";
}
?>

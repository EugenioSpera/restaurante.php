

<?php

require 'Restaurante.php';
// Exemplo de uso
$restaurante = new Restaurante();

// Defina o valor do prato (por exemplo, R$ 50.00)
$restaurante->setValorPrato(50.00);

// Exibe o valor total a ser pago
echo "O valor total a ser pago é: R$ " . number_format($restaurante->getValorTotal(), 2, ',', '.');

?>
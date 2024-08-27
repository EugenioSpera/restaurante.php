<?php

class Restaurante {
    // Propriedades privadas
    private $valorPrato;
    private $gorjeta;
    private $valorTotal;

    // Método público para definir o valor do prato e calcular a gorjeta
    public function setValorPrato($valorPrato) {
        $this->valorPrato = $valorPrato;
        $this->calculaGorjeta();
        $this->calculaValorTotal();
    }

    // Método privado para calcular a gorjeta (10% do valor do prato)
    private function calculaGorjeta() {
        $this->gorjeta = $this->valorPrato * 0.10;
    }

    // Método privado para calcular o valor total (valor do prato + gorjeta)
    private function calculaValorTotal() {
        $this->valorTotal = $this->valorPrato + $this->gorjeta;
    }

    // Método público para retornar o valor total
    public function getValorTotal() {
        return $this->valorTotal;
    }
}

?>
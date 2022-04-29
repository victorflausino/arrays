<?php
require_once 'classes/classe.php';

$valor1 = new valor();
$valor2 = new valor();
$valor3 = new valor();

$valor1->setvalor1(10);
$valor2->setvalor2(10);
$valor3->setvalor3(10);


echo '$valor1 * $valor2 * $valor3';
?>


--------------------------------------------------------classe--------------

<?php
class valor {
    
    
    private $valor1 = 0;
    private $valor2 = 0;
    private $valor3 = 0;

    public function setValor1($valor1){
        if (!is_numeric($valor1)){
            echo "preço numeral.";
            return;
        }

        $this->valor1 = $valor1;
    }


    public function setValor2($valor2){
        if (!is_numeric($valor2)){
            echo "preço numeral.";
            return;
        }

        $this->valor2 = $valor2;
    }


    public function setValor3($valor3){
        if (!is_numeric($valor3)){
            echo "preço numeral.";
            return;
        }

        $this->valor3 = $valor3;
    }

    
    }
?>

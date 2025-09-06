<?php
    function saudacao(){
        $texto = " Olá, bom dia usuário";
        return $texto;
    }

    function calculadora($tipo, $x1, $x2){

        if ($tipo == "a"){
            $resultado = $x1 + $x2; 
            return $resultado;
        }if($tipo== "s"){
            $resultado = $x1 - $x2;
            return $resultado; 
        }
    }
    function converterMaiusculo($nome){
        $maiusculo = strtoupper($nome);
        return $maiusculo;
    }

    function converterMinusuculo($nome){
        $minusculo = strtolower($nome);
        return $minusculo;
    }
    function imprimirRodade(){
        echo "<center><b>Copyright - 2025 Fatec ".date("d/m/Y")."</b></center>";
    }
?>
<?php
    function max3(int $num1, int $num2, int $num3) : string {
        if($num1 == $num2 && $num2 == $num3) {
            return "Los tres números son iguales";
        } else {
            $candidato = $num1;

            if($num2 > $num1) {
                $candidato = $num2;
            }
            if($num3 > $candidato) {
                $candidato = $num3;
            }
            return "El mayor es $candidato";
        }
    }
?>
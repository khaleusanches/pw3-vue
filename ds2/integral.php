<?php
    function integral($intervalo_start, $intervalo_end, $potencia_x){
        $primitiva = $intervalo_end**($potencia_x+1)/($potencia_x+1);
        $primitiva_ultima = $intervalo_start**($potencia_x+1)/($potencia_x+1);
        return $primitiva - $primitiva_ultima;
    }
    echo integral(1,5,2);
    echo PHP_EOL;

    function MRU($so, $velocidade, $tempo){
        return $so + $velocidade*$tempo;
    }
    echo MRU(0, 10, 2);
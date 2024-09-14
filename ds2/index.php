<?php 
    function pit($a, $b){
        return sqrt($a**2+$b**2);
    }
    $area_do_triangulo = fn ($a, $b) => ($a*$b/2);
    $calcular_area_circulo = function($r) { return 3.14*$r**2; };
    echo pit(3,2);
    echo PHP_EOL;
    echo $area_do_triangulo(3,2);
    echo PHP_EOL;
    echo $calcular_area_circulo(10);
    echo PHP_EOL;
    echo PHP_EOL;

    function baskara($a, $b, $c){
        $r_delta = sqrt($b**2-(4*$a*$c));
        $retornos = [
            (-$b + $r_delta)/(2*$a),
            (-$b - $r_delta)/(2*$a)
        ];
        return $retornos;
    }

    foreach(baskara(1, -3, -54) as $resultado){
        echo $resultado;
        echo PHP_EOL;
    }

    


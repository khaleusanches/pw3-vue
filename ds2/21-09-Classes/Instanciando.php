<?php
    require_once ('Motorista.php');
    require_once ('Passageiro.php');
    require_once ('Pessoa.php');
    require_once ('Corrida.php');
    $motorista01 = new Motorista();
    $motorista02 = new Motorista();
    $passageiro01 = new Passageiro();
    $passageiro02 = new Passageiro();
    $corrida01 = new Corrida();
    $corrida02 = new Corrida();

    $motorista01->nome = "Khaléu";
    $motorista01->setSenha(123);
    $motorista01->email = "khaleusanches@gmail.com";
    $motorista01->id = 1;
    $motorista01->cnh = 1;
    $motorista01->setAvaliacao(1);
    $motorista01->historico = 0;

    $motorista01->nome = "Felipy";
    $motorista01->setSenha(123);
    $motorista01->email = "felipynho123@gmail.com";
    $motorista02->id = 2;
    $motorista02->cnh = 2;
    $motorista02->setAvaliacao(2);
    $motorista02->historico = 0;


    $passageiro01->nome = "Leonardo";
    $passageiro01->setSenha(123);
    $passageiro01->email = "ardosobral@gmail.com";
    $passageiro01->id = 1;
    $passageiro01->cpf = 1;
    $passageiro01->setAvaliacao(1);
    $passageiro01->historico = 0;

    $passageiro02->nome = "Marco";
    $passageiro02->setSenha(123);
    $passageiro02->email = "marco@gmail.com";
    $passageiro02->id = 2;
    $passageiro02->cpf = 2;
    $passageiro02->setAvaliacao(2);
    $passageiro02->historico = 0;

    $corrida01->id = 1;
    $corrida01->motorista = 1;
    $corrida01->passageiro = 1;
    $corrida01->end_partida = "Etec Juscelino";
    $corrida01->end_destino = "Terminal Diadema";
    $corrida01->valor = 5.82;
    $corrida01->mod_pagamento = "Cartão Débito";
    $corrida01->tipo_corrida = "Uber Moto";


    $corrida02->id = 2;
    $corrida02->motorista = 2;
    $corrida02->passageiro = 2;
    $corrida02->end_partida = "Etec Lauro Gomes";
    $corrida02->end_destino = "Etec Juscelino";
    $corrida02->valor = 30.99;
    $corrida02->mod_pagamento = "Cartão Débito";
    $corrida02->tipo_corrida = "Uber Moto";

    echo "corrida: {$corrida01->id}";
    echo PHP_EOL;
    echo "passageiro: {$passageiro01->nome}";
    echo PHP_EOL;
    echo "motorista: {$motorista01->nome}";
    echo PHP_EOL;
    echo "senha do passeiro: {$passageiro01->getSenha()}";
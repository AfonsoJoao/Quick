<?php

function formataMoedaReal($valor = NULL, $real = FALSE) { // Funcão responsavel por exibeir o valor dos produtos no formato da moeda real
    if ($valor) {
        $valor = ($real == TRUE ? 'R$ ' : '') . number_format($valor, 2, ',', '.'); // Se a condicão para o real for verdadeira irá ser adicionado o R$.
        // Se não for não irá ficar vazio e irá concatenar com a função,
        // númerica do php e exibindo os valores na tela com as casas decimais.
        return $valor;
    }
}

function formataDataView($data=NULL){
    
    if ($data) {
        
        //Entrada
        $data = explode('-', $data);
        
        //Saida
        return $data[2] .'/'. $data[1] .'/'. $data[0];
        
    }
    
}

function formatatelefone($number){
    $number="(".substr($number,2,2).") ".substr($number,4,-4)." - ".substr($number,-4);
    // primeiro substr pega apenas o DDD e coloca dentro do (), segundo subtr pega os números do 3º até faltar 4, insere o hifem, e o ultimo pega apenas o 4 ultimos digitos
    return $number;
}



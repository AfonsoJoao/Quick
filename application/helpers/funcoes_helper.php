<?php

function formataMoedaReal($valor = NULL, $real = FALSE) { // Funcão responsavel por exibeir o valor dos produtos no formato da moeda real
    if ($valor) {
        $valor = ($real == TRUE ? 'R$ ' : '') . number_format($valor, 2, ',', '.'); // Se a condicão para o real for verdadeira irá ser adicionado o R$.
        // Se não for não irá ficar vazio e irá concatenar com a função,
        // númerica do php e exibindo os valores na tela com as casas decimais.
        return $valor;
    }
}


function formatoDecimal($valor = NULL) {

    $valor = str_replace('.', '', $valor); // A função str_replace retira todos os pontos e deixa em branco
    $valor = str_replace(',', '.', $valor); // Depois ela retira todas as virgulas e adiciona o ponto ao valor.

    return $valor;
}

function dataDiaDB(){
    
    date_default_timezone_get('America/Sao_paulo');
    $formato = 'DATE_W3C';
    $hora = time();
    return standard_date($formato, $hora);
}


function dataDB() {

    date_default_timezone_set('America/Sao_paulo');
    $stringdedata = "XY-Xm-Xd";
    $data = time();
    $data = mdate($stringdedata, $data);
    return $data;
}

function formataDataView($data=NULL){
    
    if ($data) {
        
        //Entrada
        $data = explode('-', $data);
        
        //Saida
        return $data[2] .'/'. $data[1] .'/'. $data[0];
        
    }
    
}



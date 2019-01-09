<?php
defined('BASEPARTH') OR ('No direct script access allowed');

function gerarSenhaAleatoria() {
    $alfabeto = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $senha = array();
    $alfabetoArray = strlen($alfabeto) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alfabetoArray);
        $senha[] = $alfabeto[$n];
    }
    return implode($senha);
}

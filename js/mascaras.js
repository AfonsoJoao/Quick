//Mascaras dos inputs

// $('.input_moeda').mask('000.000.000.000.000,00', {reverse: true});
// $('.input_cpf').mask('000.000.000-00');
// $('.input_telefone').mask('(00) 0 0000-0000');
// $('.input_cep').mask('00000-000');
// $('.input_mes_ano').mask('00/0000');


function ValidaTelefone(tel) {
    exp = /\(\d{2}\)\ \d{1}\ \d{4}\-\d{4}/
    if (!exp.test(tel.value))
        alert('Numero de Telefone Invalido!');

}


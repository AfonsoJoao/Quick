var Checkout = function () {

    var formaPagamento = function () { // Função responsável por capturar a forma de pagamento escolhida pelo cliente e
        // executar uma determinada ação com base na forma de pagamento escolhida.
        $('.select-forma-pagamento').on('change', function () {

            var tipo = $(this).val();

            switch (tipo) {

                //Cartão
                case '1':

                    $('.pagamento-cartao').removeClass('hide');
                    $('.pagamento-avista').addClass('hide');
                    $('.pagamento-cartao input').prop('disabled', false);
                    $('.pagamento-avista input').prop('disabled', true);
                    break;

                    //A Vista    
                case '2':

                    $('.pagamento-cartao').addClass('hide');
                    $('.pagamento-avista').removeClass('hide');
                    $('.pagamento-cartao input').prop('disabled', true);
                    break;
            }

        });
    }

    //Calculo do Frete
    var calculoFreteCheckout = function () {
        $('.btn-calculo-frete-checkout').on('click', function () {

            var cep = $('[name="cep"]').val();
            
            if (!cep){
                alert('Você deve digitar um cep!');
                return false;
                
            }
            alert(cep);

        });
    }
    return {
        init: function () { // Serve para iniciar a função automaticamente.
            formaPagamento();
            calculoFreteCheckout();
        }
    }

}();

jQuery(document).ready(function () { // Quando for lido o documento inicie a função app.
    Checkout.init();
});


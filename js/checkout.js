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
            if (!cep) {
                alert('Você deve digitar um cep!');
                return false;
            }
            alert(cep);
        });
    }

//Função responsavel por exibir o status atual do pedido dentro do modal e oferecer opções para modificar esse status .
    $(document).on('click', '.btn-mudar-status-pedido', function () {

        var id = $(this).attr('data-id-pedido');
        $.ajax({
            type: "GET",
            url: "http://localhost/ProjetoQuick/ControllerPedido/getPedido/" + id + "",
            dataType: "json",
            success: function (resposta) {

                if (resposta.erro == 0) {

                    $('.modal_dinamico').append('<div class="modal fade " data-backdrop="static" id="modal_pedido' + id + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                            '<div class="modal-dialog modal-lg" role="document">' +
                            '<div class="modal-content">' +
                            '<div class="modal-header">' +
                            '<h4 class="modal-title" id="myModalLabel">Mudar Status do Pedido [ #' + resposta.id_pedido + ' ]</h4>' +
                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            '</div>' +
                            '<div class="modal-body">' +
                            '<p>Status Atual: ' + resposta.status + '</p>' +
                            '<form class="form-horizontal" method="post" action="http://localhost/ProjetoQuick/ControllerPedido/mudarstatus">' +
                            '<div class="form-group">' +
                            '<label for="cartao" class="col-sm-3 control-label">Mudar Status Para</label>' +
                            '<div class="col-sm-7">' +
                            '<select name="cartao" class="form-control">' +
                            '<option value="1">Enviado</option>' +
                            '<option value="2">Pagamento Confirmado</option>' +
                            '<option value="3">Pedido Cancelado</option>' +
                            '<option value="4">Aguardando Pagamento</option>' +
                            '</select>' +
                            '</div>' +
                            '</div>' +
                            '</form>' +
                            '</div>' +
                            '<div class="modal-footer">' +
                            '<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>' +
                            '<button type="button" class="btn btn-primary btn-atualizar-status-pedido" data-id-pedido="'+ id +'">Atualizar</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>');
                    $('#modal_pedido' + id).modal('show'); //Serve para exibir o modal.

                    $('#modal_pedido' + id).on('hidden.bs.modal', function (e) { //Serve para remover o modal do codigo html.

                        $(this).remove();
                    })

                } else {
                    alert(resposta.msg);
                }

            },
            error: function () {
                alert('Erro ao buscar pedido.');
            }

        })



    });
    
    //Funcão que atualiza o status do pedido ao clicar no botão atualizar do modal. 
    $(document).on('click', '.btn-atualizar-status-pedido', function () {
        
        var status = $('[name="cartao"]').val();
        var id_pedido = $(this).attr('data-id-pedido');
        
        $.ajax({
            type: "POST",
            url: "http://localhost/ProjetoQuick/ControllerPedido/mudarstatus/",
           
            data: {input_status : status, input_id : id_pedido},
            dataType: "json",
            success: function (resposta) {
               
                if (resposta.erro == 0){
                    location.reload();
                    
                }else{
                    alert('Erro ao Mudar Status');
                }
                
            },
             error: function () {
                alert('Erro ao salvar status.');
            }
            
        });
        
    });

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


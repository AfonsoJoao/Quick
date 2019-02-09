var App = function () {

    var addProdutoCarrinho = function () {
        $('.btn-add-produto-carrinho').on('click', function () {

            var id_produto = $(this).attr('data-id'); // Responsavel por pegar o id do produto no botão

            $.ajax({//Funcão ajax responsavel por enviar o id do produto para o controller.
                type: 'POST',
                url: url_quick + 'ControllerCarrinho/add',
                data: {id: id_produto},
                dataType: "JSON"
            }).then(function (res) { // o res é a minha resposta quanndo a função for executada.

                if (res.erro == 0) {

                    var msg = '<div class="alert alert-success" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">&times;</span>'+
                            '</button>'+ res.msg +' <a href="'+ url_quick +'ControllerCarrinho/carrinho" title="" class="btn btn-success">Finalizar Compra</a></div>';

                    $('.msg-carrinho-alert').html(msg);
                    $('.msg-add-carrinho').removeClass('hide');
                    
                } else {
                    alert(res.msg);
                }

            }, function () {
                alert('Erro ao adicionar o produto');

            });

        });
    }

    return {
        init: function () {
            addProdutoCarrinho();
        }
    }

}(); // esse parentese serve para executar a função automaticamente.

jQuery(document).ready(function () { // Quando for lido o documento inicie a função app.
    App.init();
});



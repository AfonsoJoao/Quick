var App = function () {

    var apagaProdutoCarrinho = function () { // Função responsável por apagar o produto do carrinho.

        $('.btn-apagar-produto-carrinho').on('click', function () {

            var id_produto = $(this).attr('data-id');
            
            $.ajax({//Funcão ajax responsavel por enviar o id do produto para o controller.
                type: 'POST',
                url: url_quick + 'ControllerCarrinho/apagar_item',
                data: {id:id_produto},
                dataType: "JSON"
            }).then(function (res) { // o res é a minha resposta quanndo a função for executada.

                if (res.erro == 0) {
                    $(location).attr('href', url_quick +'ControllerCarrinho/carrinho');

                }

            }, function () {
                alert('Erro ao limpar o carrinho');

            });

        });

    }

    var limpaCarrinhoCompra = function () { // Função responsável por limpar o carrinho.
        $('.btn-limpar-carrinho').on('click', function () { // Ao clicar no botão executa a função desejada que irá ser limpar o carrinho.

            $.ajax({//Funcão ajax responsavel por enviar o id do produto para o controller.
                type: 'POST',
                url: url_quick + 'ControllerCarrinho/limpa',
                data: {limpar: true},
                dataType: "JSON"
            }).then(function (res) { // o res é a minha resposta quanndo a função for executada.

                if (res.erro == 0) {

                    $('.body-carrinho-top').addClass('hide');
                    $('.btns-carrinho-topo').addClass('hide');
                    $('.body-carrinho-vazio').removeClass('hide');
                    $('.carrinho-top-total-item').html('0'); // Deixa zero a quantidade de itens no botão carrinho compra quando a função limpacarrinhocompra for executada.


                }

            }, function () {
                alert('Erro ao limpar o carrinho');

            });

        });
    }

    var verificaCarrinhoCompra = function () { // Função responsável por verificar se o carrinho está possui produtos adicionados
        // para que não limpe as informações referentes a quantidade de itens e o total ao atualizar a página.
        $.getJSON(url_quick + 'ControllerCarrinho/carrinho_topo', function (res) {

            if (res.erro == 0) {
                $('.carrinho-top-total-item').html(res.itens);
                $('.carrinho-top-total-valor').html(res.total);
                $('.body-carrinho-top').removeClass('hide');
                $('.btns-carrinho-topo').removeClass('hide');
                $('.body-carrinho-vazio').addClass('hide');


            }

        });

    }

    var addProdutoCarrinho = function () { // Função responsável por adicionar produtos ao carrinho
        $('.btn-add-produto-carrinho').on('click', function () {

            var id_produto = $(this).attr('data-id'); // Responsavel por pegar o id do produto no botão

            $.ajax({//Funcão ajax responsavel por enviar o id do produto para o controller.
                type: 'POST',
                url: url_quick + 'ControllerCarrinho/add',
                data: {id: id_produto},
                dataType: "JSON"
            }).then(function (res) { // o res é a minha resposta quanndo a função for executada.

                if (res.erro == 0) {

                    var msg = '<div class="alert alert-success" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' + res.msg + ' <a href="' + url_quick + 'ControllerCarrinho/carrinho" title="" class="btn btn-success">Finalizar Compra</a></div>';

                    $('.msg-carrinho-alert').html(msg);
                    $('.msg-add-carrinho').removeClass('hide');

                    $('.carrinho-top-total-item').html(res.itens);
                    $('.carrinho-top-total-valor').html(res.total);

                    $('.body-carrinho-top').removeClass('hide');
                    $('.btns-carrinho-topo').removeClass('hide');
                    $('.body-carrinho-vazio').addClass('hide');


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
            verificaCarrinhoCompra();
            limpaCarrinhoCompra();
            apagaProdutoCarrinho();
        }
    }

}(); // esse parentese serve para executar a função automaticamente.

jQuery(document).ready(function () { // Quando for lido o documento inicie a função app.
    App.init();
});



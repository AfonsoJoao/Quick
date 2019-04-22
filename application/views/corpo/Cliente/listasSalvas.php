    <br>
    <div class="row justify-content-md-center">
    <div class="col-sm-8">
    <div class="card-header">
                    <center><h3><i class="fa fa-shopping-cart"></i> Listas de compras salvas</h3></center>
                </div>
<?php $count = 0?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome da lista</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php if (isset($cliente))
         foreach ($cliente as $cli) {
                  $count +=1;
                  ?>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td class="col-6"><?php echo $cli->nomeLista;?></td>
      <td><input type="submit" class="btn btn-primary" value="Enviar lista"></td>
      <td><a href="javascript:func()" onclick="excluirLista(<?php echo$cli->idSalvarLista; ?>, '<?php echo $cli->nomeLista; ?>')"><input type="submit" class="btn btn-danger" value="Excluir lista"></a></td>
    </tr>
          <?php  }?>
  </tbody>
</table>
</div>
</div>
                   
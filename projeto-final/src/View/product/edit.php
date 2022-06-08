<h1>Editar Produto</h1>
<?php 
    extract ($data);
?>
<hr>
<form method="post">
    <label for="name">Nome</label>
    <input value = "<?php echo $product['name'];?>" name="name" id="name" class="form-control mb-3 "type="text">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="15" rows="5" class="form-control mb-3"><?php echo $product['description'];?></textarea>

    <label for="name">Preço</label>
    <input value = "<?php echo $product['value'];?>" name="value" id="value" class="form-control mb-3 "type="text">

    <label for="name">Quantidade</label>
    <input value = "<?php echo $product['amount'];?>" name="amount" id="amount" class="form-control mb-3 "type="text">

    <label for="name">Foto</label>
    <input value = "<?php echo $product['photo'];?>" name="photo" id="photo" class="form-control mb-3 "type="text">

    <button class="btn btn-primary mb-3">Atualizar</button>
</form>
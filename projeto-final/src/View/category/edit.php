<h1>Editar categoria</h1>
<hr>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form method="post">
    <label for="name">Nome</label>
    <br>
    <input value = "<?php echo $data['name'];?>" name="name" id="name" class="form-control mb-3 "type="text">
    <br>
    <label for="description">Descrição</label>
    <br>
    <textarea name="description" id="description" cols="15" rows="5" class="form-control mb-3">
    <?php echo $data['description'];?>
    </textarea>
    <br>
    <button class="btn btn-primary mb-3">Atualizar</button>
</form>
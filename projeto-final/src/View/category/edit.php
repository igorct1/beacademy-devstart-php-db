<h1>Editar categoria</h1>
<hr>
<form method="post">
    <label for="name">Nome</label>
    <br>
    <input value = "<?php echo $data['name'];?>" name="name" id="name" class="form-control mb-3 "type="text">
    <br>
    <label for="description">Descrição</label>
    <br>
    <textarea name="description" id="description" cols="15" rows="5" class="form-control mb-3"><?php echo $data['description'];?></textarea>
    <br>
    <button class="btn btn-primary mb-3">Atualizar</button>
</form>
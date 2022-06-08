<h1>Cadastrar Produto</h1>

<form method ="POST">
    <label for="category_id">Categoria</label>
    <select name="category_id" id="category_id" class="form-select form-control mb-3">
    <?php 
         while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
             extract ($category);
            
            echo "<option value='{$id}'>{$name}</option>";
        }
    ?>
    </select>
    <label for="name">Nome</label>
    <input type="text" id="name" for="name" name="name" class="form-control mb-3">

    <label for="description">Descrição</label>
    <textarea type="text" id="description" for="description" name="description" class="form-control mb-3"></textarea>

    <label for="value">Preço</label>
    <input type="text" id="value" for="value" name="value" class="form-control mb-3">

    <label for="amount">Quantidade</label>
    <input type="text" id="amount" for="amount" name="amount" class="form-control mb-3">

    <label for="photo">Foto</label>
    <input type="text" id="photo" for="photo" name="photo" class="form-control mb-3">

    <button class="btn btn-primary">Cadastrar</button>
</form>
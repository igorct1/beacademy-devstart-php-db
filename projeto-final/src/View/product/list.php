<h1>Listar produtos!</h1>

<table class="table table-hover table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de cadastro</th>
            <th>Açoes</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract ($product);
                echo "
                    <tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$description}</td>
                        <td><img src='{$photo}' width='100'></td>
                        <td>R$ {$value}</td>
                        <td>{$amount}</td>
                        <td>{$created_at}</td>
                    </tr> 
                ";
            }
        ?>
    </tbody> 
</table>


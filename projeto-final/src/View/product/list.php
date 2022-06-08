<h1>Produtos cadastrados</h1>
<div class="mb-3 text-end">
    <a class="btn btn-outline-primary" href="/produtos/novo">Novo Produto</a>
    <a class="btn btn-dark" href="/produtos/relatorio">Gerar PDF</a>

</div>
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
                        <td>
                        <a href='/produtos/excluir?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                        <a href='/produtos/editar?id={$id}' class='btn btn-outline-warning btn-sm'>Editar</a>
                        </td>
                    </tr> 
                ";
            }
        ?>
    </tbody> 
</table>
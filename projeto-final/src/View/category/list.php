<?php
var_dump($data);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h1>Listar categorias</h1>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                    echo "<td>{$category['id']}</td>";
                    echo "<td>{$category['name']}</td>";
                    echo "<td>{$category['description']}</td>";
                echo "</tr>";
                
            }
        ?>
    </tbody>
</table>
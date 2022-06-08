<?php
declare (strict_types=1);
namespace App\Controller;
use App\Connection\Connection;


class CategoryController extends AbstractController
{
    public function listAction(): void 
    {
        //criando a conexão com o banco de dados, utilizando a função getConnection
        // que vem da classe Connection dentro do Controller
        $con = Connection::getConnection();
        // selecionando TUDO dentro da tabela de categoria
        $query =  'SELECT * FROM tb_category';
        //pegando e preparando o resultado
        $result = $con->prepare($query);
        $result->execute();
        // include dirname(__DIR__).'/View/category/list.php';
        // renderizando o resultado na tela
        parent::render('category/list', $result);
    }
    public function addAction(): void 
    {
        if($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $query = "INSERT INTO tb_category(name, description) VALUE ('{$name}', '{$description}')";
            $con = Connection::getConnection();
            $result = $con->prepare($query);
            $result->execute();
            echo 'Pronto, categoria inserida';
        }
        parent::render('category/add');
    }
    public function removeAction() :void 
     {
        $con = Connection::getConnection();
        $id = $_GET['id'];
        $query = "DELETE FROM tb_category where id='{$id}'";
        $result = $con->prepare($query);
        $result->execute();
     }
    public function editAction(): void 
    {
        parent::render('category/edit');
    }
}
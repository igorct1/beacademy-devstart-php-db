<?php
declare (strict_types=1);

namespace App\Controller;
use App\Connection\Connection;

class ProductController extends AbstractController
{
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();

        parent::render('product/list', $result);
    }
    public function addAction(): void 
    {
        $con = Connection::getConnection();
        if($_POST) {
            // $name = $_POST['name'];
            // $description = $_POST['description'];
            // $value = $_POST['value'];
            // $photo = $_POST['photo'];
            // $amount = $_POST['amount'];
            // $categoryId = $_POST['category'];
            extract ($_POST);
            $createdAt = date('Y-m-d H:i:s');
            $query = "INSERT INTO tb_product (name, description, value, photo, amount, category_id, created_at) VALUES( '{$name}', '{$description}', '{$value}', '{$photo}', '{$amount}', '{$category_id}', '{$createdAt}')";
            $result = $con->prepare($query);
            $result->execute();
            parent::renderMessage('Pronto, produto cadastrado!');
        }
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);

    }       
    public function removeAction(): void 
    {  
        $id = $_GET['id'];
        $con = Connection::getConnection();
        $result = $con->prepare("DELETE FROM tb_product where id= '{$id}'");
        $result->execute();
        parent::renderMessage('Pronto, produto excluido!');
    }
    public function editAction(): void 
    {   
        $id = $_GET['id'];
        $con = Connection::getConnection();
        // $categories = $con->prepare("SELECT * from tb_category");
        // $categories->execute();
        if ($_POST) {
            // $name = $_POST['name'];
            // $description = $_POST['description'];
            // $value = $_POST['value'];
            // $photo = $_POST['photo'];
            // $amount = $_POST['amount'];
            extract($_POST);

            $query = "UPDATE tb_product SET
                name = '{$name}',
                description = '{$description}',
                value = '{$value}',
                photo = '{$photo}',
                amount = '{$amount}'
                WHERE id ='{$id}'
            ";
            $resultUpdate = $con->prepare($query);
            $resultUpdate->execute();
            parent::renderMessage('Produto atualizado!');
        }
        $product = $con->prepare("SELECT * FROM tb_product where id='{$id}'");
        $product->execute();
        parent::render('product/edit', [
            'product' => $product->fetch(\PDO::FETCH_ASSOC),
        ]);
    }
}
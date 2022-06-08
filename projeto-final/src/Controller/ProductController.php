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
            echo 'Pronto, produto cadastrado';
        }
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);

    }       
    public function editAction(): void 
    {
        parent::render('product/edit');
    
    }
}
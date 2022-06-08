<?php
declare (strict_types=1);
namespace App\Controller;
use App\Connection\Connection;


class CategoryController extends AbstractController
{
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $query =  'SELECT * FROM tb_category';
        $result = $con->prepare($query);
        $result->execute();
        $cat = $result->fetch(\PDO::FETCH_ASSOC);
        parent::render('category/list');
        var_dump($cat);
    }
    public function addAction(): void 
    {
        parent::render('category/add');
    }
    public function editAction(): void 
    {
        parent::render('category/edit');
    }
}
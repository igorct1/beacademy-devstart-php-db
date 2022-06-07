<?php
declare (strict_types=1);

namespace App\Controller;
class IndexController extends AbstractController
{
    public function indexAction(): void
    {
        // include dirname(__DIR__).'/View/index/index.php';
        parent::render('index/index');
    }
    public function loginAction(): void 
    {
        parent::render('index/login');
    }

}
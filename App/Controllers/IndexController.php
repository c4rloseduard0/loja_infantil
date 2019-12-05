<?php
    namespace App\Controllers;

    use App\Models\Usuario;
    use App\Models\Produto;

    use App\ViewAction;

    class IndexController extends ViewAction
    {
        public function index()
        {
            $produto = new Produto();
            $this->view->dados = $produto->getAllProdutos();
            $this->render("index", "temp1");
        }
    }
 ?>

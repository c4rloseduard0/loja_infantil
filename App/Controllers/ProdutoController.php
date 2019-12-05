<?php
    namespace App\Controllers;

    use App\Models\Produto;
    use App\ViewAction;

    class ProdutoController extends ViewAction
    {
        public function produto()
        {
            $produto = new Produto();
            $produto->__set('id', isset($_GET['produto']) ? $_GET['produto'] : '');
            $this->view->dados = $produto->getProduto();
            $this->render('produto', 'temp1');
        }
    }
?>
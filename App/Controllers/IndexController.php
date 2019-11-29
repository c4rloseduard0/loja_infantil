<?php
    namespace App\Controllers;

    use App\Models\Usuario;
    use App\ViewAction;

    class IndexController extends ViewAction
    {
        public function index()
        {
            $m = new Usuario();
            $users = $m->getUsers();
            $this->view->dados = $users;
            $this->render('index', 'temp1');
        }
    }
 ?>

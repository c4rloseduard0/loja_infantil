<?php
    namespace App\Controllers;

    use App\Models\Proprietario;
    use App\ViewAction;

    class IndexController extends ViewAction
    {
        public function index()
        {
            $m = new Proprietario();
            $users = $m->getUsers();
            $this->view->dados = $users;
            $this->render('index', 'temp1.html');
        }
    }
 ?>

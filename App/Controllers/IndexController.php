<?php
    namespace App\Controllers;

    use App\Models\Proprietario;

    class IndexController
    {
        public function index()
        {
            $m = new Proprietario();
            print_r($m->getUsers());
        }
    }
 ?>
